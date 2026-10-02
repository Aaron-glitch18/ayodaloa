<<<<<<< HEAD
<!-- <?php
$erreur="";
$succes="";
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

?> -->
=======
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
>>>>>>> e3e623757e6293727e06b1a2c96f022493b343aa

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
<<<<<<< HEAD
#err{
    color:red;
    position: absolute;
    top:67%;
}
#suc{
    color:green;
    position: absolute;
    top:67%;
}
=======
>>>>>>> e3e623757e6293727e06b1a2c96f022493b343aa

</style>
<body>
    <section class="account">
                    <!-- <section id="registre"> -->
            <div class="sign__right" id="regis_left">
<<<<<<< HEAD
                <h1 style="margin-top:-80px;margin-bottom: 30px;line-height: 50px;">Rejoignez la communauté <!--Ayo Daloa dès aujourd’hui--> ! </h1>
=======
                <h1 style="margin-top:-80px;margin-bottom: 30px;line-height: 50px;">Rejoignez la communauté Ayo Daloa dès aujourd’hui ! </h1>
>>>>>>> e3e623757e6293727e06b1a2c96f022493b343aa
                <h2 style="padding-left:10px;">Créez votre compte en quelques secondes et profitez de tous les avantages :</h2>
                <!-- <p>Connecter-vous, apprenez, découvrez, et rapprocher vous de votre localité avec une plateforme faite pour vous.</p> -->
                 <ul>
                    <li>Accès exclusif aux fonctionnalités réservées aux membres</li>
                    <li> Connexion avec une communauté dynamique et engagée</li>
                    <li>Mise en avant de vos projets et opportunités locales</li>
                 </ul>
                <!-- </h1> -->
<<<<<<< HEAD
                    <div><a href="account.php"><button type="submit" name="connect" id="env2">se connecter</button></a></div>
=======
                    <div><a href="account.php"><button submit="submit" name="connecter" id="env2">se connecter</button></a></div>
>>>>>>> e3e623757e6293727e06b1a2c96f022493b343aa
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
<<<<<<< HEAD
                        <input type="password" name="password" id="mdp" placeholder="Saisissez 8 et 15 caractères" >
                        <input type="password" name="conf_password" id="mdp" placeholder="Saisissez le mot de passe définis ci-dessus" >
                        <?php if($erreur):?>
                            <p id="err"><?php echo $erreur;?></p>
                        <?php else:;?>
                            <p id="suc">
                                <?php echo $succes;
                                    // header('location:account.php');
                                ?></p>
                        <?php endif;?>

                        <button type="submit" name="inscris" id="env1" style="margin-top:35px;">s'inscrire</button>
=======
                        <input type="password" name="password" id="mdp" placeholder="Veuillez saisir crée un mot de passe" >
                        <input type="password" name="conf_password" id="mdp" placeholder="Veuillez saisir le mot de passe crée" >
                        <p>j'ai oublié mon mot de passe</p>
                        <button submit="submit" name="inscris" id="env1">s'inscrire</button>
>>>>>>> e3e623757e6293727e06b1a2c96f022493b343aa
                    </form>

                </div>
            </div>
        <!--================================================================================= -->

        <!-- </div> -->
    </section>

</body>
<<<<<<< HEAD

=======
>>>>>>> e3e623757e6293727e06b1a2c96f022493b343aa
</html>
