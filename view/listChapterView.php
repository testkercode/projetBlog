<?php $title = 'Mon blog'; ?>

<?php ob_start(); 
include('nav.php')
?>


<div class="news container">
    <h1>Derniers chapitres du blog : </h1>






    <a class=" down scroll" href="#"> <img src="assets\images\bas.png" alt="bas" width="30px"> Bas de page </a>
    <?php
    while ($data = $chapters->fetch())
    {
    ?>




    <h3>
        <?= htmlspecialchars($data['title']) ?>
        <em>le <?= $data['creation_date'] ?></em>
    </h3>

    <p>
        <?= nl2br(htmlspecialchars($data['content'])) ?>
    </p>

    <div class="row">

        <div class="col-md-6">
            <?php if(isset($_SESSION['pseudo'])) { ?>

            <form class="form-control p-1" role="form" id="commBtn" method="POST"
                action="index.php?action=comment&id=<?= $data['id'] ?>">
                <button id="comBtn" name="comm">Commentaire</button>

            </form>
            <?php } ?>


        </div>



        <div class="col-md-6">
                <!-- masque le bouton suppr si pas admin connecté -->

                
            <?php if(isset($_SESSION['rang']) && $_SESSION['rang'] ==  '1') { ?>

            <form class="form-control p-1" role="form" id="suppButon" method="POST"
                action="index.php?action=supp&id=<?= $data['id']?>">
                <!-- masque bouton supprimer si non admin -->



                <button id="myBtn" name="supp">supprimer</button>
                <?php } ?>
            </form>


        </div>
    </div>


    <?php

    }
    // $chapters->closeCursor();    

    ?>

    <a class=" up scroll" href="#"> <img src="assets\images\haut.png" alt="haut" width="30px"> Haut de page </a>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>