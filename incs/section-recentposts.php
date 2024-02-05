<div class="our-services-section">
            <div class="cover disp-flex-row">
                <div class="new-service-slider disp-flex-row">
                    <div class="the-service-slider disp-flex-row x-service-slider the-service-slider">
                       
                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3, // Set the number of posts to display
                        'order'          => 'DESC', // Display posts in descending order
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                                <header class="entry-header">
                                    <?php the_title('<p class="entry-title">', '</p>'); ?>
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
                        wp_reset_postdata(); // Restore global post data
                    else :
                        // If no posts are found, display a message
                        echo '<p>' . __('No posts found', 'your-theme-text-domain') . '</p>';
                    endif;
                ?>

                                
                    </div>
                    <div class="the-search-container">
                        <div class="serach-box-tab disp-flex-row">
                            <button class="tab-left" onclick="dispMainForm()" id="tab_left">
                                <p>Red Asistencial</p>
                            </button>
                            <button class="tab-right" onclick="hideMainForm()" id="tab_right">
                                <p>Punto de Atención</p>
                            </button>
                        </div>

                        <form class="search-box-form disp-flex-col" id="mainForm">
                            <div class="response disp-flex-row">
                                <p>Consulta Rapidamente tu red asistencial</p>
                            </div>
                            <div class="box">
                                <label for="dep" class="box-lable">
                                    <p>Depatment</p>
                                    <select name="dep" id="dep" class="search-input classic">
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                    </select>
                                </label>
                            </div>
                            <div class="box">
                                <label for="dep" class="box-lable">
                                    <p>Depatment</p>
                                    <select name="dep" id="dep" class="search-input classic">
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                    </select>
                                </label>
                            </div>
                            <div class="box">
                                <label for="dep" class="box-lable">
                                    <p>Ciudad:</p>
                                    <select name="dep" id="dep" class="search-input classic">
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                    </select>
                                </label>
                            </div>
              
                            <div class="box">
                                <label for="dep" class="box-lable">
                                    <p>Selecciones un Punto:</p>
                                    <select name="dep" id="dep" class="search-input classic">
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                    </select>
                                </label>
                            </div>
              
                            <div class="box disp-flex-row">
                                <button class="submit">
                                    <p>BUSCAR</p>
                                </button>
                            </div>
                        </form>
                        <form class="search-box-form disp-flex-col" id="mainFormhidden">
                            <div class="response disp-flex-row">
                                <p>Consulta Rapidamente tu red asistencial</p>
                            </div>

                            <div class="box">
                                <label for="dep" class="box-lable">
                                    <p>Ciudad:</p>
                                    <select name="dep" id="dep" class="search-input classic">
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                    </select>
                                </label>
                            </div>
                            <div class="box">
                                <label for="dep" class="box-lable">
                                    <p>Selecciones Red:</p>
                                    <select name="dep" id="dep" class="search-input classic">
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                    </select>
                                </label>
                            </div>
                            <div class="box">
                                <label for="dep" class="box-lable">
                                    <p>Selecciones un Punto:</p>
                                    <select name="dep" id="dep" class="search-input classic">
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                        <option value="">dep 1</option>
                                    </select>
                                </label>
                            </div>
                            <div class="box disp-flex-row">
                                <button class="submit">
                                    <p>BUSCAR</p>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>