<?php
require_once("model/Manager.php"); 


class MemberManager extends Manager{


    public function registerMember($pseudo, $passHash){

        $db = $this->dbConnect();
        $addmember = $db->prepare('INSERT INTO member ( pseudo, password, rang) VALUES( ?, ?, 0)');
        $addNewMember = $addmember->execute(array( $pseudo, $passHash));
       
        return $addNewMember;

    }

    public function loginMember($pseudo) {
        $db = $this->dbConnect();
        $loginMember = $db->prepare('SELECT * FROM member WHERE pseudo= ?');
        $loginMember-> execute(array($pseudo));
        $member= $loginMember->fetch();
        $loginMember-> closeCursor();
        return  $member;


    }

    public function CountMembers() {
        $db = $this->dbConnect();
        $member= $db->query(' SELECT COUNT(*) AS total FROM member');
        $mb = $member ->fetch();
        $member->closeCursor();

        return $mb;

    }

    public function getMembers()
    {
        $db = $this->dbConnect();
        $members = $db->query('SELECT * FROM member');

        return $members;

    }





}