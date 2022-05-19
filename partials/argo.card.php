<div class="card text-center shadow my-3">

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