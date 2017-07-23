<?php


class BackController{

    public function indexAction(){

      $v = new View("admin/index","backend");


      $article = new Article(-1);
      $allArticle = $article->getAll(0, "DESC");
      $articleVariables = array('article1' => 0, 'article2' => 0, 'article3' => 0, 'article4' => 0, 'article5' => 0, 'articleTotal' => 0);
      foreach ($allArticle as $i => $value) {
        $articleMonthExploded = explode("-", $allArticle[$i]['utime']);
        if ($i == 0)
          $articleMonthFirst = intval($articleMonthExploded[1]);
        $articleMonth = intval($articleMonthExploded[1]);
        if ($articleMonth == $articleMonthFirst)
          $articleVariables['article1']++;
        if ($articleMonth == $articleMonthFirst - 1)
          $articleVariables['article2']++;
        if ($articleMonth == $articleMonthFirst - 2)
          $articleVariables['article3']++;
        if ($articleMonth == $articleMonthFirst - 3)
          $articleVariables['article4']++;
        if ($articleMonth == $articleMonthFirst - 4)
          $articleVariables['article5']++;
        $articleVariables['articleTotal']++;
      }

      $comment = new Comment(-1);
      $allComment = $comment->getAll(0, "DESC");
      $commentVariables = array('comment1' => 0, 'comment2' => 0, 'comment3' => 0, 'comment4' => 0, 'comment5' => 0, 'commentTotal' => 0);
      foreach ($allComment as $i => $value) {
        $commentMonthExploded = explode("-", $allComment[$i]['utime']);
        $commentMonth = intval($commentMonthExploded[1]);
        if ($commentMonth == $articleMonthFirst)
          $commentVariables['comment1']++;
        if ($commentMonth == $articleMonthFirst - 1)
          $commentVariables['comment2']++;
        if ($commentMonth == $articleMonthFirst - 2)
          $commentVariables['comment3']++;
        if ($commentMonth == $articleMonthFirst - 3)
          $commentVariables['comment4']++;
        if ($commentMonth == $articleMonthFirst - 4)
          $commentVariables['comment5']++;
        $commentVariables['commentTotal']++;
      }
       
      $v->assign("articleVariables", $articleVariables);
      $v->assign("commentVariables", $commentVariables);
      $v->assign("articleMonthFirst", $articleMonthFirst);
      
      $article2 = new Article(-1);
      $lastArticles = $article2->getAll(3);
      $v->assign("lastArticles", $lastArticles);

      $comment2 = new Comment(-1);
      $lastComment = $comment2->getAll(3);
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
