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
    return render_template('sample_webpage_2.html')




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

if __name__ == '__main__':
	app.run(debug=True)
