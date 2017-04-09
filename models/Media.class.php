<?php

class Media extends BaseSql{

    protected $id;
    protected $title;
    protected $link;
    protected $article;
    protected $flag_archived;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $flag_archived
     */
    public function setFlagArchived($flag_archived)
    {
        $this->flag_archived = $flag_archived;
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
    public function getFlagArchived()
    {
        return $this->flag_archived;
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
     * @param mixed $id_article
     */
    public function setArticle($article)
    {
        $this->article = $article;
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

}