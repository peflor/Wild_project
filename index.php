<?php ob_start() ?>



<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "view/base.html.php";

?>