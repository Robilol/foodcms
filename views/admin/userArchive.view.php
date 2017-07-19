<header>
    <h1 id="titre">Archive Utilisateurs</h1>
</header>
<section id="content">

  <?php
  var_dump($this->data["allUsers"]); foreach ($this->data["allUsers"] as $users):?>  <li><?php echo $users['username']; ?></li>
<?php endforeach; ?>
</section>
