<?php

class UserController {

	public function loginAction() {
        $data = $_POST;
        $user = new User(0);
        $user->getUserByUsername($data['login']);

        session_destroy();

        if (password_verify($data['pwd'], $user->getPassword())) {
            if ($user->getStatus() == 0) {
                header('Location: /index/login/verify');
                exit();
            }
            session_start();
            $_SESSION['id']         = $user->getId();
            $_SESSION['username']   = $user->getUsername();
            $_SESSION['role']   = $user->getRoleId();
            header('Location: /index/index/connected');
        } else {
            header('Location: /index/login/error');
            exit();
        }
    }

	public function logoutAction() {
        session_destroy();
	}

	public function resetPassword($params) {
        $email = $params[0];
        $user = new User(0);
        if (!$user->getUserByEmail($email)) {
            header('Location: /index/login/wrongAccount');
            exit();
        } else {
            $variables['username']   = $user->getUsername();
            $variables['pwd']        = $user->generateNewPassword();

            $mail = new Mailer($user->getEmail(), "Votre nouveau mot de passe", "resetPassword", $variables);
            $mail->send();

            header('Location: /index/login/newPassword');
            exit();
        }
    }

	public function registerAction($params) {
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

        header('Location: /index/login/verify');
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
        $user = new User(0);

        if ($user->getUserByToken($token)) {
            $user->setStatus(1);
            $user->save();

            header('Location: /index/login/tokenVerified');
            exit();
        } else {
            header('Location: /index/login/wrongAccount');
            exit();
        }

    }
}
