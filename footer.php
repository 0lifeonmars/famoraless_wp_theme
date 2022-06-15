<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Famoraless_Portafolio
 */

?>

	    <!--FOOTER
        ================================-->
        <footer class="push">
            <div class="row w-80 mx-auto my-0 p-0">
                <div class="col-lg-6 m-0 p-0">
                    <?php 
                        if (is_active_sidebar('footer_col_one')) : dynamic_sidebar('footer_col_one');
                        endif;
                    ?>
                </div>

                <div class="col-lg-6 m-0 p-0">
                    <?php 
                        if (is_active_sidebar('footer_col_two')) : dynamic_sidebar('footer_col_two');
                        endif;
                    ?>
                </div>
            </div>
        </footer>

        <!-- CONTACT MODAL
        ================================-->
        <div id="contact" class="modal-fade d-none">
            <button type="button" class="btn-contact-close">X</button>
            <div class="content">
                <div class="row w-100">
                    <div class="col-lg-12">
                        <h2>¡Contáctame!</h2>    
                    </div>
                </div>

                <div class="row w-100">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <form id="form-contact" action="" class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <label for="form-name">nombre</label>
                                <input type="text" name="form-name" id="form-name" maxlength="150" value="" placeholder="ingresa tu nombre aquí" required>
                            </div>

                            <div class="col-lg-12 d-flex flex-column">
                                <label for="form-email">correo</label>
                                <input type="email" name="form-email" id="form-email" maxlength="150" value="" placeholder="ingresa tu correo aquí" required>
                            </div>

                            <div class="col-lg-12 d-flex flex-column">
                                <label for="form-message">mensaje</label>
                                <textarea name="form-message" id="form-message" value="" maxlength="5000" placeholder="ingresa el motivo de tu contacto aquí" required></textarea>
                            </div>

                            <div class="col-lg-12 d-flex flex-column">
                                <input type="submit" name="form-submit" id="form-submit" value="envíar">
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-4 order-1 order-xl-2 mb-5 mb-xl-0 contact-info d-flex flex-column justify-content-center align-items-center">
                      <img src="<?= get_template_directory_uri().'/assets/images/avatars/avatar_03.png';?>" alt="">
                      <p>¿Te ha gustado mi trabajo?, entonces siéntete libre de comunicarte conmigo para coordinar la gestión de tu portal web o proyecto digital.</p>
                      <div>
                        <a href="#" target="_blank"><span class="bi bi-facebook"></span></a>
                        <a href="#" target="_blank"><span class="bi bi-twitter"></span></a> 
                        <a href="#" target="_blank"><span class="bi bi-instagram"></span></a> 
                        <a href="#" target="_blank"><span class="bi bi-behance"></span></a> 
                      </div>  
                    </div>
                </div>
            </div>
        </div>

        <div id="alert">
            <button type="button" class="btn-alert-close">X</button>
            
            <div class="error">
                <div class="row w-100 h-100 m-0 p-0">
                    <div class="col-lg-2 mb-4 mb-lg-0 d-flex justify-content-center align-items-center">
                        <img src="<?= get_template_directory_uri().'/assets/images/icons/icon_contact_false.png'; ?>" alt="">
                    </div>
                    
                    
                    <div class="col-lg-10 d-flex align-items-center">
                        <p>¡Lo sentimos! tu mensaje no pudo ser enviado, inténtalo nuevamente.</p>
                    </div>
                </div>
            </div>

            <div class="true">
                <div class="row w-100 h-100 m-0 p-0">
                    <div class="col-lg-2 mb-4 mb-lg-0 d-flex justify-content-center align-items-center">
                        <img src="<?= get_template_directory_uri().'/assets/images/icons/icon_contact_true.png'; ?>" alt="">
                    </div>
                    
                    
                    <div class="col-lg-10 d-flex align-items-center">
                        <p>El mensaje de contacto fue enviado exitosamente</p>
                    </div>
                </div>
            </div>
        </div>

       
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
