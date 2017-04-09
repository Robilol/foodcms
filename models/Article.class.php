<?php


    class Article extends BaseSql{

        protected $id;
        protected $title;
        protected $text;
        protected $thumbnail;
        protected $active;
        protected $user;
        protected $flag_archived;
        protected $date_created;
        protected $date_modified;

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

    
    /**
     * Gets the value of date_created.
     *
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Sets the value of date_created.
     *
     * @param mixed $date_created the date created
     *
     * @return self
     */
    protected function setDateCreated($date_created)
    {
        $this->date_created = $date_created;

        return $this;
    }

    /**
     * Gets the value of date_modified.
     *
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }

    /**
     * Sets the value of date_modified.
     *
     * @param mixed $date_modified the date modified
     *
     * @return self
     */
    protected function setDateModified($date_modified)
    {
        $this->date_modified = $date_modified;

        return $this;
    }
}