<?php
session_start();
require_once(__DIR__."/connect.php");

$erreur="";
$succes="";

$_SESSION['erreur']=$erreur;
$_SESSION['succes']=$succes;

if(isset($_POST['envoyer'])){
    // echo("bouton cliqué");
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

        if(password_verify($user['password'],$password)){
            header('location:index.php');
            
            $succes= "ok";
            // echo "mot de passe valide : ".$password;

        }else{
            $erreur= "Mot de passe incorrecte, veuillez réessayer.";
        }

    }else{
        $lien="<a href='inscription>'ok</a>";
        $erreur="Aucune addresse mail trouvé, créee un compte".$lien;
    }
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
                        <p style="margin-bottom:-25px;margin-top:5px;">je souhaite créer <a href="inscription.php" style="text-decoration:underline;"><em>un compte</em></a></p></p>
                        <button type="submit" name="envoyer" id="env1">se connecter</button>
                    </form>
                </div>
            <?php if(isset($erreur)):?>
            <p><?php echo $erreur ?></p>
            <?php else:;?>
            <p><?php echo $succes; ?></p>
            <?php endif;?>
            </div>

                    <!-- ================================================================================= -->
            <!-- <section id="registre"> -->
            <div class="sign__right">
                <h1 style="margin-top: -80px;" >Bienvenue sur Ayodaloa!</h1>
                <!-- <p>Connecter-vous, apprenez, découvrez, et rapprocher vous de votre localité avec une plateforme faite pour vous.</p> -->
                 <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis natus ipsa optio fugiat, accusantium dolores rerum temporibus error sunt voluptas deserunt accusamus quisquam, ipsum ad suscipit eum, debitis incidunt nam.</p>
                <!-- </h1> -->
                    <div><a href="inscription.php"><button submit="submit" name="change" id="env2" >s'inscrire</button></a></div>
                    <div class="circlebt" style="left:49%;"></div>
                    <div class="circletp" style="right:49%;top:-5%"></div>
            </div>
            <div class="tel_circlebt"></div>
            <div class="tel_circletp"></div>
        <!-- </div> -->
    </section>

</body>
</html>
