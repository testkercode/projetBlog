<?php
session_start();
setcookie( 'id','pseudo', time() + 365*24*3600, null, null, false, true); 

require('controller/controller.php');


try{  
    if (isset($_GET['action'])) {

        // ///////////////////////  GESTION DES UTILISATEURS  /////////////////////////////////////

        //enregistrement user
        if ($_GET['action'] == 'register'){

            if (isset($_POST['reg_user'])) {
                // receive all input values from the form
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $password = htmlspecialchars($_POST['password_1']);
                $password_2 = htmlspecialchars($_POST['password_2']);

                if($password == $password_2) {
                    $password_1 = $password_2;
                }           
                        else {
                            throw new Exception('les mots de passe ne correspondent pas');
                        }                         
                registerMember($pseudo, $password_1);
            }

        }
        // affiche le formulaire enregistrement
        elseif ($_GET['action'] == 'formRegister'){
            require('view/registerView.php');

        }
        // affiche le formulaire de login
        elseif ($_GET['action'] == 'formLogin'){
            require('view/loginView.php');

        }
        // login
        if ($_GET['action'] == 'login'){

            if (isset($_POST['login_user'])) {
                // receive all input values from the form
                $pseudo = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                loginMember($pseudo, $password);
            }

        }
        // deconnection user
        elseif ($_GET['action'] == 'deco'){

            session_unset();
            // destroy the session
            session_destroy();

            listChapters();

        }

        // ///////////////////////////////   GESTION DES CHAPITRES   //////////////////////////////////////

        // AJOUT D UN CHAPITRE 


        // AJout d un chapitre ( formulaire )
        elseif  ($_GET['action'] == 'formChapter'){
            require('view/postChapterView.php');
        }
        
        // Ajout du chapitre

        elseif ($_GET['action'] == 'addChapter') {
            if (!empty($_POST['title']) && !empty($_POST['content'])){

                      
                $title = htmlspecialchars($_POST['title']);
                $content = htmlspecialchars($_POST['content']);         
                addChapter($title,$content);
                
            }
            else {
                throw new Exception('Aucun texte de saisi');
            } 
       
        }
        // Bouton retour au chapitre (index)

        elseif ($_GET['action'] == 'retourChapitre'){

            listChapters();
        }

        // Suppression d un chapitre
        
        elseif ($_GET['action'] == 'supp'){  

            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {  
                $deleteid = $_GET['id'];

                require('view/confirmSupView.php');
        
            }
            
        }

        elseif ($_GET['action'] == 'delete') 
            { 
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {  
                $deleteid = $_GET['id'];
                
                delChapter($deleteid);

            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
    
        }
        
        // Ajout d un commentaire


        // ouverture de la page du chapitre concerné
        elseif ($_GET['action'] == 'comment') 
            { 
                if (isset($_GET['id']) && $_GET['id'] > 0) 
                {  
                    $id = $_GET['id'];
                    
                    chapter($id);

                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
        
        }

        // action ajout d un commentaire

        elseif ($_GET['action'] == 'addComment') {

            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                    $id_chapter = $_GET['id'];

                // if ((isset($_POST['author'])) && (isset($_POST['comment']))){
                if (isset($_POST['comment'])){
            
            // $author = htmlspecialchars($_POST['author']);
            $id_member= $_SESSION['id'];
            $comment = htmlspecialchars($_POST['comment']);

            addComment($comment,$id_chapter,$id_member);
                }
            }
        }


        // edit commentaire - ouvre le formulaire

        elseif ($_GET['action'] == 'editForm'){

            if (isset($_GET['id']) && $_GET['id'] > 0) {

                
                $commentID = $_GET['id'];
                editForm();

            } else {

                throw new Exception('Erreur aucun id envoyer !');
            }

        }
        //  edition du commentaire

        elseif ($_GET['action'] == 'editComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['comment'])) {
                    editComment($_GET['id'], $_POST['comment'], $_GET['id_chapter']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
        }

        elseif ($_GET['action'] == 'deleteC') 
            { 
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {  
                $deleteid = $_GET['id'];
                
                delComment($deleteid,$_GET['id_chapter']);

            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
    
        }
        
        
    
    }
    else{
        listChapters();
    }    
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}


 