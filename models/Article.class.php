<?php


    class Article extends BaseSql{

        protected $id;
        protected $title;
        protected $text;
        protected $thumbnail;
        protected $active;
        protected $food_user_id;
        protected $archived;
        protected $ctime;
        protected $utime;

        /**
         * Article constructor.
         * @param $id
         * @param $title
         * @param $text
         * @param $thumbnail
         * @param $active
         * @param $user
         * @param $archived
         * @param $ctime
         * @param $utime
         */
        public function __construct($id, $title = null, $text = null, $thumbnail = null, $active = null, $user = null, $archived = null, $ctime = null, $utime = null)
        {
            parent::__construct();

            if ($id > 0) {
                $article = parent::getOneBy(["id" => $id]);

                $this->id           = $article['id'];
                $this->title        = $article['title'];
                $this->text         = $article['text'];
                $this->thumbnail    = $article['thumbnail'];
                $this->active       = $article['active'];
                $this->food_user_id         = $article['food_user_id'];
                $this->archived     = $article['archived'];
                $this->ctime        = $article['ctime'];
                $this->utime        = $article['utime'];
            } else {
                $this->id = $id;
                $this->title = $title;
                $this->text = $text;
                $this->thumbnail = $thumbnail;
                $this->active = $active;
                $this->food_user_id = $user;
                $this->archived = $archived;
                $this->ctime = $ctime;
                $this->utime = $utime;
            }
        }

        /**
         * @param mixed $text
         */
        public function setText($text)
        {
            $this->text = $text;
        }

        /**
         * @param mixed $id_user
         */

        public function setUser($id_user)
        {
            $this->food_user_id = $food_user_id;
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
        public function getFoodUserId()
        {
            return $this->food_user_id;
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
         * @param mixed $archived
         */
        public function setArchived($archived)
        {
            $this->archived = $archived;
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


    /**
     * Gets the value of ctime.
     *
     * @return mixed
     */
    public function getCtime()
    {
        $date = new DateTime($this->ctime);
        return $date->format("j M Y G:i");
    }

    /**
     * Sets the value of ctime.
     *
     * @param mixed $ctime the date created
     *
     * @return self
     */
    protected function setCtime($ctime)
    {
        $this->ctime = $ctime;
    }

    /**
     * Gets the value of utime.
     *
     * @return mixed
     */
    public function getUtime()
    {
        $date = new DateTime($this->utime);
        return $date->format("j M Y G:i");
    }

    /**
     * Sets the value of utime.
     *
     * @param mixed $utime the date modified
     *
     * @return self
     */
    protected function setUtime($utime)
    {
        $this->utime = $utime;
    }

    static function getArticleCreationForm(){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/article/register",
                "class"     =>"form-group",
                "id"        =>"articleCreationForm",
                "submit"    =>"Ajouter"
            ],

            "struct"=>[
                "title"=>[
                    "id"            =>"title",
                    "label"         =>"Titre :",
                    "type"          =>"text",
                    "placeholder"   =>"Votre titre",
                    "required"      =>true
                ],
                "thumbnail"=>[
                    "label"         =>"Image :",
                    "type"          =>"file",
                    "placeholder"   =>"Votre image",
                    "required"      =>false
                ],
                "text"=>[
                    "id"            =>"text",
                    "label"         =>"Contenu :",
                    "type"          =>"textarea",
                    "placeholder"   =>"Votre contenu",
                    "required"      =>true,
                    "text"          =>""
                ],
                "active"=>[
                    "id"            =>"active",
                    "label"         =>"Mettre en ligne :",
                    "type"          =>"checkbox",
                    "checked"       =>0,
                    "required"      =>false
                ]
            ]
        ];
    }

    static function getArticleEditForm($thisArticle){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/article/edit/".$thisArticle['id'],
                "class"     =>"form-group",
                "id"        =>"articleEditForm",
                "submit"    =>"Modifier"
            ],

            "struct"=>[
                "title"=>[
                    "id"            =>"title",
                    "label"         =>"Titre :",
                    "type"          =>"text",
                    "placeholder"   =>$thisArticle['title'],
                    "value"         =>$thisArticle['title'],
                    "required"      =>true
                ],
                "thumbnail"=>[
                    "id"            =>"thumbnail",
                    "label"         =>"Image :",
                    "type"          =>"file",
                    "placeholder"   =>"Votre image",
                    "value"         =>$thisArticle['thumbnail'],
                    "required"      =>false
                ],
                "text"=>[
                    "id"            =>"text",
                    "label"         =>"Contenu :",
                    "type"          =>"textarea",
                    "placeholder"   =>$thisArticle['text'],
                    "value"         =>$thisArticle['text'],
                    "required"      =>true,
                    "text"          =>$thisArticle['text']
                ],
                "active"=>[
                    "id"            =>"active",
                    "label"         =>"Mettre en ligne :",
                    "type"          =>"checkbox",
                    "checked" => $thisArticle['active'],
                    "required"      =>false
                ]
            ]
        ];
    }
}
