<?php

function theme_customization_page() {
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'manage_options',
        'theme-options',
        'theme_customization',
        'dashicons-admin-generic',
        10
    );
}

add_action('admin_menu', 'theme_customization_page');

function theme_customization() {
    ?>
    <div class="wrap">
        <h2>Theme Options</h2>
        <form method="post" action="options.php">
   
                <!-- All Theme Options Section -->
                <div style="background-color: white; height: auto; border-radius: 12px; padding: 20px;">
                    <?php
                    settings_fields('theme_options_all');
                    do_settings_sections('theme_options_all');
                    ?>
                </div>

            <?php submit_button(); ?>
        </form>
    </div>
   
    <?php
}

function theme_options_all() {
    add_settings_section(
        'all_options_section',
        'All Theme Options',
        'all_options_section_callback',
        'theme_options_all'
    );

    // Header Section
    add_settings_section(
        'header_section',
        'Header Section',
        'header_section_callback',
        'theme_options_all'
    );

    add_settings_field(
        'top_bar_button_text',
        'Top Bar Button Text',
        'top_bar_button_text_callback',
        'theme_options_all',
        'header_section'
    );

    add_settings_field(
        'top_bar_button_url',
        'Top Bar Button URL',
        'top_bar_button_url_callback',
        'theme_options_all',
        'header_section'
    );

    add_settings_field(
        'notification',
        'Notification to display',
        'notification_callback',
        'theme_options_all',
        'header_section'
    );

    add_settings_field(
        'work_process',
        'Work Process | right bar notification',
        'work_process_callback',
        'theme_options_all',
        'header_section'
    );

    add_settings_field(
        'user_login',
        'User Login Title',
        'user_login_callback',
        'theme_options_all',
        'header_section'
    );

    add_settings_field(
        'secondary_image',
        'Upload an Secondary Image',
        'secondary_image_callback',
        'theme_options_all',
        'header_section'
    );

    add_settings_field(
        'x_secondary_image',
        'Upload an Secondary Image',
        'newsecondary_image_callback',
        'theme_options_all',
        'header_section'
    );

    // Footer Section
    add_settings_section(
        'footer_section',
        'Footer Section',
        'footer_section_callback',
        'theme_options_all'
    );

    add_settings_field(
        'footer_notification',
        'Footer Notification',
        'footer_notification_callback',
        'theme_options_all',
        'footer_section'
    );

    add_settings_field(
        'footer_logo',
        'Footer Logo',
        'footer_logo_callback',
        'theme_options_all',
        'footer_section'
    );

    // Hero Slider Section
    add_settings_section(
        'hero_slider',
        'Hero Slider',
        'hero_slider_section_callback',
        'theme_options_all'
    );

    add_settings_field(
        'slider_count',
        'Slides',
        'slider_count_callback',
        'theme_options_all',
        'hero_slider'
    );
    register_setting('theme_options_all', 'slider_count', 'sanitize_text_field');
    $slides = get_option('slider_count','3');
for ($i = 1; $i <= $slides; $i++) {
    add_settings_field(
        'hero_slider_title'.$i,
        'Hero Slider Title -'.$i,
        'hero_slider_title_callback',
        'theme_options_all',
        'hero_slider',
        array('slide_number' => $i)
    );

    add_settings_field(
        'hero_slider_content'.$i,
        'Hero Slider Content -'.$i,
        'hero_slider_content_callback',
        'theme_options_all',
        'hero_slider',
        array('slide_number' => $i)
    );

    add_settings_field(
        'hero_slider_bacground_img'.$i,
        'Hero Slider Background IMG -'.$i,
        'hero_slider_bacground_img_callback',
        'theme_options_all',
        'hero_slider',
        array('slide_number' => $i)
    );
    register_setting('theme_options_all', 'hero_slider_title'.$i, 'sanitize_text_field');
    register_setting('theme_options_all', 'hero_slider_content'.$i, 'sanitize_text_field');
    register_setting('theme_options_all', 'hero_slider_bacground_img'.$i, 'sanitize_text_field');
}
    //Services section 
    add_settings_section(
        'services',
        'Provided Services',
        'services_callback',
        'theme_options_all'
    );
    add_settings_field(
        'vertical_image',
        'Vertical Image',
        'vertical_image_callback',
        'theme_options_all',
        'services'
    );
    add_settings_field(
        'service_grid_count',
        'No# of services',
        'service_grid_count_callback',
        'theme_options_all',
        'services'
    );
    register_setting('theme_options_all', 'service_grid_count', 'sanitize_text_field');
    $services = get_option('service_grid_count');
    for ($j = 1; $j <= $services; $j++) {
    add_settings_field(
        'service_image'.$j,
        'Service Image -'.$j,
        'service_image_callback',
        'theme_options_all',
        'services',
        array('service_number' => $j)
    );
    add_settings_field(
        'service_title'.$j,
        'Service Title -'.$j,
        'service_title_callback',
        'theme_options_all',
        'services',
        array('service_number' => $j)
    );
    register_setting('theme_options_all', 'service_image'.$j, 'esc_url_raw');
    register_setting('theme_options_all', 'service_title'.$j, 'sanitize_text_field');
    }
    
    //Speacial Links section 
    add_settings_section(
        'special_links',
        'Speacial Links',
        'special_links_callback',
        'theme_options_all'
    );
    add_settings_field(
        'pages',
        'Pages List',
        'pages_callback',
        'theme_options_all',
        'special_links'
    );
    register_setting('theme_options_all', 'pages', 'sanitize_text_field');
    $page_num = get_option('pages');
    for ($x = 1; $x <= $page_num; $x++) {
    add_settings_field(
        'page_name'.$x,
        'Page Name -'.$x,
        'page_name_callback',
        'theme_options_all',
        'special_links',
        array('page_number' => $x)
    );
    add_settings_field(
        'page_icon'.$x,
        'Page Icon -'.$x,
        'page_icon_callback',
        'theme_options_all',
        'special_links',
        array('page_number' => $x)
    );
    add_settings_field(
        'hover_text'.$x,
        'Text to show on hover -'.$x,
        'hover_text_callback',
        'theme_options_all',
        'special_links',
        array('page_number' => $x)
    );
    register_setting('theme_options_all', 'page_name'.$x, 'sanitize_text_field');
    register_setting('theme_options_all', 'page_icon'.$x, 'esc_url_raw');
    register_setting('theme_options_all', 'hover_text'.$x, 'sanitize_text_field');
}
    
    //Speacial Links section 
    add_settings_section(
        'banner_slider',
        'Banner Slider',
        'banner_slider_callback',
        'theme_options_all'
    );
    add_settings_field(
        'banner_slides',
        'Slides',
        'banner_slides_callback',
        'theme_options_all',
        'banner_slider'
    );
    register_setting('theme_options_all', 'banner_slides', 'sanitize_text_field');
    $banner_num = get_option('banner_slides');
    for ($z = 1; $z <= $banner_num; $z++) {
    add_settings_field(
        'banner_slide_content'.$z,
        'Slides Content -'.$z,
        'banner_slide_content_callback',
        'theme_options_all',
        'banner_slider',
        array('banner_number' => $z)
    );
    register_setting('theme_options_all', 'banner_slide_content'.$z, 'sanitize_text_field');
}
    register_setting('theme_options_all', 'top_bar_button_text', 'sanitize_text_field');
    register_setting('theme_options_all', 'top_bar_button_url', 'esc_url_raw');
    register_setting('theme_options_all', 'notification', 'sanitize_text_field');
    register_setting('theme_options_all', 'work_process', 'sanitize_text_field');
    register_setting('theme_options_all', 'user_login', 'sanitize_text_field');
    register_setting('theme_options_all', 'secondary_image', 'esc_url_raw');
    register_setting('theme_options_all', 'x_secondary_image', 'esc_url_raw');
    register_setting('theme_options_all', 'footer_notification', 'sanitize_text_field');
    register_setting('theme_options_all', 'footer_logo', 'esc_url_raw');
    register_setting('theme_options_all', 'slider_count', 'sanitize_text_field');
    register_setting('theme_options_all', 'vertical_image', 'sanitize_text_field');
    register_setting('theme_options_all', 'service_grid_count', 'sanitize_text_field');
    register_setting('theme_options_all', 'pages', 'sanitize_text_field');
    register_setting('theme_options_all', 'banner_slides', 'sanitize_text_field');

}

add_action('admin_init', 'theme_options_all');
/*____________________________________________________________________________________________________________ */
//Header
function all_options_section_callback() {
    echo '<p>All theme options combined into a single section.</p>';
}

function header_section_callback() {
    echo '<p>Settings for the Header section</p>';
}

function footer_section_callback() {
    echo '<p>Settings for the Footer section</p>';
}

function hero_slider_section_callback() {
    echo '<p>Settings for the Hero Slider section</p>';
}

function top_bar_button_text_callback() {
    $value = get_option('top_bar_button_text', 'default value');
    echo '<input type="text" name="top_bar_button_text" value="' . esc_attr($value) . '" />';
}

function top_bar_button_url_callback() {
    $value = get_option('top_bar_button_url', '#');
    echo '<input type="url" name="top_bar_button_url" value="' . esc_url($value) . '" />';
}

function notification_callback() {
    $value = get_option('notification', 'default value');
    echo '<input type="text" name="notification" value="' . esc_attr($value) . '" />';
}

function work_process_callback() {
    $value = get_option('work_process', 'default value');
    echo '<input type="text" name="work_process" value="' . esc_attr($value) . '" />';
}

function user_login_callback() {
    $value = get_option('user_login', 'default value');
    echo '<input type="text" name="user_login" value="' . esc_attr($value) . '" />';
}

function secondary_image_callback() {
    $secondary_image_url = get_option('secondary_image');
    ?>
    <input type="text" id="secondary_image" name="secondary_image" value="<?php echo esc_url($secondary_image_url); ?>" />
    <button class="button" id="upload_secondary_image">Select Image</button>
    <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#upload_secondary_image').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  // Set this to true to allow multiple image selection
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#secondary_image').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>
    <?php
}

function newsecondary_image_callback() {
    $newsecondary_image_url = get_option('x_secondary_image');
    ?>
    <input type="text" id="x_secondary_image" name="x_secondary_image" value="<?php echo esc_url($newsecondary_image_url); ?>" />
    <button class="button" id="upload_x_secondary_image">Select Image</button>
    <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#upload_x_secondary_image').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  // Set this to true to allow multiple image selection
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#x_secondary_image').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>
    <?php
}
/*____________________________________________________________________________________________________________ */
//footer
function footer_notification_callback() {
    $value = get_option('footer_notification', 'default value');
    echo '<input type="text" name="footer_notification" value="' . esc_attr($value) . '" />';
}

function footer_logo_callback() {
    $footer_logo_uri = get_option('footer_logo');
    ?>
    <input type="text" id="footer_logo" name="footer_logo" value="<?php echo esc_url($footer_logo_uri); ?>" />
    <button class="button" id="upload_footer_logo">Select Image</button>
    <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#upload_footer_logo').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  // Set this to true to allow multiple image selection
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#footer_logo').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>
    <?php
}
//we need an array to hold the inputs and a loop to itrate the loop
//untill it gets the slide count and data related to that slide
function slider_count_callback() {

    $value = get_option('slider_count', '2');
    echo"  <input name='slider_count' type='number' id='count' value='" . esc_attr($value) . "' />";
    echo "<button class='button' id='plus' onclick='addslide()'>+</button>";
    echo "<button class='button' id='minus'  onclick='removeslide()'>-</button>";
    echo "
    <script>
    var count =  parseInt(document.getElementById('count').value);
        function addslide(){
            count = count + 1;
            update();
        }
        function removeslide(){
            if(count<=1){
                count = 1;
                update();
            }
            else{
                count = count - 1;
                update();
        }
        }
        function update(){
            document.getElementById('count').value = count;
        }
    </script>
    ";
}
function hero_slider_title_callback($args) {
    $slide_number = $args['slide_number'];
    $value[$slide_number] = get_option('hero_slider_title'.$slide_number, 'default value');
    echo '<input type="text" name="hero_slider_title'.$slide_number.'" value="' . esc_attr($value[$slide_number]) . '" />';
}
function hero_slider_content_callback($args) {
    $slide_number = $args['slide_number'];
    $value[$slide_number] = get_option('hero_slider_content'.$slide_number, 'default value');
    echo '<input type="text" name="hero_slider_content'.$slide_number.'" value="' . esc_attr($value[$slide_number]) . '" />';
}
function hero_slider_bacground_img_callback($args) {
    $slide_number = $args['slide_number'];
    $hero_slider_bacground_img[$slide_number] = get_option('hero_slider_bacground_img' . $slide_number, 'default value');
    ?>
    <input type="text" id="hero_slider_bacground_img<?php echo $slide_number; ?>" name="hero_slider_bacground_img<?php echo $slide_number; ?>"
           value="<?php echo esc_url($hero_slider_bacground_img[$slide_number]); ?>" />
    <button class="button" id="upload_hero_slider_bacground_img<?php echo $slide_number; ?>">Select Image</button>
    <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>
    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#upload_hero_slider_bacground_img<?php echo $slide_number; ?>').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  // Set this to true to allow multiple image selection
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#hero_slider_bacground_img<?php echo $slide_number; ?>').val(attachment.url);
                });
                custom_uploader.open();
            });
        });
    </script>
    <?php

}
/*_____________________________________________________________________________________________________________*/
//Services section
    function services_callback() { 
        echo '<p>Settings for the Service section</p>';
    }
    function vertical_image_callback(){
        $vertical_image_url = get_option('vertical_image');
        ?>
        <input type="text" id="vertical_image" name="vertical_image" value="<?php echo esc_url($vertical_image_url); ?>" />
        <button class="button" id="upload_vertical_image">Select Image</button>
        <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>

        <script>
            jQuery(document).ready(function ($) {
                // Open media uploader when the button is clicked
                $('#upload_vertical_image').click(function (e) {
                    e.preventDefault();
                    var custom_uploader = wp.media({
                        title: 'Select Image',
                        button: {
                            text: 'Select'
                        },
                        multiple: false  // Set this to true to allow multiple image selection
                    });

                    custom_uploader.on('select', function () {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        $('#vertical_image').val(attachment.url);
                    });

                    custom_uploader.open();
                });
            });
        </script>
        <?php
    }
    function service_grid_count_callback(){
        $grid_count = get_option('service_grid_count', '1');
        ?>
         <input name='service_grid_count' type='number' id='service_count' value='<?php echo $grid_count;?>'/>
        <button class='button'  onclick='addgridcard()'>+</button>
        <button class='button'  onclick='removegridcard()'>-</button>

        <script>
            var service_count_value =  parseInt(document.getElementById('service_count').value);
            function addgridcard(){
                service_count_value = service_count_value + 1;
                update_grid();
            }
            function removegridcard(){
                if(service_count_value<=1){
                    service_count_value = 1;
                    update_grid();
                }
                else{
                    service_count_value = service_count_value - 1;
                    update_grid();
            }
            }
            function update_grid(){
                document.getElementById('service_count').value = service_count_value;
            }
        </script>

        <?php
    }

    function service_image_callback($args){
        $service_number = $args['service_number'];
        $service_image_url[$service_number] = get_option('service_image'. $service_number);
        ?>
        <input type="text" id="service_image<?php echo $service_number; ?>" name="service_image<?php echo $service_number; ?>" value="<?php echo esc_url($service_image_url[$service_number]); ?>" />
        <button class="button" id="upload_service_image<?php echo $service_number; ?>">Select Image</button>
        <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>

        <script>
            jQuery(document).ready(function ($) {
                // Open media uploader when the button is clicked
                $('#upload_service_image<?php echo $service_number; ?>').click(function (e) {
                    e.preventDefault();
                    var custom_uploader = wp.media({
                        title: 'Select Image',
                        button: {
                            text: 'Select'
                        },
                        multiple: false  // Set this to true to allow multiple image selection
                    });

                    custom_uploader.on('select', function () {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        $('#service_image<?php echo $service_number; ?>').val(attachment.url);
                    });

                    custom_uploader.open();
                });
            });
        </script>
        <?php
    }
    function service_title_callback($args){
        $service_number = $args['service_number'];
        $service_title[$service_number] = get_option('service_title'.$service_number, 'service title');
        echo '<input type="text" id="service_title'.$service_number.'" name="service_title'.$service_number.'" value="' . esc_attr($service_title[$service_number]) . '" />';
    }
    /*____________________________________________________________________________________________________________ */
    //Special Pages/Links
    function special_links_callback(){
        echo '<p>Settings for the Special Pages section</p>';
    }
    function pages_callback() {
     
        $pagelist= get_option('pages','1');
        ?>
        <select id='optionsDropdown' onchange="updateSelectedPage()">
    <?php
        // Query to get WordPress pages
        $pages = get_pages();
    
        // Loop through each page and generate options
        foreach ($pages as $page) {
            $page_id = $page->ID;
            $page_title = $page->post_title;
            echo '<option value="' . $page_id . '">' . $page_title . '</option>';
        }
        ?>
        </select>
    
        <button type='button' onclick='addnewpage()' class='button' id='addpage'>+</button>
        <button type='button' onclick='removepage()' class='button' id='addpage'>-</button><br><br>
          
                <input type="text" name="pages" id="pages" value="<?php echo $pagelist;?>" style="width:30px;" >
                <p>Select max 4 pages [ Click on save changes to add new page ]</p> 

                <script>
                 var page_count = parseInt(document.getElementById('pages').value, 10);
                    function addnewpage(){
                        if(page_count>=4){
                            alert('You can add only 4 pages!!!');
                            page_count = 4;
                        }
                        else{
                            page_count++;
                            update();
                        }
                    }
                    function removepage(){
                        if(page_count<=1){
                            page_count = 1;
                            update();
                        }
                        else{
                            page_count--;
                            update();
                        }
                    }
                    function update(){
                       document.getElementById('pages').value =page_count;

                    }
                    function updateSelectedPage() {
                        var dropdown = document.getElementById('optionsDropdown');
                        var selectedOption = dropdown.options[dropdown.selectedIndex].text;
                        document.getElementById('selectdpage'+page_count).value =selectedOption;
                   
                    }
                </script>
              <?php
    }
    function page_name_callback($args){
        $page_number = $args['page_number'];
        $page_name[$page_number] = get_option('page_name'. $page_number);
        echo '<input type="text" name="page_name'.$page_number.'" value="'.esc_attr($page_name[$page_number]).'" id="selectdpage'.$page_number.'"/>';
            
    }
    function page_icon_callback($args){
        $page_number = $args['page_number'];
        $page_icon[$page_number] = get_option('page_icon'. $page_number);
        ?>
        <input type="text" id="page_icon<?php echo $page_number?>" name="page_icon<?php echo $page_number?>" value="<?php echo esc_url($page_icon[$page_number]); ?>" />
        <button class="button" id="upload_page_icon<?php echo $page_number?>">Select Image</button>
        <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>
    
        <script>
            jQuery(document).ready(function ($) {
                // Open media uploader when the button is clicked
                $('#upload_page_icon<?php echo $page_number?>').click(function (e) {
                    e.preventDefault();
                    var custom_uploader = wp.media({
                        title: 'Select Image',
                        button: {
                            text: 'Select'
                        },
                        multiple: false  // Set this to true to allow multiple image selection
                    });
    
                    custom_uploader.on('select', function () {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        $('#page_icon<?php echo $page_number?>').val(attachment.url);
                    });
    
                    custom_uploader.open();
                });
            });
        </script>
        <?php
    }
    function hover_text_callback($args){
        $page_number = $args['page_number'];
        $hover_text[$page_number] = get_option('hover_text'. $page_number);
        echo '<input type="text" name="hover_text'.$page_number.'" value="' . esc_attr($hover_text[$page_number]) . '" id="hover_text'.$page_number.'" />';
       
    }

    /*_____________________________________________________________________________________________________________*/
    //Special Pages/Links
    function banner_slider_callback(){
        echo '<p>Settings for the Banner slider section</p>';
    }
    function banner_slides_callback(){

        $banner_slides = get_option('banner_slides', '1');
        echo"  <input name='banner_slides' type='number' id='banner_slides' value='" . esc_attr($banner_slides) . "'  />";
        echo "<button class='button' onclick='addnewbanner()'>+</button>";
        echo "<button class='button'  onclick='removebanner()'>-</button>";
        echo "
        <script>
        var banner_slides =  parseInt(document.getElementById('banner_slides').value);
            function addnewbanner(){
                banner_slides = banner_slides + 1;
                updatebanner();
            }
            function removebanner(){
                if(banner_slides<=1){
                    banner_slides = 1;
                    updatebanner();
                }
                else{
                    banner_slides = banner_slides - 1;
                    updatebanner();
            }
            }
            function updatebanner(){
                document.getElementById('banner_slides').value = banner_slides;
            }
        </script>
        ";
    }
    function banner_slide_content_callback($args){

        $banner_number = $args['banner_number'];
        $banner_slide_content[$banner_number] = get_option('banner_slide_content'. $banner_number);
        echo '<input type="text" name="banner_slide_content'.$banner_number.'" value="' . esc_attr($banner_slide_content[$banner_number]) . '" id="banner_slide_content'.$banner_number.'" />';
       
    }
    function add_custom_fields_meta_box() {
        add_meta_box(
            'custom_fields_meta_box',
            'Custom Fields',
            'display_custom_fields_meta_box',
            'events',  // Change to your custom post type if needed
            'normal', // Change to 'side' or 'advanced' if desired
            'high' // Change to 'low' or 'default' if desired
        );
    }
    
    function display_custom_fields_meta_box($post) {
        // Retrieve existing values for the custom fields
        $custom_date_value = get_post_meta($post->ID, '_custom_date', true);
        $custom_time_value = get_post_meta($post->ID, '_custom_time', true);
    
        // Display the custom field inputs
        ?>
        <label for="custom_date">Custom Date:</label>
        <input type="text" id="custom_date" name="custom_date" value="<?php echo esc_attr($custom_date_value); ?>" />
    
        <label for="custom_time">Custom Time:</label>
        <input type="text" id="custom_time" name="custom_time" value="<?php echo esc_attr($custom_time_value); ?>" />
        <?php
    }

    function save_custom_fields($post_id) {
        // Save the custom field values
        if (isset($_POST['custom_date'])) {
            update_post_meta($post_id, '_custom_date', sanitize_text_field($_POST['custom_date']));
        }
    
        if (isset($_POST['custom_time'])) {
            update_post_meta($post_id, '_custom_time', sanitize_text_field($_POST['custom_time']));
        }
    }
    
    add_action('add_meta_boxes', 'add_custom_fields_meta_box');
    add_action('save_post', 'save_custom_fields');
   
    
?>