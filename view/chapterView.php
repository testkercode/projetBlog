<?php $title = 'Mon blog'; ?>

<?php ob_start(); 

?>
<?php include('nav.php') ?>

<div class="row">
    <div class="news container">


        <a href="index.php?action=retourChapitre" id="back">Retour aux chapitres</a>

        <div class="news">
            <h3>
                <?= htmlspecialchars($chapter['title']) ?>
                <em>le <?= $chapter['creation_date'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($chapter['content'])) ?>
                <br />
            </p>
        </div>
        <div class="news">
            <h2> <em>Utilisez le formulaire pour laisser un commentaire ! </em></h2>

            <form action="index.php?action=addComment&id=<?= $chapter['id'] ?>&id_member=<?= $_SESSION['id'] ?>"
                method="post">
                <!-- <div>
                    <label for="author">Auteur</label><br />
                    <input type="text" id="author" name="author" />
                </div> -->
                <div>
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment" rows="5" cols="50"></textarea>
                </div>
                <div>
                    <input type="submit" />
                </div>
            </form>
        </div>


        <div class="news">
            <h2> <em>Les dernieres commentaires :</em></h2>
            <?php
            // foreach va recuperer toutes le contenu du tableau $comments -> controller
foreach ($allComments as $comment)

// while ($comment = $comments->fetch())
{

    ?>
            <p id="commentaire"><strong>Commentaire de <?= htmlspecialchars($comment['pseudo']) ?></strong> le
                <?= $comment['creation_date'] ?>
                <br><br>
                <?= nl2br(htmlspecialchars($comment['content'])) ?>

            </p>
            <?php if(isset($_SESSION['rang']) && $_SESSION['rang'] ==  '1') { ?>
            <p id="edition">
                <a href="index.php?action=editForm&id=<?= $comment['id'] ?>&id_chapter=<?= $_GET['id']?>" class="btn-primary">EDITER</a>

                

                <a href="index.php?action=deleteC&id=<?= $comment['id'] ?>&id_chapter=<?= $_GET['id']?>" class="btn-danger">SUPPRIMER</a> </h3>
            </p>
            <?php
    }
}
?>
        </div>


    </div>





    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>