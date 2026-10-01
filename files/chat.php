<?php
session_start();
// echo '<script>console.log("'.$_SESSION['conversation'][0]['content'].'")</script>';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Actualités - Ville de Daloa</title>

  <!-- Polices Google et icônes Material Symbols -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" />
  <link rel="stylesheet" href="style.css">
  <style>
    main{
      padding: 0;
    }
    .top-header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 36px;
      padding-bottom: 36px;
    }

    #chatAnswer{
      margin:auto;
      /* padding: 10px; */
      width: 100%;
      height: 500px;
      overflow-y: auto;
      border: 1px solid #ccc;
    }
    .researchAI{
        margin-top: 1.5%;
    }
    .bot{
        margin-top:25px;
        position: relative;
        margin-left: 50%;
        margin-right: 10px;
        background: white;
        width:fit-content;
        max-width: 50%;
        /* display: none; */
        padding: 10px;
        border-radius: 10px;
        /*min-width: 500px;*/
        word-break: break-word;
    }
    .user{
        width: fit-content;     /* s’adapte au contenu */
        /*max-width: 300px;*/       /* mais ne dépasse pas 300px */
        margin-top:25px;
        position: relative;
        margin-left: 10px;
        background: white;
        /*width:300px;*/
        /* display: none; */
        border-radius: 10px;
        padding: 10px;
        max-width: 400px;
        word-break: break-word;
        
        /*padding: 10px;*/
    }
    @media (max-width: 768px){
        #chatAnswer{
            width: 100%
        }
  }
</style>
</head>
<body>

  <!-- TOP HEADER -->
  <header class="top-header" style="  margin-bottom:1.5%;">
    <div class="container">
      <p class="logo"><a href="index.php"><</a></p>
      <!--<nav class="nav-links">-->
      <!--  <a href="home.php">Home</a>-->
      <!--  <a href="#" class="active">Actualités</a>-->
      <!--  <a href="#">Établissements</a>-->
      <!--  <a href="#">Business</a>-->
      <!--  <a href="#">Service</a>-->
      <!--</nav>-->
      <div class="header-actions">
        <button aria-label="Rechercher"><span class="material-symbols-outlined">search</span></button>
        <button aria-label="Notifications"><span class="material-symbols-outlined">notifications</span></button>
        <button aria-label="Compte" onclick="window.location.href='account.html'"><span class="material-symbols-outlined">account_circle</span></button>
      </div>
    </div>
  </header>

  <!-- MAIN -->
  <main>
    <div class="container">

        <div id="chatAnswer">
          <p class="user"><?php echo $_SESSION['conversation'][0]['content']?>
          <p class="bot"><?php echo $_SESSION['conversation'][1]['content']?>
          </div>
        <!--<form action="" method="POST">-->
             <div class="researchAI">
                <textarea name="saisie" id="search" placeholder="Posez vos question et laisser Ayo AI vous répondre..." rows="3" cols="5"></textarea>
                <div id="btnImg">
                    <button type='submit' name='envoyer' id="btn"><img src="../image/send1.png"/></button>
                </div>
              </div>
        <!--</form>-->
    </div>
    
  </main>

  <!-- FOOTER -->
  <!--<footer>-->
  <!--  <div class="container">-->
  <!--    <div class="footer-logo">Ayo Daloa!</div>-->
  <!--    <nav class="footer-links">-->
  <!--      <a href="#">Urgences</a>-->
  <!--      <a href="#">Plan du site</a>-->
  <!--      <a href="#">Mentions Légales</a>-->
  <!--      <a href="#">Contact</a>-->
  <!--    </nav>-->
  <!--    <div class="footer-copy">&copy; 2026 Commune de Daloa. Tous droits réservés.</div>-->
  <!--  </div>-->
  <!--</footer>-->
  <!------------------------------------code js---------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------->
  </body>
<script>
  const chatZone=document.getElementById('chatAnswer');
  const btn=document.getElementById('btn');
  btn.addEventListener('click',()=>{
      
    let saisie=document.getElementById('search').value;
    if(saisie.trim()!=""){
    let p=document.createElement('p');
    p.innerHTML=saisie;
    p.className='user';
    chatZone.appendChild(p);
    p.style.display='block';
    // console.log(saisie);
    const formData = new FormData();
    formData.append('saisie', saisie);
    formData.append('envoyer', 'true');
    fetchData(formData);
    document.getElementById('search').value="";
      saisie="";
    }else{
      console.log('la zone de saisie est vide');
    }
    
  });
  //fonctionnalité à revoir(envoyé le texte après avoir toucher entrer)
  chatZone.addEventListener('keyup',function(event){

    if(event.code === "Enter"){
      let saisie=document.getElementById('search').value;
      let p=document.createElement('p');
      p.innerHTML=saisie;
      p.className='user';
      chatZone.appendChild(p);
      p.style.display='block';
      // console.log(saisie);
      const formData = new FormData();
      formData.append('saisie', saisie);
      formData.append('envoyer', 'true');
      fetchData(formData);
      document.getElementById('search').value="";
   }
  })

//création des différents fonction
  async function fetchData(formData) {
    try {
        const response = await fetch('app.php', {
            method: 'POST',
            body: formData,
            });
        const data = await response.text();
        console.log(data);
        let bot=document.createElement('p');
        bot.className='bot';
        bot.textContent=data;
        chatZone.appendChild(bot);
        // bot.style.display='block';
      }catch (error) {
        console.error('Error:', error);
      }
  }
  function createBubble(saisie){
    let p=document.createElement('p');
    p.innerHTML=saisie;
    p.className='user';
    chatZone.appendChild(p);
    p.style.display='block';
    // console.log(saisie);
    const formData = new FormData();
    formData.append('saisie', saisie);
    formData.append('envoyer', 'true');
    fetchData(formData);
    document.getElementById('search').value="";
  }
  
</script>


</html>
