<?php /* Template Name: AirBNB */ ?>
<?php get_header(); ?>

<div class="site-header">
	<div class="header-image" style="background:url('https://calibrecleaning.com.au/images/home.jpg') no-repeat center;" ></div><!-- .header-image -->
	<div class="container header-text">	
		<h1 class="header-title"><?php the_field('price_title'); ?></h1>
	</div>
</div><!-- .site-header -->

<div class="end-of-lease price-page">
<div class="container">
	<h2 class="page-title">Airbnb Cleaning Services</h2>
	<div class="container--small">
		<div class="price-description"><?php the_field('price_description'); ?></div>
		<h2 class="page-title">Airbnb Cleaning Prices</h2>
		<div class="table-responsive">
			<table class="table table-striped table-hover pricing-table">
				<thead>
					<tr>
						<td>Size of Home</td>
						<td>Price</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>One Bedroom</td>
						<td>From $75</td>
					</tr>
					<tr>
						<td>Two Bedrooms</td>
						<td>From $105</td>
					</tr>
					<tr>
						<td>Three Bedrooms</td>
						<td>From $135</td>
					</tr>
					<tr>
						<td>Four Bedrooms</td>
						<td>From $165</td>
					</tr>
				</tbody>
			</table>
			<div class="price-summary"><?php the_field('price_summary')?></div>
		</div><!-- .table-responsive -->
	</div><!-- .container--small -->
	<div class="text-center">
		<a href="<?php echo site_url(); ?>/?page_id=57?service_id=17" class="btn btn--primary type-bold">Schedule my clean</a>
	</div>
	<br />
	<p class="other-services center">Need different services? See our <a href="<?php echo site_url(); ?>/?page_id=245">House cleaning prices</a> and <a href="<?php echo site_url(); ?>/?page_id=514">End of lease cleaning prices</a></p>
	<br />
</div><!-- .container -->	
	<div class="slab-of-content">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="https://calibrecleaning.com.au/images/Airbnb-co-host-compressed.jpg" alt="airbnb host greeting a new guest in his apartment" />
				</div>
				<div class="col-md-7">
					<?php the_field('end_of_lease_copy'); ?>
				</div>
			</div>
		</div>
		<div id="honesty" class="fw" style="background: url('https://calibrecleaning.com.au/images/modern-living-room-compressed.jpg') no-repeat center; background-size:cover;">
			<div class="large-12 small-12 columns white-text text-center">
				<h3 class="image-header white-text">Reliable cleaners with affordable prices.</h3>
				<p style="font-size:1.15rem;">Upfront and transparent prices is is why you choose us <br> Consistent and quality cleans is why you stay with us</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<?php the_field('end_of_lease_copy_2'); ?>
				</div>
				<div class="col-md-5">
					<img class="pt" src="https://calibrecleaning.com.au/images/yoga-compressed.jpg" alt="airbnb guest enjoying some yoga in the sun" />
				</div>
			</div>
		</div>
		<div class="text-center">
			<a href="<?php echo site_url(); ?>/?page_id=57?service_id=17" class="btn btn--primary type-bold">Schedule my clean</a>
		</div>
		<div id="honesty" class="fw" style="background: url('https://calibrecleaning.com.au/images/modern-living-room-2-compressed.jpg') no-repeat center; background-size:cover;">
			<div class="large-12 small-12 columns white-text text-center">
				<h3 class="image-header white-text">Cleaning services designed for Airbnb hosts</h3>
				<p style="font-size:1.15rem;">Online booking for your next clean<br> We're available 9-5pm, 7 days a week</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img class="pt" src="https://calibrecleaning.com.au/images/female_traveller.jpg" alt="airbnb host greeting a new guest in his apartment" />
				</div>
				<div class="col-md-7">
					<?php the_field('end_of_lease_copy_3'); ?>
				</div>
			</div>
		</div>
	</div><!-- .slab-of-content -->	
	<br />
<div class="container">
		
	<div class="price-not-included"><?php the_field('price_not_included'); ?></div>
	</div><!-- .container -->
</div><!-- .container -->

<?php get_footer(); ?>
