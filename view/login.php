<?php $title = "Connexion";
ob_start(); ?>
<div id="login">
    <form method="post" action="/login/" id="loginBox">
        <h3>Connexion</h3>
        <div class="userBox">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email"/>
        </div>
        <div class="userBox">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password"/>
        </div>
        <div class="buttons">
            <input type="submit" value="Connexion" id="submit" class="buttonSignUp" name="submit">
            <a href="/home/" class="buttonReturn">Retour</a>
        </div>
    </form>    
</div>

<?php $content = ob_get_clean(); 
require('../view/template.php'); ?>
