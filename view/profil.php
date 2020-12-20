<?php 
    $title = 'Jean Forteroche - Blog'; 
    ob_start();
    require("header.php"); 
?>

<!-- Section Profil Begins -->
    <section id="sectionProfil">
        <h1>Profil</h1>
        <h2>Liste des Commentaires Signalés</h2>
          
        <table>
            <thead>
                <tr>
                  <th>Numéro Chapitre</th>
                  <th>Contenu</th>
                  <th>Ecrit par</th>
                  <th>Ecrit le</th>
                  <th>Désapprouver</th>
                  <th>Supprimer</th>
                </tr>
            </thead>
         <?php
                while($comment = $comments->fetch())
                {
            ?>
            <tbody>
              
                <tr>
                  <td><?= $comment['post_id']; ?></td>
                  <td><?= htmlspecialchars($comment['comment_author']);?></td>
                  <td><?= htmlspecialchars($comment['author']); ?></td>
                  <td><?= $comment['comment_date'];?></td>
                  <td><a href="/flagOffComment/<?= $comment['id']; ?>/">Enlever le signalement</a></td>
                  <td><a href="/deleteComment/<?= $post['id']; ?>/<?= $comment['id']; ?>/">Supprimer</a></td>
                </tr>
            </tbody>
          <?php
            }
            $comments->closeCursor();
        ?>
        </table>
        
    </section>
<!-- Section Profil Ends -->
<?php
    require("footer.php");
    $content = ob_get_clean();
    require("template.php");
?>
