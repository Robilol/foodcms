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
        $article->setActive(0);
        $article->save();
//        header('Location: /admin/article/');
    }

    public function createAction()
    {
        $v= new View("admin/articleCreate", "backend");
    }

    public function registerAction()
    {
      $data = $_POST;
      $avatarFileType = ["png", "jpg", "jpeg", "gif"];
  		$avatarLimitSize = 10000000;
      $infoFile = pathinfo($_FILES["thumbnail"]["name"]);
      if(!in_array( strtolower($infoFile["extension"]) , $avatarFileType)){
        $error = true;
        echo '1';
      }

      if($_FILES["thumbnail"]["size"]>$avatarLimitSize){
        $error = true;
        echo '2';
      }
      //Est ce que le dossier upload existe
      $pathUpload ="./assets/upload";
      if( !file_exists($pathUpload) ){
        //Sinon le créer
        mkdir($pathUpload);
      }
      //Déplacer l'avatar dedans
      $nameAvatar =$pathUpload.'/'.uniqid().".". strtolower($infoFile["extension"]);
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $nameAvatar);
      if(!$error){
      $article = new Article(-1, $data['title'], $data['text'], $nameAvatar, $data['active'], 2);
      $article->save();
      header('Location: /admin/article');
}else{
  echo "Erreur d'upload d'image";
}
      exit();
    }
    public function getTagsAction()
    {
        $tag = new Tag(-1);
        $tags_array = $tag->getAll();

        echo json_encode($tags_array);
    }

}
