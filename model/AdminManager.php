<?php

namespace App\model;

class AdminManager
{
      public function login($email)
      {
            $db = $this->dbConnect();
            //  Récupération de l'utilisateur et de son pass hashé
            $request = $db->prepare('SELECT * FROM users WHERE email = email AND password = password');
            $request->execute(array('email' => $email,'password' => $password));
            $check = $request->fetch();

            // Comparaison du pass envoyé via le formulaire avec la base
            $isPasswordCorrect = password_verify($_POST['password'], $check['password']);
            
                if ($check)
                {
                    if(!empty($_POST['email']) && !empty($_POST['password']))
                    {
                      if ($isPasswordCorrect)
                      {
                        session_start();
                        $_SESSION['email'] = $_POST['email'];
                        echo 'Vous êtes connecté !';
                        header('Location: ../public/index.php');
                      }
                      else 
                      {
                        echo 'Mauvais identifiant ou mot de passe !';
                      }
                      
                    }
                    else
                    {
                      echo 'Veuillez remplir le formulaire';
                    }
                }
                else
                {
                    echo 'Mauvaise connexion !';
                }
      }
  
      public function logout()
      {
        session_destroy();
        session_start();
      }
      
      protected function dbConnect()
      {
        $db = new \PDO('mysql:host='.HOST.';dbname='.DB_NAME.';charset='.CHARSET.';', DB_USER, DB_PASS);
        return $db;
      }
}
  
