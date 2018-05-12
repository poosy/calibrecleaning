<?php get_header(); ?>

<main class="page-template-page-help">
        <!-- Begin of  .subheader -->
      <section class="subheader pv0">
        <div class="container full-height">
          <div class="tableize tableize--full tableize--middle">
            <div class="tableize__cell">
              <div class="text-center">
                <h1 class="type-uppercase type-bold color-white"><?php _e('Search Results', 'themestreet'); ?></h1>
                <form action="<?php echo home_url(); ?>">
                  <div class="flag">
                    <div class="flag__body">
                      <label>
                        <span class='icon-search'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-search.png" alt=""></span>
                        <input type="text" name="s" class="input input--primary input--full" placeholder="<?php _e('search the help center','themestreet'); ?>">
                        <input type="hidden" name="post_type" value="faq">
                      </label>
                    </div>
                    <div class="flag__img pr0">
                      <button class="btn btn--primary"><?php _e('GO','themestreet'); ?></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- End of .subheader  -->
    
    <section class="help-questions">
        <div class="container">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <h2 class="h4 type-bold type-uppercase mb-"><?php the_title(); ?></h2>

                        <?php the_content(); ?>
                    
                    <hr class="mb mt">
                    
                </article>

            <?php endwhile; ?>

            <?php post_navigation_faq(); ?>

        <?php else : ?>

            <h2 class="h4 type-bold type-uppercase mb-"><?php _e('Nothing Found', 'themestreet'); ?></h2>

        <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
