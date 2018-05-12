<?php /* Template Name: Suburbs */ get_header(); ?>

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
						<h1 class="blog-title type-bold color-white mb-">Where we service</h1>
						<p class="blog-title type-large color-white mb+">Find all the locations that we cover throughout Melbourne</p>
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
				<?php query_posts('post_type=melbourne' . '&orderby=title&order=ASC'); ?>
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
								</header>
								<?php the_excerpt(); ?>
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
		</div>
	</div>
</section>
<!-- End of .blog-content  -->


</main>

<?php get_footer(); ?>