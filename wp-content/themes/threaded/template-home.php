<?php
/**
 * Template Name: HomePage
 *
 * @package threaded-theme
 * @since 1.0.0
 */

get_header();
?>
	
	<main class="site-main home">
			
		<section class="section-hero">
			<div class="hero-banner">
				<div><img src="<?php echo ASSETS_URL . '/img/hero/hero1.png';?>" alt="Banner"/></div>
				<div><img src="<?php echo ASSETS_URL . '/img/hero/hero1.png';?>" alt="Banner"/></div>
				<div><img src="<?php echo ASSETS_URL . '/img/hero/hero1.png';?>" alt="Banner"/></div>
			</div>
			<div class="shop-now position-absolute">
				<a href="#" class="btn-shop-now-big text-uppercase">Shop Now</a>
			</div>
		</section> 
		
		<section class="section-wide-deals">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-5">
						<div class="list-items d-flex justify-content-between align-items-center align-content-center">
							<div class="list-items__item">
								<div class="h5 d-flex justify-content-center align-items-center align-content-center">$5 <span>OFF</span></div>
								<div class="caption">on orders above $50</div>
							</div>
							<div class="list-items__item">
								<div class="h5 d-flex justify-content-center align-items-center align-content-center">$15 <span>OFF</span></div>
								<div class="caption">on orders above $75</div>
							</div>
							<div class="list-items__item">
								<div class="h5 d-flex justify-content-center align-items-center align-content-center">$20 <span>OFF</span></div>
								<div class="caption">on orders above $150</div>
							</div>
							<div class="list-items__item">
								<div class="h5 d-flex justify-content-center align-items-center align-content-center">$30 <span>OFF</span></div>
								<div class="caption">on orders above $200</div>
							</div>
							<div class="list-items__item">
								<a href="#" class="btn-site-wide">check out all site-wide deals</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-vip-exclusive">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex justify-content-between align-items-center align-content-center">
							<div class="h3 text-uppercase">black friday exclusive</div>
							<div class="h5 text-uppercase">free shipping on all orders for vip 2 and up!</div>
							<div class="">
								<a href="#" class="btn-shop-now">SHOP NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
				
		<section class="section-trending py-5">
			<div class="section-trending-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title">Now Trending</h2>
							<p>See what everyone's wearing right now</p>
						</div>
					</div>
					<!--category list-->
					<div class="row pt-3 pb-3">
						<div class="col-6 col-md-3">
							<div class="category-list mb-5 text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/winter-fashion.jpg';?>" alt="Winter Fashion" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">Winter Fashion</a>
								</div>
							</div>
						</div> 
						<div class="col-6 col-md-3">
							<div class="category-list text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/boots.jpg';?>" alt="Boots" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">Boots</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="category-list text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/night-out.jpg';?>" alt="Night Out" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">Night Out</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="category-list text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/holidays.jpg';?>" alt="Holidays" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">Holidays</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="category-list text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/outerwear.jpg';?>" alt="Outerwear" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">Outerwear</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="category-list text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/white-dresses.jpg';?>" alt="White Dresses" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">White Dresses</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="category-list text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/sweaters.jpg';?>" alt="Sweaters" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">Sweaters</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="category-list text-center">
								<div class="category-list__img">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/categories/party.jpg';?>" alt="Party" /></a>
								</div>
								<div class="category-list__title text-uppercase">
									<a href="#" class="category-list__title--link">Party</a>
								</div>
							</div>
						</div>
					</div><!-- #end category list-->

					<div class="hashtags d-flex justify-content-center align-content-center align-items-center">
						<a href="#" class="hashtags__item">#Thanksgiving</a>
						<a href="#" class="hashtags__item">#NewsYears</a>
						<a href="#" class="hashtags__item">#Knited</a>
						<a href="#" class="hashtags__item">#Pajamas</a>
						<a href="#" class="hashtags__item">#WFH</a>
						<a href="#" class="hashtags__item">#FallFashion</a>
					</div>
				</div>
			</div>	
		</section>

		<section class="section-new-arrivals">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-6 ps-5">
						<div class="title text-uppercase ms-4">New Arrivals</div>
						<div class="subtitle mb-5 ms-4">Get ready for the holidays with us!</div>
						<a href="#" class="btn-shop-now ms-4">Shop Now</a>
					</div>
				</div>
			</div>
		</section>

		<section class="section-recently py-5">
			<div class="container">				
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title">Recently Bought</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="product mt-5 d-flex justify-content-between align-content-center align-items-start">
							<div class="product__item">
								<div class="product__item--img"><img src="<?php echo ASSETS_URL . '/img/products/1.jpg';?>" alt=""/></div>
								<div class="product__item--title d-flex justify-content-start align-content-center align-items-center"><a href="#">Festive Looks Rust Red Ribbed Velvet Long Sleeve Bodysuit</a></div>
								<div class="product__item--price d-flex justify-content-start align-content-center align-items-center">
									<div>$38</div>
									<del>$38</del>
								</div>
							</div>
							<div class="product__item">
								<div class="product__item--img"><img src="<?php echo ASSETS_URL . '/img/products/2.jpg';?>" alt=""/></div>
								<div class="product__item--title d-flex justify-content-start align-content-center align-items-center"><a href="#">Chevron Flap Crossbody Bag</a></div>
								<div class="product__item--price d-flex justify-content-start align-content-center align-items-center">
									<div class="red">$5.77</div>
									<del>$7.34</del>
								</div>
							</div>
							<div class="product__item">
								<div class="product__item--img"><img src="<?php echo ASSETS_URL . '/img/products/3.jpg';?>" alt=""/></div>
								<div class="product__item--title d-flex justify-content-start align-content-center align-items-center"><a href="#">Manilla Tan Multi Plaid Oversized Fringe Scarf</a></div>
								<div class="product__item--price d-flex justify-content-start align-content-center align-items-center">
									<div class="red">$29</div>
									<del>$39</del>
								</div>
							</div>
							<div class="product__item">
								<div class="product__item--img"><img src="<?php echo ASSETS_URL . '/img/products/4.jpg';?>" alt=""/></div>
								<div class="product__item--title d-flex justify-content-start align-content-center align-items-center"><a href="#">Diamante Puff Sleeve Dress - Black</a></div>
								<div class="product__item--price d-flex justify-content-start align-content-center align-items-center">
									<div>$45.99</div>
								</div>
							</div>
							<div class="product__item">
								<div class="product__item--img"><img src="<?php echo ASSETS_URL . '/img/products/5.jpg';?>" alt=""/></div>
								<div class="product__item--title d-flex justify-content-start align-content-center align-items-center"><a href="#">Banneth Open Front Formal Dress in Black</a></div>
								<div class="product__item--price d-flex justify-content-start align-content-center align-items-center">
									<div class="red">$69</div>
									<del>$99.95</del>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class="section-next-inspo py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title mb-3">Your Next Inspo</h2>
						<p>Checkout who's wearing what by using #THREADEDInspo on Instagram</p>
					</div>
				</div>
				<div class="row pt-3 pb-3">
					<div class="col-md-12">
						<div class="instabox mt-2 d-flex justify-content-between align-content-center align-items-start">
							<div class="instabox__item">
								<a href="#"><img src="<?php echo ASSETS_URL . '/img/posts/1.jpg';?>" alt=""/></a>
							</div>
							<div class="instabox__item">
								<a href="#"><img src="<?php echo ASSETS_URL . '/img/posts/2.jpg';?>" alt=""/></a>
							</div>
							<div class="instabox__item">
								<a href="#"><img src="<?php echo ASSETS_URL . '/img/posts/3.jpg';?>" alt=""/></a>
							</div>
							<div class="instabox__item">
								<a href="#"><img src="<?php echo ASSETS_URL . '/img/posts/4.jpg';?>" alt=""/></a>
							</div>
							<div class="instabox__item">
								<a href="#"><img src="<?php echo ASSETS_URL . '/img/posts/5.jpg';?>" alt=""/></a>
							</div>
						</div>
						<div class="text-center mt-5"><a href="#" class="btn-view-posts text-uppercase">View All Posts</a></div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="h3 text-uppercase">Sign Up For Exclusive Deals and Updates</div>
					</div>
					<div class="col-md-3">
						<div class="input-group">
							<input type="text" class="form-control newsletter-email" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button">
									&raquo;
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->
<?php
get_footer();
