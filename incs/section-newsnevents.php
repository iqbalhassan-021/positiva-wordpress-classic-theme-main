<?php get_header(); ?>
<div class="informative-section">
            <div class="cover disp-flex-row">
                <div class="informative-tab disp-flex-row">
                    <div class="infomative-tab1 disp-flex-row">
                        <div class="tabbed-slider disp-flex-row news-slider">
                    <?php
                        $wp_custompost = array(
                            'post_type' => 'news',
                            'post_status' => 'publish'
                        );
                        $posts_news = new WP_Query($wp_custompost);
                        while ($posts_news->have_posts()){
                            $posts_news->the_post();
                        
                        ?>
                        <div class="custom-post disp-flex-row">
                                <div class="the-tabbed-slides">
                                    <img src="<?php echo  get_the_post_thumbnail();?>"/>
                                </div>
                        <div class="tabbed-info">
                        <a href="<?php echo get_permalink();?>" class="no-decration">
                            <p>
                                <?php the_title();?>
                            </p>
                        </a>
                            <p><?php echo get_secondary_title(); ?></p>

                                <?php the_content(); ?>

                            <a href="<?php echo the_permalink();?>" class="open-blog">
                            <button class="more-news disp-flex-row">
                                VER MÁS NOTICIAS
                            </button>
                            </a>
                        </div>
                        </div>
                        <?php } ?>
                        </div>

                    </div>
                    <div class="infomative-tab2" id="infomativetab">
    <div class="events-holder">
        <div class="event-top">
            <p>EVENTS</p>
        </div>
        <div class="new-events-holder " id="scrollableDiv" style="overflow-y: hidden;">
            <?php
            $wp_customevents = array(
                'post_type' => 'events',

            );
            $posts_events = new WP_Query($wp_customevents);
            while ($posts_events->have_posts()) {
                $posts_events->the_post();
                $custom_date = get_post_meta(get_the_ID(), '_custom_date', true);
                $custom_time = get_post_meta(get_the_ID(), '_custom_time', true);
            ?>
                <div class="new-events disp-flex-row">
                    <div class="news-img">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                    <div class="the-news">
                        <a href="#">
                            <p><?php the_title(); ?></p>
                        </a>
                        <span>
                            <?php echo esc_html($custom_date); ?>
                            <br />
                            <?php echo esc_html($custom_time); ?>
                        </span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="tabbed-navigation-bar disp-flex-row">
            <div class="navgation-button-holder">
                <button id="scrollUpBtn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tab-navogation-left.png" alt="" />
                </button>
                <button id="scrollDownBtn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tab-navogation-right.png" alt="" />
                </button>
            </div>
            <div class="see-more disp-flex-row">
                <a href="#"> More Events </a>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>


