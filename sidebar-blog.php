<aside class='blog-content__aside'>

   <!-- <ul class="blog-content__aside-list mb+ type-uppercase">
        <?php wp_list_categories('title_li='); ?>
    </ul>-->

    <div class="blog-content__get-weekly text-center pt+">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/get-weekly-img.png" alt="" class="mb">
        <p class="pb+"><?php the_field('blog_sidebox_content',144); ?></p>
        <a href="<?php the_field('blog_sidebox_button_link',144); ?>" class="get-link"><?php the_field('blog_sidebox_button_title',144); ?></a>
    </div>

    <!--<div class="blog-content__tags">
        <h3 class="h4 mb-"><?php _e('Topics','themestreet'); ?></h3>
        <?php
        $args = array(
            'hide_empty' => false,
            'orderby' => 'id',
            'order' => 'ASC',
        );
        $tags = get_tags($args);
        $html = '';
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);

            $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
            $html .= "{$tag->name}</a>";
        }
        $html .= '</div>';
        echo $html;
        ?>
    </div>-->
</aside>