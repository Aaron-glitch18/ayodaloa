import mysql.connector
from pydantic import BaseModel

client=mysql.connector.connect(
    user="u869166798_dev",
    password="Aquil",
    host="srv2122.hstgr.io",
    database="u869166798_ayotest",
    port=3306
)
cursor=client.cursor()

class Inscris(BaseModel):
    email:str
    mdp:str
    cmdp:str


class Item(BaseModel):
    saisie:str

