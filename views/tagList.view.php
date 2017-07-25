<header>
    <h1 id="titre">Tags</h1>
</header>
<section id="content">
  <div id="gallery">
    <?php foreach ($this->data["allMedia"] as $media):
      $tag = new Tag(-1);
      $thisTag = $tag->getOneBy(["id" => $media['id']]);

?>
          <div class="gallery">
            <a href="/article/show/<?php echo $thisTag['id']; ?>">
                <img src="<?php echo $media['link']; ?>" alt="<?php echo $thisTag['name']; ?>">
            </a>
            <div class="desc"><h3><?php echo $thisTag['name']; ?></h3>

            </div>
          </div>

    <?php endforeach; ?>
  </div>
</section>
