<?php

class Media extends BaseSql{

    protected $id;
    protected $title;
    protected $link;
    protected $archived;
    protected $ctime;
    protected $utime;
    protected $article_id;

    /**
     * @param mixed $id
     */
     public function __construct($id, $title = null, $link = null , $article_id= null, $archived = null, $ctime = null, $utime = null)
     {
         parent::__construct();

         if ($id > 0) {
             $media = parent::getOneBy(["id" => $id]);

             $this->id           = $media['id'];
             $this->title        = $media['title'];
             $this->link        = $media['link'];
             $this->archived     = $media['archived'];
             $this->ctime        = $media['ctime'];
             $this->utime        = $media['utime'];
             $this->article_id   = $media['article_id'];
         } else {
             $this->id           = $id;
             $this->title        = $title;
             $this->link        = $link;
             $this->archived    = $archived;
             $this->ctime        = $ctime;
             $this->utime        = $utime;
             $this->article_id   = $article_id;
         }
     }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
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
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
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
    public function setArtcileId($article_id) {
        $this->article_id = $article_id;
    }

    public function getArtcileId() {
        return $this->$article_id;
    }
}
