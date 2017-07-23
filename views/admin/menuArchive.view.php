<header>
  <h1 id="titre">Archive Menus</h1>
</header>
<section id="contentArchived">
  <table>
    <tr>
      <th>Nom</th>
      <th>Remettre en ligne</th>
    </tr>
    <?php
    foreach ($this->data["allMenu"] as $menu):?>
    <tr>
      <td><?php echo  $menu['name'];?></td>
      <td><a href="/admin/archive/activate/menu/<?php echo $menu['id'] ?>"><i class="fa fa-share" aria-hidden="true"></i></a></td>
    </tr>
  <?php endforeach; ?>

</table>
</section>
