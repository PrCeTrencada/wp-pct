<?php
get_header();
?>

<main class="site-main">
	<div class="concept-shell page-shell">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="single-main">
					<h1 class="cartell"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
