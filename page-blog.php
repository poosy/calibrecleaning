<?php /* Template Name: Blog */ get_header(); ?>

<main>

    <!-- Begin of  .subheader -->
    <section class="subheader">
        <div class="container full-height relative" <?php
        if (function_exists("live_edit")) {
            live_edit('blog_title, blog_subtitle, blog_button_title');
        }
        ?>>
            <div class="tableize tableize--full tableize--middle">
                <div class="tableize__cell">
                    <div class="text-center">
                        <div class="text-wrap">
                            <h1 class="blog-title type-bold color-white mb-"><?php the_field('blog_title'); ?></h1>
                            <p class="blog-title type-large color-white mb+"><?php the_field('blog_subtitle'); ?></p>
                        </div>
                        <!--<a class="btn btn--primary btn--radius-none btn--small btn--h52 btn--yellow color-dark scrolltosubscribe" href="javascript:void(0)"><?php the_field('blog_button_title'); ?></a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of .subheader  -->


    <!-- Begin of  .blog-content -->
    <section class="blog-content pt0">
        <div class="container">
            <div class="layout layout--flush">
                <div class="layout__item large-and-up-2/3">
                    <?php query_posts('post_type=post&post_status=publish&posts_per_page=' . get_option('posts_per_page') . '&paged=' . get_query_var('paged')); ?>
                    <div class="blog-content__main">

                        <!-- -->

                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                                <div class="blog-content__item">

                                    <!-- article -->
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                        <header>
                                            <!-- post title -->
                                            <h3 class="type-bold lh-1-2 mb-">
                                                <a href="<?php the_permalink(); ?>" class="no-underline" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <!-- /post title -->

                                            <!-- post details -->
                                            <div class="flag mb-">
                                                <div class="flag__body">
                                                    <p class="type-small"><?php the_time('F j, Y'); ?></p>
                                                </div>
												
                                            </div>
                                            <!-- /post details -->
                                        </header>
                                        <div class="social-bar">
                                            <div class="inline-block align-top">
                                                <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                            </div>
												
                                            <div class="inline-block align-top">
                                                <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                                <script>!function (d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                                        if (!d.getElementById(id)) {
                                                            js = d.createElement(s);
                                                            js.id = id;
                                                            js.src = p + '://platform.twitter.com/widgets.js';
                                                            fjs.parentNode.insertBefore(js, fjs);
                                                        }
                                                    }(document, 'script', 'twitter-wjs');</script>
                                            </div>
                                            <div class="inline-block align-top">
                                                <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
                                                <!-- Please call pinit.js only once per page -->
                                                <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
                                            </div>
                                            <div class="inline-block align-top">
                                                <div class="g-plusone" data-size="medium"></div>
                                                <script type="text/javascript">
                                                    (function () {
                                                        var po = document.createElement('script');
                                                        po.type = 'text/javascript';
                                                        po.async = true;
                                                        po.src = 'https://apis.google.com/js/platform.js';
                                                        var s = document.getElementsByTagName('script')[0];
                                                        s.parentNode.insertBefore(po, s);
                                                    })();
                                                </script>
                                            </div>
                                        </div>
										<div class="featured-image">
											<?php the_post_thumbnail(); ?>
										</div>
                                        <?php wp_excerpt('excerpt_index'); // Build your custom callback length in functions.php   ?>

                                    </article>
                                    <!-- /article -->

                                </div>

                            <?php endwhile; ?>

                        <?php else: ?>

                            <div class="blog-content__item">

                                <!-- article -->
                                <article>
                                    <h3 class="type-bold lh-1-2 mb-"><?php _e('Sorry, nothing to display.', 'themestreet'); ?></h3>
                                </article>
                                <!-- /article -->

                            </div>

                        <?php endif; ?>


                        <!-- -->

                    </div>
                    <?php themestreet_numeric_posts_nav(); ?>
                </div>
                <div class="layout__item large-and-up-1/3">
                    <?php get_sidebar('blog'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End of .blog-content  -->


</main>

<?php get_footer(); ?>