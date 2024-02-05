<?php
    get_header();
?>

                        <div class="custom-post disp-flex-row">
                                <div class="the-tabbed-slides" style="width:500px;">
                                    <img style="width:500px;" src="<?php echo  get_the_post_thumbnail();?>"/>
                                </div>
                        <div class="tabbed-info">
                        <a href="<?php echo get_permalink();?>" class="no-decration">
                            <p>
                                <?php the_title();?>
                            </p>
                        </a>
                            <p><?php echo get_secondary_title(); ?></p>

                                <?php the_content(); ?>

                   
                        </div>
                        </div>
                        </div>
                        <?php
    get_footer();
?>