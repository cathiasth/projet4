<?php

namespace App\controller;
use App\model\PostManager;
use App\model\CommentManager;
use App\model\AdminManager;
use App\controller\FrontController;

class Controller
{
  public function __construct()
  {
    $this->postManager = new PostManager();
    $this->commentManager = new CommentManager();
    $this->adminManager = new AdminManager();
    $this->frontController = new frontController();
  }
  
}
