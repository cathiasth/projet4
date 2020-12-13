<?php

namespace App\controller;

class ErrorController extends Controller
{
    public function errorNotFound()
    {
      require '../view/error_404.php';
    }

    public function errorServer()
    {
        require '../view/error_500.php';
    }
}
