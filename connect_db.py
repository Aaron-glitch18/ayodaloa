# import mysql.connector
# from pydantic import BaseModel

# try:
#     client=mysql.connector.connect(
#         user="root",
#         password="",
#         host="127.0.0.1",
#         database="ayodaloa_db",
#         port=3306
#     )
#     cursor=client.cursor()
#     print(client)
# except mysql.connector.Error as err:
#     print(str(err))


# class Inscris(BaseModel):
#     email:str
#     mdp:str
#     cmdp:str


# class Item(BaseModel):
#     saisie:str
import os
def calculateAge(ageNow):
    age5 = int(ageNow)
    return age5


age= input('How old are you')
age5= calculateAge(age)
print('you are',age,'en',age5,'.')
