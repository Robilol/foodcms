<?php

/**
 *
 */
class IndexController
{

    public function indexAction($params) {
        $v = new View("index");

        $article = new Article(-1);
        $articleArray = $article->getAll();

        $v->assign("articlesArray", $articleArray);

        if (!empty($params)) {
            foreach ($params as $key => $value) {
                if ($value == "connected") {
                    $v->assign("connected", "Vous êtes connecté");
                }
            }
        }
    }

    public function registerAction($params) {
        $v = new View("register");
    }

    public function loginAction($params) {
        $v = new View("login");
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                if ($value == "error") {
                    $v->assign("error", "Mauvais identifiants");
                }
                if ($value == "verify") {
                    $v->assign("verify", "Vous devez verifier votre email avant de vous connecter");
                }
                if ($value == "tokenVerified") {
                    $v->assign("tokenVerified", "Votre email a bien été confirmé");
                }
                if ($value == "wrongAccount") {
                    $v->assign("wrongAccount", "Ce compte n'existe pas");
                }
                if ($value == "newPassword") {
                    $v->assign("newPassword", "Votre nouveau mot de passe a été envoyé par mail");
                }
            }
        }
    }

    public function logoutAction($params) {
        session_destroy();
        header('Location: /index');
        exit();
    }
}
