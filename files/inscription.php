<?php
if(isset($_POST['inscris'])){
    $mail=htmlspecialchars(trim($_POST['mail']));
    $password=htmlspecialchars(trim($_POST['password']));
    $conf_password=htmlspecialchars(trim($_POST['conf_password']));
        if(empty($mail) || empty($password) || empty($conf_password)){
        // echo '<script>alert("Veuillez remplir les champs avec les informations demandées")</script>';
        $erreur="Veuillez remplir les champs avec les informations demandées";
        // return ;
        }
        else if($password != $conf_password){
            // echo"la chaine de caractère saisis à la création du mot de passe et à la confirmation sont différents";

        }


}


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

</style>
<body>
    <section class="account">
                    <!-- <section id="registre"> -->
            <div class="sign__right" id="regis_left">
                <h1 style="margin-top:-80px;margin-bottom: 30px;line-height: 50px;">Rejoignez la communauté Ayo Daloa dès aujourd’hui ! </h1>
                <h2 style="padding-left:10px;">Créez votre compte en quelques secondes et profitez de tous les avantages :</h2>
                <!-- <p>Connecter-vous, apprenez, découvrez, et rapprocher vous de votre localité avec une plateforme faite pour vous.</p> -->
                 <ul>
                    <li>Accès exclusif aux fonctionnalités réservées aux membres</li>
                    <li> Connexion avec une communauté dynamique et engagée</li>
                    <li>Mise en avant de vos projets et opportunités locales</li>
                 </ul>
                <!-- </h1> -->
                    <div><a href="account.php"><button submit="submit" name="connecter" id="env2">se connecter</button></a></div>
                    <div class="circlebt" style="left:-10%;"></div>
                    <div class="circletp" style="left:49%;top:-5%"></div>
            </div>
        <!-- <div class="sign"> -->
            <div class="sign__left">
                <h1>Connecter-vous maintenant</h1>
                <div class="btns">
                    <button class="other">A</button>
                    <button class="other">B</button>
                    <button class="other">C</button>
                </div>
                <p>ou entrez vos identifiant de connexion</p>
                <div>
                    <form action="#" method="POST">
                        <input type="email" name="mail" id="mail" placeholder="johndoe@gmail.com" >
                        <input type="password" name="password" id="mdp" placeholder="Veuillez saisir crée un mot de passe" >
                        <input type="password" name="conf_password" id="mdp" placeholder="Veuillez saisir le mot de passe crée" >
                        <p>j'ai oublié mon mot de passe</p>
                        <button submit="submit" name="inscris" id="env1">s'inscrire</button>
                    </form>

                </div>
            </div>
        <!--================================================================================= -->

        <!-- </div> -->
    </section>

</body>
</html>
