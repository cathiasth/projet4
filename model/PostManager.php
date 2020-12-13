<?php

namespace App\model;

class PostManager
{
    // Renvoie la liste des chapitre
    public function getPosts()
    {
        $db = $this->dbConnect();
        $request = $db->query('SELECT id, title, content, creation_date FROM posts ORDER BY id DESC');
        return $request;
    }
    
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host='.HOST.';dbname='.DB_NAME.';charset='.CHARSET.';', DB_USER, DB_PASS);
        return $db;
    }
