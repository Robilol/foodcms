<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ma page food CMS</title>
  <meta name="description" content="description de la page">
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
  <div id="main">
    <ul id="navigation">
      <li><img id="logo" src="../../assets/img/logo.png"></li>
      <h1 id="titreBE">Ajout article</h1>
    </ul>
    <ul id="navigationBE">
      <li><a href="/">Articles</a></li>
      <li><a href="/">Commentaires</a></li>
      <li><a href="/">Catégories</a></li>
      <li><a href="/">Utilisateurs / droits</a></li>
      <li><a href="/">Médias</a></li>
      <li><a href="/">Archives</a></li>
    </ul>
    <?php
    include $this->view.".view.php";
    ?>
    <footer>
      <div id="footer">
        <ul id="liens_footer">
          <li><a href="#">Mentions légales</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Plan du site</a></li>
        </ul>
      </div>
    </footer>
  </div>
</body>
</html>
