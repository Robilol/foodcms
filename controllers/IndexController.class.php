<?php

/**
 *
 */
class IndexController
{

    public function indexAction($params) {
        $v = new View("index");
    }

    public function registerAction($params) {
        $v = new View("register");
    }

    public function loginAction($params) {
        $v = new View("login");
    }
}
