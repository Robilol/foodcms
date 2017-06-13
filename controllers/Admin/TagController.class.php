<?php 

class TagController
{
    public function indexAction(){
        $v = new View("admin/tag","backend");
    }
    public function listAction()
    {
        
    }

    public function createAction()
    {
        $data = $_POST;
        $tag = new Tag(-1, $data['name']);
        $tag->save();

        header("Location: /admin/tag/index");
    }

    public function editAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $tag = new Tag($data['id']);
        $tag->setName($data['tag']);
        $tag->save();

        header("Location: /admin/tag/index");
    }

    public function deleteAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $tag = new Tag($data['id']);
        $tag->setName($data['tag']);
        $tag->setArchived(1);
        $tag->save();

        header("Location: /admin/tag/index");
            
    }
}