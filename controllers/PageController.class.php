<?php

class PageController
{
    public function showAction() {
        $v = new View("page","frontend");
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[2];
        $page = new Page($id);
        $title = $page->getTitle();
        if($title == "Flux Rss"){
          header('Location: /index/feed');
        }
        $text = $page->getText();
        $v->assign("title", $title);
        $v->assign("text", $text);

    }
}
