<?php
/**
 * Template part for displaying home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Famoraless_Portafolio
 */
?>

<div id="profile">
    <div class="row w-100 m-0 p-0">
        <div class="col-lg-12 m-0 p-0 position-relative">
            <video autoplay muted loop>
                <source src="<?= get_template_directory_uri().'/assets/videos/backdrop_01.mp4';?>" type="video/mp4">
            </video>
        </div>
            
        <div class="col-lg-12 m-0 p-0">
            <div class="profile-content">
                <img src="<?= the_post_thumbnail_url(); ?>" alt="profile-image">
                    
                <div class="profile-info">
                    <h2><?php the_field('profile_title'); ?></h2>
                    <p><?php the_field('profile_subtitle'); ?></p>

                    <span>
                        <a href="<?php the_field('profile_link_portfolio'); ?>" class="btn btn-portfolio">mi portafolio</a> 
                        <a href="<?php the_field('profile_link_services'); ?>" class="btn btn-about">mis servicios</a> 
                    </span>  
                </div>
            </div> 
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($){
        $.getJSON('http://localhost/wp/wp-json/menus/v1/menus/pushy-menu', (pushy) => {
            console.log(pushy.items[1].url);
            var test = pushy.items[1].url;
            $(".item-profile a").attr("href", test);
        });
    });
</script>
