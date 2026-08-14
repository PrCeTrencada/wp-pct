<?php
get_header();
?>

<main class="site-main">
	<div class="concept-shell archive-shell">
		<div class="archive-header">
			<h1 class="welcome-title groc">Projectes oficials</h1>
			<p class="archive-intro">Aquí trobareu totes les entrades de les traduccions oficials dutes a terme pel Projecte 'Ce Trencada'.</p>
		</div>

		<div class="page-nav">
				<?php the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
				) ); ?>
			</div>

		<?php if ( have_posts() ) : ?>
			<div class="archive-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="archive-card" id="post-<?php the_ID(); ?>">
						<a class="cartell" href="<?php the_permalink(); ?>">
							<h2 class="archive-card__title"><?php the_title(); ?></h2>
						</a>
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
						<?php endif; ?>
						<span class="meta"><?php echo esc_html( get_the_date() ); ?></span>
						<p class="excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
						<!-- <a class="card-link" href="<?php the_permalink(); ?>">Llegir més</a> -->
					</article>
				<?php endwhile; ?>
			</div>

			<div class="page-nav">
				<?php the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
				) ); ?>
			</div>
		<?php else : ?>
			<div class="archive-card">
				<h2 class="archive-card__title">No hi ha entrades encara</h2>
				<p class="excerpt">Afegeix algun contingut perquè aquesta secció tingui publicacions.</p>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
