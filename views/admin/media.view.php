<header>
  <h1 id="titre">Media</h1>
</header>
<section id="contentMedia">
  <form id="gallery" enctype="multipart/form-data" method="post" action="/admin/media/create">
    <label>Nom de l'image : </label><input type="text" name="name">
    <input type="file" name="media">
    <input type="submit" value="Ajouter" id="addImage">
  </form>
  <div id="gallery">
    <?php foreach ($this->data["allMedia"] as $media):?>

    <div class="gallery">
      <a target="_blank" href="<?php echo $media['link']; ?>">
        <img src="<?php echo $media['link']; ?>" alt="<?php echo $media['title']; ?>" width="300" height="200">
      </a>
      <div class="desc"><?php echo $media['title']; ?></div>
    </div>
      <?php endforeach; ?>
  </div>
</section>
