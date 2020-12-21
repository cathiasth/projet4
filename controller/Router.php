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
            elseif($_GET['route'] === 'newPost'){
                    if(isset($_SESSION["email"])){
                        $this->frontController->newPost();
                    }else{
                        header('Location:/home/');
                    }
                }
            elseif($_GET['route'] === 'addPost'){
                    if(isset($_SESSION["email"])){
                        $this->backController->addPost($_POST['title'], $_POST['content'], $_POST['postId']);
                    }else{
                        header('Location:/home/');
                    }
                }
            elseif($_GET['route'] === 'editPost'){
                    if(isset($_SESSION["email"])){
                        $this->backController->editPost($_GET['postId']);
                    }else{
                        header('Location:/home/');
                    }
                }
                elseif($_GET['route'] == 'updatePost'){
                    if(isset($_SESSION["email"])){
                        $this->frontController->updatePost($_POST['title'], $_POST['content'],$_GET['postId']);
                    }else{
                        header('Location: /home/');
                    }
                }
                elseif($_GET['route'] === 'deletePost'){
                    if(isset($_SESSION["email"])){
                        $this->backController->deletePost($_GET['postId']);
                    }else{
                        header('Location: /home/');
                    }
                }
             elseif($_GET['route'] === 'addComment'){
                    $this->frontController->addComment($_POST['author'], $_POST['comment_author'], $_GET['postId']);
                }
             elseif($_GET['route'] === 'flagComment'){
                    $this->frontController->flagComment($_GET['id'], $_GET['postId']);
                }
             elseif($_GET['route'] === 'flagOffComment'){
                    if(isset($_SESSION["email"])){
                        $this->backController->flagOffComment($_GET['id']);
                    }else{
                        header('Location: /home/');
                    }
                }
                elseif($_GET['route'] === 'deleteComment'){
                    if(isset($_SESSION["email"])){
                        $this->backController->deleteComment($_GET['id'], $_GET['postId']);
                    }else{
                        header('Location: /home/');
                    }
                }
                elseif($_GET['route'] === 'register'){
                }
                elseif($_GET['route'] === 'login'){
                    $this->frontController->login($_GET['email']);
                }
                elseif($_GET['route'] === 'profil'){
                    if(isset($_SESSION["email"])){
                        $this->frontController->profil();
                    }else{
                        header('Location: /home/');
                    }
                }
                elseif($_GET['route'] === 'logout'){
                    $this->backController->logout();
                }
                elseif($_GET['route'] === 'about'){
                    require('../view/about.php');
                }
                elseif($_GET['route'] === 'contact'){
                    require('../view/contact.php');
                }
                elseif($_GET['route'] === 'mentionsPropresAuSite'){
                    require('../view/mentions_propres_au_site.php');
                }
                elseif($_GET['route'] === 'mentionsRelativesUtilisationCookies'){
                    require('../view/mentions_relatives_utilisations_cookies.php');
                }
                elseif($_GET['route'] === 'mentionsRelativesUtilisationsDonneesPersonnelles'){
                    require('../view/mentions_relatives_utilisations_donnees_personnelles.php');
                }
                else{
                    $this->errorController->errorNotFound();
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
