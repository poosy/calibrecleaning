<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <!--        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                                    <h1 class="entry-title"><?php the_title(); ?></h1>

                                    <div class="entry-content">

        <?php the_content(); ?>

        <?php wp_link_pages(array('before' => __('Pages: ', 'themestreet'), 'next_or_number' => 'number')); ?>

        <?php the_tags(__('Tags: ', 'themestreet'), ', ', ''); ?>

        <?php posted_on(); ?>

                                    </div>

        <?php edit_post_link(__('Edit this entry', 'themestreet'), '', '.'); ?>

                                </article>

        <?php //comments_template(); ?>-->

        <main>

            <!-- Begin of  .article-content -->

            <section class="article-content pt0">
                <div class="container pt++">
                    <div class="layout">
                        <div class="layout__item large-and-up-2/3">
                            <div class="article-content__main">
                                <?php if (get_field('options_disqus_name', 'option')): ?><p class="mb"><span class="type-bold"><a class="disqus" href="<?php the_permalink(); ?>#disqus_thread">Comments count</a></span></p><?php endif;?>
                                <h1 class="type-bold mb no-uppercase"><?php the_title(); ?></h1>
								<div class="article-image">
									<?php the_post_thumbnail(); ?>
								</div>
                                <hr class="mb">
                                <div class="justifize mb">
                                    <div class="justifize__box"><?php _e('by', 'themestreet'); ?> <?php the_author(); ?> - <?php the_time('F j, Y'); ?></div>
                                    <div class="justifize__box">
                                        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="inline-block social-link"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/fb.png" alt=""></a>
                                        <a href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink(); ?>" class="inline-block social-link"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/tw.png" alt=""></a>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php echo esc_url(home_url('/')); ?>" class="inline-block social-link"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/in.png" alt=""></a>

                                    </div>
                                </div>
                                <?php the_content(); ?>
                                <?php edit_post_link('Edit', '<p>', '</p>'); ?>
                                <hr class="mb-">
                                <div class="mb-">
                                    <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="inline-block social-link"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/fb.png" alt=""></a>
                                    <a href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink(); ?>" class="inline-block social-link"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/tw.png" alt=""></a>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php echo esc_url(home_url('/')); ?>" class="inline-block social-link"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/in.png" alt=""></a>
                                </div>
                                <hr class="mb+">

                                <?php if (get_field('options_disqus_name', 'option')): ?>
                                    <!-- comments // -->
                                    <div id="disqus_thread"></div>
                                    <script type="text/javascript">
                                        /* * * CONFIGURATION VARIABLES * * */
                                        // Required: on line below, replace text in quotes with your forum shortname
                                        // var disqus_shortname = 'FORUM SHORTNAME GOES HERE';

                                        var disqus_shortname = 'options_disqus_name'; // Required - Replace example with your forum shortname

                                        /* * * DON'T EDIT BELOW THIS LINE * * */
                                        (function () {
                                            var dsq = document.createElement('script');
                                            dsq.type = 'text/javascript';
                                            dsq.async = true;
                                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                        })();

                                    </script>
                                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                                    <!-- // comments -->
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="layout__item large-and-up-1/3">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php
    endwhile;
endif;
?>

<?php //post_navigation();    ?>

<?php get_footer(); ?>