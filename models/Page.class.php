<?php

class Page extends BaseSql{

 protected $id;
 protected $title;
 protected $active;
 protected $category_id;
 protected $archived;

    public function __construct($id, $title = null, $category_id = null)
     {
         parent::__construct();

         if ($id > 0) {
            $page = parent::getOneBy(["id" => $id]);

           $this->id                = $page['id'];
           $this->title             = $page['title'];
           $this->category_id          = $page['category_id'];
           $this->active          = $page['active'];  
           $this->archived          = $page['archived'];
         } else {
           $this->id                = $id;
           $this->title             = $title;
           $this->category_id          = $category_id;
           $this->active          = 0;  
           $this->archived          = 0;
         }
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
    public function getArchived()
    {
        return $this->archived;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
     * @param mixed $id_category
     */
    public function setCategory($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    static function getPageForm(){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/page/create",
                "class"     =>"form-group",
                "id"        =>"pageForm",
                "submit"    =>"Valider"
            ],

            "struct"=>[
                // "id"=>[
                //     "id"            =>"id",
                //     "type"          =>"hidden"
                // ],
                "title"=>[
                    "id"            =>"title",
                    "label"         =>"Titre :",
                    "type"          =>"text",
                    "placeholder"   =>"Le titre: ",
                    "required"      =>true
                ],
                "category"=>[
                    "id"            =>"category",
                    "label"         =>"Catégorie :",
                    "type"          =>"select",
                    "option"        => [ "category1" => "Categorie1",
                                        "category2"=>"Categorie2",
                                        "category3"=>"Categorie3",
                                        "category4"=>"Categorie4",
                                        "category5"=>"Categorie5"
                    ],
                    "required"      =>true
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

    static function getPageEditForm($thisPage){
        $category = new Category(-1);
        $allCategory = $category->getAll();
        $select = NULL;
        foreach ($allCategory as $i => $value) {
            $select .= $allCategory[$i]["title"]." => ".$allCategory[$i]["title"].",<br>";
        }
        var_dump($allCategory);
        echo $select;
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/page/edit/".$thisPage['id'],
                "class"     =>"form-group",
                "id"        =>"pageEditForm",
                "submit"    =>"Modifier"
            ],
            "struct"=>[
                "title"=>[
                    "id"            =>"title",
                    "label"         =>"Titre :",
                    "type"          =>"text",
                    "placeholder"   =>$thisPage['title'],
                    "value"         =>$thisPage['title'],
                    "required"      =>true
                ],
                "category"=>[
                    "id"            =>"category",
                    "label"         =>"Catégorie :",
                    "type"          =>"select",
                    "option"        => [ 
                                        $select
                    ],
                    "required"      =>true
                ],
                "active"=>[
                    "id"            =>"active",
                    "label"         =>"Mettre en ligne :",
                    "type"          =>"checkbox",
                    "checked"       =>$thisPage['active'],
                    "required"      =>false
                ]
            ]
        ];
    }

    static function getPageArchivedForm($thisPage){
        return [
            "options"=>[
                "method"    =>"POST",
                "action"    =>"/admin/article/delete/".$thisPage['id'],
                "class"     =>"form-delete",
                "id"        =>"pageDeleteForm",
                "submit"    =>"Archiver"
                ],
            "struct"=>[]
            ];
    }
}