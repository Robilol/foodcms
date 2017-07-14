<?php

class PageController
{
public function indexAction(){
        $v = new View("admin/page","backend");
        $page = new Page(-1);
        $allPage = $page->getAll();
        $v->assign("allPage", $allPage);
    }

    public function showAction(){
        $v = new View("admin/page","backend");
        $page = new Page(-1);
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[3];
        $allPage = $page->getAll();
        $thisPage = $page->getOneBy(["id" => $id]);
        $v->assign("allPage", $allPage);
        $v->assign("thisPage", $thisPage);
    }
    public function listAction(){
        $v= new View("admin/pageList", "backend");
    }


    public function createAction()
    {
        $data = $_POST;
        $page = new Page(-1, $data['title']);
        $page->save();

        //header("Location: /admin/page");
    }

    public function editAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $page = new Page($data['id']);
        $page->setTitle($data['title']);
        $page->setCategory($data['category']);
        $page->save();

        header("Location: /admin/page");
    }

    public function deleteAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $page = new Page($data['id']);
        $page->setTitle($data['title']);

        $page->setCategory($data['category']);
        $page->setArchived(1);
        $page->save();

        header("Location: /admin/page");

    }
}
