<?php

require_once "bdd.php";

$idArgo = $_POST['id'];


$req  = $bdd->prepare("SELECT * FROM users WHERE id = :id ");
$req->bindValue("id", $idArgo, PDO::PARAM_INT);  
$req->execute(); 
$argo= $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Argonautes</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card shadow col-4 p-2">
            <form action="edit.valid.php" method="POST" class="my-1 text-center">
            <div class="form-group ">
                <label for="name">Modifier un(e) Argonaute</label>
                <input type="text" name="name" class="form-control" id="name" value="<?= $argo[0]["name"]?>" >            
            </div>
            <input hidden type="text" name="id" value="<?= $argo[0]["id"] ?>">
            <button type="submit" class="btn btn-primary my-3 text-center"><i class="fas fa-plus-circle"></i> Modifier</button>
            </form>
        </div>
    </div>
</div>
    

</body>
</html>