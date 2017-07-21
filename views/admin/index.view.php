<div id="container-back">
		<!-- accueil -->
	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	
	<?php
		$article = new Article(-1);
		$commentaire = new Comment(-1);

		$allArticle = $article->getAll();
		$allCommentaire = $commentaire->getAll();
		$article7 = 0;
		$articleTotal = 0;
		foreach ($allArticle as $i => $value) {
			$articleMonthExploded = explode("-", $allArticle[$i]['utime']);
			$articleMonth = $articleMonthExploded[1];
			if ($articleMonth == "07")
				$article7++;
			$articleTotal++;
		}
	?>
	<script>
	var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "mois": "Juillet",
        "articles": <?php echo $article7 ?>,
        "commentaires": 4.2
    }, {
        "mois": "UK",
        "articles": 1.7,
        "commentaires": 3.1
    }, {
        "mois": "Canada",
        "articles": 2.8,
        "commentaires": 2.9
    }, {
        "mois": "Japan",
        "articles": 2.6,
        "commentaires": 2.3
    }, {
        "mois": "France",
        "articles": 1.4,
        "commentaires": 2.1
    }, {
        "mois": "Brazil",
        "articles": 2.6,
        "commentaires": 4.9
    }],
    "valueAxes": [{
        "unit": "",
        "position": "left",
        "title": "Nombre",
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "Nombre d'articles en [[category]]: <b>[[value]]</b>",
        "fillAlphas": 0.9,
        "lineAlpha": 0.2,
        "title": "articles",
        "type": "column",
        "valueField": "articles"
    }, {
        "balloonText": "Nombre de commentaires en [[category]]: <b>[[value]]</b>",
        "fillAlphas": 0.9,
        "lineAlpha": 0.2,
        "title": "commentaires",
        "type": "column",
        "clustered":false,
        "columnWidth":0.5,
        "valueField": "commentaires"
    }],
    "plotAreaFillAlphas": 0.1,
    "categoryField": "mois",
    "categoryAxis": {
        "gridPosition": "start"
    },
    "export": {
    	"enabled": false
     }

});
</script>

	<section id="menu-verticale">
	</section>

	<section id="section-haut">
		<h3>Statistique</h3>
		<p>Nombre total d'article:<?php echo $articleTotal ?></p>
		<p>Nombre total de commentaires:</p>
		<div id="chartdiv"></div>
	</section>
  <section id="menu-verticale">

  </section>
	<section id="section-bas">
		<h3>Derniers Articles</h3>
		<?php foreach ($this->data["lastArticles"] as $article):?>
			<div class="articleDiv">
				<div>
					<p class="title"><?php echo $article['title']; ?></p>
					<a href="/admin/article/delete/<?php echo $article['id']; ?>"><i class="fa fa-trash"></i></a>
					<a href="/admin/article/show/<?php echo $article['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<p><?php echo substr( $article['text'], 0, 140); ?> <br><a href="/admin/article/show/<?php echo $article['id']; ?>">Lire la suite</a></p>
			    </div>
			    </div>
		<?php endforeach; ?>

	</section>
	<section id="section-bas">
		<h3>Derniers Commentaires</h3>
		<?php foreach ($this->data["lastComment"] as $comment):
		$user = new User($comment['food_user_id']);
        $article = new Article($comment['article_id']);
        ?>
			<div class="articleDiv">
				<div>
						<p><a href="/admin/comment/delete/<?php echo $comment['id']; ?>"><i class="fa fa-trash"></i></a>
						<a href="/admin/comment/moderate/<?php echo $comment['id']; ?>"><i class="fa fa-check"></i></a></p>
						<p><?php echo  substr($comment['text'], 0, 140); ?></p>
						<p style="font-style: italic;"><?php echo "Posté par ".$user->getUsername()." le ".$comment['utime']." sur l'article ".$article->getTitle()."."; ?></p>
           
			    </div>
			    </div>
		<?php endforeach; ?>
     </div>

	</section>


	<!-- Utilisateur Droits -->
	<!--
	<section id="menu-verticale">
		<ul>
			<a><li>Articles</li></a>
			<a><li>Commentaires</li></a>
			<a><li>Catégories</li></a>
			<a><li>Utilisateurs / Droits</li></a>
			<a><li>Medias</li></a>
			<a><li>Archives</li></a>
		</ul>
	</section>
	<div id="menu-verticale-double-container">
		<section id="menu-verticale-double">
			<ul>
				<a><li>Articles</li></a>
				<a><li>Commentaires</li></a>
				<a><li>Catégories</li></a>
				<a><li>Utilisateurs / Droits</li></a>
				<a><li>Medias</li></a>
				<a><li>Archives</li></a>
			</ul>
		</section>
		<section id="menu-verticale-double">
			<ul>
				<a><li>Articles</li></a>
				<a><li>Commentaires</li></a>
				<a><li>Catégories</li></a>
				<a><li>Utilisateurs / Droits</li></a>
				<a><li>Medias</li></a>
				<a><li>Archives</li></a>
			</ul>
		</section>
	</div>
	<section id="section-utilisateur">
		<h3>Statistique</h3>
		<div id="util-label">
			<label>sdfghklm</label>
			<br>
			<label>ertyuio</label>
			<br>
		</div>
		<div id="util-input">
			<input type="text" name="">
			<br>
			<input type="text" name="">
			<br>
		</div>
		<div id="util-submit">
			<input type="submit" value="ertfgyuhji,kol">
			<input type="submit" value="ertfgyuh">
		</div>
	</section>
	<section id="section-utilisateur">
		<h3>Statistique</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eos enim eum, vel perferendis temporibus pariatur repellendus voluptate sint debitis eaque quasi adipisci blanditiis consectetur vitae fugit aliquam illum harum.</p>
	</section>

-->
<!-- Catégorie -->
	<!--
	<section id="menu-verticale">
		<ul>
			<a><li>Articles</li></a>
			<a><li>Commentaires</li></a>
			<a><li>Catégories</li></a>
			<a><li>Utilisateurs / Droits</li></a>
			<a><li>Medias</li></a>
			<a><li>Archives</li></a>
		</ul>
	</section>
	<section id="menu-verticale">
		<ul>
			<a><li>Articles</li></a>
			<a><li>Commentaires</li></a>
			<a><li>Catégories</li></a>
			<a><li>Utilisateurs / Droits</li></a>
			<a><li>Medias</li></a>
			<a><li>Archives</li></a>
		</ul>
	</section>
	<section id="section-double-menu">
		<h3>Statistique</h3>
		<div id="util-label">
			<label>sdfghklm</label>
			<br>
			<label>ertyuio</label>
			<br>
		</div>
		<div id="util-input">
			<input type="text" name="">
			<br>
			<input type="text" name="">
			<br>
		</div>
		<div id="util-submit">
			<input type="submit" value="ertfgyuhji,kol">
			<input type="submit" value="ertfgyuh">
		</div>
	</section>
	-->
</div>
