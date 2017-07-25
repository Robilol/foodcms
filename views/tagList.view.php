<header>
    <h1 id="titre">Tags</h1>
</header>
<section id="content">
  <div id="gallery">
    <?php foreach ($this->data["allTags"] as $tag):
      $media = new Media(-1);
      $thisMedia = $media->getOneBy(["id" => $tag['id']]);?>
          <div class="gallery">
            <a href="/article/show/<?php echo $tag['id']; ?>">
                <img src="<?php echo $thisMedia['link']; ?>" alt="<?php echo $tag['name']; ?>">
            </a>
            <div class="desc"><h3><?php echo $tag['name']; ?></h3>

            </div>
          </div>
    <?php endforeach; ?>
  </div>
</section>
