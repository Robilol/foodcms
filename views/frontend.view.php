<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ma page food CMS</title>
  <meta name="description" content="description de la page">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div id="main">
    <ul id="navigation">
      <li><img id="logo" src="/assets/img/logo.png"></li>
      <div id="liens" style="float:right">
        <li><a href="/index/register">S'INSCRIRE</a></li>
        <li><a href="/">S'IDENTIFIER</a></li>
        <li><a href="/">RECETTES</a></li>
        <li><a href="/">CATEGORIES</a></li>
        <li><a href="/">RECHERCHE</a></li>
      </div>
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
