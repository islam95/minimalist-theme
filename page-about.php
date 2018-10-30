<?php
get_header();
?>
    <div id="primary">
        <main id="main" class="site-main">
            <?php
            if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                endwhile;
                get_template_part( 'template-parts/content', 'about' );
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
