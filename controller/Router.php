<?php

namespace App\controller;
use App\controller\FrontController;
use App\controller\BackController;
use App\controller\ErrorController;
use Exception;

class Router
{
    public function __construct()
    {
      $this->frontController = new FrontController();
      $this->backController = new BackController();
      $this->errorController = new ErrorController();
      
    }
    public function run()
    {
      try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'post'){
                    $this->frontController->showPost($_GET['postId']);
                }
            }
            else{
                $this->frontController->getPosts();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}
