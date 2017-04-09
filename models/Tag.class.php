<?php

class Tag extends BaseSql{
    protected $id;
    protected $name;
    protected $flag_archived;

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
    public function getName()
    {
        return $this->name;
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

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}