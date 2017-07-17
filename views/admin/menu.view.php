<header>
    <h1 id="titre">Menu</h1>
</header>
<section id="content">
	<?php
	  $uri = $_SERVER['REQUEST_URI'];
	  $this->uri = trim($uri, "/");
	  $this->uriExploded = explode("/", $this->uri);
	  $link = $this->uriExploded;
	  if(!array_key_exists(2,$link)) {
    	$this->includeModal("form", Menu::getMenuForm());
	  }
	  else{
	    if($link[2]!="show") {
    		$this->includeModal("form", Menu::getMenuForm());
    	}
	    else{
	      $this->includeModal("form", Menu::getMenuEditForm($thisMenu));
	      $this->includeModal("form", Menu::getMenuArchivedForm($thisMenu));
	    }
	  }
	  ?>
</section>
