<header>
  <h1 id="titre">Archive Pages</h1>
</header>
<section id="contentArchived">
  <table>
    <tr>
      <th>Titre</th>
      <th>Categorie</th>
      <th>Remettre en ligne</th>
    </tr>
    <?php
    foreach ($this->data["allPages"] as $page):?>
    <tr>
      <?php
      if ($page['category_id'] != NULL) {
      $parent = new Category($page['category_id']);
      $text= $parent->getTitle();
    }else{
      $text = 'Pas de categorie parente';
    }
      ?>
      <td><?php echo  $page['title'];?></td>
      <td><?php echo $text; ?></td>
      <td><a href="/admin/archive/activate/page/<?php echo $page['id'] ?>"><i class="fa fa-share" aria-hidden="true"></i></a></td>
    </tr>
  <?php endforeach; ?>

</table>
</section>
