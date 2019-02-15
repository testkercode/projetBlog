<div class="container">
    <div id="nav" class="flex">

    <ul class="d-flex p-2">

       <li> <a href="index.php?action=retourChapitre">ACCUEIL</a></li>


       <!-- affiche seulement si pseudo = admin  -->

       <?php if(isset($_SESSION['rang']) && $_SESSION['rang'] ==  '1') { ?>

        <li><a href="index.php?action=formChapter">NOUVEAU CHAPITRE</a></li>

       <?php } ?>

        <!-- si pseudo est vide , affiche "connexion" --> 

        <?php if(empty($_SESSION['pseudo'])) { ?>

        <li class="ml-auto"> <a href="index.php?action=formLogin">CONNEXION</a></li>

        <?php } ?>

        <!-- si pseudo est renseigné , affiche "deconnexion" --> 

        <?php if(isset($_SESSION['pseudo'])) { ?>


        <p class="ml-auto" id="hnav">Bienvenue  <em > <span id="user"><?= $_SESSION['pseudo']?></span> </em></p>

        <li class="p-0">
        
         <a href="index.php?action=deco">DECONNEXION</a></li>
        

        <?php } ?>
       

        



    </ul>
   

    </div>
</div>
