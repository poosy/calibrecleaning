<?php /* Template Name: Booking */ get_header('booking'); ?>

<main class='bgr-gray'>

    <!-- Begin of  .subheader -->
    <!--<section class="subheader p0">
        <div class="tableize tableize--full tableize--middle">
            <div class="tableize__cell">
                <div>
                    <div class="container relative" <?php
                        if (function_exists("live_edit")) {
                            live_edit('subheader_title, subheader_subtitle, subheader_icon_one, subheader_icon_one_title, subheader_icon_two, subheader_icon_two_title, subheader_icon_three, subheader_icon_three_title, booking_page_title, booking_form_iframe');
                        }
                        ?>>
                        <div class="subheader__content">
                            <h1 class='color-white type-bold text-center type-uppercase lh-1 mb-'><?php the_field('subheader_title'); ?></h1>
                            <p class="type-extrahuge text-center color-white type-light type-uppercase mb+"><?php the_field('subheader_subtitle'); ?></p>
                            <div class="layout layout--center">
                                <div class="layout__item 1/3 large-and-up-1/5 text-center">
                                    <?php
                                    $image = get_field('subheader_icon_one');
                                    if (!empty($image)):
                                        ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb-">
                                    <?php endif; ?>
                                    <p class="color-white type-uppercase type-bold"><?php the_field('subheader_icon_one_title'); ?></p>
                                </div>
                                <div class="layout__item 1/3 large-and-up-1/5 text-center">
                                    <?php
                                    $image = get_field('subheader_icon_two');
                                    if (!empty($image)):
                                        ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb-">
                                    <?php endif; ?>
                                    <p class="color-white type-uppercase type-bold"><?php the_field('subheader_icon_two_title'); ?></p>
                                </div>
                                <div class="layout__item 1/3 large-and-up-1/5 text-center">
                                    <?php
                                    $image = get_field('subheader_icon_three');
                                    if (!empty($image)):
                                        ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb-">
                                    <?php endif; ?>
                                    <p class="color-white type-uppercase type-bold"><?php the_field('subheader_icon_three_title'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End of .subheader  -->

    <section id='booking-content'>
        <div class="container">
            <h2 class="type-uppercase color-gray text-center mb+"><?php the_field('booking_page_title'); ?></h2>
        </div>
        <div class="container container--middle">
            <?php the_field('booking_form_iframe'); ?>
        </div>
    </section>


</main>

<?php get_footer(); ?>