<?php

require_once "bdd.php";


$argoName= $_POST["name"];



$req = "INSERT INTO users (name) VALUES (:name)";
            
$stmt = $bdd->prepare($req);
$stmt->bindValue(":name",$argoName, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

if($result) {
    header("Location: ../index.php"); 
}