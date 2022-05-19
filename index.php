<?php ob_start() ?>

<div class="container">
    <h5 class="my-2card shadow text-center bg-light opacity-50 text-dark p-2">Ajouter un Argonaute</h5>
    <div class="row justify-content-center">
        <div class="card shadow col-4 p-2">
            <form action="partials/cible.car.php" method="POST" enctype="multipart/form-data" class="my-1 text-center">
            <div class="form-group ">
                <label for="nomvehicule">Nom du futur Argonaute</label>
                <input type="text" name="nom" class="form-control" id="nomvehicule"  required>            
            </div>
            <div class="form-group mt-2">
                <label for="paysorigine">Spécialité</label>
                <input type="text" name="pays" class="form-control" id="paysorigine" required>            
            </div>
            <button type="submit" class="btn btn-primary my-3 text-center"><i class="fas fa-plus-circle"></i> Ajouter</button>
            </form>
        </div>
    </div>

</div>



<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "view/base.html.php";

?>