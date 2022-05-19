<?php ob_start() ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow col-4 p-2">
            <form action="partials/cible.car.php" method="POST" enctype="multipart/form-data" class="my-1 text-center">
            <div class="form-group ">
                <label for="nomvehicule">Nom du futur Argonaute</label>
                <input type="text" name="nom" class="form-control" id="nomvehicule"  required>            
            </div>
            <!-- <div class="form-group mt-2">
                <label for="paysorigine">Spécialité</label>
                <input type="text" name="pays" class="form-control" id="paysorigine" required>            
            </div> -->
            <button type="submit" class="btn btn-primary my-3 text-center"><i class="fas fa-plus-circle"></i> Ajouter</button>
            </form>
        </div>
    </div>
</div>
<div class="card text-center shadow my-1 col-4">
    <div class="card-header bg-dark text-white ">
        <h5 class="card-title">Nom</h5>
    </div>
    <div class="card-body">
        <div class="row text-center justify-items-center">
        <form class="col-4" action="partials/delete.car.php" method="POST" onSubmit="return confirm('Êtes-vous certain de vouloir supprimer ce véhicule ?')">
            <input hidden type="text" name="carID" value="">
            <button class="btn btn-danger " type="submit" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
        </form>
        <form class="col-4" action="partials/edit.car.php" method="POST">
            <input hidden type="text" name="carID" value="">
            <button class="btn btn-success" type="submit" title="Modifier"><i class="fas fa-edit"></i></button>
        </form>
        </div>
    </div>
</div>
<hr>

<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "view/base.html.php";
    // $card = require "partials/argo.card.php";
?>