
<?php $title = "Nouvel article"; 
ob_start(); 
  require('../view/header.php');
?>
<div id="newPostBox">
    <h3>Nouveau Chapitre</h3>
<form method="post" action="/add-post/">
  <div id="newTitleBox">
    <label for="title">Titre : </label><br>
    <input type="text" id="title" name="title"/><br>
  </div>
    <label for="content">Contenu</label><br>
    <textarea id="content" name="content"></textarea><br>
    <input type="submit" value="Envoyer" id="submit" name="submit">
</form>
    <a href="/home/">Retour à l'accueil</a>
</div>
<?php require('../view/footer.php');
      $content = ob_get_clean(); 
      require('../view/template.php');
?>


