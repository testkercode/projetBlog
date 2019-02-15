<?php $title = 'New Chapter'; ?>
<?php ob_start(); ?>
<?php include('nav.php')?>


<div class="container news">

    <form class="form-horizontal" role="form" id="formInscription" method="POST" action="index.php?action=addChapter">

        <h3>Nouveau Chapitre</h3>
        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Title</label>
            <div class="col-sm-9">
                <input type="text" name="title" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="chapter">Chapitre:</label>
            <textarea class="form-control" rows="5" id="content" name="content"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark" name="reg_user" id="button">Envoyer</button>
           
        </div>
    </form>
    <!-- /.form-group -->
    <a href="index.php?action=retourChapitre">Retour aux chapitres</a>
</div> <!-- ./container -->



<?php $content = ob_get_clean(); ?>


<?php require('view/template.php'); ?>