<?php

namespace App\controller;

class BackController extends Controller
{
  
  public function addPost($title, $content)
    {
        $post = $this->postManager->addPost($title, $content);
        
        header('Location: /home/');
    }
  
}
