
<section id ="showArticle">
  <img src="<?php echo $thisArticle['thumbnail']; ?>" alt="Image de l'article">
  <h1 id="titre-article"><?php echo $thisArticle['title']; ?></h1>
</section>
<section id="content">
  <div class="text-article"><?php echo $thisArticle['text']; ?></div>
  <div class="info-article">
    <p><b>Posté par : </b> <?php echo $thisUser['username']; ?></p>
    <p><b>Le : </b> <?php echo $thisArticle['ctime']; ?></p>
  </div>


  <div class="commentArea">
    <form id="comment" enctype="multipart/form-data" method="post" action="/article/createComment">
      <label>Commentaire : </label>
      <textarea name="comment" required="required"></textarea>
      <input type="hidden" name="id" value="<?php echo $thisArticle['id']; ?>">
      <input type="submit" value="Ajouter un commentaire" id="addComment">
    </form>
  </div>
</section>
