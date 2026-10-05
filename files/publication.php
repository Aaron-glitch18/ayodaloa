<?php
require_once(__DIR__.'/connect.php');

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
    .container h1{
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
        background:url('../image/actualite1.png');
        background-repeat: no-repeat;
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
        <a href="service.php">Map</a>
      </nav>
      <div class="header-actions">
        <button aria-label="Rechercher"><span class="material-symbols-outlined">search</span></button>
        <button aria-label="Notifications"><span class="material-symbols-outlined">notifications</span></button>
        <button aria-label="Compte" onclick="window.location.href='account.php'"><span class="material-symbols-outlined">account_circle</span></button>
      </div>
    </div>
  </header>
  <body>
    <main>
        <div class="container">
            <h1>Titre de l'article</h1>
            <p class="sub__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto perspiciatis quasi ipsam aperiam eum obcaecati </p>
            <div id="img__art">
                <!-- <img src="../image/actualite1.png"/> -->
                <div class="hover"></div>
                <span>Daloa - Environnement</span>
            </div>
            <p class="descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi perferendis explicabo aperiam veritatis at, voluptatum iste rem iure deleniti.
                 Debitis illum nihil voluptatum dicta obcaecati quam tenetur ducimus deserunt ipsa!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus expedita recusandae dolor id iure. Dolorum est fuga aperiam 
                voluptatibus nam enim sint, laboriosam nisi quisquam corporis accusantium nesciunt saepe perferendis officiis commodi fugit 
                distinctio eum mollitia quos rerum, exercitationem doloribus. Distinctio a molestiae tempora doloremque doloribus labore, rerum quo culpa nesciunt 
                tenetur deserunt nobis quisquam quia corporis? Harum, quibusdam recusandae. Minima perspiciatis facere, nam obcaecati cupiditate aliquid excepturi suscipit cumque 
                magnam quo! Aut molestias cupiditate, soluta eum in quia earum pariatur excepturi mollitia, blanditiis dignissimos distinctio nobis quod sed corporis fugiat molestiae obcaecati,
                 numquam aliquam eos iure atque! Ullam quidem eveniet rem minus rerum sint eius molestias, dolore ad blanditiis corporis a delectus quaerat aliquam! Possimus culpa dolores deleniti animi. Pariatur minus
                  deleniti sint dicta, harum in vitae officia illo ipsum sequi nisi quae rem obcaecati a reiciendis cum nostrum impedit voluptatem quam laudantium odit. Temporibus porro iure ipsa aliquam, excepturi omnis
                   vitae praesentium quae ad natus accusantium amet tenetur. Repellat in similique molestiae fugit ab dolores unde architecto at nemo blanditiis magnam cumque alias aperiam consequuntur modi aliquam, illum
                    tempora inventore totam, officiis aliquid! Sit fugiat numquam exercitationem dignissimos, accusantium sunt mollitia! Voluptas voluptate ratione laudantium harum earum!</p>

        <section>
        <div class="news-grid">

    
          <!-- Carte 2-->
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
          </article>
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
          </article>

          <!-- Carte 3 -->
          <article class="news-card">
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
      </section>

        
        </div>
    </main>
  </body>