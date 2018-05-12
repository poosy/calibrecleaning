<?php get_header(); ?>

<main>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <!-- Begin of  .subheader -->
      <section class="subheader">
        <div class="container relative"  <?php if(function_exists("live_edit")){ live_edit('post_title, default_page_subtitle, post_content'); }?>>
          <div class="subheader__content">
            <h1 class='color-white type-bold text-center type-uppercase lh-1<?php if( get_field('default_page_subtitle') ): ?> mb<?php endif; ?>'><?php the_title(); ?></h1>
            <?php if( get_field('default_page_subtitle') ): ?><p class="type-extrahuge text-center type-uppercase color-white type-light"><?php the_field('default_page_subtitle'); ?></p><?php endif; ?>
          </div>
        </div>
      </section>
      <!-- End of .subheader  -->

      <!-- Begin of  .article-content -->
      <section class="article-content pt0">
        <div class="container pt">
          <div class="article-content__main">
              <?php the_content(); ?>

          </div>
        </div>
      </section>
      <!-- End of .article-content  -->

<?php endwhile; endif; ?>
    </main>

<?php get_footer(); ?>