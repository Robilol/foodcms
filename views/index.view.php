<?php if (!empty($this->data) && array_key_exists("connected", $this->data)) {
    $this->includeAlert("success", $this->data['connected']);
} ?>

<section id ="search">
    <img src="/assets/img/desert.jpg" alt="Image de l'article">
    <form id="search" method="post" action="/search/search">
        <input type="text" name="searchInput" class="input-search" placeholder="Rechercher..">
        <input type="submit" style="display:none"/>
    </form>
</section>
<section id="content">
    <div id="gallery">
        <?php foreach ($this->data["articlesArray"] as $article):?>
        <?php  $user = new User($article['food_user_id']); ?>
        <div class="gallery">
            <a href="/article/show/<?php echo $article['id']; ?>">
                <img src="<?php echo $article['thumbnail']; ?>" alt="Trolltunga Norway">
                <div class="desc">
                    <h3><?php echo $article['title']; ?></h3>
                    <p><?php echo substr($article['text'], 0, 140); ?></p>
                </div>
                <div class="bottom">
                    <span>Par <?php echo $user->getUsername(); ?></span>
                    <span>Le <?php echo Tools::dateConverter($article['ctime']); ?></span>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    </div>
</section>
