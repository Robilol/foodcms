<?php


    class Article extends BaseSql{

        protected $id;
        protected $title;
        protected $text;
        protected $thumbnail;
        protected $active;
        protected $user;
        protected $archived;
        protected $ctime;
        protected $utime;

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
    public function getDateCreated()
    {
        return $this->ctime;
    }

    /**
     * Sets the value of ctime.
     *
     * @param mixed $ctime the date created
     *
     * @return self
     */
    protected function setDateCreated($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Gets the value of utime.
     *
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->utime;
    }

    /**
     * Sets the value of utime.
     *
     * @param mixed $utime the date modified
     *
     * @return self
     */
    protected function setDateModified($utime)
    {
        $this->utime = $utime;

        return $this;
    }
}