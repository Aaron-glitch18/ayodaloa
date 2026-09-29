<?php
session_start();
if(isset($_POST['envoyer'])) {
    
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

//création du tableau de conversation contenant les discussions
$systeme_prompt="Tu es un agent intelligent chargé de recueillir les demandes des utilisateurs afin de fournir de les analysés, rechercher les mot clé et trouver leurs besoins
en vue de fournir des réponses précises, concises et professionnelles uniquement selon la langue de la demande. Tu n'es basé que sur les données de la ville de Daloa.
pour compléter ta réponse et garantir qu’elle soit fiable, à jour et complète. Le format de réponse doit être sans caractères spéciaux superflus.
Lorqu'un résultat contient des prix retourne les seulement en franc cfa
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
        "content" =>$systeme_prompt         
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

    
$reponse = curl_exec($ch);
$data = json_decode($reponse,true);
$output=htmlspecialchars($data["choices"][0]["message"]["content"]);
    // print_r($output);
//insertion de la réponse de l'agent dans le tableau de conversation
    $_SESSION['conversation']=[
            [
                'role' => 'user',
                'content' => $saisie
            ],
            [
                'role'=>'bot',
                'content'=>$output
            ]
        ];

    echo $_SESSION['conversation'][1]['content'];
    
curl_close($ch);
// header('Location:chat.php');
 ?>
 