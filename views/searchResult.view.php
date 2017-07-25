<header>
    <h1 id="titre">Résultats de la recherche</h1>
</header>
<section id="content">
    <?php if (empty($this->data["articlesArray"])) { $this->includeAlert("danger", "Pas de recettes trouvées"); } ?>

    <?php foreach ($this->data["articlesArray"] as $article):?>
        <div class="article">
            <h2 class="titre_article"><?php echo $article->getTitle(); ?></h2>
            <div class="infos_article">
                <hr>
                <p>Posté le : <?php echo $article->getCtime(); ?></p>
                <hr>
            </div>
            <img class="image_article" src="<?php echo $article->getThumbnail(); ?>" alt="Image de l'article">
            <p class="description_article"><?php echo $article->getText(); ?></p>
        </div>
    <?php endforeach; ?>
</section>
