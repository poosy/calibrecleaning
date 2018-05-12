<?php /* Template Name: Gift card */ get_header(); ?>

<main class='bgr-gray'>

      <!-- Begin of  .subheader -->
      <section class="subheader pv">
        <div class="container relative" <?php if(function_exists("live_edit")){ live_edit('subheader_title, subheader_subtitle_one, subheader_subtitle_two, giftcard_iframe'); }?>>
          <div class="subheader__content">
            <div>
              <h1 class="type-bold color-white lh-1 mb-"><?php the_field('subheader_title'); ?></h1>
              <h2 class="type-huge color-white type-uppercase mb pr+ pl+"><?php the_field('subheader_subtitle_one'); ?></h2>
              <p class="type-small type-light color-white"><?php the_field('subheader_subtitle_two'); ?></p>
            </div>
          </div>
        </div>
      </section>
      <!-- End of .subheader  -->


      <!-- Begin of  .gift-card-form -->
      <section class="gift-card-form">
        <div class="container">
          <div class="form-wrapper">
            <?php the_field('giftcard_iframe'); ?>
          </div>
        </div>
      </section>
      <!-- End of .gift-card-form  -->

    </main>

<?php get_footer(); ?>