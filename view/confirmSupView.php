<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>



<div class="news">

    <h3> Confirmez vous la suppression ???

        <a href="index.php?action=retourChapitre" id="back2">NON , Retour aux chapitres !!!</a>
        <a href="index.php?action=delete&id=<?= $deleteid ?>" id="delete">OUI , SUPPRIMER !!!</a> </h3>


</div>





<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>