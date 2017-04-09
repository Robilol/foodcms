<?php


class Category extends BaseSql{

    protected $id;
    protected $title;
    protected $active;
    protected $category_parent;
    protected $flag_archived;

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
    public function getCategoryParent()
    {
        return $this->category_parent;
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
     * @param mixed $category_parent
     */
    public function setCategoryParent($category_parent)
    {
        $this->category_parent = $category_parent;
    }

    /**
     * @param mixed $flag_archived
     */
    public function setFlagArchived($flag_archived)
    {
        $this->flag_archived = $flag_archived;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}