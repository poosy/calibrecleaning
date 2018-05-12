<?php /* Template Name: Homepage */ get_header(); ?>

<main>

    <?php if (get_field('one_visible') === TRUE) : ?>
        <!-- Begin of  .subheader -->
        <section id="home-section1" class="subheader pb0" style="<?php if (get_field('one_background_image')) { ?> background-image: url('<?php the_field("one_background_image"); ?>'); <?php } else { ?>background-image: url('<?php echo get_template_directory_uri(); ?>/images/subheader-img1.jpg');<?php } ?>">
            <div class="container relative" <?php if(function_exists("live_edit")){ live_edit('one_visible, one_background_image, one_title, one_button_title, one_button_link'); }?>>
                <div class="text-center">
                    <h1><?php the_field('one_title'); ?></h1>
					<h2><?php the_field('one_subtitle'); ?></h2>
                    <a href="<?php the_field('one_button_link'); ?>?frequency_id=3" class="btn btn--primary"><?php the_field('one_button_title'); ?></a>
                    <a href="<?php the_field('one_button_2_link'); ?>" class="btn btn--primary btn--secondary"><?php the_field('one_button_2_title'); ?></a>
					<div class="hero-testimonial">
					<div class="hero-testimonial-wrapper">	
						<img class="hero-testimonial-face" src="<?php echo get_template_directory_uri(); ?>/images/danielle.jpg');" alt="One of Calibre Cleaning's happy customers, Danielle from South Yarra" />
						<div class="hero-testimonial-author">Danielle, South Yarra</div>
						<div class="hero-testimonial-stars">★★★★★</div>
					</div>
					<div class="hero-testimonial-text">"Best clean my apartment's ever had. They cleaned all the nooks and crannies and I didn't even ask them to. I love coming home after each clean. Thank you!!"</div>
				</div>
				</div>
            </div>
        </section>
        <!-- End of .subheader  -->
    <?php endif; ?>

    <?php if (get_field('two_visible') === TRUE) : ?>
        <!-- Begin of  .how-we-work -->
        <section id="how-we-work" class="how-we-work">
            <div class="container relative" <?php if(function_exists("live_edit")){ live_edit('two_visible, two_title, two_boxes, two_button_title, two_button_link'); }?>>
                <h2 class="text-center color-gray mb+ pb-"><?php the_field('two_title') ?></h2>

                <div class="layout layout--center pb">

                    <?php if (have_rows('two_boxes')) : $i = 1; ?>
                        <?php
                        while (have_rows('two_boxes')) : the_row();

                            // vars
                            $icon = get_sub_field('two_boxes_icon');
                            $bgimage = get_sub_field('two_boxes_background_image');
                            $title = get_sub_field('two_boxes_title');
                            $description = get_sub_field('two_boxes_description');
                            ?>

                            <div class="layout__item large-and-up-1/3">
                                <div class="img-wrap" style="background-image: url('<?php echo $bgimage; ?>');">
                                    <div class="icon-wrap">
                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                    </div>
                                    <div class="text-wrap text-center">
                                        <h3 class="type-x-huge"><?php echo $title; ?></h3>
                                        <p><?php echo $description; ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

                </div>

                <div class="text-center pt+">
                    <a href="<?php the_field('two_button_link') ?>?frequency_id=3" class="btn btn--primary"><?php the_field('two_button_title') ?></a>
                </div>
            </div>
        </section>
        <!-- End of .how-we-work  -->
    <?php endif; ?>

    <?php if (get_field('three_visible') === TRUE) : ?>
        <!-- Begin of  .trust -->
        <section class="trust trust--second section--border-top">
            <div class="container relative" <?php if(function_exists("live_edit")){ live_edit('three_visible, three_title, three_boxes'); }?>>
                <h2 class="text-center mb pb-"><?php the_field('three_title'); ?></h2>

                <div class="layout">
                    <?php if (have_rows('three_boxes')) : $i = 1; ?>
                        <?php
                        while (have_rows('three_boxes')) : the_row();
                            // vars
                            $icon = get_sub_field('three_boxes_icon');
                            $title = get_sub_field('three_boxes_title');
                            $description = get_sub_field('three_boxes_description');
                            ?>
                    <div class="layout__item large-and-up-1/5 text-center">
                        <div>
                            <div class="icon-wrap">
                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            </div>
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $description; ?></p>
                        </div>
                    </div>
                    <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <!-- End of .trust  -->
    <?php endif; ?>

    <?php if (get_field('four_visible') === TRUE) : ?>
        <!-- Begin of  .happiness -->
        <section class="happiness bgr-gray">
            <div class="container text-center relative" <?php if(function_exists("live_edit")){ live_edit('four_visible, four_icon, four_title, four_description, four_button_link, four_button_title'); }?>>
                <?php
                        $image = get_field('four_icon');
                        if (!empty($image)):
                            ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb">
                        <?php endif; ?>
                <h2 class="type-light mb- pt-"><?php the_field('four_title'); ?></h2>
                <div class="type-huge text-left type-light mb+"><?php the_field('four_description'); ?></div>
                <a href="<?php the_field('four_button_link'); ?>?frequency_id=3" class="btn btn--primary btn--small type-bold"><?php the_field('four_button_title'); ?></a>
            </div>
        </section>
        <!-- End of .happiness  -->
    <?php endif; ?>

    <?php if (get_field('five_visible') === TRUE) : ?>
        <!-- Begin of  .testimonial -->
        <section class="testimonial" style="<?php if (get_field('five_background_image')) { ?> background-image: url('<?php the_field("five_background_image"); ?>'); <?php } else { ?>background-image: url('<?php echo get_template_directory_uri(); ?>/images/testimonials.jpg');<?php } ?>">
            <div class="container relative" <?php if(function_exists("live_edit")){ live_edit('five_visible, five_background_image, five_title'); }?>>
                <h2 class="text-center"><?php the_field('five_title'); ?></h2>
                <div class="testimonial-slider owl-carousel mb">
                    
                    <?php
                    query_posts(array('post_type' => 'testimonials'));
                    if (have_posts()) : ?>
                    <?php while( have_posts() ) : the_post(); //start of the loop ?>
                    
                    <div>
                        <div class="testimonial-slider__content">
                            <div class="flag">
                                <div class="flag__img">
                                    <div class="testimonial__img">
                                        <?php
                                        $image = get_field('user_image');
                                        $size = 'testimonial-thumb';
                                        $thumb = $image['sizes'][ $size ];
                                        $width = $image['sizes'][ $size . '-width' ];
                                        $height = $image['sizes'][ $size . '-height' ];
                                        if (!empty($image)):
                                        ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="flag__body">
                                    <div class="flag__body--text">
                                        <p class="mb--"><?php the_field('user_testimonial'); ?></p>
                                        <span class="type-italic type-bold display-block"><?php the_title(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php endwhile; //end of the loop ?><?php endif; ?>
                    <?php wp_reset_query(); ?>
                    
                </div>
            </div>
        </section>
        <!-- End of .testimonial  -->
    <?php endif; ?>

    <?php if (get_field('six_visible') === TRUE) : ?>
        <section class="section1" style="<?php if (get_field('six_background_image')) { ?> background-image: url('<?php the_field("six_background_image"); ?>'); <?php } else { ?>background-image: url('<?php echo get_template_directory_uri(); ?>/images/check-list-bgr1.jpg');<?php } ?>">
            <div class="container relative" <?php if(function_exists("live_edit")){ live_edit('six_visible, six_background_image, six_title, six_list'); }?>>
                <div class="layout layout--bottom layout--flush">
                    <div class="layout__item large-and-up-pt++">
                        <div class="section1__text pv+">
                            <h2 class="mb+"><?php the_field('six_title'); ?></h2>
                            <ul class="inline-block list-bare list-checked">
                                <?php if (have_rows('six_list')) : $i = 1; ?>
                        <?php
                        while (have_rows('six_list')) : the_row();
                            // vars
                            $item = get_sub_field('six_list_item');
                            ?>
                                <li><?php echo $item; ?></li>
                                
                    <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (get_field('seven_visible') === TRUE) : ?>
        <!-- Begin of  .big-phone -->
        <section class="big-phone bgr-gray">
            <div class="container container--middle relative" <?php if(function_exists("live_edit")){ live_edit('seven_visible, seven_title, seven_description, seven_link, seven_image'); }?>>
                <div class="flag flag--rev">
                    <div class="flag__body">
                        <h2 class="mb-"><?php the_field('seven_title'); ?></h2>
                        <p class="type-huge mb"><?php the_field('seven_description'); ?></p>
                        <?php //if( get_field('seven_link') ): ?>
                            <!--<a href="<?php the_field('seven_link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/apple-button.png" alt=""></a>-->
                        <?php //endif; ?>
                    </div>
                    <div class="flag__img">
                        <?php
                        $image = get_field('seven_image');
                        ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of .big-phone  -->
    <?php endif; ?>

    <?php if (get_field('eight_visible') === TRUE) : ?>
        <!-- Begin of  .house -->
        <section class="house">
			<div class="text-center relative"  <?php if(function_exists("live_edit")){ live_edit('eight_visible, eight_title, eight_description, eight_button_link, eight_button_title'); }?>>
				<h2 class="mb--">Servicing all of Melbourne</h2>
				<?php echo the_field('eight_map'); ?>
				
				<div class="container container--middle">
				
					<p class="type-huge mb+"><?php echo "Calibre Cleaning services all houses and apartments of Melbourne. We have teams available in " . get_field('location_one_title') . " today"; ?></p>
					
					<div class="surrounding">
					<?php
					// check if the repeater field has rows of data
					if( have_rows('northern_suburbs') ):
						// loop through the rows of data
						?>
						<span class="surrounding-title">Melbourne suburbs:</span>
						<ul class="surrounding-list home-surrounding-list">
						<?php
						while ( have_rows('northern_suburbs') ) : the_row();
							// display a sub field value
						?>
							<li class="surrounding-list-item">
								<a href="<?php the_sub_field('northern_suburb'); ?>"><?php echo the_sub_field('northern_suburb_name'); ?></a> 
							</li>
						<?php	
						endwhile;
						?>
						</ul>
						<?php
					else :
						// no rows found
					endif;
					?>
					</div><!--.surrounding-->
					
					<div class="contact-button">
						<a href="<?php the_field('eight_button_link'); ?>" class="btn btn--primary btn--transparent type-bold mb"><?php the_field('eight_button_title'); ?></a>
					</div>
				</div><!--.container-->
			</div>
		</section>
        <!-- End of .house  -->
    <?php endif; ?>

    <?php if (get_field('nine_visible') === TRUE) : ?>
        <!-- Begin of  .happiness -->
        <section class="happiness happiness--second bgr-gray">
            <div class="container container--small text-center relative" <?php if(function_exists("live_edit")){ live_edit('nine_visible, nine_title, nine_button_link, nine_button_title'); }?>>
                <h2 class="color-darkgray type-light mb pb-"><?php the_field('nine_title'); ?></h2>
                <a href="<?php the_field('nine_button_link'); ?>?frequency_id=3" class="btn btn--primary btn--blue type-bold"><?php the_field('nine_button_title'); ?></a>
            </div>
        </section>
        <!-- End of .happiness  -->
    <?php endif; ?>

</main>

<?php get_footer(); ?>
