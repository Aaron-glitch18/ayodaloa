<?php
session_start();
require_once(__DIR__.'/connect.php');

$sql="SELECT * FROM `actualitedata` WHERE 1 ORDER BY date DESC";
// `id`,`date`,`image`,`titreActu`,`descripActu`
$stmt=$pdo->prepare($sql);
$stmt->execute();
$reponses=$stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($reponses);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Actualités - ayodaloa!</title>
  <link rel="icon" href="../image/logoicon.png">

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
        <a href="service.php">Map</a>
      </nav>
      <div class="header-actions">
        <button aria-label="Rechercher"><span class="material-symbols-outlined">search</span></button>
        <button aria-label="Notifications" onclick="window.location.href='ajout.html'"><span class="material-symbols-outlined">add</span></button>
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
            <button class="filter-btn active">Local</button>
            <button class="filter-btn">National</button>
            <button class="filter-btn">International</button>
          </div>
        </div>

      <!-- Annonces de la Mairie (Hero) -->
        <section class="hero-section">
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
        </section>

      <!-- Grille d'actualités -->
      <section>
        <div class="news-grid">
          <!-- Carte 1 -->
           <?php
            foreach ($reponses as $actualite){
            //   print_r($reponse['image']);
              echo "          <article class='news-card'>
                        <div class='card-image' style=\"background-image: url('".$actualite['image']."')\"></div>
                        <div class='card-body'>
                          <div class='card-category primary'>".$actualite['secteur']."</div>
                          <h4 class='card-title'>".$actualite['titreActu']."</h4>
                          <p class='card-excerpt' style='text-align: left;'>".substr($actualite['descripActu'],0,150)."...</p>
                          <div class='card-footer'>
                            <span>".$actualite['date']."</span>"
                  ?>

                        <button class='btn-arrow' aria-label='Lire la suite' name='detail'>
                          <a href="publication.php?id=<?=$actualite['id'] ?>&type=actualite">
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

    
          <!-- Carte 2
          <article class="news-card">
            <div class="card-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBngyiZgNjxJg6GYhMUbyRogxnAflL3VA9syNDVFx-48z0C-wt-IPONdKE8JavXziOnmHVfKymdMHP3NfvyYWPfkkRvW4cRZ0igdjPDNb2Zmaa_QgzX3F2O0NI7rCLRbY5QN67kXA3zFB_tYlVG6cMIVfn43DKRRhF-a5c3EvhWmxLb8_SO0sIyeh0f7CVAvnOyMkWvkvglE_0f8b9SKnCylmtJkuUsEaa1i7l_l7rRjbW-vEwm1f9QBg')"></div>
            <div class="card-body">
              <div class="card-category primary">Éducation</div>
              <h4 class="card-title">Distribution de Tablettes Numériques aux Écoles</h4>
              <p class="card-excerpt">Plus de 500 tablettes ont été remises aux élèves des écoles primaires publiques pour soutenir l'intégration technologique.</p>
              <div class="card-footer">
                <span>20 Octobre 2024</span>
                <button class="btn-arrow" aria-label="Lire la suite"><span class="material-symbols-outlined">arrow_forward</span></button>
              </div>
            </div>
          </article> -->

          <!-- Carte 3 -->
          <!-- <article class="news-card">
            <div class="card-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCCi28wk_z_lDoXDb6IPldAHMwUUW9hoto0l_JOpJXgikbgLjAxpFqjU2herUzcNmi9kmGYlkffFcemZqqYS9urvZG0XnSD44j3qxutScLHW1VAxut-ubLWsiq4ATpkFtVb8_27wXrSxQyxNCl-zFpnbA5TKkjaoDfkOZh40t9XyEFb8GuloyUx813Bf2pOhRCnc12x8ZIhBtGY0en0Dl0uHLtfCxgbONfC8Sf9pZW5Dr9kAsUkIEIupA')"></div>
            <div class="card-body">
              <div class="card-category secondary">Environnement</div>
              <h4 class="card-title secondary-hover">Inauguration du Nouveau Parc Écologique</h4>
              <p class="card-excerpt">Un espace vert de 2 hectares aménagé avec des plantes endémiques et des aires de repos, visant à améliorer la qualité de vie urbaine.</p>
              <div class="card-footer">
                <span>18 Octobre 2024</span>
                <button class="btn-arrow" aria-label="Lire la suite"><span class="material-symbols-outlined">arrow_forward</span></button>
              </div>
            </div>
          </article>
        </div>
      </section> -->

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































