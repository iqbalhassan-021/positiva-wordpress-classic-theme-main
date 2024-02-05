<?php
    $banner_slides = intval(get_option("banner_slides"));{
        for($i = 1; $i <= $banner_slides; $i++){
            if(!empty(get_option("banner_slide_content". $i))){
                $banner_content[$i] = get_option("banner_slide_content". $i);
            }
            else{
                $banner_content[$i] = "Banner Sllide - ".$i;
            }

        }
    }
?>


                   
<div class="banner-slider-parent">
            <div class="cover disp-flex-row">
                <div class="the-banner-holder disp-flex-row">
                    <div class="banners ">
                        <div class="top-banner">
                            <div class="banner-cover disp-flex-row banner-slider">
                            <?php    
                            for($i = 1; $i <= $banner_slides; $i++){
                             echo   '<div class="banner-slide disp-flex-row">
                                        <p>'.
                                        $banner_content[$i]
                                        .'</p>
                                    </div>';
                            }
                            ?>
                            </div>
                        </div>
                        <div class="bottom-banner disp-flex-row">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/banner-logo-1.png" alt="" />
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/banner-logo-2.png" alt="" />
                        </div>
                    </div>
                    <div class="celecnders-box disp-flex-col">
                        <div class="cal-top disp-flex-col">
                        <blockquote class="twitter-tweet" style="margin-top: 0px;"><p lang="en" dir="ltr">Working on <a href="https://twitter.com/analytify?ref_src=twsrc%5Etfw">@analytify</a> to make it compatible with <a href="https://twitter.com/WooCommerce?ref_src=twsrc%5Etfw">@WooCommerce</a> with its new feature, HPOS, where WooCommerce changed its database structure and added a few custom tables to manage high order frequency. (A Much-needed feature for large e-commerce organizations).…</p>&mdash; Adnan (@hiddenpearls) <a href="https://twitter.com/hiddenpearls/status/1746862323850244581?ref_src=twsrc%5Etfw">January 15, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="date-seclector">
                            <div class="x-text-holder disp-flex-row">
                                <p>EVENTO</p>
                            </div>
                            <div class="chose-date disp-flex-row">
                                <input type="date" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>