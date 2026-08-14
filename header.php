<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="site-header">
		<div class="site-branding">
			<a class="site-branding__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<img class="site-logo__image" src="<?php echo esc_url( get_template_directory_uri() . '/concept/img/ce_trencada_logo.png' ); ?>" alt="Projecte Ce Trencada">
				<?php endif; ?>
			</a>

			<div class="site-branding__text">
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php $description = get_bloginfo( 'description', 'display' ); ?>
				<?php if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo esc_html( $description ); ?></p>
				<?php endif; ?>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'pct' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class' => 'menu',
				'container' => false,
				'fallback_cb' => 'pct_page_menu_fallback',
			) );
			?>
		</nav>
	</header>