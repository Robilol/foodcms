<?php


class ArticleController {

  public function indexAction(){
    $v = new View("articleList","frontend");
      $article = new Article(-1);
      $allArticles = $article->getAll(0,"DESC",1);
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
        $thisArticle = $article->getOneBy(["id" => $id]);
          $user = new User(-1);
          $userId = $thisArticle['food_user_id'];
          $thisUser = $user->getOneBy(["id" => $userId]);
          $v->assign("thisArticle", $thisArticle);
        $v->assign("thisUser", $thisUser);
    }


}
