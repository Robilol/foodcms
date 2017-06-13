<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ma page food CMS</title>
    <meta name="description" content="description de la page">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://use.fontawesome.com/e97a5a7c76.js"></script>
    <script src="/assets/js/jquery.js"></script>
</head>
<body>
<div id="main">
    <ul id="navigation">
        <li><img id="logo" src="/assets/img/logo.png"></li>
        <div id="liens" style="float:right">
            <li><a href="/">RECETTES</a></li>
            <li><a href="/">CATEGORIES</a></li>
            <li><a href="/search/index">RECHERCHE</a></li>
            <?php if (!empty($_SESSION['id'])): ?>
                <li><?php echo $_SESSION['username'] ?></li>
                <li><a href="/index/logout">Se deconnecter</a></li>
            <?php else: ?>
                <li><a href="/index/register">S'INSCRIRE</a></li>
                <li><a href="/index/login">S'IDENTIFIER</a></li>
            <?php endif; ?>
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
