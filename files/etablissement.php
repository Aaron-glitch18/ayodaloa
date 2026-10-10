<?php
session_start();
require_once(__DIR__.'/connect.php');

$sql="SELECT `id`,`date`,`image`,`titreActu1`,`descripActu`,`secteur`FROM `educationdata` WHERE 1 AND `localite`='Daloa' ORDER BY date DESC";
// `id`,`date`,`image`,`titreActu`,`descripActu`
$stmt=$pdo->prepare($sql);
$stmt->execute();
$reponses=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Etablissement - ayodaloa!</title>
  <link rel="icon" href="../image/logoicon.png">

  <!-- Polices Google et icônes Material Symbols -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" />
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- TOP HEADER -->
  <header class="top-header">
    <div class="container" >
      <div id="logo"><img class="logo" src="../image/logo.png"  style="width:150px;"/></div>
      <nav class="nav-links">
        <a href="index.php">Home</a>
        <a href="actualite.php">Actualités</a>
        <a href="etablissement.php" class="active">Établissements</a>
        <a href="business_et_service.php" >Business et Service</a>
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
    <!-- </form> -->
      <div class="page-header">
        <div>
          <h1>Les Etablissements</h1>
          <p>Restez informé de la vie municipale et des événements à Daloa.</p>
        </div>
        <div class="filter-group">
          <button id=pub class="filter-btn active">Public</button>
          <button id=stait class="filter-btn">Sous traitant</button>
          <button id=agri class="filter-btn">Agriculture</button>
          <button id=edu class="filter-btn">Education</button>
        </div>
      </div>

      <!-- Annonces de la Mairie (Hero) -->
      <!-- <section class="hero-section">
        <h2>
          <span class="material-symbols-outlined" style="font-variation-settings:'FILL'1;">campaign</span>
          Annonces de la Mairie
        </h2>
        <div class="hero-card">
          <div class="hero-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBCW4GzVLDHBg1IdLvRZPfGhuhKWqbcMhg3_I1_LX2-NcRLZ4oaoADAWmd11CDkredkEax9E-MpTC0WVQ2hyoo82OzEZ0cYJjbY11rmdCFYkK0ftkNcU-LK0SLXDruDje1qoFaDxYpL-Hh1Gf9NrUSOhJIjM1_C4q0zhMvF4vyYT84U-K4FIHRMRS8jurdL6Kwa-gMFcR-w4Zc4iJ2z_NvT1GT2prHN3qQMZ2rWDVc7YuXJGawQM7dVzg')"></div>
          <div class="hero-content">
            <span class="hero-badge">Communiqué Officiel</span>
            <h3>Lancement des Travaux d'Aménagement Numérique du Centre-Ville</h3>
            <p>Dans le cadre du projet Daloa Smart City, le conseil municipal annonce le début de l'installation des bornes Wi-Fi publiques et de l'éclairage intelligent à partir de ce lundi.</p>
            <div class="hero-meta">
              <span class="material-symbols-outlined">calendar_today</span>
              24 Octobre 2024
            </div>
          </div>
        </div>
      </section> -->

      <!-- Grille d'actualités -->
      <section>
        <div class="news-grid">
          <!-- Carte 1 -->
           <?php
            foreach ($reponses as $education){
            //   print_r($reponse['image']);
              echo "          <article class='news-card'>
                        <div class='card-image' style=\"background-image: url('".$education['image']."')\"></div>
                        <div class='card-body'>
                          <div class='card-category primary'>".$education['secteur']."</div>
                          <h4 class='card-title'>".$education['titreActu1']."</h4>
                          <p class='card-excerpt' style='text-align: left;'>".substr($education['descripActu'],0,150)."...</p>
                          <div class='card-footer'>
                            <span>".$education['date']."</span>"
                  ?>

                        <button class='btn-arrow' aria-label='Lire la suite' name='detail'>
                          <a href="publication.php?id=<?=$education['id'] ?>&type=etablissement">
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
              ?>
        </div>
      </section>

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

// filtre des informations afficher
const pub=document.getElementById('pub');
const agri= document.getElementById('agri');
const stai= document.getElementById('stai');
const edu= document.getElementById('edu');

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

// Bouton public
pub.addEventListener('click', (event) => {
    event.preventDefault();
    afficherCategorie('art__loc');
});

// Bouton agriculture
agri.addEventListener('click', (event) => {
    event.preventDefault();
    afficherCategorie('art__nat');
});

// Bouton sous traitant
stai.addEventListener('click', (event) => {
    event.preventDefault();
    afficherCategorie('art__int');
});

// Bouton education
edu.addEventListener('click', (event) => {
    event.preventDefault();
    afficherCategorie('art__int');
});




// modification de l'inface chat

const searchArea=document.getElementById('search');
const btn =document.getElementById('btn');


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
        
        // index envoie l'info à add qui les traites et les envoie à nouveau à une autre page
    </script>

</html>



