<?php


    class Article extends BaseSql{

        protected $id;
        protected $title;
        protected $text;
        protected $thumbnail;
        protected $active;
        protected $user;
        protected $flag_archived;

        /**
         * @param mixed $text
         */
        public function setText($text)
        {
            $this->text = $text;
        }

        /**
         * @param mixed $id_users
         */
        public function setUser($user)
        {
            $this->user = $user;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getActive()
        {
            return $this->active;
        }

        /**
         * @return mixed
         */
        public function getFlagArchived()
        {
            return $this->flag_archived;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @return mixed
         */
        public function getUser()
        {
            return $this->user;
        }

        /**
         * @return mixed
         */
        public function getText()
        {
            return $this->text;
        }

        /**
         * @return mixed
         */
        public function getThumbnail()
        {
            return $this->thumbnail;
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param mixed $active
         */
        public function setActive($active)
        {
            $this->active = $active;
        }

        /**
         * @param mixed $flag_archived
         */
        public function setFlagArchived($flag_archived)
        {
            $this->flag_archived = $flag_archived;
        }

        /**
         * @param mixed $thumbnail
         */
        public function setThumbnail($thumbnail)
        {
            $this->thumbnail = $thumbnail;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title)
        {
            $this->title = $title;
        }

    }