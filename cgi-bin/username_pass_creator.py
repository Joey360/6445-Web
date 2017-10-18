from pymongo import MongoClient
import bcrypt
import json
from collections import namedtuple

client = MongoClient("mongodb://CTECROBOTICS:Qzmtl7Xnr4OW1kwN@main-shard-00-00-h24xb.mongodb.net:27017,main-shard-00-01-h24xb.mongodb.net:27017,main-shard-00-02-h24xb.mongodb.net:27017/test?ssl=true&replicaSet=Main-shard-0&authSource=admin")
db = client['ScouterData']
Login = client['Login']
username = input("username")
result = db.Login.find({"username": username})
if result.count() > 0:
    print("you have already created an account")
    exit()

password = input("password")
salt = bcrypt.gensalt()
hashed_pw = bcrypt.hashpw(password.encode('utf8'), salt)
print(hashed_pw)
print(salt)
account = {
    "username": username,
    "password": hashed_pw,
    "salt": salt,
}
db.Login.insert(account)
