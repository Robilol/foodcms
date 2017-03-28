<?php

    class User extends BaseSql {

        protected $id = -1;
        protected $email;
        protected $pwd;
        protected $firstname;
        protected $lastname;
        protected $status;
        protected $permission;

        public function __construct($id = -1, $email = null, $pwd = null, $firstname = null, $lastname = null, $status = 0, $permission = 0) {
            parent::__construct();

            /*
            $this->setId($id);
            $this->setEmail($email);
            $this->setPwd($pwd);
            $this->setFirstname($firstname);
            $this->setLastname($lastname);
            $this->setStatus($status);
            $this->setPermission($permission);
            */
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setEmail($email) {
            $this->email = trim($email);
        }

        public function getEmail() {
            echo $this->email;
        }

        public function setPwd($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        public function setFirstname($firstname) {
            $this->firstname = ($firstname);
        }

        public function setLastname($lastname) {
            $this->lastname = ($lastname);
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function setPermission($permission) {
            $this->permission = $permission;
        }

        public function getForm()
        {
            return [
                    "options" => [
                                    "method" => "POST",
                                    "action" => "user/add",
                                    "submit" => "s'inscrire"
                                ],
                    "struct" => [
                                    "email" => [
                                                "type" => "email",
                                                "placeholder" => "Votre email",
                                                "required" => true,
                                                ],
                                    "pwd" => [
                                                "type" => "password",
                                                "placeholder" => "Votre mot de passe",
                                                "required" => true,
                                                ],
                                ]
                    ];
        }

    }
