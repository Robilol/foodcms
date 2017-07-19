<header>
    <h1 id="titre">Commentaires</h1>
</header>
<section id="content">

  <?php
  $uri = $_SERVER['REQUEST_URI'];
  $this->uri = trim($uri, "/");
  $this->uriExploded = explode("/", $this->uri);
  $link = $this->uriExploded;
  if(!array_key_exists(2,$link)) {

  //  $this->includeModal("form", Comment::getCommentCreationForm());
    ?>
         <?php foreach ($this->data["inactiveComment"] as $comment):?>
      <div class="commentDivInside">
        <div>
            <p><?php echo $comment['text']; ?></p>
            <p><a href="/admin/comment/delete/<?php echo $comment['id']; ?>"><i class="fa fa-trash"></i></a>
            <a href="/admin/comment/moderate/<?php echo $comment['id']; ?>"><i class="fa fa-check"></i></a></p>
          </div>
          </div>
    <?php endforeach; ?>
  <?php
  }else{
    if($link[2]!="show") {
    $this->includeModal("form", Comment::getCommentCreationForm());
  }else{
    $this->includeModal("form", Comment::getCommentEditForm($thisComment));
      $this->includeModal("form", Comment::getCommentArchivedForm($thisComment));
  }}
   ?>
</section>
