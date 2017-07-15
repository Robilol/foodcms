<?php


class ArticleController {

    public function indexAction(){
      $v = new View("admin/articleCreate","backend");
        $article = new Article(-1);
        $allArticles = $article->getAll();
        $v->assign("allArticles", $allArticles);
    }

    public function showAction(){
        $v = new View("admin/article","backend");
        $article = new Article(-1);
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[3];
        $allArticles = $article->getAll();
        $thisArticle = $article->getOneBy(["id" => $id]);
        $v->assign("allArticles", $allArticles);
        $v->assign("thisArticle", $thisArticle);
    }
    public function listAction(){
        $v= new View("admin/articleList", "backend");
    }

    public function editAction(){
      
        $data = $_POST;
        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[3];
        if (!isset($data['active']))
            $data['active'] = 0;
        $article = new Article($id);
        $article->setTitle($data['title']);
        $article->setText($data['text']);
        $article->setThumbnail($data['thumbnail']);
        $article->setActive($data['active']);
        $article->save();
        header('Location: /admin/article/show/'.$id);
     }

    public function  deleteAction(){

        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($uri, "/");
        $this->uriExploded = explode("/", $this->uri);
        $link = $this->uriExploded;
        $id = $link[3];
        $article = new Article($id);
        $article->setArchived(1);
        $article->save();
        header('Location: /admin/article/');
    }

    public function createAction()
    {
        $v= new View("admin/articleCreate", "backend");
    }

    public function registerAction()
    {
      $data = $_POST;

      $article = new Article(-1, $data['title'], $data['text'], $data['thumbnail'], $data['active'], 2);
      $article->save();

      header('Location: /admin/article');
      exit();
    }
    public function getTagsAction()
    {
        $tag = new Tag(-1);
        $tags_array = $tag->getAll();

        echo json_encode($tags_array);
    }

}
