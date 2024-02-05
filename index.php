<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                    <header class="entry-header">
                        <?php the_title('<p class="entry-title"><br>
                        <button class="drop-down" >
                         <img src="'.get_template_directory_uri().'/assets/images/drop-down.png" alt="drop-down">', '  </button> </p>');
                           ?>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php
                        if (is_single()) {
                            // Display the full content without the post thumbnail
                            the_content();
                        } else {
                            // Display the excerpt
                            the_excerpt();
                        }
                        ?>
                    </div>

                    <footer class="entry-footer">
                        <?php if (is_single()) : ?>
                            <div class="tags">
                                <?php the_tags('', ', ', ''); ?>
                            </div>
                            <div class="cat-links">
                                <?php the_category(', '); ?>
                            </div>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('+ Ver otros servicios', 'your-theme-text-domain'); ?></a>
                        <?php endif; ?>
                    </footer>
                </article>
            <?php endwhile;
        else :
            // If no posts are found, display a message
            echo '<p>' . __('No posts found', 'your-theme-text-domain') . '</p>';
        endif;
        ?>

    </main>
</div>

<?php get_footer(); ?>
