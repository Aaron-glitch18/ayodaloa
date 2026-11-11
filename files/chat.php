<?php
session_start();
// require_once(__DIR__.'/app.php');
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
    .user{
        margin-top:25px;
        position: relative;
        margin-left: 70%;
        /* margin-right: 10px; */
        background: white;
        width:fit-content;
        max-width: 400px;
        text-align:left;

        /* display: none; */
        padding: 10px;
        border-radius: 10px;
        /*min-width: 500px;*/
        word-break: break-word;
    }
    .bot{
        width: fit-content;     /* s’adapte au contenu */
        /*max-width: 300px;*/       /* mais ne dépasse pas 300px */
        margin-top:25px;
        position: relative;
        margin-left: 5%;
        background: white;
        /*width:300px;*/
        /* display: none; */
        border-radius: 10px;
        padding: 10px;
        max-width: 45%;
        word-break: break-word;
        text-align:left;
        
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
      <a href="actualite.php" class="app-header__link">
          <span class="material-symbols-outlined">home</span>
      </a>
      <!--<nav class="nav-links">-->
      <!--  <a href="home.php">Home</a>-->
      <!--  <a href="#" class="active">Actualités</a>-->
      <!--  <a href="#">Établissements</a>-->
      <!--  <a href="#">Business</a>-->
      <!--  <a href="#">Service</a>-->
      <!--</nav>-->
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

        <div id="chatAnswer">

          </div>
        <!--<form action="" method="POST">-->
             <div class="researchAI">
                <textarea name="saisie" id="search" placeholder="Posez vos question et laisser Ayo AI vous répondre..." rows="3" cols="5"></textarea>
                <div id="btnImg">
                    <button id="btn" onclick="bulle_discu()"><img src="../image/send1.png"/></button>
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
    const saisi=document.getElementById('search');
    const send=document.getElementById('btn');
    // const chat_zone=document.getElementById('')
    const show_zone=document.getElementById('container');
    const chatzone=document.getElementById('chatAnswer');
    // const hidden=document.getElementsByClassName("hidden");
    saisi.addEventListener('keyup',function(event){
        if(event.code =="Enter"){
            bulle_discu();
        }
    })
function bulle_discu(){
    send.addEventListener('click',()=>{
        let question=saisi.value;
        if (question==''){
            return;
        }else{
            question = saisi.value;
            //show_zone.innerHTML="";
            // show_zone.textContent = question;
            let p = document.createElement('p');
            p.innerHTML=question;
            p.className='user';
            chatzone.appendChild(p);
            callAPI(question);
            saisi.value="";
            console.log(question);
            // return;
        }
     })
    saisi.addEventListener('keyup', function(event) {
    if (event.code === 'Enter')
      {
        let question=saisi.value;
            if (question==false){
                return;
            }else{
            question = saisi.value;
            //show_zone.innerHTML="";
            // show_zone.textContent = question;
            let p = document.createElement('p');
            p.innerHTML=question;
            p.className='user';
            chatzone.appendChild(p);
            callAPI(question);
            saisi.value="";
            }
        }
    });
}           
//création des différents fonction
  async function callAPI(question) {
    const user_id=2;
    const url="http://127.0.0.1:8000/chat";
    try {
        const response = await fetch(url, {
            method: "POST",
            headers:{
              'Content-type':'application/json'
            },
            body: JSON.stringify(
              {
                user_id:user_id,
                saisie:question
              })
          });
            const data = await response.json();
            console.log(data);
            let p = document.createElement('p');
            p.innerHTML=data || "je n'est pas bien compris";
            p.className='bot';
            chatzone.appendChild(p);
      }catch (error) {
        console.error('Error est survenu:', error);
      }
  }
  // function createBubble(saisie){
  //   let p=document.createElement('p');
  //   p.innerHTML=saisie;
  //   p.className='user';
  //   chatZone.appendChild(p);
  //   p.style.display='block';
  //   // console.log(saisie);
  //   // const formData = new FormData();
  //   // formData.append('saisie', saisie);
  //   // formData.append('envoyer', 'true');
  //   // fetchData(formData);
  //   document.getElementById('search').value="";
  // }
  
</script>


</html>
