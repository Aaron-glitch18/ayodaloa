<?php
session_start();
require_once(__DIR__."/connect.php");

$erreur="";
$succes="";
$nofound="";

$_SESSION['erreur']=$erreur;
$_SESSION['succes']=$succes;
$_SESSION['nofound']=$nofound;

if(isset($_POST['envoyer'])){

    if(!empty($_POST['mail']) && !empty($_POST['password']) ){
        $mail=htmlspecialchars(trim($_POST['mail']));
        $password=trim($_POST['password']);
        $sql="SELECT `id`,`mail`,`password` FROM user_data WHERE mail=?";
        $req=$pdo->prepare($sql);
        $req->execute([$mail]);
        $user=$req->fetch();
        // print_r($user);
        // echo $mail;
        // $trueMail=$user['mail'];

        if($user){

            if(password_verify($password,$user['password'])){
                // header('location:index.php');
                echo "mot de passe valide : ".$password;
                header('location:actualite.php');

            }else{
                $erreur= "Mot de passe incorrecte, veuillez réessayer.";
                // echo $user['password'];
                // echo password_hash($password,PASSWORD_DEFAULT);
            }

        }else{
            $nofound="aucune addresse mail ne correspond, voulez vous créee ";
        }


    }else{
        $erreur="Il semblerait que les champs soient vide.";
    }
        $_SESSION['erreur']=$erreur;
        $_SESSION['succes']=$succes;
        $_SESSION['nofound']=$nofound;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecter-vous - Ayo Daloa</title>
      <link rel="icon" href="../image/logoicon.png">

  <link rel="stylesheet" href="style.css">
</head>
<style>
    #err{
    color:red;
    position: absolute;
    top:58%;
    left:15%;
    text-align:center;
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
    filter:blur(10px);
  }

  to {
    transform: translateY(0%);
    filter:blur(15px);
  }
}
@keyframes slideout {
  from {
    transform: translateY(-10%);
    filter:blur(10px);
  }

  to {
    transform: translateY(0%);
    filter:blur(15px);
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
    z-index: -1;
    animation: slidein 2s linear infinite alternate ;
}
.tel_circletp{
    width: 60%;
    height:45%;

    border-radius: 50%;
    position: absolute;
    top:-15%;
    background: #5f2c00;
    opacity: 0.2;
    z-index: -1;
    animation: slideout 2s linear infinite alternate ;
}
    .sign__right{
        display:none;
    }
    /* .sign_left{
        position: relative;
        z-index:1;
    } */
}

</style>
<body>
    <section class="account">
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
                        <input type="email" name="mail" id="mail" placeholder="johndoe@gmail.com">
                        <input type="password" name="password" id="mdp" placeholder="password">
                        <?php if(($_SESSION['erreur'])):?>
                            <p id="err"><?php echo $_SESSION['erreur'] ?></p>
                        <?php endif?>
                        <?php if(($_SESSION['nofound'])):?>
                        <p id="err" ><?php echo $_SESSION['nofound'] ?><a href="inscription.php" style="text-decoration:underline;">un compte</a></p>
                        <?php endif;?>
                        <button type="submit" name="envoyer" id="env1" style="margin-top:40px;">se connecter</button>
                        <p style="margin-bottom:-25px;margin-top:5px;">je souhaite créer <a href="inscription.php" style="text-decoration:underline;"><em>un compte</em></a></p></p>
                    </form>

                </div>
            </div>

                    <!-- ================================================================================= -->
            <!-- <section id="registre"> -->
            <div class="sign__right">
                <h1 style="margin-top: -80px;" >Bienvenue sur Ayodaloa!</h1>
                <!-- <p>Connecter-vous, apprenez, découvrez, et rapprocher vous de votre localité avec une plateforme faite pour vous.</p> -->
                 <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis natus ipsa optio fugiat, accusantium dolores rerum temporibus error sunt voluptas deserunt accusamus quisquam, ipsum ad suscipit eum, debitis incidunt nam.</p>
                <!-- </h1> -->
                    <div><a href="inscription.php"><button type="submit" name="change" id="env2" >s'inscrire</button></a></div>
                    <div class="circlebt" style="left:49%;"></div>
                    <div class="circletp" style="right:49%;top:-5%"></div>
            </div>
            <div class="tel_circlebt"></div>
            <div class="tel_circletp"></div>
        <!-- </div> -->
    </section>

</body>
</html>
