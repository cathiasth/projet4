<?php

namespace App\controller;

class BackController extends Controller
{
  
  public function addPost($title, $content)
    {
        $post = $this->postManager->addPost($title, $content);
        
        header('Location: /home/');
    }
  
  public function editPost($postId)
  {
        $post = $this->postManager->editPost($postId);
        require '../view/edit_post.php';
  }
  
  public function deletePost($postId)
  {
        $this->postManager->deletePost($postId);
        $this->commentManager->deleteComments($postId);
        header('Location: /home/');
  }
  
  public function deleteComment($id, $postId)
  {
        $this->commentManager->deleteComment($id);
        header('Location: /post/'.$postId.'/');
  }
  
  
  public function flagOffComment($id)
  {
        $this->commentManager->flagOffComment($id);
        header('Location: /profil/');
  }
    
  public function logout()
  {
        $this->adminManager->logout();
        header('Location: /home/');
  }
  
}
