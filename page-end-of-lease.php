<?php /* Template Name: End of lease */ ?>
<?php get_header(); ?>

<div class="site-header">
	<div class="header-image" style="background:url('https://calibrecleaning.com.au/images/home.jpg') no-repeat center;" ></div><!-- .header-image -->
	<div class="container header-text">	
		<h1 class="header-title"><?php the_field('price_title'); ?></h1>
	</div>
</div><!-- .site-header -->

<div class="container end-of-lease price-page">

	<h2 class="page-title">End of Lease Cleaning Prices</h2>
	<div class="container--small">
		<div class="price-description"><?php the_field('price_description'); ?></div>
		<div class="table-responsive">
			<table class="table table-striped table-hover pricing-table">
				<thead>
					<tr>
						<td>Size of Home</td>
						<td>Flat Rate</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>One Bedroom</td>
						<td>$259</td>
					</tr>
					<tr>
						<td>Two Bedrooms</td>
						<td>$339</td>
					</tr>
					<tr>
						<td>Three Bedrooms</td>
						<td>$419</td>
					</tr>
					<tr>
						<td>Four Bedrooms</td>
						<td>$499</td>
					</tr>
				</tbody>
			</table>
			<div class="price-summary"><?php the_field('price_summary')?></div>
		</div><!-- .table-responsive -->
	</div><!-- .container--small -->
	<div class="text-center">
		<a href="<?php echo site_url(); ?>/?page_id=57?service_id=18" class="btn btn--primary type-bold">Schedule my clean</a>
	</div>
	<br />
	<p class="other-services center">Need different services? See our <a href="<?php echo site_url(); ?>/?page_id=245">House cleaning prices</a> and <a href="<?php echo site_url(); ?>/?page_id=518">AirBNB cleaning prices</a></p>
	<br />
	
	<hr />
		<?php the_field('end_of_lease_copy'); ?>
	<hr />
	
	<h2 id="pricing-services" class="page-section-title">
		What we'll clean
	</h2>
	
	<div class="table-responsive service-table-wrapper">
		<table class="table table-striped table-hover service-table">
			<thead>
				<tr>
					<td></td>
					<td>Once off / Recurring cleans</td>
					<td>End of lease / Move In</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="service-area service-heading">All Areas</td><td></td><td></td>
				</tr>
				<tr>
					<td class="service-area">Dusting</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Empty Rubbish Bins</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Vaccuum Carpet</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Sweep & Mop Floors</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Mirrors</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Cobweb Removal</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Skirting boards</td>
					<td><i class="fa fa-close"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Detail Door Frames</td>
					<td><i class="fa fa-close"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr class="bold">
					<td></td>
					<td>Once off / Recurring cleans</td>
					<td>End of lease / Move In</td>
				</tr>
				<tr>
					<td class="service-area service-heading">Kitchen</td><td></td><td></td>
				</tr>
				<tr>
					<td class="service-area">Clean Stove Top & Stove Fan</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Microwave</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Countertops</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Kitchen Cabinets</td>
					<td><div class="addon-price">+$25</div></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Large Electrical Appliances</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Scrub & Clean Sinks</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Polish all Stainless Steel Surfaces</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Dust & Wipe Laundry Area</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Mop Kitchen & Laundry Floors</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Fridge Cleaning</td>
					<td><div class="addon-price">+$25</div></td>
					<td><div class="addon-price">+$25</div></td>
				</tr>
				<tr>
					<td class="service-area">Oven Cleaning</td>
					<td><div class="addon-price">+$40</div></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Inside Windows</td>
					<td><div class="addon-price">+$60</div></td>
					<td><div class="addon-price">+$60</div></td>
				</tr>
				<tr class="bold">
					<td></td>
					<td>Once off / Recurring cleans</td>
					<td>End of lease / Move In</td>
				</tr>
				<tr>
					<td class="service-area service-heading">Bathrooms</td><td></td><td></td>
				</tr>
				<tr>
					<td class="service-area">Dust Blinds, Window Ledges & Furniture in Bathrooms</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Wipe Bathroom Cabinets (Outside)</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Scurb & Clean Sinks</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Benchtops</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Mirrors</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Scrub & Clean Toilets</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Scrub & Clean Bath Tubs</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Scrub & Clean Showers</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Vaccuum Bathroom Floors & Rugs</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Mop Bathroom Floors</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Inside Cabinets & Drawers</td>
					<td><div class="addon-price">+$25</div></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Inside Windows</td>
					<td><div class="addon-price">+$60</div></td>
					<td><div class="addon-price">+$60</div></td>
				</tr>
				<tr class="bold">
					<td></td>
					<td>Once off / Recurring cleans</td>
					<td>End of lease / Move In</td>
				</tr>
				<tr>
					<td class="service-area service-heading">Bedroom & Living Areas</td><td></td><td></td>
				</tr>
				<tr>
					<td class="service-area">Make Bed</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-close"></i></td>
				</tr>
				<tr>
					<td class="service-area">Change Bed Sheets (when left on top of bed)</td>
					<td><div class="addon-price">$5/bedroom</div></td>
					<td><i class="fa fa-close"></i></td>
				</tr>
				<tr>
					<td class="service-area">Dust Furniture & Decorations, Clean Glass Table Tops</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-close"></i></td>
				</tr>
				<tr>
					<td class="service-area">Vaccuum all Carpet, Rugs and Stairs</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Vacuum Closet Shelves & Drawers</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Dust/Wipe Doors</td>
					<td><i class="fa fa-check"></i></td>
					<td><i class="fa fa-check"></i></td>
				</tr>
				<tr>
					<td class="service-area">Clean Inside Windows</td>
					<td><div class="addon-price">+$60</div></td>
					<td><div class="addon-price">+$60</div></td>
				</tr>
				
			</tbody>
		</table>
	</div><!-- .table-responsive -->
	
	<hr />
	<?php the_field('end_of_lease_copy_2'); ?>
	
	<div class="price-not-included"><?php the_field('price_not_included'); ?></div>
</div><!-- .container -->

<?php get_footer(); ?>
