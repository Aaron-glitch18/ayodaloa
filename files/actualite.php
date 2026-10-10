<?php
session_start();
require_once(__DIR__.'/connect.php');
// ==============================requête pour la ville de Daloa

$sql="SELECT * FROM `actualitedata` WHERE 1  AND `localite`='Daloa' ORDER BY date DESC";
// `id`,`date`,`image`,`titreActu`,`descripActu`
$stmt=$pdo->prepare($sql);
$stmt->execute();
$locs=$stmt->fetchAll(PDO::FETCH_ASSOC);

// ============================requête pour la ville de National

$sql="SELECT * FROM `actualitedata` WHERE 1  AND `localite`<>'Daloa' AND `localite`<>'International' ORDER BY date DESC";
// `id`,`date`,`image`,`titreActu`,`descripActu`
$stmt=$pdo->prepare($sql);
$stmt->execute();
$nats=$stmt->fetchAll(PDO::FETCH_ASSOC);

// ===========================================requête pour la ville de international

$sql="SELECT * FROM `actualitedata` WHERE 1  AND `localite`='International' ORDER BY date DESC";
// `id`,`date`,`image`,`titreActu`,`descripActu`
$stmt=$pdo->prepare($sql);
$stmt->execute();
$ints=$stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach($reponses as $key=>$rep){
//   print_r($rep['localite']);
// }
// print_r($reponses);
// ==========Appel Annonce==============
$sql="SELECT * FROM `annonce` WHERE 1 ORDER BY `date` DESC";
$req=$pdo->prepare($sql);
$req->execute();
$annonce=$req->fetchALL(PDO::FETCH_ASSOC);
// echo($annonce[0][0]['image']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Actualités - ayodaloa!</title>
  <link rel="icon" href="../image/logo.png">

  <!-- Polices Google et icônes Material Symbols -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" />
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=image" /> -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- TOP HEADER -->
  <header class="top-header">
    <div class="container" >
      <div id="logo"><img class="logo" src="../image/logo.png"  style="width:150px;"/><//></div>
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

  <!-- MAIN -->
  <main>
    <div class="container">

        <!-- En-tête et filtres -->
      <!-- <form method="POST"> -->
        <div class="researchAI">
              <textarea name="saisie" id="search" placeholder="Posez vos question et laisser Ayo AI vous répondre..." rows="3" cols="5"></textarea>
              <div id="btnImg">
                  <button id="btn"><img src="../image/send1.png"/></button>
              </div>
        </div>
        <div class="page-header">
          <div>
            <h1>L'Actualité</h1>
            <p>Restez informé de la vie municipale et des événements à Daloa.</p>
          </div>
          <div class="filter-group">
          <!-- <form action="#" method="POST"> -->
            <button id=loc class="filter-btn activ">Local</button>
            <button id=nat class="filter-btn">National</button>
            <button id=int class="filter-btn">International</button>
            <!-- <button id=otre class="filter-btn active">autre</button> -->
          <!-- </form> -->
          </div>
        </div>

      <!-- Annonces de la Mairie (Hero) -->
      <?php
        echo'<section class="hero-section">
          <h2>
            <span class="material-symbols-outlined" style="font-variation-settings:\'FILL\'1;">campaign</span>
            Les Annonces ivoiriennes
          </h2>
          <div class="hero-card">
            <div class="hero-image" style="background-image: url(\''.$annonce[0]['image'].'.\')"></div>
            <div class="hero-content">
              <span class="hero-badge">Communiqué Officiel</span>
              <h3>'.$annonce[0]['titreActu'].'</h3>
              <p style="text-align:left;">'.substr($annonce[0]['descripActu'],0,150).'...</p>
              <div class="hero-meta">
                <span class="material-symbols-outlined">calendar_today</span>
                '.$annonce[0]['date'].'
              </div>
            </div>
          </div>
        </section>';
      ?>

      <!-- Grille d'actualités -->
      <section>

        <div class="news-grid">
          <!-- Carte 1 -->
          <?php
            foreach ($locs as $loc){
              // if($actualite['localite'] =='Daloa'){

            //   print_r($reponse['image']);
              echo "          <article class='news-card art__loc'>
                        <div class='card-image' style=\"background-image: url('".$loc['image']."')\"></div>
                        <div class='card-body'>
                          <div class='card-category primary'>".$loc['secteur']."</div>
                          <h4 class='card-title'>".$loc['titreActu']."</h4>
                          <p class='card-excerpt' style='text-align: left;'>".substr($loc['descripActu'],0,150)."...</p>
                          <div class='card-footer'>
                            <span>".$loc['date']."</span>"
          ?>

                        <button class='btn-arrow' aria-label='Lire la suite' name='detail'>
                          <a href="publication.php?id=<?=$loc['id'] ?>&type=actualite">
                            <span class='material-symbols-outlined'>
                                arrow_forward
                              </span>
                            </a>
                        </button>
        <?php echo "
                              </div>
                            </div>
                          </article>";
                }
          //  }
                
        ?>
        <!-- AFFICHONS LES DONNEES NATIONALS -->
                   <?php
            foreach ($nats as $nat){
              // if($nat['localite'] =='Daloa'){

            //   print_r($reponse['image']);
              echo "          <article class='news-card art__nat'>
                        <div class='card-image' style=\"background-image: url('".$nat['image']."')\"></div>
                        <div class='card-body'>
                          <div class='card-category primary'>".$nat['secteur']."</div>
                          <h4 class='card-title'>".$nat['titreActu']."</h4>
                          <p class='card-excerpt' style='text-align: left;'>".substr($nat['descripActu'],0,150)."...</p>
                          <div class='card-footer'>
                            <span>".$nat['date']."</span>"
          ?>

                        <button class='btn-arrow' aria-label='Lire la suite' name='detail'>
                          <a href="publication.php?id=<?=$nat['id'] ?>&type=actualite">
                            <span class='material-symbols-outlined'>
                                arrow_forward
                              </span>
                            </a>
                        </button>
        <?php echo "
                              </div>
                            </div>
                          </article>";
                }
          //  }
                
        ?>
        <!-- AFFICHONS LES DONNEES INTERNATIONALS -->
                   <?php
          foreach ($ints as $int){
              // if($actualite['localite'] =='Daloa'){

            //   print_r($reponse['image']);
              echo "          <article class='news-card art__int'>
                        <div class='card-image' style=\"background-image: url('".$int['image']."')\"></div>
                        <div class='card-body'>
                          <div class='card-category primary'>".$int['secteur']."</div>
                          <h4 class='card-title'>".$int['titreActu']."</h4>
                          <p class='card-excerpt' style='text-align: left;'>".substr($int['descripActu'],0,150)."...</p>
                          <div class='card-footer'>
                            <span>".$int['date']."</span>"
          ?>

                        <button class='btn-arrow' aria-label='Lire la suite' name='detail'>
                          <a href="publication.php?id=<?=$int['id'] ?>&type=actualite">
                            <span class='material-symbols-outlined'>
                                arrow_forward
                              </span>
                            </a>
                        </button>
        <?php echo "
                              </div>
                            </div>
                          </article>";
                }
          //  }
                
        ?>

    
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="footer-logo">Ayo Daloa!</div>
      <nav class="footer-links">
        <a href="#">Urgences</a>
        <a href="#">Plan du site</a>
        <a href="#">Mentions Légales</a>
        <a href="#">Contact</a>
      </nav>
      <div class="footer-copy">&copy; 2026 Commune de Daloa. Tous droits réservés.</div>
    </div>
  </footer>
  <!------------------------------------code js---------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------->
  </body>
  
    <script>
      (function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        
        // Fonction pour activer un bouton et désactiver les autres
        function setActive(activeButton) {
          filterButtons.forEach(btn => {
            btn.classList.remove('active');
          });
          activeButton.classList.add('active');
        }
    
        // Ajout d'un écouteur sur chaque bouton
        filterButtons.forEach(btn => {
          btn.addEventListener('click', function(e) {
            setActive(this);

          });
        });
    
        // Optionnel : activer le premier bouton par défaut (si aucun n'a la classe 'active')
        const hasActive = Array.from(filterButtons).some(btn => btn.classList.contains('active'));
        if (!hasActive && filterButtons.length > 0) {
          filterButtons[0].classList.add('active');
        }
})();

const searchArea=document.getElementById('search');
const btn =document.getElementById('btn');

// filtre des informations afficher
const local = document.getElementById('loc');
const nation = document.getElementById('nat');
const international = document.getElementById('int');

// Fonction qui affiche uniquement la catégorie choisie
function afficherCategorie(categorie) {
    // Récupérer toutes les cartes d'actualités
    const cartes = document.querySelectorAll('.news-card');

    // Parcourir toutes les cartes
    cartes.forEach(carte => {
        // Afficher uniquement celles qui correspondent
        carte.style.display = carte.classList.contains(categorie)
            ? ''
            : 'none';
    });
}

// Bouton Local
local.addEventListener('click', (event) => {
    event.preventDefault();
    afficherCategorie('art__loc');
});

// Bouton National
nation.addEventListener('click', (event) => {
    event.preventDefault();
    afficherCategorie('art__nat');
});

// Bouton International
international.addEventListener('click', (event) => {
    event.preventDefault();
    afficherCategorie('art__int');
});




btn.addEventListener('click',()=>{
  const saisie=searchArea.value;

  if(saisie.trim()!==""){
      const formData = new FormData();
      formData.append('saisie', saisie);
      formData.append('envoyer', 'true');
      fetchData(formData);
      window.location.href='chat.php';
  }else{
    console.log("variable saisie vide");
  }
});


searchArea.addEventListener('keyup',function(event){
  if(event.code === "Enter"){
    const saisie=searchArea.value;
    if(saisie.trim()!==""){
      const formData = new FormData();
      formData.append('saisie', saisie);
      formData.append('envoyer', 'true');
      fetchData(formData);
      window.location.href='chat.php';
    }
  }else{

  }
})

async function fetchData(formData) {
    try {
        const response = await fetch('app.php', {
            method: 'POST',
            body: formData,
            });
        const data = await response.text();
        console.log(data);

        // bot.style.display='block';
      }catch (error) {
        console.error('Error:', error);
      }
}

// 
        
        // index envoie l'info à add qui les traites et les envoie à nouveau à une autre page
    </script>

</html>