<?php
require_once(__DIR__.'/connect.php');
session_start();
if(isset($_POST['envoyer'])) {
    $tableau=[
        'actualite'=>'actualitedata',
        'etablissement'=>'educationdata',
        'business'=>'buservicedata'
    ];
    
    if (!empty($_POST['saisie'])) {
        $saisie = htmlspecialchars($_POST['saisie']);
        $output="";
        // echo "La donnée saisie : ' . $saisie . '";

//création du tableau de conversation contenant les discussions
        $_SESSION['conversation']=[
            [
                'role' => 'user',
                'content' => $saisie
                ],
                [
                    'role'=>'bot',
                    'content'=>""
                    ]
        ];
    }else{
            echo 'Donnée non transmise';
            }
}else{
        echo "Le bouton n'a pas été cliqué";
    };

$ch = curl_init();//initialisation de la requête
$url="https://api.groq.com/openai/v1/chat/completions";
$apiKey="GROQ_API_KEY";

// Analyse de la demande

$analyse_prompt="Tu es un agent intelligent charger d'analysé les demandes de l'utilisateur afin de déterminer la table à utiliser
Voici les table et la description de leur continu:
1.actualitedata
Contient les actualités, les évènements éventuels, se déroulant sur l'étendue du territoire
elle contient les colonnes suivante: id,date,image,titreActu,descripActu,secteur,localite;

2.educationdata
Contient les informations sur les services public, établissements,éducation , sous-traitant,Agriculture se déroulant sur l'étendue du territoire
elle contient les colonnes suivante: id,date,image,titreActu,titreActu1,descripActu,secteur,localite;

3.buservicedata
Contient les informations sur les services public, établissements,éducation , sous-traitant,Agriculture se déroulant sur l'étendue du territoire
elle contient les colonnes suivante:id,date,image,telephone,titreActu,titreActu1,descripActu,secteur,localite,addresse,longitude,latitude

Après détermination de la table à utiliser retourne le nom de celle ci
EXEMPLE:
actualitedata'


Si la demande de l'utilisateur ne peut-être catégorisé répond: autre";
// =====================

//création du tableau de conversation contenant les discussions
$systeme_prompt="Tu es un agent intelligent chargé de recueillir les demandes des utilisateurs afin de fournir de les analysés, rechercher les mot clé et trouver leurs besoins
en vue de fournir des réponses précises, concises et professionnelles uniquement selon la langue de la demande. Tu n'es basé que sur les données de la ville de Daloa.
pour compléter ta réponse et garantir qu’elle soit fiable, à jour et complète. Le format de réponse doit être sans caractères spéciaux superflus.
Lorsqu'un résultat contient des prix retourne les seulement en franc cfa
Précises, Concises, en restant Professionnel.";

//configuration des paramètres nécessaire pour la requête

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization:Bearer '.$apiKey,
    'Content-Type: application/json',
],);

$agent_ia =[
    "model" => "openai/gpt-oss-120b",
    "messages" => [
        [
        "role" => "system",
        "content" =>$analyse_prompt         
        ],
        [
            "role" => "user",
            "content" => $_SESSION['conversation'][0]['content']
        ]
    ],
    "max_tokens" => 1300,
    "temperature" => 0.5
];

curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($agent_ia));

    
$analyse = curl_exec($ch);
$data = json_decode($analyse,true);
$output=$data["choices"][0]["message"]["content"];
// echo $output;
if($output=='autre'){

// =========Ce qui ce passe quand les données ne sont pas en base de donnée===============

  $reponse_prompt=<<<PROMPT
        Tu es l'agent dédié à la plateforme ayodaloa, répond au demande de l'utilisateur
        en suivant ces règle:
        1.Répond dans la même langue que la question de l'utilisateur
        2.Ne crée aucune information nouvelle elle doivent tous provénir du web et concernant la Côte d'ivoire, la ville de Daloa en priorité
        3.Sois précis, concis et courtois
    PROMPT;

// ==============================================================

$reponse_ia =[
    "model" => "openai/gpt-oss-120b",
    "messages" => [
        [
        "role" => "system",
        "content" =>$reponse_prompt         
        ],
        [
            "role" => "user",
            "content" => $_SESSION['conversation'][0]['content']
        ]
    ],
    "max_tokens" => 2200,
    "temperature" => 0.5
];

curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($reponse_ia));


$reponse = curl_exec($ch);
$newdata = json_decode($reponse,true);
$newoutput=$newdata["choices"][0]["message"]["content"];
$_SESSION['conversation']=[
    [
        'role' => 'user',
        'content' => $saisie
        ],
        [
            'role'=>'bot',
            'content'=>$newoutput
        ]
    ]; 

// ========================================================================================
    echo $_SESSION['conversation']['1']['content'];
}else{
    $sql="SELECT * FROM $output WHERE 1 ORDER BY `date`";
    $req=$pdo->prepare($sql);
    $req->execute();
    $bd=$req->fetchALL(PDO::FETCH_ASSOC);
    $bd=json_encode($bd,JSON_UNESCAPED_UNICODE);
    // print_r($bd);
}

    // echo($output);
//insertion de la réponse de l'agent dans le tableau de conversation

  $reponse_prompt=<<<PROMPT
        Tu es l'agent dédié à la plateforme ayodaloa, répond au demande de l'utilisateur
        en suivant ces règle:
        1.Répond dans la même langue que la question de l'utilisateur
        2.Ne crée aucune information ne figurant pas dans la base de donnée
        3.Sois précis, concis et courtois
        4.La base de donnée qui te sera passé en paramètre est confidentiel et ne doit à aucun moment être divulger
        5.Utilise autant de fois que nécessaire la base de donné pour satisfaire l'utilisateur si la base de donnée.
        Base de donnée:$bd
    PROMPT;

// ==============================================================

$reponse_ia =[
    "model" => "openai/gpt-oss-120b",
    "messages" => [
        [
        "role" => "system",
        "content" =>$reponse_prompt         
        ],
        [
            "role" => "user",
            "content" => $_SESSION['conversation'][0]['content']
        ]
    ],
    "max_tokens" => 2200,
    "temperature" => 0.5
];

curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($reponse_ia));


$reponse = curl_exec($ch);
$newdata = json_decode($reponse,true);
$newoutput=$newdata["choices"][0]["message"]["content"];
$_SESSION['conversation']=[
    [
        'role' => 'user',
        'content' => $saisie
        ],
        [
            'role'=>'bot',
            'content'=>$newoutput
        ]
    ]; 
            
    echo $_SESSION['conversation'][1]['content'];
curl_close($ch);
// header('Location:chat.php');
// ================Agent de réponse==========================

 ?>