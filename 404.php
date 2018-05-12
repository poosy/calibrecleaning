<?php get_header(); ?>

<h2></h2>

<main>
    <section>
        <div class="container">        
            <h3 class="text-center type-bold mt++"><?php _e('Error 404 - Page Not Found', 'themestreet'); ?></h3>
            <p class="text-center mt mb++"><a class="color-pink" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Back to home', 'themestreet') ?></a></p>

        </div>
    </section>
</main>

<?php get_footer(); ?>