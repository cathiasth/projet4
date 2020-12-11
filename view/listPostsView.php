<!-- Section Blog -->
<section id="sectionBlog">
        <h3>Liste des Chapitres</h3>
        
        <?php
            while($post = $posts->fetch())
            {
        ?>
        <div class="postBox">
              <h2><?= htmlspecialchars($post['title']); ?></h2>
              <p class="postDate">Créé le : <?= $post['creation_date'];?></p>
            
            <p class="postContent"><?= $post['content'];?></p><span>...</span>
            
            <a href="../public/index.php?route=post&postId=<?= $post['id'];?>" class="seeMore">Voir plus</a>
        
        </div>
        <br>
        <?php
            }
            $posts->closeCursor();
        ?>
</section>
<!-- End Section Blog -->
