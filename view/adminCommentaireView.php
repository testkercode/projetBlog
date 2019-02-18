<?php 
$title = 'MODERATION'; 
ob_start();
include('nav.php'); 
?>


<div class="container news">

    <h2>Commentaires signalés</h2>

<?php 

    foreach ($reports as $rep) {
      
?>
    <p>

    id du commentaire : <?php echo $rep['id']?>  <br> 
    Auteur  : <?php echo $rep['pseudo']?> <br> 
    Commentaire : <?php echo $rep['content']?> <br> 
    signalé :  <?= $rep['report']?> fois  
    <br> <br>

    </p>
<?php

}

?>

</div> <!-- ./container -->



<?php $content = ob_get_clean(); ?>


<?php require('view/template.php'); ?>