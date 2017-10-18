from pymongo import MongoClient
import cgi
import bcrypt

forms = cgi.FieldStorage
import flask
from datetime import datetime
import json
from collections import namedtuple

client = MongoClient("mongodb://CTECROBOTICS:Qzmtl7Xnr4OW1kwN@main-shard-00-00-h24xb.mongodb.net:27017,main-shard-00-01-h24xb.mongodb.net:27017,main-shard-00-02-h24xb.mongodb.net:27017/test?ssl=true&replicaSet=Main-shard-0&authSource=admin")
db = client['ScouterData']
Login = client['Login']
LOGS = client['Logs']
TeamStats = db['Team-Stats']
username_c = forms["username"].value
password = forms["password"].value
gear = None
gearComments = None
teamComments = None
canClimb = None
attemptedClimb = None
ballsCollected = None
avoidedBalls = None
teamName = None
teamNumber = None
ctime = datetime.now().strftime('%Y-%m-%d %H:%M:%S')
stats = {
    "Gears": gear,
    "GearComments": gearComments,
    "Climb": canClimb,
    "AttemptedClimb": attemptedClimb,
    "BallsCollected": ballsCollected,
    "AvoidedBalls": avoidedBalls,
    "TeamName": teamName,
    "TeamNumber": teamNumber,
    "TeamComments": teamComments,
    "Time&Date": ctime,
}
TeamStats.insert(stats)
