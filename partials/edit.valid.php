<?php

require_once "bdd.php";


$idArgo = $_POST["id"]; 
$argoName= $_POST["name"];

$stmt = $bdd->prepare("UPDATE users SET name = :name WHERE id = :id");
$stmt->bindValue(":id",$idArgo, PDO::PARAM_INT);
$stmt->bindValue(":name",$argoName, PDO::PARAM_STR);
$result = $stmt->execute();
$stmt->closeCursor();

if($result) {
    header("Location: ../index.php"); 
}