<?php 

class PageController
{
public function indexAction(){
        $v = new View("admin/page","backend");
    }
    public function listAction()
    {
        
    }

    public function createAction()
    {
        $data = $_POST;
        $page = new Page(-1, $data['title']);
        $page->save();

        //header("Location: /admin/page/index");
    }

    public function editAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $page = new Page($data['id']);
        $page->setTitle($data['title']);
        $page->setCategory($data['category']);
        $page->save();

        header("Location: /admin/page/index");
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

        header("Location: /admin/page/index");
            
    }
}