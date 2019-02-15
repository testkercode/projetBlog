<?php


require_once("model/Manager.php");

class EditCommentManager extends Manager {

    public function getComment($commentID)
    {
        
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT content FROM comment WHERE id = ?');
        $req->execute(array($commentID));
        $editComment = $req->fetch();

        return $editComment;
    }


    public function editComment($id, $editComment){
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comment SET content=(:content) WHERE comment.id= (:id)');
        $affectedLines = $comments->execute(array(
            "content" => $editComment,
            "id" => $id
        ));

        return $affectedLines;
    }
}