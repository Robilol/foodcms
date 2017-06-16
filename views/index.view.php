<?php if (!empty($this->data) && array_key_exists("connected", $this->data)) { $this->includeAlert("success", $this->data['connected']); } ?>
<header>
  <h1 id="titre">FOOD CMS</h1>
</header>
<section id="content">
    <?php foreach ($this->data["articlesArray"] as $article):?>
        <div class="article">
            <h2 class="titre_article"><?php echo $article['title']; ?></h2>
            <div class="infos_article">
                <hr>
                <p>Posté le : <?php echo Tools::dateConverter($article['ctime']); ?></p>
                <hr>
            </div>
            <img class="image_article" src="<?php echo $article['thumbnail']; ?>" alt="Image de l'article">
            <p class="description_article"><?php echo $article['text']; ?></p>
        </div>
    <?php endforeach; ?>
</section>
