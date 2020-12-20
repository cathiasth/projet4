<?php $title = 'Jean Forteroche - Blog';
require ("../view/header.php"); ?>
 <?php
  ob_start();
if ($_SESSION['email']) {
    ?>
 <div class="actions">
    <a class="editButton" href="/editPost/<?= $post['id'];?>/">Modifier</a>
    <a class="deleteButton" href="/deletePost/<?= $post['id']; ?>/">Supprimer</a>
</div> 
<?php
} 
?>
<div class="postTemplate">
    <h2 class="postTitle"><?= $post['title']; ?></h2>
    <p class="postDate">Créé le : <?= $post['creation_date'] ?></p>
    <p><?= $post['content'] ?></p>
    <a href="../public/index.php">Retour à l'accueil</a>
  
    <form method="post" action="/addComment/<?= $post['id']; ?>/">
        <label for="author">Nom</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="comment_author">Message</label><br>
        <textarea id="comment_author" name="comment_author"></textarea><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
  
  <?php
            while($comment = $comments->fetch())
            {
        ?>
        <div class="commentBox">
              <div class="setting_comment">
                  <h2><?= htmlspecialchars($comment['author']); ?></h2>
                  <div>
                      <a href="/flagComment/<?= $comment['id']; ?>/">Signaler</a>
                      <?php
                      if ($_SESSION['email']) { ?>
                      <a href="/deleteComment/<?= $post['id']; ?>/<?= $comment['id']; ?>/">Supprimer</a>
                      <?php } ?>
                  </div>
              </div>
              <p class="commentDate">Créé le : <?= $comment['comment_date'];?></p>
              <p class="commentContent"><?= htmlspecialchars($comment['comment_author']);?></p>
        </div>
        <br>
        <?php
            }
            $comments->closeCursor();
        ?>
</div>
<br>



<?php require('../view/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('../view/template.php'); ?>
