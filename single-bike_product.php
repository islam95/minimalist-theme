<?php

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>');
					echo get_field('colour');
					echo get_field('price');
					echo get_field('sku_code');
				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();


