<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Bike Store logo" />
        </a>
		<div class="site-info">
            <span>Tel: 0141 123 4567</span>
			<a href="https://facebook.com/glasgowbikestore">
                <span class="icon">
                <i class="fab fa-facebook fa-2x"></i>
                </span>
            </a>
            <a href="https://twitter.com/glasgowbikestore">
                <span class="icon">
                    <i class="fab fa-twitter fa-2x"></i>
                </span>
            </a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
