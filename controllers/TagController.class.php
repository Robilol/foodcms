<?php


class TagController {

  public function indexAction(){
    $v = new View("tagList","frontend");
    $tag = new Tag(-1);
    $allTags = $tag->getAll();
    $v->assign("allTags", $allTags);
  }



  public function listAction(){


  }

}
