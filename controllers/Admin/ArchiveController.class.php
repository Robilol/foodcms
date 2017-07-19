<?php

/**
 *
 */
class ArchiveController
{
    public function indexAction(){
      $v = new View("admin/archive","backend");

    }
    public function userArchiveAction(){
        $v = new View("admin/userArchive","backend");
        $user = new User(-1);
        $allUsers = $user->getAll(0,"DESC","",1);
        $v->assign("allUsers", $user);
        //var_dump($allUsers);die;
    }
    public function listCommentAction(){

    }
    public function articleArchiveAction(){
      $v = new View("admin/articleArchive","backend");
      $article = new Article(-1);
      $allArticle = $article->getAll(0,"DESC","",1);
      $v->assign("allArticle", $article);
    }
    public function listPictureAction(){

    }
    public function listTagAction(){

    }
    public function listCategoryAction(){

    }
    public function listPageAction(){

    }
}
