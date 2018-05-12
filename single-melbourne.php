<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="location">

	<!-- Begin of SECTION ONE .subheader -->
	<section id="location-section1" class="subheader pb0" style="<?php if (get_field('location_one_background_image')) { ?> background-image: url('<?php the_field("location_one_background_image"); ?>'); <?php } else { ?>background-image: url('<?php echo get_template_directory_uri(); ?>/images/subheader-img1.jpg');<?php } ?>">
		<div class="container relative" <?php if(function_exists("live_edit")){ live_edit('one_visible, location_one_background_image, location_one_title, location_one_button_title, location_one_button_link'); }?>>
			<div class="text-center">
				<h1>Residential, Apartment & House Cleaning Services in <?php get_field('location_one_title'); {the_field('location_one_title');}?></h1>
				<h2><?php echo "Get your home cleaned by Professional and Trusted house cleaners in " . get_field('location_one_title');?></h2>
				<a href="<?php the_field('location_one_button_link'); ?>?frequency_id=3" class="btn btn--primary"><?php the_field('location_one_button_title'); ?></a>
				<a href="<?php the_field('location_one_button_2_link'); ?>" class="btn btn--primary btn--secondary"><?php the_field('location_one_button_2_title'); ?></a>
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

	<!-- ============================ Begin of SECTION TWO .how-we-work ===========================-->
	<section class="how-we-work">
		<div class="container relative" <?php if(function_exists("live_edit")){ live_edit('location_two_visible, location_two_title, location_two_boxes, location_two_button_title, location_two_button_link'); }?>>
			<h2 class="text-center color-gray mb+ pb-"><?php the_field('location_two_title') ?></h2>

			<div class="layout layout--center pb">

				<div class="layout__item large-and-up-1/3">
					<div class="img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/homepage-img1.jpg');">
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="<?php echo the_field('location_one_title');?> man booking a house cleaning ">
							
						</div>
						<div class="text-wrap text-center">
							<h3 class="type-x-huge">Book</h3>
							<p>Book your regular or one-time cleaning service online, with instant confirmation.</p>
						</div>
					</div>
				</div>
				
				<div class="layout__item large-and-up-1/3">
					<div class="img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/homepage-img2.jpg');">
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png" alt="<?php echo the_field('location_one_title');?> man paying for house cleaning booking online ">
							
						</div>
						<div class="text-wrap text-center">
							<h3 class="type-x-huge">Confirm</h3>
							<p>Add instructions and pay securely online by debit or credit card. No cash, no worries.</p>
						</div>
					</div>
				</div>
				
				<div class="layout__item large-and-up-1/3">
					<div class="img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/homepage-img3.jpg');">
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon3.png" alt="<?php echo the_field('location_one_title');?> man enjoying a wonderful home cleaned by Calibre Cleaning ">
							
						</div>
						<div class="text-wrap text-center">
							<h3 class="type-x-huge">Relax</h3>
							<p>Sit back and relax. Enjoy your sparkling home!</p>
						</div>
					</div>
				</div>
				
				
			</div><!-- .layout -->

			<div class="text-center pt+">
				<a href="<?php the_field('location_one_button_link') ?>?frequency_id=3" class="btn btn--primary type-bold">Schedule my clean</a>
			</div>
		</div>
	</section>
	<!-- End of .how-we-work  -->
	
	<!-- Begin of SECTION THREE .trust -->
	<section class="trust trust--second section--border-top">
		<div class="container relative" <?php if(function_exists("live_edit")){ live_edit('three_visible, three_title, three_boxes'); }?>>
			<h2 class="text-center mb pb-"><?php echo "Booking House Cleaners in " . get_field('location_one_title') . " Has Never Been This Easy!"; ?></h2>
			<div class="layout">
				
				<div class="layout__item large-and-up-1/5 text-center">
					<div>
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/trust-second1-blue-1.png" alt="<?php echo "choose the date for your local " . get_field('location_one_title') . " cleaning team to arrive"; ?> ">
						</div>
						<h3>CHOOSE YOUR DATE</h3>
						<p>Pick a day and time that fits your schedule.</p>
					</div>
				</div>
				<div class="layout__item large-and-up-1/5 text-center">
					<div>
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/trust-second2-blue.png" alt="<?php echo "Book the " . get_field('location_one_title') . " cleaning team in under one minute"; ?>">
						</div>
						<h3>BOOK IN ONE MINUTE</h3>
						<p>Booking online is quick and easy.</p>
					</div>
				</div>
				<div class="layout__item large-and-up-1/5 text-center">
					<div>
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/trust-second3-blue.png" alt="<?php echo "Pay for your " . get_field('location_one_title') . " cleaners securely with SSL encryption"; ?>">
						</div>
						<h3>PAY SECURELY ONLINE</h3>
						<p>Your payment is secured through SSL encryption.</p>
					</div>
				</div>
				<div class="layout__item large-and-up-1/5 text-center">
					<div>
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/trust-second4-blue.png" alt="<?php echo "No contracts with your " . get_field('location_one_title') . " cleaning specialists"; ?>">
						</div>
						<h3>NO CONTRACTS</h3>
						<p>No commitments, no hassles, no worries.</p>
					</div>
				</div>
				<div class="layout__item large-and-up-1/5 text-center">
					<div>
						<div class="icon-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/trust-second5-blue.png" alt="<?php echo "Save up to 15% when booking a regular clean with your " . get_field('location_one_title') . " cleaners"; ?>">
						</div>
						<h3>SAVE</h3>
						<p>Regular cleans save up to 15%.</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End of .trust  -->
	
	<!-- Begin of SECTION FOUR .happiness Unique Content -->
	<section class="happiness bgr-gray">
		<div class="container container text-left relative" >
			<?php
				$image = get_field('location_four_icon');
				if (!empty($image)):
					?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb">
				<?php endif; ?>
			<h2 class="type-light mb- pt-"><?php the_field('location_four_title'); ?></h2>
			<p class="type-light mb+"><?php the_field('location_four_description'); ?></p>
			<a href="<?php the_field('location_four_button_link'); ?>?frequency_id=3" class="btn btn--primary btn--small type-bold"><?php the_field('location_four_button_title'); ?></a>
		</div>
	</section>
	<!-- End of .happiness  -->

	<!-- Begin of SECTION FIVE .testimonial -->
	<section class="testimonial" style="<?php if (get_field('five_background_image')) { ?> background-image: url('<?php the_field("five_background_image"); ?>'); <?php } else { ?>background-image: url('<?php echo get_template_directory_uri(); ?>/images/testimonials.jpg');<?php } ?>">
		<div class="container relative" <?php if(function_exists("live_edit")){ live_edit('five_visible, five_background_image, five_title'); }?>>
			<h2 class="location-testimonial-h2 text-center"><?php the_field('location_five_title'); ?></h2>
			<div class="testimonial-slider owl-carousel mb">
				
				<?php if (have_rows('five_boxes')) : $i = 1; ?>
				<?php
					while (have_rows('five_boxes')) : the_row();
				?>

				<div class="testimonial-slider__content">
					<div class="flag">
						<div class="flag__img">
							<div class="testimonial__img">
								<?php
								$image = get_sub_field('location_testimonial_image');
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
								<p class="mb--"><?php the_sub_field('location_testimonial'); ?></p>
								<span class="type-italic type-bold display-block"><?php the_sub_field('location_testimonial_title'); ?></span>
							</div>
						</div>
					</div>
				</div>

				<?php $i++; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				
			</div>
		</div>
	</section>
	<!-- End of SECTION SIX .testimonial  -->

	<section class="section1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/trust.jpg');">
		<div class="container relative">
			<div class="layout layout--bottom layout--flush">
				<div class="layout__item large-and-up-pt++">
					<div class="section1__text pv+">
						<h2 class="mb+">FINDING TRUSTED CLEANERS FOR YOU</h2>
						<ul class="inline-block list-bare list-checked">

							<li>Background Checked with Police Checks</li>
							<li>Regular Cleans Save Up To 15%</li>
							<li>Fully Insured Teams.</li>
							<li>Not happy? We'll re-clean for free!</li>
							<li>No Waiting, No Quotes, No Phone Calls.</li>
							<li>Outstanding and Friendly Cleaners</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Begin of SECTION SEVEN .house -->
	<section class="house">
		<div class="text-center relative"  <?php if(function_exists("live_edit")){ live_edit('eight_visible, eight_title, eight_description, eight_button_link, eight_button_title'); }?>>
			<h2 class="mb--">Where we service</h2>
			<?php echo the_field('google_map'); ?>
			
			<div class="container container--middle">
			
				<p class="type-huge mb+"><?php echo "Calibre Cleaning service all houses and apartments, within a 30km radius of Melbourne CBD. We have teams available in " . get_field('location_one_title') . " today"; ?></p>
				
				<div class="surrounding">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('location_nine_surrounding_suburbs') ):
					// loop through the rows of data
					?>
					<span class="surrounding-title">Where else do we service?</span>
					<ul class="surrounding-list">
					<?php
					while ( have_rows('location_nine_surrounding_suburbs') ) : the_row();
						// display a sub field value
						?>
						<li class="surrounding-list-item">
							<a href="<?php the_sub_field('location_nine_suburb'); ?>"> <?php echo the_sub_field('location_nine_suburb_name'); ?></a> 
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
					<a href="<?php echo site_url(); ?>/contact" class="btn btn--primary btn--transparent type-bold mb">GET IN TOUCH TODAY</a>
				</div>
			</div><!--.container-->
		</div>
	</section>
	<!-- End of .house  -->

	<!-- Begin of SECTION EIGHT .happiness 
	<section class="happiness happiness--second bgr-gray">
		<div class="container container--small text-center relative" <?php if(function_exists("live_edit")){ live_edit('nine_visible, nine_title, nine_button_link, nine_button_title'); }?>>
			<h2 class="color-darkgray type-light mb pb-">BOOK A HOUSE CLEANER NOW</h2>
		</div>
	</section>
	 End of .happiness  -->
	
	<!-- Begin of SECTION NINE .surrounding -->
	<!--<section class="surrounding bgr-gray">
		<div class="container container--small text-center relative" <?php if(function_exists("live_edit")){ live_edit('nine_visible, nine_title, nine_button_link, nine_button_title'); }?>>
			<h2 class="color-darkgray type-light mb pb-">Surrounding Suburbs that we Service</h2>
			<div class>
			<?php
			// check if the repeater field has rows of data
			if( have_rows('location_nine_surrounding_suburbs') ):
				// loop through the rows of data
				?>
				<ul class="surrounding-list">
				<?php
				while ( have_rows('location_nine_surrounding_suburbs') ) : the_row();
					// display a sub field value
					?>
					<li class="surrounding-list-item">
						<a href="<?php the_sub_field('location_nine_suburb'); ?>"> <?php echo the_sub_field('location_nine_suburb_name'); ?></a> 
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
			</div>
			<div><a href="<?php the_field('location_one_button_link'); ?>?frequency_id=3" class="btn btn--primary btn--blue type-bold">SCHEDULE HOUSE CLEANING</a></div>

		</div>
	</section>-->
	<!-- End of .surrounding  -->

</main>
<?php
endwhile;
endif;
?>
<?php get_footer(); ?>
