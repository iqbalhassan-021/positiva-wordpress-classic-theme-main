
<div class="contact-details">
            <div class="cover disp-flex-row">
                <a href="" class="v-image">
                <?php
                    $vertical_image =  esc_attr(get_option('vertical_image'));
                    if(!empty($vertical_image)) {
                        echo '<img src="' . $vertical_image .'" alt="vertical logo" class="v-image"/>';
                    }
                    else{
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/vectorial-img.png" alt="vertical logo" class="v-image"/>';
                    }
                ?>
                </a>
               
                </a>
                <div class="contact-section disp-flex-row">
                    <div class="cards-grid">
             
                        <?php
                            $service_count = get_option('service_grid_count');
                            for($i = 0; $i < $service_count; $i++) {
                                $service_image[] = esc_attr(get_option('service_image'.$i));
                                $service_title[] = esc_attr(get_option('service_title'.$i));
                            }
                           
                            for($i = 0; $i < $service_count; $i++) {
                                echo ' <div class="grid-card disp-flex-col">';
                                if(!empty($service_image[$i])) {
                                    echo '<img src="'.$service_image[$i].'" alt="service" />';
                                }
                                else{
                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/gride-4.png" alt="" />';
                                }
                                if(!empty($service_title[$i])) {
                                    echo ' <a href="">
                                                <span> 
                                                    <p>'
                                                        .$service_title[$i].
                                                    '</p> 
                                                </span>
                                            </a>';
                                }
                                else{
                                    echo ' <a href="">
                                    <span> 
                                        <p>
                                            service title
                                        </p> 
                                    </span>
                                </a>'; 
                                }
                                echo '</div>';
                            }
               
                        ?>  
                    </div>
                    <div class="details disp-flex-col">
                        <div class="details-card disp-flex-row">
                            <div class="vector-holder">
                                <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/phone.png" alt="people" />';?>
                            </div>
                            <div class="detail-text-holder">
                                <a class="p2">Líneas de atención </a>
                                <a class="p3">Comunicate a nivel nacional </a>
                                <a href="tel:01-20000-111-170" title="Lineas de atencion" class="x-p1">01-20000-111-170
                                </a>
                                <a class="p4">En Bogotá </a>
                                <a href="tel:01-20000-111-170" title="Lineas de atencion"  class="p1">01-20000-111-170</a>
                            </div>
                        </div>
                        <div class="details-card disp-flex-row">
                            <div class="vector-holder">

                                <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/location.png" alt="location" />';?>

                            </div>
                            <div class="detail-text-holder">
                                <a class="p2" title="Lipsum" >Puntos de Atención</a>
                                <a class="p3" title="Lipsum" href="https://maps.app.goo.gl/gyV3UcWk6yQtUQim9">Ubica el punto de atención más cercano</a>
                            </div>
                        </div>
              
                        <div class="details-card disp-flex-row">
                            <div class="vector-holder">
                            <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/vector-people.png" alt="people" />';?>
                            </div>
                            <div class="detail-text-holder">
                                <a class="p2" title="lipsum">Directorio de Funcionarios</a>
                            </div>
                        </div>
                        <div class="details-card disp-flex-row">
                            <div class="vector-holder">
                            <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/person.png" alt="person" />';?>
                            </div>
                            <div class="detail-text-holder" title=”Linea Etica”>
                                <a class="p2">Línea Ética</a>
                                <a class="p3">
                                    Presenta aquí tu caso de fraude o corrupción</a>
                                <a href="tel:01-20000-111-170" class="x-p1" style="color: white">01-20000-111-170</a>
                                <a class="p4"><strong>Correo electronico </strong> </a>

                                <a class="p4" href="mailto:email1@gmail.com" class="no-decration">
                                <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/letter.png" alt="email" />';?>
                                    email1@gmail.com
                                </a>

                                <a class="p4" href="mailto:email1@gmail.com"
                                    class="no-decration">
                                    <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/letter.png" alt="email" />';?>
                                    email1@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="supportives">
            <div class="cover disp-flex-row">
                <div class="brand-holder disp-flex-row logos-slider">
                    <div class="brand-holder-left disp-flex-row">
                        <a href="">
                        <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/brand-1.png" alt="brand-1" />';?>
                    </a>
                        <a href="">
     
                            <?php     echo '<img src="' . get_template_directory_uri() . '/assets/images/brand-2.png" alt="brand-2"  />';?>
                        </a>
                        <a href="">
                        
                            <?php    echo '<img src="' . get_template_directory_uri() . '/assets/images/brand-3.png" alt="brand-3"  />';?>
                        </a>
                    </div>
                    <div class="brand-holder-right disp-flex-row">
                        <a href="">

                            <?php   echo '<img src="' . get_template_directory_uri() . '/assets/images/brand-4.png" alt="brand-4"/>';?>
                        </a>
                        <a href="">
                          
                           <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/brand-5.png" alt="brand-5"  />';?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
<div class="footer">
            <div class="cover disp-flex-row">
                <div class="the-footer disp-flex-row">
                    <div class="footer-text-holder disp-flex-col">
                    <p><?php echo get_option('footer_notification', '  Política de privacidad Política editorial Política de seguridad
                            Intranet Admin  Última actualización 12/06/2015 11:45:00 Numero de visitantes:
                            1982448 Este portal funciona mejor en IE7+, Chrome 11+, Firefox
                            10+'); ?></p>
                       
                    </div>
                    <div class="footer-logo-holder">
                    <a href="/" class="no-decration">
                        <?php
                        $custom_logo_id = get_theme_mod( 'footer_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="positiva-logo">';
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/positiva-logo-white.png" alt="Postitova Logo" title="Home" />';
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <!-- slick slider js -->
 
        <script src="<?php echo get_template_directory_uri();?>.'/assets/pluggins/slick_slider/slick/slick.js'"></script>
        <script src="<?php echo get_template_directory_uri();?>.'/assets/pluggins/slick_slider/slick/slick.min.js'"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $(".hero-slider").slick({
            infinite: true,
            autoplay: true,
            arrows: true,
            dots:false,
            prevArrow: '<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/slider-left.png" alt="left-arrow" class="next-prev prev">'; ?>',
            nextArrow: '<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/slider-right.png" alt="left-arrow" class="next-prev next">'; ?>',

          
        });
            });
        </script>

        <script>
        $(".service-slider").slick({
            autoplay: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow:
            '<?php echo '<button class="small-btn-round small-btn-prev"><img src="' . get_template_directory_uri() . '/assets/images/left-arrow.png" alt="left-arrow"></button>';?>',
            nextArrow:
            '<?php echo '<button class="small-btn-round small-btn-next"><img src="' . get_template_directory_uri() . '/assets/images/right-arrow.png" alt="right-arrow"></button>';?>',
            responsive: [
                {
                    breakpoint: 1020,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true,
                    },
                },
            ],
        });
    </script>
    <script>
        $(".x-service-slider").slick({
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            prevArrow:
            '<?php echo '<button class="small-btn-round small-btn-prev"><img src="' . get_template_directory_uri() . '/assets/images/left-arrow.png" alt="left-arrow"></button>';?>',
            nextArrow:
            '<?php echo '<button class="small-btn-round small-btn-next"><img src="' . get_template_directory_uri() . '/assets/images/right-arrow.png" alt="right-arrow"></button>';?>',
            responsive: [
            {
                    breakpoint: 721,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true,
                    },
                },
            {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true,
                    },
                },
            ],
        });
    </script>
        <script>
        $(".image-slider").slick({
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow:'<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/left-arrow-white.png" alt="left-arrow" class="image-slider-arrows prev">;'?>;',
            nextArrow:'<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/right-arrow-white.png" alt="right-arrow" class="image-slider-arrows next">'?>;'
        });
    </script>
            <script>
        $(".news-slider").slick({
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow:'<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/left-arrow-white.png" alt="left-arrow" class="image-slider-arrows prev more-to-pre">;'?>;',
            nextArrow:'<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/right-arrow-white.png" alt="right-arrow" class="image-slider-arrows next more-to-next">'?>;'
        });
    </script>
        <script>
        $(".logos-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            infinite: false,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,

                        dots: true,
                    },
                },
            ],
        });
    </script>
        <script>
        $(".banner-slider").slick({
            infinite: true,
            autoplay: true,
            arrows: false,
            dots: true,
        });
    </script>
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollableDiv = document.getElementById("scrollableDiv");
        const divHeight = scrollableDiv.querySelector('.new-events').clientHeight; // Height of a single div
        const visibleDivs = 3; // Number of visible divs
        const scrollStep = divHeight * visibleDivs;

        document.getElementById("scrollUpBtn").addEventListener("click", function () {
            scrollableDiv.scrollTop -= scrollStep;
        });

        document.getElementById("scrollDownBtn").addEventListener("click", function () {
            scrollableDiv.scrollTop += scrollStep;
        });
    });
</script>

</body>
</html>
