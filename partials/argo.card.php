

    <div class="card text-center shadow my-5 col-3 mx-5">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>Nom de l'Argonaute</th>
                <th colspan >Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= ucwords($argo["name"])?></td>
                <td>
                    <form action="partials/delete.argo.php" method="post" onSubmit=" return confirm('Êtes-vous certain de vouloir supprimer cet Argonaute ??')">
                    <input hidden type="text" name="id" >
                    <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        </tbody> 
        </table>
        <!-- <form action="" method="post" onSubmit=" return confirm('Êtes-vous certain de vouloir supprimer ce jeu ?')">
            <button class="btn btn-danger mb-2" type="submit">supprimer</button>
        </form> -->
    </div>
