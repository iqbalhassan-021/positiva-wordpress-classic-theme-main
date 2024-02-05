<?php
    $page_count = intval(get_option("pages"));


    for ($i = 1; $i <= $page_count; $i++) {
        $page_names[$i] = get_option('page_name' . $i);
        $page_icons[$i] =esc_url(get_option('page_icon' . $i));
        $page_hover_texts[$i] =get_option('hover_text' . $i);

        if (empty($page_hover_texts[$i])) {
            $page_hover_texts[$i] = "You hoverd";
        }

        if (empty($page_icons[$i])) {
            $page_icons[$i] = get_template_directory_uri() . '/assets/images/people.png';
        }

        if (empty($page_names[$i])) {
            $page_names[$i] = "ARL";
        }
    }
?>

<div class="our-services disp-flex-row">
    <div class="cover disp-flex-col">
        <div class="services-slider disp-flex-row service-slider">
            <?php  
                for ($i = 1; $i <= $page_count; $i++) {                 
                    echo  '<div class="services-card" id="card">
                                <div class="front-card disp-flex-col" id="frontdiv">
                                    <img src="' . $page_icons[$i] . '" alt="" />
                                    <br>
                                    <p>

                                        <strong> 
                                            ' . $page_names[$i] . '
                                        </strong>
                                    </p>
                                </div>
                                <div class="back-card disp-flex-col" id="backdiv">
                                    <p>
                                        ' . $page_hover_texts[$i] . '
                                    </p>
                                    <a href="   ' . $page_names[$i] . '"><button>VER MÁS</button></a>
                                </div>
                            </div>';
                }
            ?>
        </div>
    </div>
</div>
