<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

<?php endif; ?>

<!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

<?php //get_search_form(); ?>

<aside class='article-content__aside'>
    <h2 class="article-content__heading type-small mb-"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/article-icon1.png" alt="" class="mr-"><span class="type-bold"><?php _e('OTHER ARTICLES','themestreet'); ?></span></h2>
    <ul class="list-bare other-posts">
        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&order=ASC&paged=' . get_query_var('paged')); ?>
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink() ?>" class="display-block pv-">
                <p class="color-dark type-bold"><?php the_title(); ?></p>
                <?php wp_excerpt('excerpt_sidebar'); ?>
            </a></li>
            <?php
        endwhile;
    endif;
    wp_reset_query();
    ?>
    </ul>
</aside>