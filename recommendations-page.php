<?php
/**
 * Template Name: Recommendations Page
 */
get_header();
?>

<main id="primary" class="site-main push">

<?php if ( have_posts() ) : ?>
    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'recommendations' );

    endwhile;

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->

<?php
get_footer();