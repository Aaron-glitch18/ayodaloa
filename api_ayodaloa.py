from fastapi import FastAPI
import mysql.connector
from pydantic import BaseModel
from email_validator import validate_email, EmailNotValidError
from pwdlib import PasswordHash
# from fastapi.responses import RedirectResponse
import os
from groq import Groq

# connection et modèle de donnée api


app=FastAPI()
def connect_sql():
    return mysql.connector.connect(
    user="root",
    password="",
    host="localhost",
    database="ayodaloa_db",
    port=3306
)

from fastapi.middleware.cors import CORSMiddleware

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],          # en dev uniquement !
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)
# modèle de donnée
class Inscris(BaseModel):
    email:str
    mdp:str
    cmdp:str

class Conect(BaseModel):
    email:str
    mdp:str


class demande(BaseModel):
    user_id:int
    saisie:str

# test de mise en hors veille

# @app.get('/')
# def test():
#     if client:
#         return {client}


def creat_user(users:Inscris):
    email=users.email
    mot_de_passe=users.mdp
    val_mot_de_passe=users.cmdp

    db=None
    cursor=None


    try:

        emailinfo=validate_email(email,check_deliverability=False)
        mail_val=emailinfo.normalized

        if len(mot_de_passe)<=8:
            return "Le mot de passe doit contenir au moins 8 caractères"
        elif mot_de_passe != val_mot_de_passe:
            return "Les mots de passe semble différent"
        else:
            password_hash = PasswordHash.recommended()
            mdp_hash = password_hash.hash(mot_de_passe)
            # vérificatio de l'existence de l'utilisateur
            sql="SELECT `id` FROM user_data WHERE mail=%s"

            try:
                db=connect_sql()
                cursor=db.cursor()
                cursor.execute(sql,(mail_val,))
                rep=cursor.fetchone()

                if rep is not None:
                    return f"Il semblerait que vous ayez un compte sous ce mail"
                else:
                # for row in rep:
                    print("great")
                    db=connect_sql()
                    cursor=db.cursor()
                    sql="INSERT INTO user_data (`mail`,`password`) VALUES (%s,%s)"
                    cursor.execute(sql,(mail_val,mdp_hash))
                    db.commit()
                    # rep=cursor.fetchall()
                    rep=cursor.lastrowid
                    url="http://localhost/AyoDaloa/files/account.php"
                    return url
            except mysql.connector.Error as err:
                db.rollback()
                return {str(err)}
            finally:
                if cursor is None:
                    cursor.close()
                
                if db is None:
                    db.close()
            
    except EmailNotValidError as e:
        return{str(e)}

        
@app.post('/inscris')
async def save_user(users:Inscris):
    output=creat_user(users)
    return output


def valid_user(users:Conect):
    email=users.email
    mot_de_passe=users.mdp
    try:
        emailinfo=validate_email(email,check_deliverability=False)
        mail_val=emailinfo.normalized

        req="SELECT id,mail,password FROM user_data WHERE mail=%s"
        try:
            db=connect_sql()
            cursor=db.cursor()
            cursor.execute(req,(mail_val,))
            reponse=cursor.fetchone()
            print(reponse)
            if reponse is None:
                return "aucun mail correpondant"
            rep={
                "id":reponse[0],
                "mail":reponse[1],
                "password":reponse[2]
            }
            passord_hash=PasswordHash.recommended()
            val=passord_hash.verify(mot_de_passe,rep['password'])
            if val is True:
                    return "mot de passe connect"
            else:
                return f"mot de passe incorrect"
        except mysql.connector.errors as err:
            return str(err)
        
    except EmailNotValidError as e:
        return str(e)


@app.post('/connect')
async def acces(users:Conect):
    output=valid_user(users)
    return output

# Analyse de la question utilisateur
# requete=input("veuillez poser votre question:")
def analyse_besoin(ask:demande):
    requete=ask.saisie
    client = Groq(
        api_key=os.environ.get("GROQ_API_KEY"),
    )

    chat_completion = client.chat.completions.create(
        messages=[
            {
                "role":"assistant",
                "content":"""aide l'utilisateur à trouver des réponses à ces questions"""
            },
            {
                "role": "user",
                "content": requete,
            }
        ], 
        model="openai/gpt-oss-120b",
    )
    output=chat_completion.choices[0].message.content
    return output
# test=analyse_besoin(requete)
# print(test)
# création d'un objet pour la gestion des historiques
# retourner les saisie à l'agents pour construire la mémoire persistante
# ajout d'un partie répondant avec les donné de la base suivant le contexte
@app.post('/chat')
def mind(ask:demande):
    reponse=analyse_besoin(ask)
    return reponse

