
<section id ="showArticle">
  <img src="<?php echo $thisArticle['thumbnail']; ?>" alt="Image de l'article">
  <h1 id="titre-article"><?php echo $thisArticle['title']; ?></h1>
</section>
<section id="content">
  <div class="text-article"><?php echo $thisArticle['text']; ?></div>
  <div class="info-article">
    <p><b>Posté par : </b> <?php echo $thisUser['username']; ?></p>
    <p><b>Le : </b> <?php echo $thisArticle['ctime']; ?></p>
  </div>
</section>
