<?php require_once "partials/data.repo.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Argonautes</title>
</head>
<body>
<header class="shadow m-3 p-3">
    <h1 class= "text-center text-light mb-5">Bienvenue a bord !!</h1>
    <p class= "text-center text-light  h5 my-5">Veuillez inscrire vos Argonautes sur la liste de l'équipage !!!</p>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow col-4 p-2 mb-5">
            <form action="partials/new.argo.php" method="POST" class="my-1 text-center">
            <div class="form-group ">
                <label for="name">Ajouter un(e) Argonaute</label>
                <input type="text" name="name" class="form-control" id="name"  required>            
            </div>
            <button type="submit" class="btn btn-primary my-3 text-center"><i class="fas fa-plus-circle"></i> Ajouter</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
            <?php foreach ($argos as $argo ):?>
                <?php require "partials/argo.card.php" ?>
            <?php endforeach;?>
    </div>
</div>

</body>
</html>