<?php

    class Comment extends BaseSql{

        protected $id;
        protected $text;
        protected $archived;
        protected $user;
        protected $article;
        protected $comment;

        /**
         * @return mixed
         */
        public function getFlagArchived()
        {
            return $this->archived;
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
        public function getArticle()
        {
            return $this->article;
        }

        /**
         * @return mixed
         */
        public function getComment()
        {
            return $this->comment;
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
         * @param mixed $archived
         */
        public function setFlagArchived($archived)
        {
            $this->archived = $archived;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @param mixed $id_article
         */
        public function setArticle($article)
        {
            $this->article = $article;
        }

        /**
         * @param mixed $id_comment
         */
        public function setComment($comment)
        {
            $this->comment = $comment;
        }

        /**
         * @param mixed $id_users
         */
        public function setIdUser($user)
        {
            $this->users = $user;
        }

        /**
         * @param mixed $text
         */
        public function setText($text)
        {
            $this->text = $text;
        }
    }