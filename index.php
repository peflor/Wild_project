<?php ob_start();
require_once "partials/data.repo.php";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow col-4 p-2">
            <form action="partials/new.argo.php" method="POST" class="my-1 text-center">
            <div class="form-group ">
                <label for="name">Ajouter un(e) Argonaute</label>
                <input type="text" name="name" class="form-control" id="name"  required>            
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
<div class="container">
    <div class="row">
            <?php foreach ($argos as $argo ):?>
                <?php require "partials/argo.card.php" ?>
            <?php endforeach;?>
    </div>
</div>

<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "view/base.html.php";
    // $card = require "partials/argo.card.php";
?>