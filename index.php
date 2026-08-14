<?php
get_header();
?>

<main id="primary" class="site-main">
	<div class="content-shell">
		<div class="content-shell__inner">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
						<header class="entry-header">
							<?php if ( is_singular() ) : ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
							<?php else : ?>
								<h2 class="entry-title">
									<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
								</h2>
							<?php endif; ?>

							<div class="entry-meta">
								<?php echo esc_html( get_the_date() ); ?>
							</div>
						</header>

						<div class="entry-content">
							<?php the_content(); ?>
						</div>

						<?php if ( ! is_singular() ) : ?>
							<footer class="entry-footer">
								<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'pct' ); ?></a>
							</footer>
						<?php endif; ?>
					</article>
				<?php endwhile; ?>

				<div class="page-nav">
					<?php the_posts_pagination(); ?>
				</div>
			<?php else : ?>
				<section class="no-content">
					<h1 class="page-title"><?php esc_html_e( 'Nothing here yet', 'pct' ); ?></h1>
					<p><?php esc_html_e( 'Add your first content and it will appear here.', 'pct' ); ?></p>
				</section>
			<?php endif; ?>
		</div>
	</div>
</main>

<?php
get_footer();
