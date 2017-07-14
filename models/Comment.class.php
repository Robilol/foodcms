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
        public function getArchived()
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
        public function setArchived($archived)
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

        static function getCommentCreationForm(){
            return [
                "options"=>[
                    "method"    =>"POST",
                    "action"    =>"/admin/article/register",
                    "class"     =>"form-group",
                    "id"        =>"articleCreationForm",
                    "submit"    =>"Ajouter"
                ],

                "struct"=>[
                    "text"=>[
                        "id"            =>"text",
                        "label"         =>"Contenu :",
                        "type"          =>"textarea",
                        "placeholder"   =>"Votre contenu",
                        "required"      =>true
                    ],
                    "active"=>[
                        "id"            =>"active",
                        "label"         =>"Mettre en ligne :",
                        "type"          =>"checkbox",
                        "required"      =>false
                    ]
                ]
            ];
        }

        static function getCommentEditForm($thisComment){
            return [
                "options"=>[
                    "method"    =>"POST",
                    "action"    =>"/admin/article/edit",
                    "class"     =>"form-group",
                    "id"        =>"articleEditForm",
                    "submit"    =>"Modifier"
                ],

                "struct"=>[
                    "text"=>[
                        "id"            =>"text",
                        "label"         =>"Contenu :",
                        "type"          =>"text",
                        "placeholder"   =>$thisComment['text'],
                        "required"      =>true
                    ],
                    "active"=>[
                        "id"            =>"active",
                        "label"         =>"Mettre en ligne :",
                        "type"          =>"checkbox",
                        "required"      =>false
                    ]
                ]
            ];
        }
    }
