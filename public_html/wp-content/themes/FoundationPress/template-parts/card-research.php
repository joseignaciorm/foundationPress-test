
	<article class="card research">
		<p class="title-up">Publicación</p>
		<div class="card-section">
		<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
			<div class="grid-y m-b card-author">
				<a class="card-author--title" href="">Autor/a</a>
				<small class="card-author--name">
					<em><b><h1><?php the_author_posts_link(); ?></h1> </b><span>Ana Sedeño Valdellós</span></em>
				</small>
			</div>
			<div class="grid-y m-b card-date">
				<small class="card-date--title"><b>Año</b></small>
				<date class="card-date--year"><?php the_time('Y'); ?></date>
			</div>
			<div class="grid-y m-b card-address">
				<small class="card-address--title"><b>Revista o publicación</b></small>
				<date class="card-address--info">Revista Signa, nº 28, pp. 353-371</date>
			</div>
		</div>
	</article>

