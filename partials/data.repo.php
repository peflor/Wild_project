<?php

require_once "bdd.php";

$req  = $bdd->prepare("SELECT * FROM users ");  
$req->execute(); 
$argos= $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor(); 