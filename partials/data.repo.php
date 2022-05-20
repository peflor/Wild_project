<?php


// connexion à la BDD et récupération des données pour le READ
$bdd = new PDO('mysql:host=localhost;dbname=argo', "root", "");
$req  = $bdd->prepare("SELECT * FROM users ");  
$req->execute(); 
$argos= $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor(); 