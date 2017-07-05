<?php

class MediaController
{
public function indexAction(){
        $v = new View("admin/media","backend");
        $media = new Media(-1);
        $allMedia = $media->getAll();
        $v->assign("allMedia", $allMedia);
    }
    public function listAction()
    {

    }

    public function createAction()
    {
        $data = $_POST;
        $menu = new Media(-1, $data['name']);
        $menu->save();

        header("Location: /admin/media");
    }

    public function editAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $menu = new Media($data['id']);
        $menu->setName($data['name']);
        $menu->save();

        header("Location: /admin/media");
    }

    public function deleteAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $menu = new Media($data['id']);
        $menu->setName($data['name']);
        $menu->setArchived(1);
        $menu->save();

        header("Location: /admin/media");

    }
}
