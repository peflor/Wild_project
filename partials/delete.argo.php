<?php

require_once "bdd.php";


$idArgo = $_POST["id"];


    
    $req = "DELETE FROM users WHERE id = :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":id", $idArgo, PDO::PARAM_INT);
    $result = $stmt->execute();
    $stmt->closeCursor();

    if($result) {
        header("Location: ../index.php"); 
    }
