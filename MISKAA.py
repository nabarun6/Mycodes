from flask import Flask, Response
import flask
from flask.globals import request
import pymongo
import json
from bson.objectid import ObjectId

#connecting with mongodb database

try:
    mongo = pymongo.MongoClient(host='localhost',port=27017, serverSelectionTimeoutMS=1000)
    db=mongo.Miskaa
    mongo.server_info()
except:
    print("ERROR: can't connect to db")

app=Flask(__name__)


#Creating shopping cart ----

@app.route('/productCart',methods=['POST'])
def create_cart():
    try:
        item={'name':request.form["name"], 'price':request.form['price'],'quantity':request.form['quantity']}
        dbResponse=db.productCart.insert_one(item)

        return Response(response=json.dumps({"message":"Item sorted !", "id":f"(dbResponse.inserted_id)"}), status=200,mimetype='application'/json')



#retrieving/fetching items from cart

@app.route('/productCart',methods=['GET'])
def get_items_from_cart():
    try:
        data=list(db.productCart.find())
        for item in data:
                        item["_id"]=str(item["id"]
        return Response(response=json.dumps({"message":"Error: Cannot get items from cart !"}), status=500, mimetype='application/json')
                        



#update items in product cart

@app.route("/productCart/<id>",methods=['PATCH'])

def update_item(id):
    try:
        dbResponse=db.productCart.update_one({"_id":ObjectId(id)}, {"$set":{"price":request.form["price"],"quantity":request.form['quantity']}}
        if dbResponse.modified_count==1:
            return Response(response=json.dumps(("message":"Item updated!"}), status=200, mimetype='application/json')
        return Response(response=json.dumps(("message":"Nothing to updated!"}), status=200, mimetype='application/json')

    except Exception as ex:
        print(f"exception")
        return Response(response=json.dumps({"message":"Error: can't update item !"}), status=500, mimetype='application/json')



#delete item from products cart

@app.route("/productCart/<id>",methods=['DELETE'])

def delete_item(id):
    try:
        dbResponse=db.productCart.delete_one({"_id":ObjectId(id)})
        if dbResponse.delete_count==1:
            return Response(response=json.dumps({"message":"Item deleted!","id":f"{id}"}), status=200, mimetype='application/json')

        return Response(response=json.dumps({"message":"Nothing to delete"}), status=200, mimetype='application/json')

    except Exception as ex:
        print(f"exception")
        return Response(response=json.dumps({"message":"Error: Cannot delete item"}), status=500, mimetype='application/json')



#main function -----

if __name__=='__main__':
    app.run(port=80,debug=True)
        
