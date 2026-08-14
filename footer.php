<?php
?>
<footer class="site-footer">
	<div class="site-footer__inner">
		<nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e('Footer Menu', 'pct'); ?>">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer',
				'menu_class' => 'menu',
				'container' => false,
				'fallback_cb' => 'pct_page_menu_fallback',
			));
			?>
		</nav>
		<p>
			COPYRIGHT ©  <?php echo esc_html(gmdate('Y')); ?> Projecte 'Ce Trencada'<br>
			Disseny de: <a class="theme-credit" href="https://github.com/Nilcm01" target="_blank" rel="noopener noreferrer">Nilcm01</a> (tema <span class="groc">PCT v1.00</span>)
		</p>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>