<?php
/**
 * Template part for displaying recommendations page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Famoraless_Portafolio
 */
?>
<div class="content-loader">
    <div id="portfolio">
        <div class="desktop">
            <div class="row w-100 m-0 p-0">
                <div class="col-lg-12 m-0 p-0">
                    <video autoplay muted loop>
                        <source src="<?= get_template_directory_uri().'/assets/videos/backdrop_01.mp4';?>" type="video/mp4">
                    </video>
                </div>
    
                <div class="col-lg-12 m-0 p-0">
                    <div class="portfolio-content">
                        <span class="float">
                            <h2><?= the_title();?></h2>
                        </span>
                        
                        <div class="slider_circle_10">
                            <?php
                                $temp = $wp_query;
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $post_per_page = -1; // -1 shows all posts
                                $args = array(
                                    'post_type' => 'post',
                                    'orderby' => 'date',
                                    'order' => 'DES',
                                    'paged' => $paged,
                                    'posts_per_page' => $post_per_page
                                );
                                    
                                $wp_query = new WP_Query($args);

                                if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>

                            <div class="slide">
                                <div class="card">
                                    <div class="content">
                                        <figure>
                                            <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="thumbnail" alt="">
                                            <figcaption>
                                                <button type="button" class="btn btn-modal-<?= get_the_ID();?>" data-toggle="modal" data-target="#modal-">ver portfolio</button>
                                            </figcaption>
                                        </figure>
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
            
                            <button type="button" class="btn next_button">&nbsp;</button>  
                            <button type="button" class="btn prev_button">&nbsp;</button>  
                        </div> 
                    </div>
                </div>
            </div>
        </div> 
    
        <div class="mobile">
            <div class="header">
                <div class="color">
                    <span class="profile-image">
                        <h2><?= the_title();?></h2>
                        <a href="#scroll_top" class="btn-scrolldown">
                            <img src="<?= get_template_directory_uri().'/assets/images/icons/icon_scrolldown.png'; ?>" class="scrolldown" alt="">
                        </a>
                    </span>
                </div>
            </div>
    
            <div id="scroll_top" class="container-fluid mt-80px p-0">
                <div class="row row-80 mx-auto my-0 p-0 contents">
                    <?php
                        $temp = $wp_query;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $post_per_page = -1; // -1 shows all posts
                        $args = array(
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' => 'DES',
                            'paged' => $paged,
                            'posts_per_page' => $post_per_page
                        );
                                    
                        $wp_query = new WP_Query($args);

                        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>

                    <div class="col-md-12 mb-5">
                        <div class="card">
                            <div class="content">
                                <figure>
                                    <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="thumbnail" alt="">
                                    
                                    <figcaption>
                                        <button type="button" class="btn btn-modal-<?= get_the_ID();?>">ver portfolio</button>
                                    </figcaption>
                                </figure>
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
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = -1; // -1 shows all posts
        $args = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DES',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
                                    
        $wp_query = new WP_Query($args);

        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
    
    <div id="modal-<?= get_the_ID();?>" class="modal modal-fade d-none">
        <button type="button" class="btn-modal-close">x</button>
    
        <div class="modal-content">
           <div class="header" style="background-image: url('<?= the_field('portfolio_img_header'); ?>');">
               <div class="color">
                    <h2><?= get_the_title(); ?></h2>
                </div>
           </div>
    
           <div class="container-fluid">
                <div class="row w-100 mx-auto my-4 p-0">
                    <div class="col-xl-8 mb-5 d-flex flex-column justify-content-center description">
                        <?= get_the_content();?>
                    </div>
    
                    <div class="col-xl-4 mb-5">
                        <div class="modal-card modal-card-pink">
                            <h3>Cliente</h3>
                            <p><?= the_field('portfolio_client'); ?></p>
    
                            <h3>Servicio</h3>
                            <p><?= the_field('portfolio_service'); ?></p>
    
                            <h3>Tipo</h3>
                            <p><?= the_field('portfolio_type'); ?></p>
                        </div>
                    </div>
    
                
                    <div class="col-lg-12 mb-5">
                       <img src="<?= the_field('portfolio_img_mockup'); ?>" class="d-block mx-auto img-responsive" alt="">
                    </div>
    
    
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="modal-card modal-card-blue">
                            <h3>Autores</h3>
                            <p class="text-center"><?= the_field('portfolio_author'); ?></p>
    
                            <h3>Tecnologías Empleadas</h3>
                            <p class="text-center"><?= the_field('portfolio_technology'); ?></p>
                        </div>
                    </div>
                    
    
                    <div class="col-lg-6">
                        <div class="modal-card modal-card-yellow">
                            <h3>acciones</h3>
    
                            <a href="<?= the_field('portfolio_demo'); ?>" target="_blank" class="btn"><span class="bi bi-eye-fill">&nbsp;</span>demo</a>
                            <a href="<?= the_field('portfolio_behance'); ?>" target="_blank" class="btn"><span class="bi bi-behance">&nbsp;</span>proyecto</a>
                            <a href="<?= the_field('portfolio_github'); ?>" target="_blank" class="btn"><span class="bi bi-github">&nbsp;</span>repositorio</a>
                        </div>
                    </div>
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