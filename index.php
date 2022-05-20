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
<div class="card text-center shadow my-5 col-3">
<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Modifier</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>blavla</td>
            <td><a href=""><i class="fas fa-edit"></i></a></td>
        </tr>
    </tbody> 
    </table>
    <form action="" method="post" onSubmit=" return confirm('Êtes-vous certain de vouloir supprimer ce jeu ?')">
        <button class="btn btn-danger mb-2" type="submit">supprimer</button>
    </form>
</div>


<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "view/base.html.php";
    // $card = require "partials/argo.card.php";
?>