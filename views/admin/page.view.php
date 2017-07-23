<header>
    <h1 id="titre">Page</h1>
</header>
<section id="content">
	<?php
		$uri = $_SERVER['REQUEST_URI'];
		$this->uri = trim($uri, "/");
		$this->uriExploded = explode("/", $this->uri);
		$link = $this->uriExploded;
		if(!array_key_exists(2,$link)) {
			//$this->includeModal("form", Page::getPageForm());
	    	$category = new Category(-1);
		        $allCategory = $category->getAll();
		        echo "
					<form class='form-group' action='/admin/page/create' method='post' id='pageCreateForm'>
				        <div class='form-row'>
					        <label>Titre:</label>
					        <input id='title' name='title' type='text' placeholder='Titre:' required='required'/>
				        </div>
				        <div class='form-row'>
						    <label>Catégorie:</label>
					        <select id='category' name='category'>
					        <option> </option>";
					        foreach ($allCategory as $i => $value) {
			            		echo "<option value='".$allCategory[$i]["id"]."'>".$allCategory[$i]["title"]."</option>";
		    				}
	                		  
					        echo "</select>
				        </div>
				        <div class='form-row'>
				        	<label>Mettre en ligne:</label>
				        	<input id='active' name='active' type='checkbox' />
				        </div>
				        <div class='form-row'>
				        	<input class='submit' type='submit' value='Ajouter'>
				        </div>
				    </form>";
	    }
		else{
	    	if($link[2]!="show") {
	   			//$this->includeModal("form", Page::getPageForm());
	    		$category = new Category(-1);
		        $allCategory = $category->getAll();
		        echo "
					<form class='form-group' action='/admin/page/create' method='post' id='pageCreateForm'>
				        <div class='form-row'>
					        <label>Titre:</label>
					        <input id='title' name='title' type='text' placeholder='Titre:' required='required'/>
				        </div>
				        <div class='form-row'>
						    <label>Catégorie:</label>
					        <select id='category' name='category'>
					        <option> </option>";
					        foreach ($allCategory as $i => $value) {
			            		echo "<option value='".$allCategory[$i]["id"]."'>".$allCategory[$i]["title"]."</option>";
		    				}
	                		  
					        echo "</select>
				        </div>
				        <div class='form-row'>
				        	<label>Mettre en ligne:</label>
				        	<input id='active' name='active' type='checkbox' />
				        </div>
				        <div class='form-row'>
				        	<input class='submit' type='submit' value='Ajouter'>
				        </div>
				    </form>";
	    	}
	    	else{
	    	  //$this->includeModal("form", Page::getPageEditForm($thisPage));
	    	    $page = new Page($link[3]);
	    	    $category = new Category($page->getCategory());
		        $allCategory = $category->getAll();

		        echo "
					<form class='form-group' action='/admin/page/edit/".$page->getId()."' method='post' id='pageEditForm'>
				        <div class='form-row'>
					        <label>Titre:</label>
					        <input id='title' name='title' type='text' placeholder='".$page->getTitle()."' value='".$page->getTitle()."' required='required'/>
				        </div>
				        <div class='form-row'>
						    <label>Catégorie:</label>
					        <select id='category' name='category'>
					        <option> </option>";
	                		foreach ($allCategory as $i => $value) {
			            		echo "<option value='".$allCategory[$i]["id"]."'";
			            		if ($allCategory[$i]["title"] == $category->getTitle()) echo "selected = 'selected'";
			            		echo ">".$allCategory[$i]["title"]."</option>";
		    				}
	                		  
					        echo "</select>
				        </div>
				        <div class='form-row'>
				        	<label>Mettre en ligne:</label>
				        	<input id='active' name='active' type='checkbox'";
				        	if ($page->getActive() == 1) echo " checked='checked'";
				        	echo " />
				        </div>
				        <div class='form-row'>
				        	<input class='submit' type='submit' value='Modifier'>
				        </div>
				    </form>";

    		  $this->includeModal("form", Page::getPageArchivedForm($thisPage));
	    	}
		}
	?>
</section>
