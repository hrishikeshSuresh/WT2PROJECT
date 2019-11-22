import sqlite3
def create_connection(db_file):
    conn = None
    conn = sqlite3.connect(db_file)
    return conn

def insert_item (conn, item):
    return 0


def select_all_items(conn):
    outerList = []
    innerList = []
    cur = conn.cursor()
    #print (cur.description)
    #cur.execute("SELECT * from menu")
    cur.execute ("SELECT item_id, sum(quantity) from order_items group by item_id")
    '''colnames = (cur.description)
    for c in colnames:
        #print (c[0])
        innerList.append(c[0])
    outerList.append(innerList)
    innerList = []'''
    rows = cur.fetchall()
    #print (rows[0].keys())'''
    for row in rows:
        row = list(row)
        outerList.append(row)
        #print(row)
    return outerList

def select_all_items2(conn):
    outerList = []
    innerList = []
    cur = conn.cursor()
    #print (cur.description)
    #cur.execute("SELECT * from menu")
    cur.execute ("SELECT item_id, price from menu")
    '''colnames = (cur.description)
    for c in colnames:
        #print (c[0])
        innerList.append(c[0])
    outerList.append(innerList)
    innerList = []'''
    rows = cur.fetchall()
    #print (rows[0].keys())'''
    for row in rows:
        row = list(row)
        outerList.append(row)
        #print(row)
    return outerList

def select_all_items3(conn):
    outerList = []
    innerList = []
    cur = conn.cursor()
    #print (cur.description)
    #cur.execute("SELECT * from menu")
    cur.execute ("SELECT item_id, name from menu")
    '''colnames = (cur.description)
    for c in colnames:
        #print (c[0])
        innerList.append(c[0])
    outerList.append(innerList)
    innerList = []'''
    rows = cur.fetchall()
    #print (rows[0].keys())'''
    for row in rows:
        row = list(row)
        outerList.append(row)
        #print(row)
    return outerList
        
def update_item(conn, item):
    sql = ''' UPDATE menu
              SET price = ?
              WHERE item_id = ?'''
    cur = conn.cursor()
    cur.execute(sql, item)
    conn.commit()
        
def main():
    database = "dinetime.db"  #C:/Users/Guruprasad/Desktop/Sem-7/SE/DineTime/dinetime.db
    conn = create_connection (database)
    with conn:
        print ("Querying insights")
        L = select_all_items(conn)
        print (L)
        L2 = select_all_items2(conn)
        for i in L2:
            i[1] = 0.0
        print (L2)
        L3 = select_all_items2(conn)
        print (L3)
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
                
        print (L2)
            
        #for i in L3:
            
        #update_item(conn, (20, 1))
        #print ("Update successful")
        
if __name__ == '__main__':
    main()