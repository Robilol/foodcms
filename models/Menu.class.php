<?php

class Menu extends BaseSql{
    protected $id;
    protected $name;
    protected $active;
    protected $archived;

    public function __construct($id, $name = null)
     {
         parent::__construct();

         if ($id > 0) {
             parent::getOneBy(["id" => $id]);
         } else {
           $this->id                = $id;
           $this->name             = $name;
           $this->active          = 0;  
           $this->archived          = 0;
         }
     }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $id
     */
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    static function getMenuForm(){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/menu/create",
                "class"     =>"form-group",
                "id"        =>"menuForm",
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
                    "placeholder"   =>"Le nom du menu: ",
                    "required"      =>true
                ],
                
            ]
        ];
    }

    static function getMenuEditForm($thisMenu){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/menu/edit/".$thisMenu['id'],
                "class"     =>"form-group",
                "id"        =>"menuEditForm",
                "submit"    =>"Modifier"
            ],

            "struct"=>[
                "name"=>[
                    "id"            =>"name",
                    "label"         =>"Nom :",
                    "type"          =>"text",
                    "placeholder"   =>$thisMenu['name'],
                    "value"         =>$thisMenu['name'],
                    "required"      =>true
                ]
            ]
        ];
    }
}