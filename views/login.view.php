<header>
    <h1 id="titre">Se connecter</h1>
</header>
<section id="content">
    <?php
    $this->includeModal("form", User::getLoginForm());
    ?>
</section>
