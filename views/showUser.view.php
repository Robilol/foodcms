
<section id ="showArticle">
  <h1 id="titre">Profil</h1>
</section>
<section id="content">

  <div class="commentArea">

      <div class="articleDiv">
        <form class="form-group" id="gallery" enctype="multipart/form-data" method="post" action="/user/edit/<?php echo $thisUser['id']; ?>">
        <div>
          <label>Pseudo : </label><input type="text" name="username" value="<?php echo $thisUser['username']; ?>"><br>
          <label>Nom  : </label><input type="text" name="lastname" value="<?php echo $thisUser['lastname']; ?>"><br>
          <label>Prénom : </label><input type="text" name="firstname" value="<?php echo $thisUser['firstname']; ?>"><br>
          <label>Email : </label><input type="text" name="email" value="<?php echo $thisUser['email']; ?>"><br>
          <label>Mot de passe : </label><input type="password" name="pwd" placeholder="mot de passe" value=""><br>
          <input type="submit" value="Modifier" id="addImage">
    </div>
  </form>
    </div>


</section>
