<?php
 $slides_count = intval(get_option('slider_count'));
 for ($i = 0; $i <= $slides_count; $i++) {
        $slide_title[] = get_option('hero_slider_title'.$i, 'GARANTIZA EL BIENESTAR DE TUS');
        $slide_content[] = get_option('hero_slider_content'.$i, 'EMPLEADOS CON POSITIVA');
        $background_img[] = esc_attr(get_option('hero_slider_bacground_img'.$i));
 }
   
?>
 <div class="hero-container disp-flex-row" id="hero">
            <div class="disp-flex-row hero-slider hero-slider">
            <?php
            for ($i = 1; $i <= $slides_count; $i++) {
                if(empty($background_img[$i])){
                    $background_img[$i] = get_template_directory_uri() . '/assets/images/herobackground.png';
                }
            
                echo "<div class='slider-body'  style='background-image:url(".$background_img[$i].");'>";
          
                echo    "<div class='slide'>";
                echo        ' <div class="text-holder" id="text-holder">';
                    
                    if ( ! empty( $slide_title[$i] ) || ! empty( $slide_content[$i] ) ) {
                        echo '<p>';
                        echo '<strong>';
                        echo $slide_title[$i];
                        echo '</strong>';
                        echo '</p>';
                        echo '<p>';
                        echo  $slide_content[$i];
                        echo '</p>';
                    }
                    else {
                        echo ' <p>
                        GARANTIZA <span>EL</span> BIENESTAR <br />
                        <span><strong>DE TUS </strong></span><br />
                        <strong>EMPLEADOS</strong> <br />
                        <span>CON</span> <strong>POSITIVA</strong>
                        </p>';
                    }
               
                echo   '  </div>';
                echo  '</div>';
                echo ' </div>';
                        }
                ?> 
    
            </div>
        </div> 
        <?php
