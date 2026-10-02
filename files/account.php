<?php
// require_once(.)
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
.sign__left{
    border: 1 solid red;
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
                    <form >
                        <input type="email" name="mail" id="mail" placeholder="johndoe@gmail.com">
                        <input type="password" name="password" id="mdp" placeholder="password">
                        <p>j'ai oublié mon mot de passe</p>
                        <button submit="submit" name="envoyer" id="env1">se connecter</button>
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
                    <div><a href="inscription.php"><button submit="submit" name="change" id="env2" >s'inscrire</button></a></div>
                    <div class="circlebt"></div>
                    <div class="circletp"></div>
            </div>
        <!-- </div> -->
    </section>

</body>
</html>
