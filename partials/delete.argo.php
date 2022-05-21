<?php

$idArgo = $_POST["id"];


    $bdd = new PDO('mysql:host=localhost;dbname=argo', "root", "root");
    $req = "DELETE FROM users WHERE id = :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":id", $idArgo, PDO::PARAM_INT);
    $result = $stmt->execute();
    $stmt->closeCursor();

    if($result) {
        header("Location: ../index.php"); 
    }
