<?php
/**
 * The products archive
 *
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

        Products:
		<?php

		if ( have_posts() ) :
            ?>

        <table border="1">
            <tr>
                <th>Product Name</th>
                <th>Colour</th>
                <th>Price</th>
                <th>SKU Code</th>
                <th>Delete</th>
            </tr>
        <?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

			?>
            <tr>
                <td> <?php the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>'); ?> </td>

            <?php
			echo '<td>',get_field('colour'),'</td>';
			echo '<td>',get_field('price'),'</td>';
			echo '<td>',get_field('sku_code'),'</td><td>x</td></tr>';

			endwhile;
			?>

        </table>
            <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
