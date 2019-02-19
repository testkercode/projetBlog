<?php


namespace Nico\model;

use \PDO;




class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=projetblogv3;charset=utf8', 'root', '');
        return $db;
    }
}


