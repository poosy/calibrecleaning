<?php /* Template Name: Pricing */ ?>
<?php get_header(); ?>

<div class="site-header">
	<div class="header-image" style="background:url('https://calibrecleaning.com.au/images/home.jpg') no-repeat center;" ></div><!-- .header-image -->
	<div class="container header-text">	
		<h1 class="header-title"><?php the_field('price_title'); ?></h1>
	</div>
</div><!-- .site-header -->

<div class="container price-page">

	<h2 class="page-title">House Cleaning Prices</h2>
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
						<td>$109</td>
					</tr>
					<tr>
						<td>Two Bedrooms</td>
						<td>$129</td>
					</tr>
					<tr>
						<td>Three Bedrooms</td>
						<td>$159</td>
					</tr>
					<tr>
						<td>Four Bedrooms</td>
						<td>$189</td>
					</tr>
					<tr>
						<td>Five Bedrooms</td>
						<td>$209</td>
					</tr>
					<tr class="hourly-row">
						<td>Hourly Service</td>
						<td>$45 / Hour per Cleaner</td>
					</tr>
				</tbody>
			</table>
			<div class="price-summary"><?php the_field('price_summary')?></div>
		</div><!-- .table-responsive -->
	</div><!-- .container--small -->
	<div class="text-center">
		<a href="<?php the_field('pricing_book_now') ?>?frequency_id=3" class="btn btn--primary type-bold">Schedule my clean</a>
	</div>
	<br />
	<p class="other-services center">Need different services? See our <a href="<?php echo site_url(); ?>/?page_id=514">End of lease prices</a> and <a href="<?php echo site_url(); ?>/?page_id=518">AirBNB cleaning prices</a></p>
	<br />
	<hr />
	
	<h2 class="page-section-title">Enjoy these discounts after your first clean</h2>
	
	<div class="row pricing-frequency-container">
		<div class="col-xs-6 col-sm-3 pricing-frequency">
			<!--<div class="amount price-onceoff">Once off clean</div>-->
			<div class="amount">Once off clean <div class="discount-amount">No Discount</div></div>
		</div>
		<div class="col-xs-6 col-sm-3 pricing-frequency">
			<div class="amount">Weekly <div class="discount-amount">15% Discount</div></div>
		</div>
		<div class="col-xs-6 col-sm-3 pricing-frequency">
			<div class="most-popular">Most Popular</div>
			<div class="amount fortnight">Fortnightly <div class="discount-amount">10% Discount</div></div>
		</div>
		<div class="col-xs-6 col-sm-3 pricing-frequency" id="price">
			<div class="amount">Monthly <div class="discount-amount">5% Discount</div></div>
		</div>
	</div>
	
	<div class="extras-container">
		<div class="row">
			<h2 class="page-section-title">
				Available extras 
			</h2>
		</div>
		
		<div class="row">
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras extras-single">Deep Clean<div class="extras-price">+ $60-$90</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/box.png" alt="" class="extras-icon extras-icon-deep" /></div></div>
			</div>
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras extras-single">Inside Cabinets<div class="extras-price">+ $25</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/cabinets.png" alt="" class="extras-icon extras-icon-push-down" /></div></div>
			</div>
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras">Inside the fridge<div class="extras-price">+ $25</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/fridge.png" alt="" class="extras-icon" /></div></div>
			</div>
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras extras-single">Inside the oven<div class="extras-price">+ $40</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/oven.png" alt="" class="extras-icon extras-icon-push-down" /></div></div>
			</div>
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras">Inside the windows<div class="extras-price">+ $60</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/window.png" alt="" class="extras-icon" /></div></div>
			</div>
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras">Load of laundry<div class="extras-price">+ $25</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/laundry.png" alt="" class="extras-icon" /></div></div>
			</div>
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras extras-single">Green clean<div class="extras-price">+ $5</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/spray.png" alt="" class="extras-icon extras-icon-push-down" /></div></div>
			</div>
			<div class="col-xs-6 col-sm-3 extras-wrapper">
				<div class="extras extras-single">Steam Clean<div class="extras-price">Call for a quote</div><div class="extras-icon-wrapper"><img src="//calibrecleaning.com.au/images/vaccuum.png" alt="" class="extras-icon extras-icon-push-down" /></div></div>
			</div>

			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

		</div>
	</div><!-- .extras-containers -->
	
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
	<div class="price-not-included"><?php the_field('price_not_included'); ?></div>
</div><!-- .container -->

<?php get_footer(); ?>
