<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Backend FoodCMS</title>
  <meta name="description" content="description de la page">
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
	<div id="main">
    <ul id="navigation">
      <li><img id="logo" src="/assets/img/logo.png"></li>
      	<li id="title-back">Accueil</li>
        <div id="liens" style="float:right">
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
