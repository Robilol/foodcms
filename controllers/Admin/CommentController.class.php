<?php

class CommentController
{
  public function indexAction(){
    $v = new View("admin/commentCreate","backend");
      $comment = new Comment(-1);
$allComment = $comment->getAll();
$v->assign("allComment", $allComment);
  }


    public function listAction() {

    }

    public function deleteAction() {

    }

    public function displayAction() {

    }

    public function moderateAction() {

    }
}
