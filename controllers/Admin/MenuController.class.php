<?php

class MenuController
{
public function indexAction(){
        $v = new View("admin/menu","backend");
    }
    public function listAction()
    {
        
    }

    public function createAction()
    {
        $data = $_POST;
        $menu = new Menu(-1, $data['name']);
        $menu->save();

        header("Location: /admin/menu/index");
    }

    public function editAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $menu = new Menu($data['id']);
        $menu->setName($data['tag']);
        $menu->save();

        header("Location: /admin/menu/index");
    }

    public function deleteAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $menu = new Menu($data['id']);
        $menu->setName($data['tag']);
        $menu->setArchived(1);
        $menu->save();

        header("Location: /admin/menu/index");
            
    }
}
