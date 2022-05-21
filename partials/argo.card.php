

    <div class="card text-center shadow my-2 col-3 mx-3 ">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>Nom de l'Argonaute</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="h5"><?= ucwords($argo["name"])?></td>
                <td>
                    <form action="partials/delete.argo.php" method="post" onSubmit=" return confirm('Êtes-vous certain de vouloir supprimer cet Argonaute ??')">
                    <input hidden type="text" name="id" value="<?=$argo['id']?> " >
                    <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        </tbody> 
        </table>
    </div>
