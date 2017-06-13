<?php


class CategoryController {

    public function indexAction(){
        $v = new View("admin/category","backend");
    }
    public function listAction(){


    }

    public function createAction(){
      $data = $_POST;
      $category = new Category(-1, $data['libelle']);
      $category->save();


      header("Location: /admin/category/index");
    }

    public function editAction(){


    }

    public function deleteAction(){


    }



}
