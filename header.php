<!DOCTYPE html>
<html lang="en">
<head>
    <title>Positiva</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>./assets/pluggins/slick_slider/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>./assets/pluggins/slick_slider/slick/slick.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&family=Titillium+Web&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

<div class="wrapper" id="wrapper" style="background-color:white;">
        <div class="hidden-div sticky">
            <div class="user-login top-section">
                <div class="cover">
                    <div class="credentials-holder disp-flex-row">
                        <div class="left disp-flex-row Ayuda">
                        <a href="<?php echo esc_url(get_option('top_bar_button_url', '#')); ?>">
                            <button>
                                <p><?php echo get_option('top_bar_button_text', 'button'); ?></p>
                            </button>
                            </a>
                            <div class="date-time holder disp-flex-row">
                                <p>
                                    <strong><?php echo get_option('notification', ''); ?></strong>
                                </p>
                            </div>
                            <div class="holder disp-flex-row mhidden">
                                <p>
                                    <strong><?php echo date("l Y m d");?></strong>
                                </p> 
                            </div>
                        </div>
                        <div class="right disp-flex-row">
                            <div class="holder disp-flex-col icon">
                                <div class="top disp-flex-row">
                                <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/icon.png" alt="Postitova Logo" title="Home" />';?>
                                    <p><?php echo get_option('work_process', 'Proceso ante accidente laboral'); ?></p>
                                </div>
                                <div class="bottom disp-flex-row">
                                    <button class="upface">
                                    <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/upface.png" alt="shape" title="Home" />';?>
                                    </button>
                                </div>
                            </div>
                            <div class="holder disp-flex-col">
                                <div class="top disp-flex-row">
                                    <p>
                                        <a href="" class="no-decration"><?php echo get_option('user_login', 'Iniciar sesión '); ?></a>
                                    </p>
                                    <button class="user-icon">
                                    <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/usericon.png" alt="shape" title="Home" />';?>
                                    </button>
                                </div>

                                <div class="bottom disp-flex-row">
                                    <button class="upface">
                                    <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/upface.png" alt="shape" title="Home" />';?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty" id="empty">
                <div class="cover"></div>
            </div>
            
            <div class="logo-holders">
                <div class="cover">
                    <div class="left disp-flex-row logo-left">
                        <a href="/" class="no-decration">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="positiva-logo">';
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/positiva_logo.png" alt="Postitova Logo" title="Home" />';
                        }
                        ?>
                        </a>
                        <button onclick="show_hideNav()" id="toggle">
                        <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/feather_menu.png" alt="feather_menu" title="feather_menu" />';?>
                        </button>
                    </div>
                    <div class="right disp-flex-row logo-right">
                    <a href="#">
                    <?php
                        // Output the uploaded image
                        $uploaded_image_url = get_option('secondary_image');

                        if ($uploaded_image_url) {
                            echo '<img src="' . esc_url($uploaded_image_url) . '" alt="Uploaded Image">';
                        } else {
                            // Display a default image or text if no image is uploaded
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/unilogo.png" alt="Postitova Logo" title="Home" />';
                        }
                        ?>
                        </a>
                        <?php
                        // Output the uploaded image
                        $newuploaded_image_url = get_option('x_secondary_image');

                        if ($newuploaded_image_url) {
                            echo '<img src="' . esc_url($newuploaded_image_url) . '" alt="Uploaded Image">';
                        } else {
                            // Display a default image or text if no image is uploaded
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/unilogo1.png" alt="Postitova Logo" title="Home" />';

                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="nav-bar" id="nav">
                <div class="cover disp-flex-row nav-cover">
                <div class="right disp-flex-row logo-right mobile-logos">
                    <a href="#">
                    <?php
                        // Output the uploaded image
                        $uploaded_image_url = get_option('secondary_image');

                        if ($uploaded_image_url) {
                            echo '<img src="' . esc_url($uploaded_image_url) . '" alt="Uploaded Image">';
                        } else {
                            // Display a default image or text if no image is uploaded
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/unilogo.png" alt="Postitova Logo" title="Home" />';
                        }
                        ?>
                        </a>
                        <?php
                        // Output the uploaded image
                        $newuploaded_image_url = get_option('x_secondary_image');

                        if ($newuploaded_image_url) {
                            echo '<img src="' . esc_url($newuploaded_image_url) . '" alt="Uploaded Image">';
                        } else {
                            // Display a default image or text if no image is uploaded
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/unilogo1.png" alt="Postitova Logo" title="Home" />';

                        }
                        ?>
                    </div>
                    <div class="nav-left">
                        <?php
                        // Display the menu with the 'primary' menu location
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'nav-left',
                            'depth'          => 3, // Set the depth to 3 levels
                        ));
                        ?>
                    </div>
             
              
                    <div class="nav-right disp-flex-row">
                    <form class="search-box disp-flex-row" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="text" placeholder="Búsqueda" required name="s" value="<?php echo esc_attr(get_search_query()); ?>" />
                        <button class="s-sub">
                            <?php echo '<img src="' . get_template_directory_uri() . '/assets/images/search.png" alt="Postitova Logo" title="Home" />'; ?>
                        </button>
                    </form>
                </div>

   
            </div>
        </div>
