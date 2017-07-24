<header>
  <h1 id="titre">Archive Categories</h1>
</header>
<section id="contentArchived">
  <table>
    <tr>
      <th>Titre</th>
      <th>Categorie parent</th>
      <th>Remettre en ligne</th>
    </tr>
    <?php
    foreach ($this->data["allCategories"] as $category):?>
    <tr>
      <?php
      if ($category['category_id'] != NULL) {
      $parent = new Category($category['category_id']);
      $text= $parent->getTitle();
    }else{
      $text = 'Pas de categorie parente';
    }
      ?>
      <td><?php echo  $category['title'];?></td>
      <td><?php echo $text; ?></td>
      <td><a href="/admin/archive/activate/category/<?php echo $category['id'] ?>"><i class="fa fa-share" aria-hidden="true"></i></a></td>
    </tr>
  <?php endforeach; ?>

</table>
</section>
