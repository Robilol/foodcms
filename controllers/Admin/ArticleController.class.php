<?php


class ArticleController {

    public function indexAction(){
      $v = new View("admin/articleCreate","backend");
        $article = new Article(-1);
        $allArticles = $article->getAll();
        $v->assign("allArticles", $allArticles);
    }

    public function listAction(){
        $v= new View("admin/articleList", "backend");
    }

    public function editAction(){

    }

    public function  deleteAction(){


    }

    public function createAction()
    {
        $v= new View("admin/articleCreate", "backend");
    }

    public function registerAction()
    {
      $data = $_POST;

      $article = new Article(-1, $data['title'], $data['text'], $data['thumbnail'], $data['active'], 2);
      $article->save();

      header('Location: /admin/article');
      exit();
    }
}
