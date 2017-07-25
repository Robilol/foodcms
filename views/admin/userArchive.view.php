<header>
    <h1 id="titre">Archive Utilisateurs</h1>
</header>
<section id="contentArchived">
  <table>
  <tr>
    <th>Pseudo</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Remettre en ligne</th>
  </tr>
  <?php
  foreach ($this->data["allUsers"] as $users):?>
  <tr>
    <td><?php echo $users['username']; ?></td>
    <td><?php echo $users['lastname']; ?></td>
    <td><?php echo $users['firstname']; ?></td>
    <td><?php echo $users['email']; ?></td>
    <td><a href="/admin/archive/activate/user/<?php echo $users['id'] ?>"><i class="fa fa-share" aria-hidden="true"></i></a></td>
  </tr>
<?php endforeach; ?>

</table>
</section>
