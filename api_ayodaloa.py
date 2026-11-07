from fastapi import FastAPI
import mysql.connector
from pydantic import BaseModel
from email_validator import validate_email, EmailNotValidError
from pwdlib import PasswordHash
# connection et modèle de donnée api


app=FastAPI()
def connect_sql():
    return mysql.connector.connect(
user="u869166798_dev",
password="Aquil@s2024",
host="srv2122.hstgr.io",
database="u869166798_ayotest",
port=3306
    )

class Inscris(BaseModel):
    email:str
    mdp:str
    cmdp:str


class Item(BaseModel):
    saisie:str

# test de mise en hors veille

# @app.get('/')
# def test():
#     if client:
#         return {client}


def valid_user(user:Inscris):
    email=user.email
    mot_de_passe=user.mdp
    val_mot_de_passe=user.cmdp

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

            db=None
            cursor=None

            try:
                db=connect_sql()
                cursor=db.cursor()
                cursor.execute(sql,(mail_val,))
                rep=cursor.fetchone()

                if rep is not None:
                    return f"Il semblerait que vous ayez un compte sous ce mail {rep}"
                else:
                # for row in rep:
                    print("great")
                    db
                    sql="INSERT INTO user_data (`mail`,`password`) VALUES (%s,%s)"
                    cur=cursor.execute(sql,(mail_val,mdp_hash))
                    db.commit()
                    # rep=cursor.fetchall()
                    rep=cursor.lastrowid
                    return{"mail":mail_val, "mdp":mot_de_passe, "state":rep,}
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
    output=valid_user(user)
    return output
