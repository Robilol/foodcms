<?php

class Tag extends BaseSql{
    protected $id;
    protected $name;
    protected $archived;

    /**
     * @return mixed
     */
     public function __construct($id, $name = null)
     {
         parent::__construct();

         if ($id > 0) {
             parent::getOneBy(["id" => $id]);
         } else {
           $this->id                = $id;
           $this->name             = $name;
           $this->archived          = 0;
         }
     }

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
    public function getName()
    {
        return $this->name;
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAllTags() {
        return parent::getAll();
    }
  
    static function getTagForm(){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/tag/create",
                "class"     =>"form-group",
                "id"        =>"tagForm",
                "submit"    =>"Valider"
            ],

            "struct"=>[
                // "id"=>[
                //     "id"            =>"id",
                //     "type"          =>"hidden"
                // ],
                "name"=>[
                    "id"            =>"name",
                    "label"         =>"Nom :",
                    "type"          =>"text",
                    "placeholder"   =>"Le nom du tag: ",
                    "required"      =>true
                ]
            ]
        ];
    }

}