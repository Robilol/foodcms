<header>
    <h1 id="titre">Article</h1>
</header>
<section id="content">

  <?php
  $uri = $_SERVER['REQUEST_URI'];
  $this->uri = trim($uri, "/");
  $this->uriExploded = explode("/", $this->uri);
  $link = $this->uriExploded;
  if(!array_key_exists(2,$link)) {

    $this->includeModal("form", Article::getArticleCreationForm());
  }else{
    if($link[2]!="show") {
    $this->includeModal("form", Article::getArticleCreationForm());
  }else{
    $this->includeModal("form", Article::getArticleEditForm($thisArticle));
  }}
   ?>
</section>