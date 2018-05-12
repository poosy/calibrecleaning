<?php /* Template Name: About Us */ get_header(); ?>

<main>
<div class="site-header">
	<div class="header-image" style="background:url('http://rockyvuong.com/images/maids/home.jpg') no-repeat center;" ></div><!-- .header-image -->
	<div class="container header-text">	
		<h1 class="header-title"><?php the_field('about_header_title') ?></h1>
	</div>
</div><!-- .site-header -->

<div class="about-page container">
	<section class="about-section-1">
		<h2 class="about_section_1_title"><?php the_field('about_section_1_title') ?></h2>
		<p><?php the_field('about_section_1_text') ?></p>
	</section>
	
	<section class="about-section-2">
		<h2><?php the_field('about_section_2_title') ?></h2>
		<?php
			$image = get_field('about_person_1_image');
			$image2 = get_field('about_person_2_image');
		?>
		<div class="about-person-wrap">
			<div class="about-person col-xs-6">
				<div class="img-wrap">	
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
				<div class="img-text"><?php the_field('about_person_1_name') ?></div>
			</div>
			<div class="about-person col-xs-6">
				<div class="img-wrap">	
					<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
				</div>
				<div class="img-text"><?php the_field('about_person_2_name') ?></div>
			</div><!--.about-person-->
		</div><!--.about-person-wrap-->
		
		<p class="clear"><?php the_field('about_section_2_text') ?></p>
	</section>

</div><!-- .container -->
</main>

<?php get_footer(); ?>
