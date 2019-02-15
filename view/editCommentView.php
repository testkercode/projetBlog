<?php $title = 'Editer un commentaire'; ?>

<?php ob_start(); ?>
    <h1>Edition du commentaire de <?= $editComment['pseudo'] ?></h1>

    <div class="news" >
        <form action="index.php?action=editComment&id=<?= $_GET['id'] ?>&id_chapter=<?= $_GET['id_chapter']?>" method="post">
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment" rows="5" cols="50"><?= $editComment['content'] ?></textarea>
            </div>
            <!-- <input type="hidden" name="chapterID" value="<?= $editComment['id_chapter'] ?>" /> -->
            <div>
                <input type="submit" />
            </div>
        </form>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>