<?php

/**
 *
 */
class IndexController
{

    public function indexAction($params) {
        $v = new View("index");

        $article = new Article(-1);
        $articleArray = $article->getAll(8, "DESC",1);

        $v->assign("articlesArray", $articleArray);

        if (!empty($params)) {
            foreach ($params as $key => $value) {
                if ($value == "connected") {
                    $v->assign("connected", "Vous êtes connecté");
                }
            }
        }
    }
    public function feedAction($params) {
      $v = new View("feed","flux");

      $feed  = '<?xml version="1.0" encoding="utf-8"?>';
      $feed .= '<?xml-stylesheet type="text/css" href="/assets/css/style_rss.css" ?>';
      $feed .= '<rss version="2.0"><chanel>';
      $feed .= '<title>Feed of  FoodCMS</title>';
      $feed .= '<link>http://foodcms.robin-regis.com/</link>';
      $feed .= '<description></description>';
      $feed .= '<lastBuildDate>'.date('l jS \of F Y h:i:s A').'</lastBuildDate>';
      $feed .= '<language>fr-fr</language>';

      $actions = new Article(-1);
      $actions = $actions->getAll(0,"DESC",1,0);
      foreach($actions as $action){
        $user = new User($action['food_user_id']);
          $feed .= '<item>';
          $feed .= '<title>'.$action['title'].'</title>';
          $feed .= '<author>Posté par '.$user->getUsername().'</author>';
          $feed .= '<description>'.strip_tags(substr($action['text'],0,140)).'</description>';
          $feed .= '<link>http://foodcms.robin-regis.com/article/show/'.$action['id'].'</link>';
          $feed .= '<pubDate>Date de publication : '.$action['ctime'].'</pubDate>';
          $feed .= '</item>';
      }

      $feed .= '</chanel></rss>';
      header('Content-Type: text/xml');
         	header('Expires: '.date('D, d M Y H:i:s').' GMT');
         	header('Pragma: public');

      echo $feed;

    }
    public function registerAction($params) {
        $v = new View("register");
    }

    public function loginAction($params) {
        if (isset($_SESSION['id'])) {
            header("Location: /");
        }

        $v = new View("login");
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                if ($value == "error") {
                    $v->assign("error", "Mauvais identifiants");
                }
                if ($value == "verify") {
                    $v->assign("verify", "Vous devez verifier votre email avant de vous connecter");
                }
                if ($value == "tokenVerified") {
                    $v->assign("tokenVerified", "Votre email a bien été confirmé");
                }
                if ($value == "wrongAccount") {
                    $v->assign("wrongAccount", "Ce compte n'existe pas");
                }
                if ($value == "newPassword") {
                    $v->assign("newPassword", "Votre nouveau mot de passe a été envoyé par mail");
                }
            }
        }
    }

    public function logoutAction($params) {
        session_destroy();
        header('Location: /index');
        exit();
    }
}
