<?php

    class User extends BaseSql {

        protected $id;
        protected $email;
        protected $password;
        protected $username;
        protected $firstname;
        protected $lastname;
        protected $archived;
        protected $role;

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

        public function setarchived($archived) {
            $this->archived = $archived;
        }

        public function getarchived() {
            echo $this->archived;
        }

        public function setRole($role) {
            $this->role = $role;
        }
        public function getRole() {
            echo $this->role;
        }

    }
