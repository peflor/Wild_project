<?php

$idArgo = $_POST["ID"];


    $bdd = new PDO('mysql:host=localhost;dbname=argo', "root", "");
    $req = "DELETE FROM users WHERE ID= :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":id", PDO::PARAM_INT);
    $result = $stmt->execute();
    $stmt->closeCursor();

    if($result) {
        header("Location: ../cars.php"); 
    }
