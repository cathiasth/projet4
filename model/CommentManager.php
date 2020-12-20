<?php

namespace App\model;

class CommentManager
{
    public function getComments($postId)
    { 
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment_author, comment_date, flag FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));
        return $comments;
    }
  
    public function addComment($author, $commentAuthor, $postId)
    {
        $db = $this->dbConnect();
        $request = $db->prepare('INSERT INTO comments (author, comment_author, comment_date, post_id) VALUES (:author, :comment_author, NOW(), :post_id)');
        $request->execute(array(':author' => $author, ':comment_author' => $commentAuthor,':post_id' => $postId));
    }
  
    public function flagComment($id)
    {
        $db = $this->dbConnect();
        $request = $db->prepare('UPDATE comments SET flag = ? WHERE id = ?');
        $request->execute(array(1, $id));
    }
    
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host='.HOST.';dbname='.DB_NAME.';charset='.CHARSET.';', DB_USER, DB_PASS);
        return $db;
    }
}
