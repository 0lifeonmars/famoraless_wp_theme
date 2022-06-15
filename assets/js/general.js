jQuery(document).ready(function($){
    /**
     * DOM TAGS
     */
    var tag_loader = $('#loader');
    var tag_nav_link_general = $('nav .pushy-content ul');
    var tag_nav_link_contact = $('.item-contact a');
    var tag_nav_social_link_general = $('.pushy-social ul, header .social-media');
    var tag_modal_contact = $('#contact');
    var tag_modal_btn_close = $('.btn-contact-close, .btn-modal-close');
    var tag_body = $('body');
    var tag_contact_form = $('#form-contact');
    var tag_alert = $('#alert');
    var tag_alert_btn = $('.btn-alert-close');
    var tag_slider_portfolio = $('.slider_circle_10');
    var tag_portfolio_mobile_loadmore_content = $('#portfolio .contents');
    var tag_btn_scrolldown = $('.btn-scrolldown');
    var tag_htmlbody = $('html, body');
    var tag_scrolltop = $('#scroll_top');
    var tag_recommendations_slider = $('.slider_one_big_picture');

    /**
    * FUNCIONES
    */
    function abrirModal(a, b){ // FUNCION PARA ABRIR MODALES
        a.on('click', function(e){ // al hacer clic en el tag para levantar una modal
            if(b.hasClass('d-none')){ // si la modal tiene la clase d-none
                e.preventDefault(); // prevenimos default
                tag_body.addClass('overflow-hidden');  // fijamos el scroll del body
                b.removeClass('d-none'); // removemos clase d-none para mostrar modal
            }
        });
    }

    function closeModal(a, b){ // FUNCION PARA CERRAR MODALES
        a.on('click', function(e){ // al hacer clic en el tag para cerrar una modal
            if(!b.hasClass('d-none')){ // si "A" modal NO tiene clase d-none
                e.preventDefault(); // prevenimos default
                b.addClass('d-none'); // agregamos clase al modal d-none para ocultarla
                tag_body.removeClass('overflow-hidden'); // restauramos el scroll del body   
            }
        });
    }

    /**
    * AL CARGAR PAGINA
    */
    tag_loader.delay(5000).fadeOut(0); // desaparece en 5s el loader
    new WOW().init(); // activamos efectos del plugin WOW

    /**
    * MENU NAV
    */
    $.getJSON('https://famoraless.com/wp-json/menus/v1/menus/3', (menu) =>{ //obtenemos datos del WP-JSON
       var items = menu.items; // Conseguimos array de elementos menu en variable
    
       /* PLANTILLA MENÚ PRINCIPAL*/
       tag_nav_link_general.prepend(`
            <li class="pushy-link"><a href="${items[0].url}" class="item-profile"><span class="bi bi-house-fill"></span>inicio</a></li>
            <li class="pushy-link"><a href="${items[1].url}" class="item-about"><span class="bi bi-person-circle"></span>sobre mí</a></li>
            <li class="pushy-link"><a href="${items[3].url}" class="item-recom"><span class="bi bi-hand-thumbs-up-fill"></span>recomendaciones</a></li>
            <li class="pushy-link"><a href="${items[2].url}" class="item-portfolio"><span class="bi bi-briefcase-fill"></span>portafolio</a></li>
        `);
    });

    $.getJSON('https://famoraless.com/wp-json/menus/v1/menus/4', (social) => {
        var items_social = social.items;
        console.log(items_social);
        /* PLANTILLA MENÚ REDES SOCIALES */
        tag_nav_social_link_general.prepend(`
            <li><a href="${items_social[0].url}" target="_blank"><span class="bi bi-github"></span></a></li>
            <li><a href="${items_social[1].url}" target="_blank"><span class="bi bi-linkedin"></span></a></li>  
            <li><a href="${items_social[2].url}" target="_blank"><span class="bi bi-stack-overflow"></span></a></li>
            <li><a href="${items_social[3].url}" target="_blank"><span class="bi bi-behance"></span></a></li>
        `);
    });


    /**
     * MODALES POST
     */
    $.getJSON('https://famoraless.com/wp-json/wp/v2/posts', (data) => {
        $.each(data, (i, data)=>{
            let select = String(data.id);
            let modal = $('#modal-'+ select);
            let button = $('.btn-modal-' + select);
            abrirModal(button, modal);
            closeModal(tag_modal_btn_close, modal);
        });
    });
    

    /**
    * CONTACTO
    */

    /* Valide Plugin */
    tag_contact_form.validate();

    /* Modal contacto */
    abrirModal(tag_nav_link_contact, tag_modal_contact);
    closeModal(tag_modal_btn_close, tag_modal_contact);

    /* Cerrar alertas contacto */
    closeModal(tag_alert_btn, tag_alert);

    /**
    * PORTFOLIO
    */
    
    /* PLUGIN EasySlides (DESKTOP)*/
    tag_slider_portfolio.EasySlides({
        'show': 13, // número de sliders a mostrar
        'autoplay': true, // autoplay para el slider
        'timeout': 6000, // tiempo para cambiar el slider
        'touchevents': false // slider sin movimiento manual
    });

    /* PLUGIN simpleLoadMore (MOBILE) */
    tag_portfolio_mobile_loadmore_content.simpleLoadMore({ 
        item: '.col-md-12', // eligir item
        count: 2, // cantidad a mostrar
        itemsToLoad: 1, // cantidad a cargar
        btnHTML: '<button type="button" class="load-more__btn">cargar más</button>' //boton HTML para acción
    });

    /**
    * RECOMMENDATIONS
    */
    
    /* PLUGIN EasySlides */
    tag_recommendations_slider.EasySlides({
        'show': 3, // numeros de slides a mostrar
        'autoplay': true, // autoplay para el slider
        'timeout': 6000, // tiempo para cambiar el slider
        'touchevents':  false // slider sin movimiento manual
    });

    tag_btn_scrolldown.on('click', function(event) {// Add smooth scrolling to all links
        if (this.hash !== "") { // Make sure this.hash has a value before overriding default behavior
            event.preventDefault(); // Prevent default anchor click behavior
            var hash = this.hash; // Store hash

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            tag_htmlbody.animate({scrollTop: $(hash).offset().top + tag_scrolltop.height()}, 800, function(){           
                window.location.hash = hash;  // Add hash (#) to URL when done scrolling (default click behavior)
            });
        } // End if
    });
});