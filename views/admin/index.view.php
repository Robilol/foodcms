<div id="container-back">
	<!-- accueil -->

	<section id="menu-verticale">

	</section>

	<section id="section-haut">
		<h3>Statistique</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eos enim eum, vel perferendis temporibus pariatur repellendus voluptate sint debitis eaque quasi adipisci blanditiis consectetur vitae fugit aliquam illum harum.</p>
	</section>
  <section id="menu-verticale">

  </section>
	<section id="section-bas">
		<h3>Derniers Articles</h3>
		<?php foreach ($this->data["lastArticles"] as $article):?>
			<div class="articleDiv">
				<div>
					<a href="/admin/article/show/<?php echo $article['id']; ?>" class="title"><?php echo $article['title']; ?></a>
					<a href="/admin/article/delete/<?php echo $article['id']; ?>"><i class="fa fa-trash"></i></a>
					<a href="/admin/article/show/<?php echo $article['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<p><?php echo substr( $article['text'], 0, 140); ?> <br><a href="/admin/article/show/<?php echo $article['id']; ?>">Lire la suite</a></p>
			    </div>
			    </div>
		<?php endforeach; ?>

	</section>
	<section id="section-bas">
		<h3>Derniers Commentaires</h3>
		<?php foreach ($this->data["lastComment"] as $comment):?>
			<div class="articleDiv">
				<div>
						<p><a href="/admin/comment/delete/<?php echo $comment['id']; ?>"><i class="fa fa-trash"></i></a>
						<a href="/admin/comment/show/<?php echo $comment['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
						<a><i class="fa fa-check"></i></a></p>
						<p><?php echo  substr($comment['text'], 0, 140); ?></p>
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
