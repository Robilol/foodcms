<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ma page food CMS</title>
  <meta name="description" content="description de la page">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <script src="https://use.fontawesome.com/e97a5a7c76.js"></script>
</head>
<body>

  <div id="main">
    <ul id="headerBack">
      <li><img id="logo" src="../../assets/img/logo.png"></li>
      <h1 id="titreBE">Food CMS</h1>
    </ul>
    <ul id="navigationBE"><!--
    --><li><a href="/admin/"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
      <li><a href="/admin/article"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Articles</a></li>
      <li><a href="/admin/comment"><i class="fa fa-comment-o" aria-hidden="true"></i> Commentaires</a></li>
      <li><a href="/admin/category"><i class="fa fa-file-o" aria-hidden="true"></i> Catégories</a></li>
      <li><a href="/admin/user"><i class="fa fa-group" aria-hidden="true"></i> Utilisateurs / droits</a></li>
      <li><a href="/admin/tag"><i class="fa fa-tags" aria-hidden="true"></i> Tags</a></li>
      <li><a href="/admin/media"><i class="fa fa-image" aria-hidden="true"></i> Médias</a></li>
      <li><a href="/admin/archive"><i class="fa fa-tasks" aria-hidden="true"></i> Archives</a></li>
    </ul>
    <ul id="navigationList">
      <li><a href="/">Article 1</a></li>
      <li><a href="/">Article 2</a></li>
      <li><a href="/">Article 3</a></li>
      <li><a href="/">Article 4</a></li>
    </ul>
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

</body>
</html>
