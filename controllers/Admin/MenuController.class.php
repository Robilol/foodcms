<?php

class MenuController
{
public function indexAction(){
        $v = new View("admin/menu","backend");
        $menu = new Menu(-1);
        $allMenu = $menu->getAll();
        $v->assign("allMenu", $allMenu);
    }
    public function listAction()
    {

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
        // faux trouver où récupérer le data[id]
        $menu = new Menu($data['id']);
        $menu->setName($data['name']);
        $menu->save();

        header("Location: /admin/menu");
    }

    public function deleteAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $menu = new Menu($data['id']);
        $menu->setName($data['name']);
        $menu->setArchived(1);
        $menu->save();

      header("Location: /admin/menu");
    }
}
