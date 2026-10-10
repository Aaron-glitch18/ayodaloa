<?php
session_start();
require_once(__DIR__.'/connect.php');
$sql="SELECT * FROM `annonce` WHERE 1 ORDER BY `date` DESC";
$req=$pdo->prepare($sql);
$req->execute();
$resultat=$req->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accueil - ayodaloa!</title>
  <link rel="icon" href="../image/logoicon.png">
  <!-- Polices Google et icônes Material Symbols (repris d'index.php pour la navbar) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" />
  <style>
    /* VARIABLES & RESET */
    :root {
      --bg-main: #f9f7f2;
      --surface: #ffffff;
      --text-main: #222222;
      --text-muted: #666666;
      --accent: #c86d17;
      --accent-hover: #a8580f;
      --border-radius: 14px;
      --shadow-sm: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: var(--bg-main);
      color: var(--text-main);
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      line-height: 1.5;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* CONTAINER PRINCIPAL */
    .app-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px 40px;
    }

    /* HEADER NAVIGATION */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 0;
      background: transparent;
    }

    .brand-logo {
      font-weight: 800;
      font-size: 1.25rem;
      color: #1a1a1a;
    }

    nav.nav-links {
      display: flex;
      gap: 32px;
      align-items: center;
      font-size: 0.95rem;
      font-weight: 600;
    }

    nav.nav-links a.active {
      color: var(--accent);
      border-bottom: 2px solid var(--accent);
      padding-bottom: 4px;
    }

    .nav-actions {
      display: flex;
      gap: 16px;
      align-items: center;
    }

    .icon-btn {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1.2rem;
    }

    /* HERO SECTION - EFFET WAOUH PLEIN ECRAN */
    .hero-wrapper {
      position: relative;
      width: 100vw;
      height:90vh;
      min-height: 600px;
      margin-left: calc(50% - 50vw);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin-bottom: 60px;
    }

    .hero-slide {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0;
      animation: fade-slides 18s infinite;
      z-index: 1;
    }

    /* Effet dynamique (Ken Burns) */
    @keyframes fade-slides {
      0% { opacity: 0; transform: scale(1); }
      10% { opacity: 1; }
      33% { opacity: 1; transform: scale(1.05); }
      43% { opacity: 0; transform: scale(1.05); }
      100% { opacity: 0; transform: scale(1); }
    }

    .slide-1 { background-image: url('../image/index1.webp'); animation-delay: 0s; }
    .slide-2 { background-image: url('../image/index1.webp'); animation-delay: 6s; }
    .slide-3 { background-image: url('../image/index1.wzbp'); animation-delay: 12s; }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      /* Dégradé latéral pour bien faire ressortir le texte à gauche */
      background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%);
      z-index: 2;
    }

    .hero-content {
      position: relative;
      z-index: 3;
      padding: 0 max(20px, calc(50vw - 580px)); /* S'aligne parfaitement avec l'app-container */
      color: #ffffff;
      width: 100%;
    }

    .hero-body {
      max-width: 750px;
    }

    .hero-top-badge {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(8px);
      padding: 8px 20px;
      border-radius: 20px;
      font-size: 0.95rem;
      width: fit-content;
      margin-bottom: 30px;
      font-weight: 600;
    }

    .hero-body h1 {
      font-size: 4rem;
      font-weight: 900;
      line-height: 1.1;
      margin-bottom: 20px;
      text-shadow: 0 4px 20px rgba(0,0,0,0.5);
      letter-spacing: -1px;
    }

    .hero-body p {
      font-size: 1.35rem;
      opacity: 0.95;
      margin-bottom: 40px;
      text-shadow: 0 2px 10px rgba(0,0,0,0.5);
      line-height: 1.6;
    }

    .hero-actions {
      display: flex;
      gap: 20px;
    }

    .btn-large {
      padding: 16px 36px !important;
      font-size: 1.1rem !important;
      border-radius: 50px !important;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.25);
      text-align: center;
    }

    .btn-secondary {
      background-color: rgba(255, 255, 255, 0.1);
      color: #ffffff;
      border: 2px solid #ffffff;
      backdrop-filter: blur(5px);
      transition: all 0.3s ease;
      display: inline-block;
      font-weight: 600;
    }

    .btn-secondary:hover {
      background-color: #ffffff;
      color: var(--text-main);
    }

    .btn-primary {
      background-color: var(--accent);
      color: #ffffff;
      padding: 12px 24px;
      border-radius: 8px;
      font-weight: 600;
      display: inline-block;
      transition: background 0.2s ease;
    }

    .btn-primary:hover {
      background-color: var(--accent-hover);
    }

    /* SECTION TITLES */
    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 40px 0 20px;
    }

    .section-title {
      font-size: 1.35rem;
      font-weight: 700;
    }

    .link-all {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--text-muted);
    }

    /* SERVICES PUBLICS (GRID 4) */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }

    .service-card {
      background: var(--surface);
      border-radius: var(--border-radius);
      padding: 24px 20px;
      text-align: center;
      box-shadow: var(--shadow-sm);
      transition: transform 0.2s ease;
    }

    .service-card:hover {
      transform: translateY(-4px);
    }

    .service-icon {
      width: 48px;
      height: 48px;
      background: #fdf6ee;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 16px;
      font-size: 1.3rem;
    }

    .service-card h3 {
      font-size: 1rem;
      font-weight: 700;
      margin-bottom: 6px;
    }

    .service-card p {
      font-size: 0.82rem;
      color: var(--text-muted);
    }

    /* ACTUALITÉS (GRID 3) */
    .news-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 24px;
    }

    .news-card {
      background: var(--surface);
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      display: flex;
      flex-direction: column;
    }

    .news-img-container {
      position: relative;
      height: 180px;
      width: 100%;
    }

    .news-img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .news-badge {
      position: absolute;
      top: 12px;
      left: 12px;
      background: #4ade80;
      color: #052e16;
      font-size: 0.75rem;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: 12px;
    }

    .news-badge.eco { background: #fed7aa; color: #7c2d12; }
    .news-badge.edu { background: #e0f2fe; color: #075985; }

    .news-content {
      padding: 20px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      justify-content: space-between;
    }

    .news-content h3 {
      font-size: 1.05rem;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .news-content p {
      font-size: 0.85rem;
      color: var(--text-muted);
      margin-bottom: 16px;
    }

    .news-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.8rem;
      color: var(--text-muted);
      border-top: 1px solid #f0f0f0;
      padding-top: 12px;
    }

    /* TOURISME & CULTURE (GRID 2) */
    .tourism-header-box {
      background: #eae4d9;
      padding: 16px 20px;
      border-radius: var(--border-radius);
      margin-bottom: 20px;
    }

    .tourism-header-box h2 {
      font-size: 1.2rem;
      font-weight: 700;
    }

    .tourism-header-box p {
      font-size: 0.85rem;
      color: var(--text-muted);
    }

    .tourism-grid {
      display: grid;
      grid-template-columns: 1.6fr 1fr;
      gap: 20px;
    }

    @media (max-width: 768px) {
      .tourism-grid {
        grid-template-columns: 1fr;
      }
    }

    .tourism-card {
      position: relative;
      border-radius: var(--border-radius);
      overflow: hidden;
      min-height: 240px;
      display: flex;
      align-items: flex-end;
      padding: 24px;
      color: #ffffff;
      background-size: cover;
      background-position: center;
    }

    .tourism-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.1) 70%);
    }

    .tourism-card-content {
      position: relative;
      z-index: 1;
    }

    .tourism-card-content h3 {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 4px;
    }

    .tourism-card-content p {
      font-size: 0.85rem;
      opacity: 0.9;
    }

    /* FOOTER */
    footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 40px;
      margin-top: 40px;
      border-top: 1px solid #e5e0d8;
      font-size: 0.85rem;
      color: var(--text-muted);
      flex-wrap: wrap;
      gap: 16px;
    }

    .footer-links {
      display: flex;
      gap: 20px;
    }

    /* =====================================================================
       NAVBAR (reprise à l'identique du header d'index.php)
       ===================================================================== */
    .top-header {
      background-color: #f6f3f0;
      box-shadow: var(--shadow-sm);
      position: sticky;
      top: 0;
      z-index: 50;
      border-bottom: 1px solid #dec1af;
    }

    .top-header .container {
      max-width: 1280px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 24px;
      padding-right: 24px;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 16px;
      padding-bottom: 16px;
    }

    .top-header .logo {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 24px;
      line-height: 32px;
      color: var(--accent);
      letter-spacing: -0.01em;
      width: 100px;
    }

    .top-header .nav-links {
      display: flex;
      gap: 24px;
      align-items: center;
      font-size: 16px;
      font-weight: 400;
    }

    .top-header .nav-links a {
      font-size: 16px;
      line-height: 24px;
      color: #574235;
      transition: color 0.2s, transform 0.2s;
      display: inline-block;
      padding: 4px 0;
      border-bottom: 2px solid transparent;
    }

    .top-header .nav-links a:hover {
      color: var(--accent);
      transform: scale(0.95);
    }

    .top-header .nav-links a.active {
      color: var(--accent);
      font-weight: 600;
      border-bottom-color: var(--accent);
    }

    .top-header .header-actions {
      display: flex;
      gap: 16px;
      color: var(--accent);
    }

    .top-header .header-actions button {
      background: none;
      border: none;
      color: inherit;
      cursor: pointer;
      transition: color 0.2s, transform 0.2s;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .top-header .header-actions button:hover {
      color: var(--accent);
      transform: scale(0.95);
    }

    .top-header .material-symbols-outlined {
      font-size: 24px;
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    @media (max-width: 767px) {
      .top-header .nav-links {
        display: none;
      }
      .top-header .container {
        flex-wrap: wrap;
        gap: 8px;
      }
      .top-header .header-actions {
        margin-left: auto;
      }
    }

    @media (min-width: 768px) {
      .top-header .nav-links {
        display: flex;
      }
    }
  </style>
</head>
<body>

  <!-- TOP HEADER (repris à l'identique d'index.php) -->
  <header class="top-header">
    <div class="container" >
      <div id="logo"><img class="logo" src="../image/logo.png"  style="width:150px;"/><//></div>
      <nav class="nav-links">
        <a href="index.php" class="active" >Home</a>
        <a href="actualite.php" >Actualités</a>
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


  <div class="app-container">

    <!-- MAIN BODY -->
    <main>

      <!-- HERO BANNER - WAOUH EFFET -->
      <section class="hero-wrapper">
        <!-- Les 3 images qui vont défiler en fondu -->
        <div class="hero-slide slide-1"></div>
        <div class="hero-slide slide-2"></div>
        <div class="hero-slide slide-3"></div>
        
        <!-- Le dégradé superposé pour que le texte soit lisible -->
        <div class="hero-overlay"></div>
        
        <!-- Le contenu textuel -->
        <div class="hero-content">
          <div class="hero-top-badge">
            <span>Ville de Daloa</span> • <strong>Accueil</strong> • 28°C ☀️
          </div>
          <div class="hero-body">
            <h1>Daloa, L'Émergence du Haut-Sassandra</h1>
            <p>Bienvenue sur le portail officiel de la commune. Découvrez une métropole vibrante où la richesse de notre terroir agricole rencontre l'innovation urbaine de demain.</p>
            <div class="hero-actions">
              <a href="business_et_service.php" class="btn-primary btn-large">Explorer les services</a>
              <a href="map.php" class="btn-secondary btn-large">Découvrir la ville</a>
            </div>
          </div>
        </div>
      </section>

      <!-- SERVICES PUBLICS RAPIDES -->
      <section>
        <div class="section-header">
          <h2 class="section-title">Services Publics Rapides</h2>
        </div>
        <div class="services-grid">
          <div class="service-card">
            <div class="service-icon">📋</div>
            <h3>État Civil</h3>
            <p>Actes, Naissances</p>
          </div>
          <div class="service-card">
            <div class="service-icon">💳</div>
            <h3>Taxes & Impôts</h3>
            <p>Paiement en ligne</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🏗️</div>
            <h3>Urbanisme</h3>
            <p>Permis, Cadastre</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🎧</div>
            <h3>Assistance</h3>
            <p>Signaler un problème</p>
          </div>
        </div>
      </section>

      <!-- ACTUALITÉS À LA UNE -->
      <section>
        <div class="section-header">
          <h2 class="section-title">Actualités à la une (Commune)</h2>
          <a href="actualite.php" class="link-all">Voir tout →</a>
        </div>
        <div class="news-grid">
          
          <article class="news-card">
            <div class="news-img-container">
              <img src="image/Hero_Section.png" alt="Centre multimédia" />
              <span class="news-badge">Commune</span>
            </div>
            <div class="news-content">
              <div>
                <h3>Inauguration du nouveau centre multimédia de Daloa</h3>
                <p>Le maire a procédé hier à l'ouverture officielle du centre, visant à démocratiser l'accès au numérique...</p>
              </div>
              <div class="news-footer">
                <span>12 Octobre 2024</span>
                <span>🔗</span>
              </div>
            </div>
          </article>

          <article class="news-card">
            <div class="news-img-container">
              <img src="../image/Hero_Section.png" alt="Campagne agricole" />
              <span class="news-badge eco">Économie</span>
            </div>
            <div class="news-content">
              <div>
                <h3>Lancement de la campagne agricole 2024-2025</h3>
                <p>Les autorités locales prévoient une augmentation de 15% de la production de cacao grâce aux subventions...</p>
              </div>
              <div class="news-footer">
                <span>10 Octobre 2024</span>
                <span>🔗</span>
              </div>
            </div>
          </article>

          <article class="news-card">
            <div class="news-img-container">
              <img src="image/Hero_Section.png" alt="Étudiants" />
              <span class="news-badge edu">Éducation</span>
            </div>
            <div class="news-content">
              <div>
                <h3>Bourses d'excellence pour les étudiants de la commune</h3>
                <p>La mairie annonce la distribution de 500 bourses d'études pour soutenir les meilleurs bacheliers...</p>
              </div>
              <div class="news-footer">
                <span>08 Octobre 2024</span>
                <span>🔗</span>
              </div>
            </div>
          </article>

        </div>
      </section>

      <!-- TOURISME & CULTURE -->
      <section style="margin-top: 40px;">
        <div class="tourism-header-box">
          <h2>Tourisme & Culture</h2>
          <p>Explorez les richesses naturelles et le patrimoine culturel unique de Daloa.</p>
        </div>
        <div class="tourism-grid">
          <div class="tourism-card" style="background-image: url('../image/antilopes.jpg');">
            <div class="tourism-card-content">
              <h3>Réserve des Antilopes de Daloa</h3>
              <p>Une immersion totale dans la nature préservée du Haut-Sassandra...</p>
            </div>
          </div>
          <div class="tourism-card" style="background-image: url('../image/cacao.jpg');">
            <div class="tourism-card-content">
              <h3>Le Circuit du Cacao</h3>
              <p>De la cabosse à la fève, découvrez le savoir-faire de notre région.</p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- FOOTER -->
    <footer>
      <div><strong>Daloa Smart City</strong></div>
      <div class="footer-links">
        <a href="#">Urgences</a>
        <a href="#">Plan du site</a>
        <a href="#">Mentions Légales</a>
        <a href="#">Contact</a>
      </div>
      <div>© 2024 Commune de Daloa. Tous droits réservés.</div>
    </footer>

  </div>

</body>
</html>