<?php

class CommentController
{
  public function indexAction(){
    $v = new View("admin/comment","backend");
    $comment = new Comment(-1);
    $allComment = $comment->getAll();
    $v->assign("allComment", $allComment);
  }
  public function showAction(){
      $v = new View("admin/comment","backend");
      $comment = new Comment(-1);
      $uri = $_SERVER['REQUEST_URI'];
      $this->uri = trim($uri, "/");
      $this->uriExploded = explode("/", $this->uri);
      $link = $this->uriExploded;
      $id = $link[3];
      $allComment = $comment->getAll();
      $thisComment = $comment->getOneBy(["id" => $id]);
      $v->assign("allComment", $allComment);
      $v->assign("thisComment", $thisComment);
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
