from fastapi import FastAPI
import mysql.connector
from pydantic import BaseModel
from email_validator import validate_email, EmailNotValidError
from pwdlib import PasswordHash
from fastapi.responses import RedirectResponse
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

class Inscris(BaseModel):
    email:str
    mdp:str
    cmdp:str

class Conect(BaseModel):
    email:str
    mdp:str


class Item(BaseModel):
    saisie:str

# test de mise en hors veille

# @app.get('/')
# def test():
#     if client:
#         return {client}


def creat_user(user:Inscris):
    email=user.email
    mot_de_passe=user.mdp
    val_mot_de_passe=user.cmdp

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
async def save_user(user:Inscris):
    output=creat_user(user)
    return output


def valid_user(user:Conect):
    email=user.email
    mot_de_passe=user.mdp
    try:
        emailinfo=validate_email(email,check_deliverability=False)
        mail_val=emailinfo.normalized

        req="SELECT id,mail,password FROM user_data WHERE mail=%s"
        try:
            db=connect_sql()
            cursor=db.cursor()
            cursor.execute(req,(mail_val,))
            reponse=cursor.fetchone()
            rep={
                "id":reponse[0],
                "mail":reponse[1],
                "password":reponse[2]
            }
            print(rep)
            if reponse is None:

                return "aucun mail correpondant"
            else:
                passord_hash=PasswordHash.recommended()
                val=passord_hash.verify(mot_de_passe,rep['password'])
                if val:
                    return "http://localhost/AyoDaloa/files/index.php"
                else:
                    return f"le mot de passe saisi est incorrect"
                
        except mysql.connector.errors as err:
            return str(err)

    except EmailNotValidError as e:
        return str(e)


@app.post('/connect')
async def acces(user:Conect):
    output=valid_user(user)
    return output


