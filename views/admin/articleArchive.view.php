<header>
    <h1 id="titre">Archive Articles</h1>
</header>
<section id="content">

  <?php
  var_dump($this->data["allArticle"]); foreach ($this->data["allArticle"] as $users):?>  <li><?php echo $users['title']; ?></li>
<?php endforeach; ?>
</section>
