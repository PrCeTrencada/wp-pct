<?php
get_header();
?>

<main class="site-main">
	<div class="concept-shell single-shell">
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="single-main">
					<h1 class="groc"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('large', array('class' => 'entry-hero')); ?>
						<?php endif; ?>
						<span class="single-meta"><?php echo esc_html(get_the_date()); ?></span>
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
