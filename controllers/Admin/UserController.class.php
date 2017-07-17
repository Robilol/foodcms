<?php

class UserController {

	public function indexAction(){
		$v = new View("admin/user","backend");
			$user = new User(-1);
			$allUsers = $user->getAll();
			$v->assign("allUsers", $allUsers);
	}

	public function showAction(){
			$v = new View("admin/user","backend");
			$user = new User(-1);
			$uri = $_SERVER['REQUEST_URI'];
			$this->uri = trim($uri, "/");
			$this->uriExploded = explode("/", $this->uri);
			$link = $this->uriExploded;
			$id = $link[3];
			$allUsers = $user->getAll();
			$thisUser = $user->getOneBy(["id" => $id]);
			$v->assign("allUsers", $allUsers);
			$v->assign("thisUser", $thisUser);
	}

	public function addAction(){
		$data = $_POST;

		$user = new User(-1, $data['email'], null, $data['username'], $data['firstname'], $data['lastname']);

		if ($user->getUserByEmail($data['email'])) {

		}

		$user->setPassword($data['pwd']);
		$user->save();

		$variables['username']  = $user->getUsername();
		$variables['hostname']  = HOSTNAME;
		$variables['token']     = $user->getToken();

		$mail = new Mailer($user->getEmail(), "Confirmation d'inscription", "register", $variables);
		$mail->send();

		header('Location: /admin/user');
	}
	public function editAction(){
	}
	public function deleteAction(){

	}
	public function listAction(){

	}
	public function resetAction(){

	}

}
