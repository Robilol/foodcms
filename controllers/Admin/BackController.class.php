<?php


class BackController{

    public function indexAction(){

      $v = new View("admin/index","backend");

      $article = new Article(-1);
      $lastArticles = $article->getAll(3);

      $v->assign("lastArticles", $lastArticles);

      $comment = new Comment(-1);
      $lastComment = $comment->getAll(3);

      $v->assign("lastComment", $lastComment);

      if (!empty($params)) {
          foreach ($params as $key => $value) {
              if ($value == "connected") {
                  $v->assign("connected", "Vous êtes connecté");
              }
          }
      }
    }


}
