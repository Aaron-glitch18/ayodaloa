<?php
session_start();


require_once(__DIR__.'/connect.php');

// print_r($_SESSION);
// if($_SESSION['succes']){
//     $succes=$_SESSION['erreur'];
//     header('location:home.php');
//     // session_destroy();
//     print_r($_SESSION);

//     unset($succes);
// }

if(isset($_POST['soumettre'])){
    // echo('bouton cliqué');
    // print_r($_POST);
    // print_r($_FILES);

        $add=$_POST['addresse'];
        $longitude=$_POST['longitude'];
        $telephone=$_POST['telephone'];
        $latitude=$_POST['latitude'];
        $tel=$_POST['telephone'];
        $image=trim($_FILES['image']['name']);

        $image_url=trim($_POST['image_url']);
        $titre=htmlspecialchars(trim($_POST['titreActu']));
        $subtitre=htmlspecialchars($_POST['titreActu1']);
        $desc=htmlspecialchars($_POST['descripActu']);
        $secteur=htmlspecialchars($_POST['secteur']);
        $localite=htmlspecialchars($_POST['localite']);

        if(!empty($add) || !empty($image) 
            || !empty($titre) || !empty($subtitre) || !empty($desc) 
            || !empty($secteur )|| !empty($localite)){

    // ============traitement de l'image========================//
            $extensions=['png', 'jpeg', 'webp','jpg'];
            $ext=pathinfo($image,PATHINFO_EXTENSION);

            if(in_array($ext,$extensions)){

                $newname="Service_".time().".".$ext;
                echo $newname;
                echo "<br>";
                $filename=$_FILES['image']['tmp_name'];
                // echo $filename;
                // echo "<br>";
                // print_r($_FILES);
                $dossierCible = realpath(__DIR__.'/../image');
                // echo"le dossier cible est:".$dossierCible;

                if($dossierCible && is_dir($dossierCible) && is_writable($dossierCible)){

                    $cheminfinal=$dossierCible.DIRECTORY_SEPARATOR.$newname;
                    if(move_uploaded_file($filename,$cheminfinal)){
                        $path='../image/'.$newname;
                        // exit;
                        $sql="INSERT INTO `buservicedata` (`image`,`telephone`,`titreActu`,`titreActu1`,`descripActu`,`secteur`,`localite`,`addresse`,`longitude`,`latitude`) VALUES (?,?,?,?,?,?,?,?,?,?)";
                        $req=$pdo->prepare($sql);
                        $req->execute([$path,$telephone,$titre,$subtitre,$desc,$secteur,$localite,$add,$longitude,$latitude]);
                        $data=$req->fetchALL(PDO::FETCH_ASSOC);
                        header('location:business_et_service.php');
                    }else{
                        echo "Dossier non téléchargé";
                    }

                }else{
                    echo "Opération non autorisé";
                }
            }else{
                echo "cette type d'extension n'est pas pris en charge: ".pathinfo($image,PATHINFO_EXTENSION);
            }

    }else{
        echo"Veuillez préciser votre secteur d'activité";
    }
}


// print_r($data);
// ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une information — Ayo Daloa</title>
    <link rel="icon" href="../image/logoicon.png">
    <link rel="stylesheet" href="ajout.css">

<!---------------------------- mes icône -------------------------------->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" /></head>
<style>
    #logo {
      font-family: var(--font-heading);
      font-weight: 700;
      font-size: 24px;
      line-height: 32px;
      color: var(--color-primary);
      letter-spacing: -0.01em;
      width: 200px;
    }
        .logo{
      width: 100px;
    }
</style>
<body>

    <!-- ================= HEADER ================= -->
    <header class="app-header">
        <div class="app-header__inner">
            <nav class="app-header__nav">
                <a href="actualite.php" class="app-header__link">
                    <span class="material-symbols-outlined">home</span>
                </a>
                <a href="#" class="app-header__link app-header__link--active">Ajouter</a>
                <a href="#" class="app-header__link">Liste</a>
            </nav>
            <a href="#" class="app-header__logo">
                <div id="logo"><img src="../image/logo.png"class="logo"></div>
            </a>
        </div>
    </header>

    <!-- ================= CONTENU PRINCIPAL ================= -->
    <main class="app-main">

        <!-- En-tête de page -->
        <div class="page-head">
            <div>
                <h1 class="page-head__title">Ajouter une information</h1>
                <p class="page-head__subtitle">
                    Remplissez le formulaire ci-dessous pour enregistrer proposé vos services ou votre business dans la base de données.
                </p>
            </div>
            <span class="badge badge--info">Champs marqués <strong>*</strong> obligatoires</span>
        </div>

        <!-- Formulaire -->
        <form class="form-card" action="#" method="POST" enctype="multipart/form-data" novalidate>

                <!-- ===== Section : Informations principales ===== -->
                <fieldset class="form-section">
                    <legend class="form-section__legend">
                        Informations principales
                    </legend>

                    <div class="form-grid">

                        <!-- Date -->
                        <div class="field">
                            <label for="date" class="field__label">
                                Où vous trouvez <span class="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="date" 
                                name="addresse" 
                                class="field__input" 
                                placeholder="Quartier lago BP 220"
                                required
                            >
                            <small class="field__hint">Votre Adresse.</small>
                        </div>

                        <!-- Secteur -->
                        <div class="field">
                            <label for="secteur" class="field__label">
                                Secteur <span class="required">*</span>
                            </label>
                            <select id="secteur" name="secteur" class="field__input" required>
                                <option value="" disabled selected>— Choisir un secteur —</option>
                                <option value="Gastronomie">Gastronomie</option>
                                <option value="Divertissement">Divertissement</option>
                                <option value="Informatique">Informatique</option>
                                <option value="Education">Education</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>

                        <!-- longitude et latitude -->

                        <div class="field">
                            <label for="longitude" class="field__label">
                                Longitude<span class="required">*</span>
                            </label>
                            <input 
                                type="number" 
                                id="date" 
                                name="longitude" 
                                class="field__input" 
                                placeholder="7,234455"
                                required
                            >
                            <!-- <small class="field__hint">Votre Adresse.</small> -->
                        </div>


                        <div class="field">
                            <label for="latitude" class="field__label">
                                Latitude<span class="required">*</span>
                            </label>
                            <input 
                                type="number" 
                                id="date" 
                                name="latitude" 
                                class="field__input" 
                                placeholder="-5,234455"
                                required
                            >
                            <!-- <small class="field__hint">Votre Adresse.</small> -->
                        </div>

                        <!-- telephone -->
                        <div class="field">
                            <label for="telephone" class="field__label">
                                Numéro de téléphone<span class="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="date" 
                                name="telephone" 
                                class="field__input" 
                                placeholder="0700000000"
                                required
                            >
                            <!-- <small class="field__hint">Votre Adresse.</small> -->
                        </div>

                        <!-- Localité -->
                        <div class="field field--full">
                            <label for="localite" class="field__label">
                                Localité <span class="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="localite" 
                                name="localite" 
                                class="field__input" 
                                placeholder="Ex : Daloa, Haut-Sassandra" 
                                required>
                        </div>

                    </div>
                </fieldset>

                <!-- ===== Section : Titres ===== -->
                <fieldset class="form-section">
                    <legend class="form-section__legend">
                        <span class="material-symbols-outlined">titlecase</span>
                        Intitulé d'activité
                    </legend>

                    <div class="form-grid">

                        <!-- Titre complet -->
                        <div class="field field--full">
                            <label for="titreActu" class="field__label">
                                Titre complet <span class="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="titreActu" 
                                name="titreActu" 
                                class="field__input" 
                                placeholder="Ex : Côte d'Ivoire – AIP/ Daloa : Le conseil régional offre 500 tables-bancs..."
                                maxlength="200"
                                required>
                            <small class="field__hint">
                                <span id="count-titreActu">0</span>/200 caractères.
                            </small>
                        </div>

                        <!-- Titre court -->
                        <div class="field field--full">
                            <label for="titreActu1" class="field__label">
                                Titre court <span class="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="titreActu1" 
                                name="titreActu1" 
                                class="field__input" 
                                placeholder="Ex : Le conseil régional offre 500 tables-bancs à Daloa"
                                maxlength="255"
                                required>
                            <small class="field__hint">
                                Version raccourcie utilisée dans les listes et cartes.
                            </small>
                        </div>

                    </div>
                </fieldset>

                <!-- ===== Section : Description ===== -->
                <fieldset class="form-section">
                    <legend class="form-section__legend">
                        <span class="material-symbols-outlined">description</span>                    
                        Description
                    </legend>

                    <div class="form-grid">
                        <div class="field field--full">
                            <label for="descripActu" class="field__label">
                                Description de l'actualité <span class="required">*</span>
                            </label>
                            <textarea 
                                id="descripActu" 
                                name="descripActu" 
                                class="field__input field__input--textarea" 
                                rows="10"
                                placeholder="Rédigez ici le contenu complet de l'actualité..."
                                required></textarea>
                            <small class="field__hint">
                                <span id="count-descripActu">0</span> caractères.
                                Les retours à la ligne seront conservés.
                            </small>
                        </div>
                    </div>
                </fieldset>

                <!-- ===== Section : Image ===== -->
                <fieldset class="form-section">
                    <legend class="form-section__legend">
                    <span class="material-symbols-outlined">image</span> 
                        Image d'illustration
                    </legend>

                    <div class="form-grid">
                        <div class="field field--full">
                            <label for="image" class="field__label">Image</label>

                            <div class="upload" id="upload-zone">
                                <input 
                                    type="file" 
                                    id="image" 
                                    name="image" 
                                    class="upload__input" 
                                    accept="image/png, image/jpeg, image/webp,image/jpg">
                                <label for="image" class="upload__label">
                                    <span class="material-symbols-outlined" id="arrow_upward">image_arrow_up </span>
                                    <span class="upload__title">Glissez une image ici ou cliquez pour parcourir</span>
                                    <span class="upload__hint">PNG, JPG, WEBP, JPEG — 5 Mo max</span>
                                </label>
                            </div>

                            <!-- Aperçu -->
                            <div class="preview" id="preview" hidden>
                                <img id="preview-img" src="#" alt="Aperçu de l'image">
                                <div class="preview__info">
                                    <p class="preview__name" id="preview-name"></p>
                                    <button type="button" class="btn btn--ghost btn--sm" id="preview-remove">
                                        Retirer
                                    </button>
                                </div>
                            </div>

                            <!-- Alternative : URL -->
                            <div class="field field--inline-alt">
                                <label for="image_url" class="field__label field__label--sm">
                                    …ou collez une URL d'image existante
                                </label>
                                <input 
                                    type="url" 
                                    id="image_url" 
                                    name="image_url" 
                                    class="field__input" 
                                    placeholder="https://exemple.com/image.jpg">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <!-- ===== Actions ===== -->
                <div class="form-actions">
                        <button type="reset" name="reset" class="btn btn--ghost">
                            Réinitialiser
                        </button>
                        <button type="submit"  name="soumettre" class="btn btn--primary">
                            <span class="material-symbols-outlined">save</span>
                            Enregistrer
                        </button>
                </div>

        </form>
    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="app-footer">
        <p>© <span id="year"></span> Ayo Daloa — Tous droits réservés.</p>
    </footer>

    <!-- ================= SCRIPT (aperçu image + compteurs) ================= -->
    <script>
        // Année dynamique
        document.getElementById('year').textContent = new Date().getFullYear();

        // Aperçu de l'image
        const input   = document.getElementById('image');
        const preview = document.getElementById('preview');
        const img     = document.getElementById('preview-img');
        const nameEl  = document.getElementById('preview-name');
        const remove  = document.getElementById('preview-remove');

        input.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = (ev) => {
                img.src = ev.target.result;
                nameEl.textContent = file.name + ' — ' + (file.size / 1024).toFixed(0) + ' Ko';
                preview.hidden = false;
            };
            reader.readAsDataURL(file);
        });

        remove.addEventListener('click', () => {
            input.value = '';
            img.src = '';
            preview.hidden = true;
        });

        // Compteurs de caractères
        const bindCounter = (inputId, counterId) => {
            const el = document.getElementById(inputId);
            const counter = document.getElementById(counterId);
            if (!el || !counter) return;
            const update = () => counter.textContent = el.value.length;
            el.addEventListener('input', update);
            update();
        };
        bindCounter('titreActu', 'count-titreActu');
        bindCounter('descripActu', 'count-descripActu');
    </script>
</body>
</html>