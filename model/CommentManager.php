<?php
require_once("model/Manager.php");


class CommentManager extends Manager
{
    public function getComments($id)
    {
        $db = $this->dbConnect();
        
        $comments = $db->prepare('SELECT  comment.id, content, creation_date, pseudo FROM comment INNER JOIN member ON id_member =member.id WHERE id_chapter = ?  ORDER BY creation_date DESC');
        //$req pointe vers le tableau de la bdd de chapitre correspondant a l id 
        $comments->execute(array($id));
        //$comments va charger en memoire le contenu total du tableau grace a fetchAll
         $allComments= $comments->fetchAll();
        // $req->closeCursor();
        return $allComments;
        // return $comments;
    }

    // public function postComment($id, $author, $comment)
    public function postComment($comment,$id_chapter, $id_member )
    {
        $db = $this->dbConnect();
        $addcomments = $db->prepare('INSERT INTO comment (content, creation_date, id_chapter, id_member) VALUES(?, NOW(), ?, ?)');
        $affectedLines = $addcomments->execute(array( $comment,$id_chapter,$id_member,));
        // $affectedLines = $addcomments->execute(array($id, $author, $comment));

        return $affectedLines;
    }

    public function deleteComment($id)
    {

        $db = $this->dbConnect();
        $req = $db->query("DELETE FROM comment WHERE id ='$id' ");
       

        return $req;

    }


    // $comments = $db->prepare('SELECT  content, creation_date, pseudo FROM comment INNER JOIN member ON id_member =member.id WHERE id_chapter = ?  ORDER BY creation_date DESC');

}