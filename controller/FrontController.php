<?php

namespace App\controller;

use App\model\PostManager;
use App\model\CommentManager;
use App\model\AdminManager;

class FrontController 
{
    function __construct()
    {
          $this->postManager = new PostManager();
          $this->commentManager = new CommentManager();
          $this->adminManager = new AdminManager();
    }
    // Page accueil
    public function getPosts()
    {
          $posts = $this->postManager->getPosts();
          require '../view/indexView.php';
    }
    
    public function newPost()
    {
      require '../view/new_post.php';
    }
    
    //Affiche le contenu d'un article sélectionné
    public function showPost($postId)
    {
          $post = $this->postManager->getPost($postId);
          $comments =$this->commentManager->getComments($postId);
          require '../view/postView.php';
    }
    
    public function addComment($author, $commentAuthor, $postId)
    {
          $this->commentManager->addComment($author, $commentAuthor, $postId);
          header('Location: /post/'.$postId.'/');
    }
    
    public function flagComment($id, $postId)
    {
          $this->commentManager->flagComment($id);
          header('Location: /post/'.$postId.'/');
    }
}
