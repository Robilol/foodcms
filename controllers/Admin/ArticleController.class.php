<?php


class ArticleController {

    public function listAction(){
        $v= new View("articleList", "backend");
    }

    public function editAction(){

    }

    public function  deleteAction(){


    }

    public function createAction()
    {
        $v= new View("articleCreate", "backend");
    }

    public function registerAction()
    {
      $data = $_POST;

      $article = new Article(-1, $data['title'], $data['text'], $data['thumbnail'], $data['active'], 34);
      $article->save();

      header('Location: /admin/article/list');
      exit();
    }
}
