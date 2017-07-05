<?php

class TagController
{
    public function indexAction(){
        $v = new View("admin/tag","backend");
        $tag = new Tag(-1);
        $allTag = $tag->getAll();
        $v->assign("allTag", $allTag);
    }
    public function listAction()
    {

    }

    public function createAction()
    {
        $data = $_POST;
        $tag = new Tag(-1, $data['name']);
        $tag->save();

        header("Location: /admin/tag");
    }

    public function editAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $tag = new Tag($data['id']);
        $tag->setName($data['name']);
        $tag->save();

        header("Location: /admin/tag/index");
    }

    public function deleteAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $tag = new Tag($data['id']);
        $tag->setName($data['name']);
        $tag->setArchived(1);
        $tag->save();

        header("Location: /admin/tag/index");

    }
}
