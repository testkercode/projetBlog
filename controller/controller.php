<?php



use \Nico\model\ChapterManager;
use \Nico\model\CommentManager;
use \Nico\model\EditCommentManager;
use \Nico\model\MemberManager;



/////////////////////////////////////  CHAPTERS            /////////////////////////////////////////


function addChapter($title,$content)
{
    $chapterManager = new ChapterManager();
    $chapterManager->addNewChapter($title,$content);

    header('Location: index.php');

}


function listChapters()
{
    $chapterManager = new ChapterManager();
    $chapters = $chapterManager->getChapters();

    require('view\listChapterView.php');
}

function chapter($id) 
{
    $chapterManager = new ChapterManager();
    $commentManager = new CommentManager();  
    $chapter = $chapterManager->getChapter($id);
    // $comments recupere le contenu du tableau $comments de commentmanager appel du parametre getcomment
    $allComments = $commentManager->getComments($id);

    require('view\ChapterView.php');

}


function delChapter($deleteid){

    // d abord supprimer les commentaires attachés au chapitre

    $chapterManager = new ChapterManager();
    $commentManager = new CommentManager();
    $delComment = $commentManager->deleteComment($id);

    $delChapter = $chapterManager->deleteChapter($deleteid);

    header('Location: index.php');
}

///////////////////////   COMMENTS            ///////////////////////////////////////////////////////////////////////


function addComment($comment,$id_chapter, $id_member )
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($comment,$id_chapter, $id_member);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=comment&id=' . $id_chapter);
    }
}

/// ************************            signale un commentaire           ******************************************

function addReport($id,$id_chapter)
{
    $reportManager = new CommentManager();

    $reportManager->report($id);

    
    header('Location: index.php?action=comment&id='. $id_chapter);
    
}

function countReports()
{
    $reportmanager = new CommentManager();
    $reports =  $reportmanager->getReport();

    require('view/adminCommentaireView.php');
}




function editForm(){
    $editCommentManager = new EditCommentManager();
    $editComment = $editCommentManager->getComment($_GET['id']);

    require('view/editCommentView.php');
}


function editComment($id,$editComment,$id_chapter){
    $editCommentManager = new EditCommentManager();

    $affectedLines = $editCommentManager->editComment($id, $editComment);


        header('Location: index.php?action=comment&id='. $id_chapter);
    // }
}


function delComment($id,$id_chapter){

    $commentManager = new CommentManager();
    $delComment = $commentManager->deleteComment($id);

    header('Location: index.php?action=comment&id=' . $id_chapter);
}

////// ***************************          MEMBERS                      **************************************************


function registerMember($pseudo, $password_1){

    $registerMember = new MemberManager();
    $passHash= password_hash($password_1, PASSWORD_DEFAULT );
    $addNewMember = $registerMember->registerMember($pseudo, $passHash);
    

    header('Location: index.php');

}
function loginMember($pseudo, $password_1){
    $loginMember =new MemberManager();
    $member = $loginMember->loginMember($pseudo);
    if (password_verify($password_1,$member['password'])) {

        // stocke dans $_SESSION les données de l utilisateur

        $_SESSION['id']=$member['id'];
        $_SESSION['pseudo']=$member['pseudo'];
        $_SESSION['rang']= $member['rang'];
        header('Location: index.php');
       
    } else {
        throw new Exception('Mauvaise combinaison login/password');
    }

}

function countMembers() {

    // count member + list member 

    $countMember =new MemberManager();
    $mb = $countMember->CountMembers();
    $memberManager = new MemberManager();
    $members = $memberManager->getMembers();
    

    require('view/adminMemberView.php');
}



//  fin de controller