import mysql.connector
from pydantic import BaseModel

client=mysql.connector.connect(
    user="root",
    password="",
    host="127.0.0.1",
    database="ayodaloa_db",
    port=3306
)
cursor=client.cursor()

class Inscris(BaseModel):
    email:str
    mdp:str
    cmdp:str


class Item(BaseModel):
    saisie:str

