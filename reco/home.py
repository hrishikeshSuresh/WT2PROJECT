from flask import Flask, request, render_template
import sqlite3

import warnings
import recommendation2

warnings.filterwarnings('ignore')
 
app = Flask(__name__, template_folder='.')

def create_connection(db_file):
    conn = None
    conn = sqlite3.connect(db_file)
    return conn

def select_all_items(conn):
    
    outerList = []
    #innerList = []
    cur = conn.cursor()
    #print (cur.description)
    cur.execute("SELECT * from menu")
    colnames = (cur.description)
    '''for c in colnames:
        #print (c[0])
        innerList.append(c[0])
    outerList.append(innerList)
    innerList = []'''
    rows = cur.fetchall()
    #print (rows[0].keys())
    for row in rows:
        row = list(row)
        outerList.append(row)
        #print(row)
    return outerList

@app.route('/')
def my_form():
    return render_template('sample_webpage.html')

@app.route ('/recommend')   
def recommend_page_load():
    return render_template ('Recommendation/recommender.html', Items = [[1,1,1,1,1,1],[1,1,1,1,1,1],[1,1,1,1,1,1]])

@app.route ('/recommender', methods = ['POST'])
def recommender():
    #L = [['Cuisine: Indian (VEG)', "Idli'", "'Rava Idli'", "'Paneer Butter Masala'", "'Kichidi'", "'rava Dosa'"], ['Cuisine: South Indian(VEG)', "Idli'", "'Masala Doas'", " 'Set Dosa'", " 'Pongal'", "'Upittu'"], ['Cuisine: North Indian (VEG)', "Dal Chaval'", "'Kichidi'", "'Paneer Butter Masala'", "'Dal Makhani'", "'Tomato Curry'"]]
    sentence = request.form ['feedback']
    L = recommendation2.recommend (sentence)
    print (L)
    return render_template ('Recommendation/recommender2.html',Items = L)

@app.route ('/insights')
def insights():
    database = "dinetime.db"
    conn = create_connection (database)
    with conn:
        print ("Querying insights")
        L = select_all_items4(conn)
        print ("L: ",L)
        L2 = select_all_items2(conn)
        for i in L2:
            i[1] = 0.0
        print ("L2: ",L2)
        L3 = select_all_items2(conn)
        print ("L3: ",L3)
        for i in range(len(L)):
            key = L[i][0]
            for j in range(len(L2)):
                if (L2[j][0]==key):
                    L2[j][1] += L[i][1] * L3[j][1]
                    break
                
        L4 = select_all_items3 (conn)
        #print (L4)
        for i in range(len(L2)):
            key = L2[i][0]
            for j in range(len(L4)):
                if (L4[j][0]==key):
                    L2[i][0] = L4[j][1]
                    break
                
        print ("L2: ",L2)
        return render_template ('insights.html', Items = L2)

if __name__ == '__main__':
	app.run(debug=True)
