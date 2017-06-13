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
        print_r($data);
        $page = new Page(-1, $data['title']);
        echo $page->getTitle();
        echo $page->getCategory();
        echo $page->getArchived();
        echo $page->getId();
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