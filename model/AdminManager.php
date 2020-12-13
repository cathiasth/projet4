<?php

namespace App\model;

class AdminManager
{
      protected function dbConnect()
      {
        $db = new \PDO('mysql:host='.HOST.';dbname='.DB_NAME.';charset='.CHARSET.';', DB_USER, DB_PASS);
        return $db;
      }
}
  
