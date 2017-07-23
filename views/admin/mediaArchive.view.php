<header>
  <h1 id="titre">Archive Medias</h1>
</header>
<section id="contentArchived">
  <table>
    <tr>
      <th>Nom</th>
      <th>Media</th>
      <th>Remettre en ligne</th>
    </tr>
    <?php
    foreach ($this->data["allMedia"] as $media):?>
    <tr>
      <td><?php echo  $media['title'];?></td>
      <td><img src="<?php echo $media['link']; ?>"></td>
      <td><a href="/admin/archive/activate/media/<?php echo $media['id'] ?>"><i class="fa fa-share" aria-hidden="true"></i></a></td>
    </tr>
  <?php endforeach; ?>

</table>
</section>
