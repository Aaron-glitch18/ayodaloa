# import mysql.connector
# #Connectons nous au serveur
# connect=mysql.connector.connect(
#     user='root',
#     password='',
#     host='127.0.0.1',
#     database='ayodaloa_db',
#     port=3306
# )
# #Etablissont la connection
# cursor=connect.cursor()
# requete="SELECT `titreActu` FROM actualitedata WHERE 1"
# reponse=cursor.execute("SELECT `titreActu` FROM actualitedata WHERE 1")
# rows=cursor.fetchall()

# if connect.is_connected:
#     print("base de donnée connecté")
#     for titre in rows:
#         print(titre)
from fastapi import FastAPI
from pydantic import BaseModel
import mysql.connector

class Item(BaseModel):
    saisie:str

# modèle de structure des données du formulaire d'inscription
class Inscris(BaseModel):
    email:str
    mdp:str
    cmdp:str

app=FastAPI()

@app.get('/')
def test():
    return "api fonctionnel"

@app.post('/test')
def create_mdp(body:Item):
    return "entrer reçu"


@app.post('/inscris')
def inscris(saisie:Inscris):
    return {"mail":saisie.email, "mot de passe":saisie.mdp, "val mot de passe":saisie.cmdp}



