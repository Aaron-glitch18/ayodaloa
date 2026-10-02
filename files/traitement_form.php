<!-- <?php
session_start();
require_once(__DIR__."/connect.php");

$erreur="";
$succes="";
$_SESSION['erreur']=$erreur;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['inscris'])){

        $mail=htmlspecialchars(trim($_POST['mail']))?? "";
        $password=trim($_POST['password'])?? "";
        $conf_password=trim($_POST['conf_password'])?? "";

        if(empty($mail) || empty($password) || empty($conf_password)){
        $erreur="Veuillez remplir les champs avec les informations demandées";

        }elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL)){

            $erreur="Veuillez saisir une adresse valable";

        }elseif( strlen($password)<8 || strlen($password)>15){

            $erreur="Votre mot de passe doit avoir une longueur comprise entre 8 et 15 caractères";

        }elseif($password != $conf_password){

            $erreur="la chaine de caractère saisis à la création du mot de passe et à la confirmation sont différents";

        }else{
                    
            $password=password_hash($password,PASSWORD_DEFAULT);
            $succes="Compte crée avec succes";
        }
    }
 }
//  strlen($password)<=8
header('location:inscription.php');

?> -->
