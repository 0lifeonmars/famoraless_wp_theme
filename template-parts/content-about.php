<?php
/**
 * Template part for displaying about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Famoraless_Portafolio
 */
?>

<div class="container-loader">
    <div id="about">
        <div class="header">
            <div class="color">
                <span class="profile-image">
                    <img src="<?= the_post_thumbnail_url(); ?>" class="profile">
                    <h2><?= the_title();?></h2>
                    <a href="#scroll_top" class="btn-scrolldown">
                        <img src="<?= get_template_directory_uri().'/assets/images/icons/icon_scrolldown.png'; ?>" class="scrolldown" alt="">
                    </a>
                </span>
            </div>
        </div> 
    
        <div id="scroll_top" class="container-fluid mt-80px p-0 wow animate__animated animate__backInLeft" data-wow-duration="1000ms">
            <div class="row row-80 mx-auto my-0 p-0 scroll-element">
               <div class="col-lg-9 order-2 order-lg-1">
                    <div class="card">
                        <div class="content d-flex flex-column justify-content-center align-items-center">
                            <?= the_content();?>
                        </div>   
                    </div>
               </div> 
            
               <div class="col-lg-3 mb-4 mb-md-0 order-1 order-lg-2 d-flex justify-content-center align-items-center">
                    <img src="<?= get_template_directory_uri().'/assets/images/avatars/avatar_01.png'; ?>" class="d-block mx-auto img-avatar-01" alt=""> 
               </div>
            </div>
        </div>
    
        <div class="container-fluid mt-120px p-0 wow animate__animated animate__backInDown" data-wow-duration="1000ms">
            <div class="row row-80 mx-auto my-0 p-0">
                <div class="col-lg-12">
                    <h3 class="about-subtitle"><?= the_field('about_title_one'); ?></h3>
                    <span class="hr">&nbsp;</span>
                </div>
            </div>
    
            <div class="row row-80 mx-auto my-0 p-0">
                <?php
                    $temp = $wp_query;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $post_per_page = -1; // -1 shows all posts
                    $args = array(
                        'post_type' => 'fortaleza',
                        'orderby' => 'date',
                        'order' => 'DES',
                        'paged' => $paged,
                        'posts_per_page' => $post_per_page
                    );
                        
                    $wp_query = new WP_Query($args);

                    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                    
                <div class="col-lg-6 mb-4">
                    <div class="skill-card">
                        <div class="content d-flex flex-column-reverse flex-lg-row-reverse justify-content-center align-items-center">
                            <h4><?= get_the_title(); ?></h4>
                            <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="icon mb-3 mb-lg-0" alt="">
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

        <div id="services" class="container-fluid mt-120px p-0">
            <div class="row row-80 mx-auto my-0 p-0">
                <div class="col-lg-12">
                    <h3 class="about-subtitle"><?php the_field('about_title_two'); ?></h3>
                    <span class="hr">&nbsp;</span>
                </div>
            </div>
    
            <div class="row row-80 mx-auto my-0 p-0">
                <?php
                    $temp = $wp_query;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $post_per_page = -1; // -1 shows all posts
                    $args = array(
                        'post_type' => 'servicio',
                        'orderby' => 'date',
                        'order' => 'DES',
                        'paged' => $paged,
                        'posts_per_page' => $post_per_page
                    );
                        
                    $wp_query = new WP_Query($args);

                    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card">
                        <div class="content">
                            <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="strengths-icon" alt="">
                            <h4 class="strengths-title"><?= get_the_title(); ?></h4>
                            <?= get_the_content();?>
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
    
        <div class="container-fluid mt-120px p-0 wow animate__animated animate__backInRight" data-wow-duration="1000ms">
            <div class="row row-80 mx-auto my-0">
                <div class="col-lg-12">
                    <h3 class="about-subtitle"><?php the_field('about_title_three'); ?></h3>
                    <span class="hr">&nbsp;</span>
                </div>
            </div>
    
            <div class="row row-80 mx-auto my-0">
                <?php
                    $temp = $wp_query;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $post_per_page = -1; // -1 shows all posts
                    $args = array(
                        'post_type' => 'habilidad',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'paged' => $paged,
                        'posts_per_page' => $post_per_page
                    );
                        
                    $wp_query = new WP_Query($args);

                    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <!--FLIP CONTENT
                    ====================-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <!--FLIP CONTENT: Front Card -->
                            <div class="flip-card-front">
                                <!-- Front Card: Skill -->
                                <div class="skill-card">
                                    <div class="content">
                                        <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="logo" alt="">
                                    </div>
                                </div>
                            </div>
    
                            <!-- FLIP CONTENT: Back Card -->
                            <div class="flip-card-back">
                                <!-- FLIP CONTENT: Back Card -->
                                <div class="skill-card">
                                    <div class="content">
                                        <!-- Back Card: Title -->
                                        <h4><?= get_the_title(); ?></h4>
    
    
                                        <!-- Back Card: Grafic -->
                                        <span class="skill-container">
                                            <span class="skill-percent" style="width: <?php the_field('skill_percent'); ?>%;">&nbsp;</span>
                                        </span>
    
                                        <!-- Back Card: Percent -->
                                        <p><?php the_field('skill_percent'); ?>%</p>
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
            </div>
        </div>
    
        <div class="container-fluid mt-120px p-0 wow animate__animated animate__backInLeft" data-wow-duration="1000ms">
            <div class="row row-80 mx-auto my-0 p-0">
                <div class="col-lg-12">
                    <h3 class="about-subtitle"><?php the_field('about_title_four'); ?></h3>
                    <span class="hr">&nbsp;</span>
                </div>
            </div>
    
            <div class="row row-80 mx-auto my-0 p-0">
                <div class="col-xl-6 mb-4 mb-xl-0 p-0 d-flex justify-content-center align-items-center">
                    <ul class="social-menu">
                        <li>
                            <a href="<?php the_field('about_link_facebook'); ?>" target="_blank">
                                <span class="bi bi-facebook"></span>
                            </a>
                        </li>
    
                        <li>
                            <a href="<?php the_field('about_link_twitter'); ?>" target="_blank">
                                <span class="bi bi-twitter"></span>
                            </a>
                        </li>
    
                        <li>
                            <a href="<?php the_field('about_link_instagram'); ?>" target="_blank">
                                <span class="bi bi-instagram"></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php the_field('about_link_behance'); ?>" target="_blank">
                                <span class="bi bi-behance"></span>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="col-xl-6 m-0 p-0 d-flex justify-content-center align-items-center">
                    <img src="<?= get_template_directory_uri().'/assets/images/avatars/avatar_02.png'; ?>" class="img-avatar-02" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
