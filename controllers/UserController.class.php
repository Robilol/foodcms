<?php

class UserController {

	public function loginAction() {
	    echo "<pre>";
        $data = $_POST;
        $user = new User(0);
        $user->getUserByUsername($data['login']);

        var_dump($user);
        var_dump($data['pwd']);


        if ($user->getPassword() == $data['pwd']) {
            session_start();
            $_SESSION['id']         = $user->getId();
            $_SESSION['username']   = $user->getUsername();
        } else {
            die("mauvais login");
        }
    }

	public function logoutAction() {

	}
	public function registerAction() {
        $data = $_POST;

        $user = new User(-1, $data['email'], $data['pwd'], $data['firstname'], $data['lastname'], $data['username']);
        $user->save();

        $variables['username']  = $user->getUsername();
        $variables['hostname']  = HOSTNAME;
        $variables['token']     = $user->getToken();

        $template = file_get_contents("./templates/register.mail.html");

        foreach($variables as $key => $value)
        {
            $template = str_replace('{{'.$key.'}}', $value, $template);
        }

        if(mail($user->getEmail(), "Confirmation d'inscription", $template)){
            echo "envoyé";
        }else{
            print_r(error_get_last());
        }

        header('Location: /index');
        exit();
	}
	public function editAction() {

	}
	public function resetAction() {

	}
	public function showAction() {

	}

	public function validateRegistrationAction($params) {
        $token = $params[0];

        $user = new User(4);

    }
}