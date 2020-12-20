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
    // Renvoie les informations d'un chapitre
    public function getPost($postId)
    {   
        $db = $this->dbConnect();
        $request = $db->prepare('SELECT id, title, content, creation_date FROM posts WHERE id = ?');
        $request->execute(array($postId));
        $post = $request->fetch();
        return $post;
    }
  
    public function addPost($title, $content)
    {   
        $db = $this->dbConnect();
        $request = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES (? , ? , NOW())');
        $request->execute(array($title,$content));
        $post = $request->fetch();
        return $post;
    }
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host='.HOST.';dbname='.DB_NAME.';charset='.CHARSET.';', DB_USER, DB_PASS);
        return $db;
    }
