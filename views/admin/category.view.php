<header>
    <h1 id="titre">Categorie</h1>
</header>
<section id="content">


	<?php
	  $uri = $_SERVER['REQUEST_URI'];
	  $this->uri = trim($uri, "/");
	  $this->uriExploded = explode("/", $this->uri);
	  $link = $this->uriExploded;
	  if(!array_key_exists(2,$link)) {

	    $this->includeModal("form", Category::getCategoryForm());
	  }
	  else{
	    if($link[2]!="show") {
	      $this->includeModal("form", Category::getCategoryForm());
	    }
	    else{
	      //$this->includeModal("form", Category::getCategoryEditForm($thisCategory));
	      	    $category = new Category($link[3]);
		        $allCategory = $category->getAll();
		        $category2 = new Category($category->getCategoryParent());
		        echo "
					<form class='form-group' action='/admin/category/edit/".$category->getId()."' method='post' id='pageEditForm'>
				        <div class='form-row'>
					        <label>Libelle:</label>
					        <input id='title' name='title' type='text' placeholder='".$category->getTitle()."' value='".$category->getTitle()."' required='required'/>
				        </div>
				        <div class='form-row'>
						    <label>Catégorie parente:</label>
					        <select id='category' name='category' required='required'>";	
	                		foreach ($allCategory as $i => $value) {
			            		echo "<option value='".$allCategory[$i]["id"]."'";
			            		if ($allCategory[$i]["title"] == $category2->getTitle()) echo "selected = 'selected'";
			            		echo ">".$allCategory[$i]["title"]."</option>";
		    				}
	                		  
					        echo "</select>
				        </div>
				        <div class='form-row'>
				        	<label>Mettre en ligne:</label>
				        	<input id='active' name='active' type='checkbox'";
				        	if ($category->getActive() == 1) echo " checked='checked'";
				        	echo " />
				        </div>
				        <div class='form-row'>
				        	<input class='submit' type='submit' value='Modifier'>
				        </div>
				    </form>";

	      $this->includeModal("form", Category::getCategoryArchivedForm($thisCategory));
	    }
	  }
	  ?>
</section>
