<?php


class ArticleController {

    public function indexAction(){
        $v = new View("admin/articleCreate","backend");
        $article = new Article(-1);
        $allArticles = $article->getAll(0,"DESC","",0);
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

        $allArticles = $article->getAll(0,"DESC","",0);
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
        $article->setUser($_SESSION['id']);
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
        header('Location: /admin/article/');
    }

    public function createAction()
    {
        $v= new View("admin/articleCreate", "backend");
        $article = new Article(-1);
        $allArticles = $article->getAll();
        $v->assign("allArticles", $allArticles);
    }

    public function registerAction()
    {
        $data = $_POST;
        if (!isset($data['active']))
            $data['active'] = 0;
        else
            $data['active'] = 1;
        $error = false;
        $avatarFileType = ["png", "jpg", "jpeg", "gif"];
        $avatarLimitSize = 10000000;
        $error = false;
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
        $pathUpload ="./assets/media";
        $pathUpload1 ="/assets/media";
        if( !file_exists($pathUpload) ){
            //Sinon le créer
            mkdir($pathUpload);
        }
        //Déplacer l'avatar dedans
        $nameAvatar =uniqid().".". strtolower($infoFile["extension"]);
        $avatar =$pathUpload."/".$nameAvatar;
        $avatar1 =$pathUpload1."/".$nameAvatar;
        move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $avatar);
        if($data['active'] == "on"){
            $active = 1;
        }else{
            $active = 0;
        }
        if(!$error){
            $article = new Article(-1, $data['title'], $data['text'], $avatar1, $active, 2);
            $article->save();
            //      header('Location: /admin/article');
        }else{
            echo "Erreur d'upload d'image";
        }
        exit();
    }

    public function getTagsAction()
    {
        $text = $_POST['text'];
        $text = array_filter($text, function($value) { return $value !== ''; });

        $words = [];

        foreach ($text as $line) {
            $wordsLine = explode(' ', $line);

            foreach ($wordsLine as $word) {
                $word = preg_replace("/(\w{4,})s/u","$1",$word);
                $words[] = strtolower($word);
            }
        }

        $tag = new Tag(-1);
        $tags_array = $tag->getAll();

        $arrayTagsInText = [];

        foreach ($tags_array as $key => $tag) {
            if (in_array($tag['name'], $words)) {
                $arrayTagsInText[] = ["id" => $tag['id'],
                    "name" => $tag['name']
                ];
            }
        }

        echo json_encode($arrayTagsInText);
    }

    public function saveTagsAction() {
        $tags = $_POST['idList'];

        $article  = new Article(-1);
        $idArticle = $article->getLastId();
        $idArticle++;

        foreach ($tags as $idTag) {
            $tagArticleAssociation = new TagArticleAssociation($idTag, $idArticle);
            $tagArticleAssociation->Save();
            unset($tagArticleAssociation);
        }
    }
}
