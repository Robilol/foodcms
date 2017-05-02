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
}
