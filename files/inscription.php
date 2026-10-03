<?php
session_start();
require_once(__DIR__."/connect.php");
$erreur="";
$succes="";

$_SESSION['erreur']=$erreur;
$_SESSION['succes']=$succes;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['inscris'])){

        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $mail=htmlspecialchars(trim($_POST['mail']))?? "";
        $password=trim($_POST['password'])?? "";
        $conf_password=trim($_POST['conf_password'])?? "";

        if(empty($mail) || empty($password) || empty($conf_password) || empty($nom) || empty($prenom)){
        $erreur="Veuillez remplir les champs avec les informations demandées";

        }elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL)){

            $erreur="Veuillez saisir une adresse valable";

        }elseif( strlen($password)<8 || strlen($password)>15){

            $erreur="Votre mot de passe doit avoir une longueur comprise entre 8 et 15 caractères";

        }elseif($password != $conf_password){

            $erreur="la chaine de caractère saisis à la création du mot de passe et à la confirmation sont différents";

        }else{
                    
            $password=password_hash($password,PASSWORD_DEFAULT);

            //érifions si le mail saisie pour l'inscription n'existe pas déjà
            $check=$pdo->prepare("SELECT `id` FROM user_data WHERE mail=?");
            $check->execute([$mail]);
                if($check->fetch()){
                    $erreur="Adresse déjà utilisé";

                }else{

                    $sql= "INSERT INTO user_data (`nom`,`prenom`,`mail`,`password`) VALUES (?,?,?,?)";
                    $req=$pdo->prepare($sql);
                    $req->execute([$nom,$prenom,$mail,$password]);
                    $succes="Compte crée avec succes";
                    header('location:account.php');
                    

                }

        }
    }
    $_SESSION['erreur']=$erreur;
    $_SESSION['succes']=$succes;

}
//  strlen($password)<=8

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte - Ayo Daloa</title>
      <link rel="icon" href="../image/logoicon.png">

  <link rel="stylesheet" href="style.css">
</head>
<style>
#regis_left{
    border-top-left-radius: 0px;
    border-top-right-radius: 160px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius:160px;
    text-align: left;
    padding: 0 30px 0 40px;
}
#regis_left li{
    font-size: large;
}
ul{
    list-style:circle;
    padding-left: 40px;
    margin-top: 20px;
}
#err{
    color:red;
    position: absolute;
    top:68%;
}
#suc{
    color:green;
    position: absolute;
    top:67%;
}
@media (max-width:800px){
.account{
    position:relative;
    overflow:hidden;
    min-height:100vh;
}
@keyframes slidein {
  from {
    transform: translateY(10%);
  }

  to {
    transform: translateY(0%);
  }
}
@keyframes slideout {
  from {
    transform: translateY(-10%);
  }

  to {
    transform: translateY(0%);
  }
}
.tel_circlebt{
    width: 60%;
    height:45%;
    /* border: 1px solid red; */
    border-radius: 50%;
    position: absolute;
    bottom:-15%;
    background: #5f2c00;
    opacity: 0.2;
    /* overflow: hidden; */
    z-index: 1;
    animation: slidein 3s linear infinite alternate ;
}
.tel_circletp{
    width: 60%;
    height:45%;

    border-radius: 50%;
    position: absolute;
    top:-15%;
    background: #5f2c00;
    opacity: 0.2;
    /* z-index: 1; */
    animation: slideout 3s linear infinite alternate ;
}
    .sign__right{
        display:none;
    }
    .sign_left{
        z-index:2;
    }
}

</style>
<body>
    <section class="account">
                    <!-- <section id="registre"> -->
            <div class="sign__right" id="regis_left">
                <h1 style="margin-top:-80px;margin-bottom: 30px;line-height: 50px;">Rejoignez la communauté <!--Ayo Daloa dès aujourd’hui--> ! </h1>
                <h2 style="padding-left:10px;">Créez votre compte en quelques secondes et profitez de tous les avantages :</h2>
                <!-- <p>Connecter-vous, apprenez, découvrez, et rapprocher vous de votre localité avec une plateforme faite pour vous.</p> -->
                 <ul>
                    <li>Accès exclusif aux fonctionnalités réservées aux membres</li>
                    <li> Connexion avec une communauté dynamique et engagée</li>
                    <li>Mise en avant de vos projets et opportunités locales</li>
                 </ul>
                <!-- </h1> -->
                    <div><a href="account.php"><button type="submit" name="connect" id="env2">se connecter</button></a></div>
                    <div class="circlebt" style="left:-10%;"></div>
                    <div class="circletp" style="left:49%;top:-5%"></div>
            </div>
            <div class="tel_circlebt"></div>
            <div class="tel_circletp"></div>

        <!-- <div class="sign"> -->
            <div class="sign__left">
                <h1 style="margin-bottom:7%;">Connecter-vous maintenant</h1>
                <!-- <div class="btns">
                    <button class="other">A</button>
                    <button class="other">B</button>
                    <button class="other">C</button>
                </div> -->
                <div>
                    <form action="#" method="POST">
                        <input type="text" name="nom" id="nom" placeholder="Kouassi">
                        <input type="text" name="prenom" id="prenom" placeholder="Jean">
                        <input type="email" name="mail" id="mail" placeholder="kouassijean@gmail.com" >
                        <input type="password" name="password" id="mdp" placeholder="Saisissez 8 et 15 caractères" >
                        <input type="password" name="conf_password" id="mdp" placeholder="Saisissez le mot de passe définis ci-dessus" >
                        <?php if($_SESSION['erreur']):?>
                            <p id="err"><?php echo $_SESSION['erreur'];?></p>
                        <?php else:;?>
                            <p id="suc">
                                <?php echo $_SESSION['succes'];
                                    // header('location:account.php');
                                ?></p>
                        <?php endif;?>

                        <button type="submit" name="inscris" id="env1" style="margin-top:35px;">s'inscrire</button>
                        <p style="position:absolute;top:80%;">Je souhaite me connecter à <a href="account.php" style="text-decoration:underline;"><em>mon compte</em></a></p></span>

                    </form>

                </div>

            </div>
        <!--================================================================================= -->

        <!-- </div> -->
    </section>

</body>

</html>