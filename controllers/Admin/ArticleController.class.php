<?php


class ArticleController {

    public function indexAction(){
      $v = new View("admin/articleCreate","backend");
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

      $article = new Article(-1, $data['title'], $data['text'], $data['thumbnail'], $data['active'], 34);
      $article->save();

      header('Location: /admin/article/');
      exit();
    }
    public function getTagsAction()
    {
        $tag = new Tag(-1);
        $tags_array = $tag->getAll();

        echo json_encode($tags_array);
    }

}
