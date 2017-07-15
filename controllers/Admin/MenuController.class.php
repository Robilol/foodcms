<?php

class MenuController
{
public function indexAction(){
        $v = new View("admin/menu","backend");
        $menu = new Menu(-1);
        $allMenu = $menu->getAll();
        $v->assign("allMenu", $allMenu);
    }
    public function showAction(){
        $v = new View("admin/menu","backend");
        $menu = new Menu(-1);
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[3];
        $allMenu = $menu->getAll();
        $thisMenu = $menu->getOneBy(["id" => $id]);
        $v->assign("allMenu", $allMenu);
        $v->assign("thisMenu", $thisMenu);
    }
    public function listAction(){
        $v= new View("admin/menuList", "backend");
    }


    public function createAction()
    {
        $data = $_POST;
        $menu = new Menu(-1, $data['name']);
        $menu->save();

        header("Location: /admin/menu");
    }

    public function editAction()
    {
        $data = $_POST;
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[3];
        $menu = new Menu($id);
        $menu->setName($data['name']);
        $menu->save();
        header('Location: /admin/menu/show/'.$id);
      }

    public function deleteAction()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[3];
        $menu = new Menu($id);
        $menu->setArchived(1);
        $menu->save();
        header('Location: /admin/menu/');
    }
}
