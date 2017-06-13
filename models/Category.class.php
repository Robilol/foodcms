<?php


class Category extends BaseSql{

    protected $id;
    protected $title;
    protected $active;
    protected $category_id;
    protected $archived;

    /**
     * @param mixed $title
     */
     public function __construct($id, $title = null, $category_id = null)
     {
         parent::__construct();

         if ($id > 0) {
             parent::getOneBy(["id" => $id]);
         } else {
           $this->id                = $id;
           $this->title             = $title;
           $this->active            = 0;
           $this->category_id   = $category_id;
           $this->archived          = 0;
         }
     }
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
        return $this->category_id;
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
     * @param mixed $category_id
     */
    public function setCategoryParent($category_id)
    {
        $this->category_id = $category_id;
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

    static function getCategoryForm(){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/category/create",
                "class"     =>"form-group",
                "id"        =>"categoryForm",
                "submit"    =>"Valider"
            ],

            "struct"=>[
                "id"=>[
                    "id"            =>"id",
                    "type"          =>"hidden"
                ],
                "libelle"=>[
                    "id"            =>"libelle",
                    "label"         =>"Libelle :",
                    "type"          =>"text",
                    "placeholder"   =>"Votre libellé",
                    "required"      =>false
                ],
                "select"=>[
                    "id"            =>"parentCategory",
                    "label"         =>"Catégorie parente",
                    "type"          =>"select",
                    "option"        => [ "category1" => "Categorie1",
                                        "category2"=>"Categorie2",
                                        "category3"=>"Categorie3",
                                        "category4"=>"Categorie4",
                                        "category5"=>"Categorie5"
                    ],
                    "required"      =>true
                ]
            ]
        ];
    }
}
