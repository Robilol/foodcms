<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ma page food CMS</title>
    <meta name="description" content="description de la page">
    <link rel="stylesheet" href="/assets/css/fo.css">
    <script src="https://use.fontawesome.com/e97a5a7c76.js"></script>
    <script src="/assets/js/jquery.js"></script>
</head>
<body>
<div id="main">
    <ul id="navigation">
        <a href="/"><img id="logo" src="/assets/img/logo.png"></a>
        <div id="liens" style="float:right">
            <?php $menu = new Menu(-1); $menu->getMenuHTML(); ?>
        </div>
    </ul>
    </div>
    <?php
    include $this->view.".view.php";
    ?>
    <footer>
        <div id="footer">
            <ul id="liens_footer">
                <?php
                    $page = new Page(-1);
                    $allPage = $page->getAll(0, "DESC", 1);
                    foreach ($allPage as $i => $value) {
                         echo "<li><a href='/page/show/".$allPage[$i]['id']."''>".$allPage[$i]['title']."</a></li>";
                     } 
                ?>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
