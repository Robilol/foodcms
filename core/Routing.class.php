<?php

class Routing {

    private $uri;
    private $uriExploded;

    private $controller;
    private $controllerName;
    private $action;
    private $actionName;
    private $params;

    public function __construct() {
        $this->setUri($_SERVER["REQUEST_URI"]);
        $this->setController();
        $this->setAction();
        $this->setParams();
        $this->runRoute();
    }

    public function setUri ($uri) {
        $uri = preg_replace("/".PATH_RELATIVE_PATTERN."/i", "", $uri, 1);
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
    }

    public function setController() {
        $this->controller = (empty($this->uriExploded[0])) ? "index" : $this->uriExploded[0];
        $this->controllerName = $this->controller."Controller";
        unset($this->uriExploded[0]);
    }

    public function setAction() {
        $this->action = (empty($this->uriExploded[1])) ? "index" : $this->uriExploded[1];
        $this->actionName = $this->action."Action";
        unset($this->uriExploded[1]);
    }

    public function setParams() {
        $this->params = array_merge(array_values($this->uriExploded), $_POST);
    }

    /*
    - est-ce que le fichier existe correspondant au controleur
    - est-ce qu'on peut créer un objet à partir de ce controleur
    - est-ce que dans l'objet il y a cette méthode
    - s'il y a cette méthode on retourne le booléen, sinon on retourne false
    */

    public function checkRoute() {
        $pathController = "controllers".DS.ucfirst($this->controllerName).".class.php";

        if (!file_exists($pathController)) {
            Helpers::log("Le contrôleur ".$this->controllerName." n'existe pas.");
            return false;
        }

        include $pathController;

        if (!class_exists($this->controllerName)) {
            Helpers::log("La classe ".$this->controllerName." n'existe pas.");
            return false;
        }

        if (!method_exists($this->controllerName, $this->actionName)) {
            Helpers::log("La méthode ".$this->actionName." n'existe pas dans la classe ".$this->controllerName.".");
            return false;
        }

        return true;
    }

    public function runRoute() {
        if ($this->checkRoute()) {
            $controller = new $this->controllerName;
            $controller->{$this->actionName}($this->params);
        } else {
            $this->page404();
        }
    }

    public function page404() {
        die("Page 404");
    }

}
