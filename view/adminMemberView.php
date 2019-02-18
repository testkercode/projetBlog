<?php 
$title = 'MODERATION'; 
ob_start();
include('nav.php'); 
?>


<div class="container news">


    <h2>Utilisateurs enregistrés :</h2>

    <p>
        Il y a <?= $mb['total'] ?> membres enregistrés à ce jour .
    </p>

    <h3>Liste des membres :</h3>
    <p>
    <?php
        foreach($members as $data){
    ?>
        - <?= ucwords(($data['pseudo'])) ?> <br>
    
    

        <?php } ?>
        </p>
</div>


</div> <!-- ./container -->



<?php $content = ob_get_clean(); ?>


<?php require('view/template.php'); ?>