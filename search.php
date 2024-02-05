<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php printf(__('Search Results for: %s', 'your_theme_text_domain'), '<span>' . esc_html(get_search_query()) . '</span>'); ?></h1>
            </header>

            <?php
            // Start the loop.
            while (have_posts()) : the_post();

                // Include the content template.
                get_template_part('template-parts/content', get_post_format());

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => __('Previous page', 'your_theme_text_domain'),
                'next_text' => __('Next page', 'your_theme_text_domain'),
            ));

        else :
            // No search results found
            ?>
            <p class="not-found"><?php esc_html_e('No results found. Please try another search term.', 'your_theme_text_domain'); ?></p>
            <?php
            // Optionally, redirect to a custom page
            // wp_redirect(get_permalink(get_page_by_path('custom-no-results')));
            // exit();
        endif;
        ?>

    </main>
</div>


<?php get_footer(); ?>
