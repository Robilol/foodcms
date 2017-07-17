<?php

class MediaController
{
public function indexAction(){
        $v = new View("admin/media","backend");
        $media = new Media(-1);
        $allMedia = $media->getAll();
        $v->assign("allMedia", $allMedia);
    }
    public function listAction()
    {

    }

    public function createAction()
    {
        $data = $_POST;
        $avatarFileType = ["png", "jpg", "jpeg", "gif"];
    		$avatarLimitSize = 10000000;
        $infoFile = pathinfo($_FILES["media"]["name"]);
        if(!in_array( strtolower($infoFile["extension"]) , $avatarFileType)){
          $error = true;
          echo '1';
        }

        if($_FILES["media"]["size"]>$avatarLimitSize){
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
        move_uploaded_file($_FILES["media"]["tmp_name"], $avatar);

        $menu = new Media(-1, $data['name'],$avatar1,2);
        $menu->save();

        header("Location: /admin/media");
    }

    public function editAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $menu = new Media($data['id']);
        $menu->setName($data['name']);
        $menu->save();

        header("Location: /admin/media");
    }

    public function deleteAction()
    {
        $data = $_POST;
        // faux trouver où récupérer le data[id]
        $menu = new Media($data['id']);
        $menu->setName($data['name']);
        $menu->setArchived(1);
        $menu->save();

        header("Location: /admin/media");

    }
}
