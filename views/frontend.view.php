<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ma page food CMS</title>
  <meta name="description" content="description de la page">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="menu">
    <ul>
      <li><img class="logo" src="/assets/logo.png"></li>
      <div class="rightli">
        <li><a href="/">S'INSCRIRE</a></li>
        <li><a href="/">S'IDENTIFIER</a></li>
      </div>
    </ul>
  </div>
  <?php
  include $this->view.".view.php";
  ?>
</body>
</html>
