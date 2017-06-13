<header>
    <h1 id="titre">Connexion</h1>
</header>
<section id="content">
    <?php if (!empty($this->data) && array_key_exists("alert", $this->data)) { $this->includeAlert("danger", $this->data['alert']); } ?>

    <?php
    $this->includeModal("form", User::getLoginForm());
    ?>
</section>
