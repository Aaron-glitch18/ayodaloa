<?php
session_start();
require_once(__DIR__."/connect.php");

// id
// date
// image
// titreActu
// descripActu
// secteur
// localite
// print_r($_SERVER['HTTP_REFERER']);
require_once(__DIR__.'/connect.php');
// echo substr(($_SERVER['HTTP_REFERER']),32,strlen($_SERVER['HTTP_REFERER']));
$id=$_GET['id']?? "";
$type=$_GET['type']??"" ;
// print_r($type);

// ===============Call actu==============//

if($type =="actualite"){
$sql="SELECT * FROM `actualitedata` WHERE id=?";
$req=$pdo->prepare($sql);
$req->execute([$id]);
$actus=$req->fetchAll(PDO::FETCH_ASSOC);
// ==============second call pour suggestion actu==================//
$sql2="SELECT * FROM `actualitedata` WHERE id<>? ORDER BY `date` DESC LIMIT 3";
$req2=$pdo->prepare($sql2);
$req2->execute([$id]);
$adds=$req2->fetchALL(PDO::FETCH_ASSOC);


}elseif($type=="etablissement"){
// ==============Call education====================//
$sql="SELECT * FROM `educationdata` WHERE id=?";
$req=$pdo->prepare($sql);
$req->execute([$id]);
$actus=$req->fetchAll(PDO::FETCH_ASSOC);

// ==============second call pour suggestion education==================//
$sql2="SELECT * FROM `educationdata` WHERE id<>? ORDER BY `date` DESC LIMIT 3";
$req2=$pdo->prepare($sql2);
$req2->execute([$id]);
$adds=$req2->fetchALL(PDO::FETCH_ASSOC);
// print_r($adds);
}elseif($type=="busineservice"){
// ==============Call education====================//
$sql="SELECT * FROM `buservicedata` WHERE id=?";
$req=$pdo->prepare($sql);
$req->execute([$id]);
$actus=$req->fetchAll(PDO::FETCH_ASSOC);
// ==============second call pour suggestion education==================//
$sql2="SELECT * FROM `buservicedata` WHERE id<>? ORDER BY `date` DESC LIMIT 3";
$req2=$pdo->prepare($sql2);
$req2->execute([$id]);
$adds=$req2->fetchALL(PDO::FETCH_ASSOC);
}else{
echo"une erreur s'est produite";
}


// ==============second call==================//
// $sql2="SELECT * FROM `actualitedata` WHERE id<>? ORDER BY `date` DESC LIMIT 3";
// $req2=$pdo->prepare($sql2);
// $req2->execute([$id]);
// $adds=$req2->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Article - Ville de Daloa</title>
  <link rel="icon" href="../image/logoicon.png">

  <!-- Polices Google et icônes Material Symbols -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" />
  <link rel="stylesheet" href="style.css">
</head>
<style>
    .card-image{
      background-repeat:no-repeat;
    }
    .container h1,h2{
        text-align: center;
        margin-bottom: 40px;  
    }
    .sub__text{
        width: 50%;
        margin: auto;
        margin-bottom: 40px;
        font-style: italic;
    }
    #img__art img{
        border-radius: 10px;
        margin-bottom: -5px;
        height: 500px;
        width: 1292px;
        
        
    }
    #img__art{
        position: relative;
        /* border: 1px solid red; */
        width: 100%;
        height: 400px;
        margin-bottom: 40px;
        background-repeat:no-repeat;
        background-size: cover;
        border-radius: 20px;
        
    }
    .descrip{
        /* margin-bottom: 100px; */
        text-align: left;
        width: 85%;
        margin: auto;
    }
    .hover{
        width: 100%;background-color: black; opacity:0.3;
        position: absolute;
        top:0;
        left:0;
        border-radius: 20px;
        right:0;bottom: 0;
    }
    #img__art span{
        position: absolute;bottom:20px; left:20px;color:black;font-size: 1.3em;
        font-weight: bold;
        background: #7bf7b0;
        border-radius: 15px;
        padding: 5px 20px;
    }
    .news-grid{
        margin-top: 100px;
    }


</style>
<body>

  <!-- TOP HEADER -->
  <header class="top-header">
    <div class="container" >
      <div id="logo"><img class="logo" src="../image/logo.png"  style="width:150px;"/></div>
      <nav class="nav-links">
        <a href="index.php" >Home</a>
        <a href="actualite.php" class="active" >Actualités</a>
        <a href="etablissement.php">Établissements</a>
        <a href="business_et_service.php">Business et Service</a>
        <a href="map.php">Map</a>
      </nav>
      <div class="header-actions">
        <button aria-label="Rechercher"><span class="material-symbols-outlined">search</span></button>
        <button aria-label="Notifications" onclick="window.location.href='ajout.php'"><span class="material-symbols-outlined">add</span></button>
        <button aria-label="Compte" onclick="window.location.href='account.php'"><span class="material-symbols-outlined">account_circle</span></button>
      </div>
    </div>
  </header>
  <body>
    <main>
        <div class="container">
          <?php 
            foreach ($actus as $actu){
            echo   "<h1>".$actu['titreActu']."</h1>
              <p class='sub__text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto perspiciatis quasi ipsam aperiam eum obcaecati </p>
              <div id='img__art' style=\"background:url('".$actu['image']."');background-repeat:no-repeat;background-size:cover;background-position:center;\">
                  <!-- <img src='../image/detail1.png'/> -->
                  <div class='hover'></div>";


            echo" <span>".$actu['localite']." - ".$actu['secteur']."</span>
              </div>
              <p class='descrip'>".$actu['descripActu']."</p>";
              };

          ?>
        <section>
          <h2 style="margin-top:40px;">Autre suggestion</p>
          <div class="news-grid">
            
            <!-- Carte 2-->
            <?php
            foreach ($adds as $add){
              // if($add['id'] !== $id){
                //   print_r($reponse['image']);
                echo "          <article class='news-card'>
                <div class='card-image' style=\"background-image: url('".$add['image']."');\"></div>
                        <div class='card-body'>
                          <div class='card-category primary' style='text-align:left;'>".$add['secteur']."</div>
                          <h4 class='card-title'style='text-align:left;'>".$add['titreActu']."</h4>
                          <p class='card-excerpt' style='text-align: left;'>".substr($add['descripActu'],0,150)."...</p>
                          <div class='card-footer'>
                            <span>".$add['localite']."</span>"
                  ?>

                        <button class='btn-arrow' aria-label='Lire la suite' name='detail'>
                          <a href="publication.php?id=<?=$add['id'] ?>&type=<?=$type ?>">
                            <span class='material-symbols-outlined'>
                                arrow_forward
                              </span>
                            </a>
                        </button>
            <?php echo "
                              </div>
                            </div>
                          </article>";
              // }else{break;}
                }
              ?>
 
        </div>
    </main>
  </body>