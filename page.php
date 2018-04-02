<?php get_header(); ?>

	<!-- site-content -->
	<div class="site-content page <?php if (is_account_page()) { echo 'account-page'; }; ?>">
		<?php if (have_posts()) :
			while (have_posts()) :
				the_post();
				get_template_part('content', 'page');
			endwhile;
			else :
				get_template_part( 'content', 'none' );
			endif;?>
	</div>
	<!-- /site-content -->

<?php get_footer(); ?>