<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
    <!-- the "no-js" class is for Modernizr. -->
    <head data-template-set="theme-street-template">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- Always force latest IE rendering engine (even in intranet) -->
        <!--[if IE ]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <?php
        if (is_search())
            echo '<meta name="robots" content="noindex, nofollow">';
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <!-- Prefetch DNS for external assets (Twitter widgets etc). -->
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//themes.googleusercontent.com">
        <link rel="dns-prefetch" href="//www.google-analytics.com">
        <meta name="title" content="<?php wp_title('|', true, 'right'); ?>">
        
        <meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <header class="header-main">
            <div class="container">
                <div class="justifize">
                    <div class="justifize__box relative">
                        <!--<a href="<?php echo esc_url(home_url('/')); ?>" class="header-main__logo">

                        <?php if (get_field('options_logo', 'option')) : ?>
                            <?php $logo = get_field('options_logo', 'option'); ?>
                            <?php $logo = $logo['url']; ?>
                        <?php else : ?>
    <?php $logo = get_template_directory_uri() . "/images/logo-white.png"; ?>
<?php endif; ?>
                            <img src="<?php echo $logo; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>-->

                        <?php if (get_field('logo', 'option')) : ?>
                            <?php $live_edit = TRUE; ?>
                        <?php else : ?>
                            <?php $live_edit = FALSE; ?>
                        <?php endif; ?>
                        <?php if ($live_edit === FALSE && current_user_can("manage_options")) : ?>
                            <a href="<?php echo admin_url('admin.php?page=acf-options-details'); ?>" class="custom-edit">Edit</a>
                            <?php endif; ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-main__logo <?php if ($live_edit === FALSE && current_user_can("manage_options")) echo 'edit-hide'; ?>" <?php live_edit('logo', 'option'); ?>>
                            <?php if (get_field('options_logo', 'option')) : ?>
                                <?php $logo = get_field('options_logo', 'option'); ?>
                                <?php $logo = $logo['url']; ?>
                            <?php else : ?>
    <?php $logo = get_template_directory_uri() . "/images/logo-white.png"; ?>
<?php endif; ?>

                            <img src="<?php echo $logo; ?>" alt="">
                        </a>

                    </div>
                    <div class="justifize__box menu-right">
                        <nav class='header-main__nav header-main__nav--desktop'>
<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'list-bare list-inline')); ?>
                        </nav>
                    </div>
                </div>
            </div>
            <a href="javascript:;" class="header-main__nav-trigger">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav-trigger.png" alt="">
            </a>

            <aside>
                <nav class="header-main__nav header-main__nav--mobile">
<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'list-bare')); ?>
                </nav>
            </aside>
        </header>