<?php if (!empty($this->data) && array_key_exists("connected", $this->data)) { $this->includeAlert("success", $this->data['connected']); } ?>

<section id ="search">
  <img src="/assets/img/desert.jpg" alt="Image de l'article">
</section>
<section id="content">
  <div id="gallery">
    <?php foreach ($this->data["articlesArray"] as $article):?>

          <div class="gallery">
            <a target="_blank" href="#">
              <img src="<?php echo $article['thumbnail']; ?>" alt="Trolltunga Norway">
            </a>
            <div class="desc"><?php echo $article['title']; ?></div>
          </div>
    <?php endforeach; ?>
  </div>
</section>
