<?php


class ArticleController {

  public function indexAction(){
    $v = new View("articleList","frontend");
      $article = new Article(-1);
      $allArticles = $article->getAll();
      $v->assign("allArticles", $allArticles);
  }


    public function showAction(){
        $v = new View("showArticle","frontend");
        $article = new Article(-1);
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[2];
        $allArticles = $article->getAll();
        $thisArticle = $article->getOneBy(["id" => $id]);
        $v->assign("allArticles", $allArticles);
        $v->assign("thisArticle", $thisArticle);
    }


}
