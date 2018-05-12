<?php /* Template Name: Help */ get_header(); ?>
<?php 
$taxonomy = 'faq_category';
$args = array(
  // 'hide_empty' => false,
  'orderby' => 'id',
  'order' => 'ASC'
);
$categories = get_terms($taxonomy, $args);
$categories_chunks = array_chunk($categories, 2, TRUE);
?>

<main>

    <!-- Begin of  .subheader -->
      <section class="subheader pv0">
        <div class="container full-height relative" <?php
        if (function_exists("live_edit")) {
            live_edit('help_title');
        }
        ?>>
          <div class="tableize tableize--full tableize--middle">
            <div class="tableize__cell">
              <div class="text-center">
                <h1 class="type-uppercase type-bold color-white"><?php the_field('help_title'); ?></h1>
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- End of .subheader  -->


    <!-- Begin of  .help-questions -->
    <section class="help-questions">
      <div class="container">
        <header>
          <h2 class="type-super-huge"><?php the_field('help_subtitle'); ?></h2>
        </header>
        <div class="layout">
        <?php foreach ($categories_chunks as $categories) : ?>
          <div class="layout__item large-and-up-1/2">
          <?php foreach ($categories as $category) : ?>
          <?php
            // Define the query
            $args = array(
              'post_type' => 'faq',
              'faq_category' => $category->slug,
              'orderby' => 'id',
              'order' => 'ASC'
            );
            $query = new WP_Query( $args );
          ?>
            <article class="mb+">
              <h3 class="h6 type-bold type-uppercase mb-"><?php echo $category->name; ?></h3>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="accordion">
                <h4 class="h6"><?php the_title(); ?></h4>
                <div class="accordion__hidden">
                  <?php the_content(); ?>
                </div>
              </div>
            <?php endwhile; ?>
            </article>
          <?php wp_reset_postdata(); // use reset postdata to restore orginal query ?>
          <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- End of .help-questions  -->

  </main>

<?php get_footer(); ?>
