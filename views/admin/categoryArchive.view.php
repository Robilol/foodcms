<header>
  <h1 id="titre">Archive Categories</h1>
</header>
<section id="contentArchived">
  <table>
    <tr>
      <th>Titre</th>
      <th>Remettre en ligne</th>
    </tr>
    <?php
    foreach ($this->data["allCategories"] as $category):?>
    <tr>

      <td><?php echo  $category['title'];?></td>
      <td><a href="/admin/archive/activate/category/<?php echo $category['id'] ?>"><i class="fa fa-share" aria-hidden="true"></i></a></td>
    </tr>
  <?php endforeach; ?>

</table>
</section>
