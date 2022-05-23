

<div class=" card flex-row justify-content-center text-center shadow my-3 col-3 mx-5">

    <div class="h4 mt-2 col-8"><?= ucwords($argo["name"])?></div>
    <div class="col-2">
        <form action="partials/edit.argo.php" method="POST">
            <input hidden type="text" name="id" value="<?= $argo["id"]?>">
            <button class="btn mt-1 text-primary" type="submit" title="Modifier"><i class="fas fa-edit"></i></button>
        </form>
    </div>
    <div class="col-2">    
        <form action="partials/delete.argo.php" method="post" onSubmit=" return confirm('Êtes-vous certain de vouloir supprimer cet Argonaute ??')">
        <input hidden type="text" name="id" value="<?= $argo["id"]?>" >
        <button class="btn mt-1 text-danger" type="submit" title="Supprimer"><i class="fas fa-trash"></i></button>
        </form>
    </div>    
</div>
