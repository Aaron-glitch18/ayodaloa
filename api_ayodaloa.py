from fastapi import FastAPI
from pydantic import BaseModel
from connect_db import Inscris, Item, client
from email_validator import validate_email, EmailNotValidError

if client.is_connected:
    print("connection réussite")
else:
    print("une erreur c'est produite")

app=FastAPI()

@app.get('/')
def test():
    return "api fonctionnel"


def valid_user(user:Inscris):
    email=user.email
    mot_de_passe=user.mdp
    val_mot_de_passe=user.cmdp

    try:
        emailinfo=validate_email(email,check_deliverability=False)

        if mot_de_passe != val_mot_de_passe:
            return"Les mots de passe semble différent"
        else:
            print("great")
            return{"mail":emailinfo.normalized, "mdp":mot_de_passe}
    
    except EmailNotValidError as e:
        return{str(e)}

        
@app.post('/inscris')
async def save_user(user:Inscris):
    output=valid_user(user)
    return output

# def valid(user:Inscris):
#     email=user.email
#     mot_de_passe=user.mdp
#     val_mot_de_passe=user.cmdp

#     try:
#         emailinfo=validate_email(email,check_deliverability=False)

#         if mot_de_passe != val_mot_de_passe:
#             return"Les mots de passe semble différent"
#         else:
#             print("great")
#             return{"mail":emailinfo.normalized, "mdp":mot_de_passe}
    
#     except EmailNotValidError as e:
#         return{str(e)}






