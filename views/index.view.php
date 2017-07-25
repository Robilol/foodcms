<?php if (!empty($this->data) && array_key_exists("connected", $this->data)) { $this->includeAlert("success", $this->data['connected']); } ?>

<section id ="search">
  <img src="/assets/img/desert.jpg" alt="Image de l'article">
  <input type="text" class="input-search" placeholder="Rechercher..">
</section>
<section id="content">
  <div id="gallery">
    <?php foreach ($this->data["articlesArray"] as $article):?>

      <div class="gallery">
        <a href="/article/show/<?php echo $article['id']; ?>">
          <img src="<?php echo $article['thumbnail']; ?>" alt="Trolltunga Norway">
        </a>
        <div class="desc"><h3><?php echo $article['title']; ?></h3>
          <p><?php echo substr($article['text'], 0, 140); ?></p></div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
