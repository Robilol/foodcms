<?php


class CategoryController {

    public function indexAction(){
        $v = new View("admin/category","backend");
        $category = new Category(-1);
  $allCategory = $category->getAll();
  $v->assign("allCategory", $allCategory);
    }
    public function listAction(){


    }

    public function createAction(){
      $data = $_POST;
      $category = new Category(-1, $data['libelle']);
      $category->save();


      header("Location: /admin/category");
    }

    public function editAction(){

      $data = $_POST;
      // faux trouver où récupérer le data[id]
      $category = new Category(3);
      if (isset($data['libelle']))
        $category->setTitle($data['libelle']);

      if (isset($data['parentCategory']))
        $category->setCategoryParent($data['parentCategory']);
      $category->save();


      header("Location: /admin/category");
    }

    public function deleteAction(){
      $data = $_POST;
      // faux trouver où récupérer le data[id]
      $category = new Category($data['id']);
      if (isset($data['libelle']))
        $category->setTitle($data['libelle']);
      if (isset($data['parentCategory']))
        $category->setCategoryParent($data['parentCategory']);
      $category->setArchived(1);
      $category->save();

      header("Location: /admin/category");
    }



}
