<!-- Section Editor Begins -->

<?php $title = "Modifier l'article"; 
ob_start();
  require('../view/header.php');
?>

<section id="sectionEditor">
<h2>Mode Editeur Chapitre</h2>
    <div id="editorBox">
      <form method="post" action="/updatePost/<?= $post['id']; ?>/">
      <div id="newTitleBox">
        <label for="title">Titre : </label><br>
        <input type="text" id="title" name="title" value="<?= $post['title']; ?>"><br>
      </div>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= htmlspecialchars($post['content']); ?></textarea><br>

        <input type="submit" value="Modifier" id="submit" name="submit">
    </form>
        <a href="/home/">Retour à l'accueil</a>
    </div>
</section>

<?php require('../view/footer.php');
      $content = ob_get_clean(); 
      require('../view/template.php'); ?>

<!-- Section Editor Ends -->
