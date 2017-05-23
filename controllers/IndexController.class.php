<?php

/**
 *
 */
class IndexController
{

    public function indexAction($params) {
        $v = new View("index");
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                if ($value == "connected") {
                    $v->assign("alert", "Vous êtes connecté");
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
                    $v->assign("alert", "Mauvais identifiants");
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
