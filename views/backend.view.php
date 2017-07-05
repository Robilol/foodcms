<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ma page food CMS</title>
  <meta name="description" content="description de la page">
  <link rel="stylesheet" href="../../assets/css/bo.css">
  <script src="https://use.fontawesome.com/e97a5a7c76.js"></script>
  <script src="/assets/js/jquery.js"></script>

</head>
<body>
  <?php $uri = $_SERVER['REQUEST_URI'];
  $this->uri = trim($uri, "/");
  $this->uriExploded = explode("/", $this->uri);
  $link = $this->uriExploded;
    ?>
  <div id="mainBack">
    <ul id="headerBack">
      <li><a href="/admin"><img id="logo" src="../../assets/img/logo.png"></a></li>
      <h1 id="titreBE">Food CMS</h1>
    </ul>
    <ul id="navigationBE">

      <li class="menu"><a href="/admin/article"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Articles</a></li>
      <li class="menu"><a href="/admin/comment"><i class="fa fa-comment-o" aria-hidden="true"></i> Commentaires</a></li>
      <li class="menu"><a href="/admin/category"><i class="fa fa-clone" aria-hidden="true"></i> Catégories</a></li>
      <li class="menu"><a href="/admin/page"><i class="fa fa-file-o" aria-hidden="true"></i> Pages</a></li>
      <li class="menu"><a href="/admin/user"><i class="fa fa-group" aria-hidden="true"></i> Utilisateurs / droits</a></li>
      <li class="menu"><a href="/admin/tag"><i class="fa fa-tags" aria-hidden="true"></i> Tags</a></li>
      <li class="menu"><a href="/admin/menu"><i class="fa fa-navicon" aria-hidden="true"></i> Menu</a></li>
      <li class="menu"><a href="/admin/media"><i class="fa fa-image" aria-hidden="true"></i> Médias</a></li>
      <li class="menu"><a href="/admin/archive"><i class="fa fa-archive" aria-hidden="true"></i> Archives</a></li>

    </ul>
    <?php $uri = $_SERVER['REQUEST_URI'];
    $this->uri = trim($uri, "/");
    $this->uriExploded = explode("/", $this->uri);
    $link = $this->uriExploded;

    if(array_key_exists(1,$link))
    {
    ?>

    <ul id="navigationList">
      <?php
      if ($link[1]=='article'){
        foreach ($this->data["allArticles"] as $article):?>  <li><a href="#"><?php echo $article['title']; ?></a></li><?php endforeach;
      }
      if ($link[1]=='comment'){
        foreach ($this->data["allComment"] as $comment):?>  <li><a href="#"><?php echo $comment['text']; ?></a></li><?php endforeach;
      }
      if ($link[1]=='category'){
        foreach ($this->data["allCategory"] as $category):?>  <li><a href="#"><?php echo $category['title']; ?></a></li><?php endforeach;
      }
      if ($link[1]=='page'){
        foreach ($this->data["allPage"] as $page):?>  <li><a href="#"><?php echo $page['title']; ?></a></li><?php endforeach;
      }
      if ($link[1]=='tag'){
        foreach ($this->data["allTag"] as $tag):?>  <li><a href="#"><?php echo $tag['name']; ?></a></li><?php endforeach;
      }
      ?>
    </ul>
    <?php } ?>
    <?php
    include $this->view.".view.php";
    ?>
    <!--footer>
      <div id="footer">
        <ul id="liens_footer">
          <li><a href="#">Mentions légales</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Plan du site</a></li>
        </ul>
      </div>
    </footer-->
  </div>
  <script src="/assets/js/script.js"></script>

</body>
</html>
