<?php


$argoName= $_POST["name"];

$bdd = new PDO('mysql:host=localhost;dbname=argo', "root", "root");
$req = "INSERT INTO users (name) VALUES (:name)";
            
$stmt = $bdd->prepare($req);
$stmt->bindValue(":name",$argoName, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

if($result) {
    header("Location: ../index.php"); 
}