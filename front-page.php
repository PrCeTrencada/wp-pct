<?php
get_header();
?>

<main class="site-main">
	<h2 class="welcome-title">Us donem la benvinguda al <span class="gold">Projecte 'Ce Trencada'</span>!</h2>

	<div class="concept-shell home-layout">
		<div class="home-column home-column-left">
			<div class="info-block">
				<h3>Propòsit</h3>
				<p>La fita màxima del Projecte 'Ce Trencada' és la seva dissolució, perquè voldrà dir que haurem aconseguit tots els nostres objectius, però per ara, encara queda molta feina per fer. Ens dónes un cop de mà?</p>
				<a class="cta-link" href="https://cetrencada.cat/collabora/">Col·labora</a>
			</div>

			<div class="info-block">
				<h3>Objectius</h3>
				<p>• Normalització dels videojocs en català.<br>• Preservació cultural de la llengua.<br>• Pressió per a la regularització digital.<br>• Creació d'interès per a la llengua catalana.</p>
				<a class="cta-link" href="https://cetrencada.cat/ce-trencada/">Coneix el Projecte</a>
			</div>

			<div class="info-block">
				<h3>La comunitat</h3>
				<p>A banda dels projectes oficials del Projecte 'Ce Trencada', la nostra comunitat tradueix i posa a la vostra disposició molts més jocs per a poder gaudir en català.</p>
				<a class="cta-link retro" href="https://comunitat.cetrencada.cat/">Comunitat 'Ce Trencada'</a>
			</div>

			<div class="info-block">
				<h3>Xarxes socials</h3>
				<div class="social-row">
					<a class="social-button" href="https://discord.com/invite/NmkJVYChVe" target="_blank" rel="noopener noreferrer" aria-label="Discord"><img src="https://cetrencada.cat/comunitat/img/discord_blanc.png" alt="Discord" /></a>
					<a class="social-button" href="https://twitter.com/PrCeTrencada" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><img src="https://cetrencada.cat/comunitat/img/twitter_blanc.png" alt="Twitter" /></a>
					<a class="social-button" href="https://www.instagram.com/projectecetrencada/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img src="https://cetrencada.cat/comunitat/img/instagram_blanc.png" alt="Instagram" /></a>
					<a class="social-button" href="https://www.youtube.com/@projectecetrencada" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><img src="https://cetrencada.cat/comunitat/img/youtube_blanc.png" alt="YouTube" /></a>
					<a class="social-button" href="https://t.me/noticies_projecte_ce_trencada" target="_blank" rel="noopener noreferrer" aria-label="Telegram"><img src="https://cetrencada.cat/comunitat/img/telegram.png" alt="Telegram" /></a>
					<a class="social-button" href="https://mastodont.cat/@ProjecteCeTrencada" target="_blank" rel="noopener noreferrer" aria-label="Mastodon"><img src="https://cetrencada.cat/comunitat/img/mastodon.svg" alt="Mastodon" /></a>
					<a class="social-button" href="https://www.notion.so/projectecetrencada/Inici-067eb46eb35b4b35bf0c55ab694bff09?pvs=4" target="_blank" rel="noopener noreferrer" aria-label="Notion"><img src="https://cetrencada.cat/comunitat/img/notion_negre.png" alt="Notion" /></a>
				</div>
			</div>
		</div>

		<div class="home-column home-column-right">
			<p class="home-lead">Descobreix els <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>">projectes oficials</a> més recents:</p>

			<div class="feature-grid">
				<?php
				$recent_posts = new WP_Query(
					array(
						'post_type' => 'post',
						'posts_per_page' => 2,
						'post_status' => 'publish',
					)
				);
				if ( $recent_posts->have_posts() ) :
					while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
						<article class="feature-card">
							<a class="cartell" href="<?php the_permalink(); ?>">
								<h3 class="card-title"><?php the_title(); ?></h3>
							</a>
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
							<?php endif; ?>
							<span class="meta"><?php echo esc_html( get_the_date() ); ?></span>
							<p class="excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<article class="feature-card">
						<h3 class="card-title">Sense entrades publicades</h3>
						<p class="excerpt">Les entrades aniran apareixent aquí.</p>
					</article>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
