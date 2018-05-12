<?php get_header(); ?>
<main>
    <section>
        <div class="container">        
            <h3 class="text-center type-bold mt++"><?php _e('Your theme has successfully been installed!', 'themestreet') ?></h3>
            <p class="text-center mt mb"><?php _e('Please follow the instructions in documentation to setup theme properly.', 'themestreet') ?></p>
            <p class="text-center mt mb++"><a class="color-pink" href="<?php echo esc_url(home_url('/')); ?>wp-admin"><?php _e('Log In', 'themestreet') ?></a></p>

        </div>
    </section>
</main>
<?php get_footer(); ?>
