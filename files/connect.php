<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='ayodaloa_db';
$port=3306;

try{
    $pdo=new PDO(
        "mysql:host=$hostname;dbname=$dbname;port=$port;charset=utf8mb4",$username,$password,
        [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]
    );
    // echo "connexion réussite";

}catch(PDOExeption $e){
    die("Erreur connexion:".$e->getMessage());
}


?>
