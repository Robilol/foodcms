<header>
  <h1 id="titre">Archive Tags</h1>
</header>
<section id="contentArchived">
  <table>
    <tr>
      <th>Nom</th>
      <th>Remettre en ligne</th>
    </tr>
    <?php
    foreach ($this->data["allTag"] as $tag):?>
    <tr>
      <td><?php echo  $tag['name'];?></td>
      <td><a href="/admin/archive/activate/tag/<?php echo $tag['id'] ?>"><i class="fa fa-share" aria-hidden="true"></i></a></td>
    </tr>
  <?php endforeach; ?>

</table>
</section>
