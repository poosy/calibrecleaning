<!-- Begin of  .footer-main -->
<footer class="footer-main">
    <div class="footer-main__content">
        <div class="container">
            <div class="layout layout--tiny">
                <div class="layout__item large-and-up-3/4 mb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php if (get_field('options_logo', 'option')) : ?>
                            <?php $logo = get_field('options_logo', 'option'); ?>
                            <?php $logo = $logo['url']; ?>
                        <?php else : ?>
                            <?php $logo = get_template_directory_uri() . "/images/logo-white.png"; ?>
                        <?php endif; ?>
                        <img src="<?php echo $logo; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="mb+">
                    </a>
                    <div class="layout">
                        <div class="layout__item large-and-up-1/4 medium-1/2">
                            <h2><?php the_field('options_footer_menu_one', 'option'); ?></h2>
                            <?php wp_nav_menu(array('theme_location' => 'footer-col-1', 'container' => false, 'menu_class' => 'list-bare')); ?>
                        </div>
                        <div class="layout__item large-and-up-1/4 medium-1/2">
                            <h2><?php the_field('options_footer_menu_two', 'option'); ?></h2>
                            <?php wp_nav_menu(array('theme_location' => 'footer-col-2', 'container' => false, 'menu_class' => 'list-bare')); ?>
                        </div>
                        <div class="layout__item large-and-up-1/4 medium-1/2">
                            <h2><?php the_field('options_footer_menu_three', 'option'); ?></h2>
                            <?php wp_nav_menu(array('theme_location' => 'footer-col-3', 'container' => false, 'menu_class' => 'list-bare')); ?>
                        </div>
                        <div class="layout__item large-and-up-1/4 medium-1/2">
                            <h2><?php the_field('options_footer_menu_four', 'option'); ?></h2>
                            <?php wp_nav_menu(array('theme_location' => 'footer-col-4', 'container' => false, 'menu_class' => 'list-bare')); ?>
                        </div>
                    </div>
                </div>
                <div class="layout__item large-and-up-1/4 medium-3/4">
                    <div class="justifize social-icons">
                        <?php if (get_field('options_facebook_link', 'option')): ?>
                            <div class="justifize__box">
                                <a target="_blank" href="http://<?php the_field('options_facebook_link', 'option'); ?>" class="social-icons__facebook"></a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('options_twitter_link', 'option')): ?>
                            <div class="justifize__box">
                                <a href="http://<?php the_field('options_twitter_link', 'option'); ?>" class="social-icons__twitter"></a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('options_instagram_link', 'option')): ?>
                            <div class="justifize__box">
                                <a href="http://<?php the_field('options_instagram_link', 'option'); ?>" class="social-icons__instagram"></a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('options_youtube_link', 'option')): ?>
                            <div class="justifize__box">
                                <a href="http://<?php the_field('options_youtube_link', 'option'); ?>" class="social-icons__youtube"></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h2 class="about-us-title type-super-huge color-white type-uppercase type-bold mb"><?php _e('ABOUT US', 'themestreet'); ?></h2>
                    <span class="about-us"><p>Calibre Cleaning is the number one house cleaning service in Melbourne, allowing you to easily find trusted and reliable cleaners to clean your home.</p> <p>Schedule and manage your home cleaning online and relax while our professional cleaners handle the work for you</p></span>

				</div>
				<div>		
					<div class="flag flag--small flag--bottom">
						<?php if (get_field('options_phone', 'option')): ?>
							<div class="flag__img flag__mobile">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-phone-small.png" alt="">
							</div>
							<div class="flag__body"><p class="footer-contact lh-1 type-tiny color-white" itemprop="telephone"><?php the_field('options_phone', 'option'); ?></p></div>
						<?php endif; ?>
					</div>

					<div class="flag flag--small flag--bottom">
						<?php if (get_field('options_email', 'option')): ?>
							<div class="flag__img flag__email">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-mail-small.png" alt="">
							</div>
							<div class="flag__body"><a href="mailto:<?php the_field('options_email', 'option'); ?>" class="footer-contact lh-1 type-tiny color-white display-block" itemprop="email"><?php the_field('options_email', 'option'); ?></a></div>
						<?php endif; ?>
					</div>
					
					<div class="flag flag--small flag--bottom">
						<div class="flag__img flag__clock">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking3.png" alt="">
						</div>
						<div class="flag__body"><p class="footer-contact lh-1 type-tiny color-white display-block">Mon-Sun 8:00-18:00</p></div>
					</div>
					
					<div class="flag flag--small flag--bottom">
						<div class="flag__img flag__search">	
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-search.png" alt="">
						</div>
						<div class="flag__body"><p class="footer-contact lh-1 type-tiny color-white display-block">1105/47 Claremont st, South Yarra, Vic, 3141</p></div>
					</div>
					
				</div>
            </div>
        </div>
    </div>
    <div class="footer-main__bar">
        <div class="container">
            <div class="justifize">
                <div class="justifize__box">
                    <small><?php the_field('options_copyright', 'option'); ?></small>
                </div>
                <div class="justifize__box">
                    <?php
                    wp_nav_menu(
						array(
							'container' => false,
							'items_wrap' => '%3$s',
							'walker' => new bottom_menu_Walker
						)
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
	
									
<script type="application/ld+json">
{
	"@context": "http://schema.org/", 
	"@type": "Service", 
	"serviceType": "Home Cleaning",
	"provider":{
		"@type": "LocalBusiness",
		"name": "Calibre Cleaning",
		"image": "https://www.calibrecleaning.com.au/wp-content/uploads/2016/01/logo_89x35.png",
		"logo": "https://www.calibrecleaning.com.au/wp-content/uploads/2016/01/logo_89x35.png",
		"email":"mailto:support@calibrecleaning.com.au",
		"telephone": "1300 991 368",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "South Yarra",
			"addressRegion": "VIC",
			"postalCode":"3141",
			"streetAddress": "1105/47 Claremont st"
		},
		"url": "https://www.calibrecleaning.com.au",
		"priceRange": "$109 - $209",
		"aggregateRating": {
			"@type": "AggregateRating",
			"ratingValue": "4.8",
			"ratingCount": "27"
		},
		"review": {
			"@type": "Review",
			"author": "Danielle",
			"datePublished": "2018-04-01",
			"description": "Best clean my apartment's ever had. They cleaned all the nooks and crannies and I didn't even ask them to. I love coming home after each clean. Thank you!!",
			"name": "Best clean my apartment's ever had.",
			"reviewRating": {
				"@type": "Rating",
				"bestRating": "5",
				"ratingValue": "5",
				"worstRating": "1"
			}
		},
		"openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 08:00-16:00",
		"sameAs": [
			"https://www.linkedin.com/company/calibre-cleaning",
			"https://www.facebook.com/CalibreCleaning/",
			"https://www.google.com.au/search?safe=off&ei=sxrfWoj0MYqc0gSthbmIAg&q=calibre+cleaning+melbourne&oq=calibre+cleaning+melbourne&gs_l=psy-ab.3..0i22i30k1.6433.8994.0.9085.16.8.0.7.7.0.301.1005.0j1j2j1.4.0....0...1c.1.64.psy-ab..6.10.874...0j35i39k1.0.tuY_BRrId8M#lrd=0x6ad63ff2882a7c5f:0xb13c0dfd6bc89d42,1,,,"
		],
		"description": "Professional House Cleaning Company in Melbourne | Experienced House + Apartment Cleaning Service | Trusted and Reliable Home Cleaners | We Do The Domestic Chores For You While You Relax. Guaranteed Happiness! | Give us a call Today"
  }
}
</script>
	
</footer>
<!-- End of .footer-main  -->

<?php wp_footer(); ?>


<?php the_field('options_before_body', 'option'); ?>

</body>

</html>
