<?php


namespace Nico\model;

use \Nico\model\Manager;

// require_once("model/Manager.php");

class ChapterManager extends Manager
{
    public function getChapters()
    {
        $db = $this->dbConnect();
        $chapters = $db->query('SELECT id, title, content, creation_date FROM chapter  ORDER BY creation_date ASC');

        return $chapters;
    }

    public function getChapter($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM chapter WHERE id = ?');
        $req->execute(array($id));
        $chapter = $req->fetch();
        $req->closeCursor();
        return $chapter;
    }

    public function addNewChapter($title,$content)
    {
            $db = $this-> dbConnect();
            $addChapter=$db->prepare('INSERT INTO chapter (title, content, creation_date) VALUES(?, ?, NOW())');
            $addChapter->execute(array($title,$content));
        
            return $addChapter;
    }

    public function deleteChapter($deleteid)
    {

        $db = $this->dbConnect();
        $req = $db->query("DELETE FROM chapter WHERE id ='$deleteid'");
       

        return $req;

    }

}