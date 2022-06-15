<?php
/**
 * Template part for displaying recommendations page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Famoraless_Portafolio
 */
?>

<div id="recommendations">
    <div class="row w-80 h-100 mx-auto my-0 p-0">
        <div class="col-lg-12 h-100 m-0 p-0">
            <span class="float">
                <h2><?= the_title();?></h2>
            </span>
            <div class="slider slider_one_big_picture">
                <?php
                    $temp = $wp_query;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $post_per_page = -1; // -1 shows all posts
                    $args = array(
                        'post_type' => 'recomendacion',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'paged' => $paged,
                        'posts_per_page' => $post_per_page
                    );
                        
                    $wp_query = new WP_Query($args);

                    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>

                <div class="slide">
                    <div class="card">
                        <div class="row w-100 h-100 m-0 p-0">
                            <div class="col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                                <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="d-block mx-auto" alt="">
                                <a href="<?php the_field('recommendations_link'); ?>" class="d-none d-lg-block" target="_blank"><span class="bi bi-linkedin">&nbsp;</span></a>
                            </div>

                            <div class="col-lg-8 d-flex flex-column justify-content-center">
                                <blockquote>
                                    <?php the_field('recommendations_quote'); ?>
                                </blockquote>

                                <p><?= get_the_title(); ?></p>

                                <a href="<?php the_field('recommendations_link'); ?>" class="d-block d-lg-none" target="_blank"><span class="bi bi-linkedin">&nbsp;</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    endwhile;
                    else : 
                ?>
                    no hay contenido que mostrar
                <?php 
                    endif;
                    wp_reset_query();
                    $wp_query = $temp;
                ?>
            
                <span class="nav_indicators">&nbsp;</span>
            </div>
        </div>
    </div>
</div>