<?php

    class User extends BaseSql {

        protected $id;
        protected $email;
        protected $password;
        protected $username;
        protected $firstname;
        protected $lastname;
        protected $status;
        protected $token;
        protected $role_id;

        /**
         * User constructor.
         * @param $id
         * @param $email
         * @param $password
         * @param $username
         * @param $firstname
         * @param $lastname
         */
        public function __construct($id, $email = null, $password = null, $username = null, $firstname = null, $lastname = null)
        {
            parent::__construct();

            if ($id > 0) {
                parent::getOneBy(["id" => $id]);
            } else {
                $this->id           = $id;
                $this->email        = $email;
                $this->password     = $password;
                $this->username     = $username;
                $this->firstname    = $firstname;
                $this->lastname     = $lastname;
                $this->token        = uniqid('token', true);
                $this->status       = 0;
            }
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            echo $this->id;
        }

        public function setEmail($email) {
            $this->email = trim($email);
        }

        public function getEmail() {
            echo $this->email;
        }

        public function setPassword($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        public function setUsername($username) {
            $this->username = ($username);
        }

        public function getUsername() {
            echo $this->username;
        }
        public function setFirstname($firstname) {
            $this->firstname = ($firstname);
        }

        public function getFirstname() {
            echo $this->firstname;
        }

        public function setLastname($lastname) {
            $this->lastname = ($lastname);
        }

        public function getLastname() {
            echo $this->lastname;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function getStatus() {
            echo $this->status;
        }

        public function setRoleId($role_id) {
            $this->role_id = $role_id;
        }

        public function getRoleId() {
            echo $this->role_id;
        }

        /**
         * @return string
         */
        public function getToken()
        {
            return $this->token;
        }

        /**
         * @param string $token
         */
        public function setToken($token)
        {
            $this->token = $token;
        }

        static function getRegisterForm(){
            return [
                "options"=>[
                    "method"    =>"POST",
                    "action"    =>"/user/register",
                    "class"     =>"form-group",
                    "id"        =>"registerForm",
                    "submit"    =>"S'incrire"
                ],

                "struct"=>[
                    "firstname"=>[
                        "id"            =>"firstname",
                        "label"         =>"Votre prenom :",
                        "type"          =>"text",
                        "placeholder"   =>"Votre prenom",
                        "required"      =>true
                    ],
                    "lastname"=>[
                        "id"            =>"lastname",
                        "label"         =>"Votre nom :",
                        "type"          =>"text",
                        "placeholder"   =>"Votre nom",
                        "required"      =>true
                    ],
                    "username"=>[
                        "id"            =>"pseudo",
                        "label"         =>"Votre pseudo :",
                        "type"          =>"text",
                        "placeholder"   =>"Votre pseudo",
                        "required"      =>true
                    ],
                    "email"=>[
                        "id"            =>"email",
                        "label"         =>"Votre email :",
                        "type"          =>"email",
                        "placeholder"   =>"Votre email",
                        "required"      =>true
                    ],
                    "pwd"=>[
                        "id"            =>"pwd",
                        "label"         =>"Votre mot de passe :",
                        "type"          =>"password",
                        "placeholder"   =>"Votre mot de passe",
                        "required"      =>true
                    ]
                ]
            ];
        }
    }
