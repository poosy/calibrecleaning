<?php /* Template Name: Contact */ get_header(); ?>

<main class='bgr-gray'>

    <!-- Begin of  .subheader -->
    <section class="subheader">
        <div class="container relative" <?php if ( function_exists( "live_edit" ) ) {
    live_edit( 'subheader_title, subheader_subtitle, contact_working_hours, contact_twitter_account, contact_first_phone, contact_second_phone, contact_flat_rate_pricing_link, contact_chat_link' );
} ?>>
            <div class="subheader__content">
                <h1 class='color-white type-bold text-center type-uppercase lh-1 mb'><?php the_field( 'subheader_title' ); ?></h1>
                <p class="type-extrahuge text-center color-white type-light"><?php the_field( 'subheader_subtitle' ); ?></p>
            </div>
        </div>
    </section>
    <!-- End of .subheader  -->

    <section class="contact-page__content">
        <div class="container container--small">
            <div class="bgr-white contact-page__list">
                <article>
                    <header class='mb-'>
                        <h2 class="type-semibold"><?php _e( 'Shoot us an email!', 'themestreet' ); ?></h2>
                        <p class="type-small type-light"><?php _e( 'Between', 'themestreet' ); ?> <?php the_field( 'contact_working_hours' ); ?><?php _e( ', the average wait for an answer is currently about 14 minutes. We&#39;re quick!', 'themestreet' ); ?></p>
                    </header>
                <?php echo do_shortcode( '[contact-form-7 id="74" title="Contact form 1"]' ); ?>
                </article>

<?php if ( get_field( 'options_email', 'option' ) ) : ?>
                    <article>
                        <header>
                            <h2><?php _e( 'Email us directly at', 'themestreet' ); ?> <a href="mailto:<?php the_field( 'options_email', 'option' ); ?>" class="color-red type-normal"><?php the_field( 'options_email', 'option' ); ?></a> <?php _e( 'for a speedy reply', 'themestreet' ); ?></h2>
                        </header>
                    </article>
<?php endif; ?>
<?php if ( get_field( 'contact_first_phone' ) ) : ?>

                    <article>
                        <header>
                            <h2><?php _e( 'On the run? Call us at', 'themestreet' ); ?> <a href="tel:<?php the_field( 'contact_first_phone' ); ?>" class="color-red type-normal"><?php the_field( 'contact_first_phone' ); ?></a><?php if ( get_field( 'contact_second_phone' ) ): ?> or <a href="tel:<?php the_field( 'contact_second_phone' ); ?>" class="color-red type-normal"><?php the_field( 'contact_second_phone' ); ?></a><?php endif; ?>.</h2>
                            <p><?php _e( 'If you&#39;re looking for a quote', 'themestreet' ); ?> <a href="<?php the_field( 'contact_flat_rate_pricing_link' ); ?>" class="color-red"><?php _e( 'please click here to see our flat rate pricing!', 'themestreet' ); ?></a></p>
                        </header>
                    </article>
                <?php endif; ?>

<?php if ( get_field( 'contact_chat_link' ) ) : ?>
                    <article>
                        <header>
                            <h2><?php _e( 'Chat live with one of our friendly folks!', 'themestreet' ); ?> <a href="<?php the_field( 'contact_chat_link' ); ?>" class="color-red type-light"><?php _e( 'Click Here to Chat', 'themestreet' ); ?></a></h2>
                        </header>
                    </article>
<?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>