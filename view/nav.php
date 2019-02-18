<div class="container">
    <div id="nav" class="flex">

        <ul class="d-flex p-2">

            <li> <a href="index.php?action=retourChapitre">ACCUEIL</a></li>

            <?php if(empty($_SESSION['pseudo'])) { ?>

            <!-- si pseudo est vide , affiche "connexion" -->

            <li class="pull-right"> <a href="index.php?action=formLogin">CONNEXION</a></li>

            <?php } ?>

            <!-- si pseudo est renseigné , affiche "deconnexion" -->


            <?php if(isset($_SESSION['pseudo'])) { ?>


            <p id="hnav">Bienvenue <em> <span id="user"><?= $_SESSION['pseudo']?></span> </em></p>

            <li class="p-0">

                <a href="index.php?action=deco">DECONNEXION</a></li>


            <?php } ?>




            <!-- affiche seulement si pseudo = admin  -->

            <?php if(isset($_SESSION['rang']) && $_SESSION['rang'] ==  '1') { ?>

            <ul id="p-0">
                <li id="admin">MENU ADMIN
                    <ul id="menu">
                        <li><a href="index.php?action=formChapter">CHAPITRES</a></li>
                        <li><a href="index.php?action=adminview">COMMENTAIRES</a></li>
                        <li><a href="index.php?action=userview">MEMBRES</a></li>
                        

                        <?php } ?>
                    </ul>
                </li>

            </ul>

           

        </ul>

    </div>
</div>