<?php
/**
 * This is the template that displays all of the <head> section and <header> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package threaded-theme
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="app">
		
		<header class="header position-fixed w-100">
			<div class="header-main w-100">
				<div class="container">
					<div class="row d-flex justify-content-center align-items-center align-content-center position-relative">
						<div class="col-md-4 pt-3">
							<nav class="header__nav navbar navbar-expand-lg">
								<div class="d-xl-none hamburger js-hamburger d-flex justify-content-center align-items-center">
									<div class="nav-toggle-bar text-white mt-4">
										<i class="las la-bars la-2x"></i>
									</div>
								</div>
								<?php
									wp_nav_menu(
										array(
											'theme_location'  	=> 'primary',
											'menu_class'      	=> 'menu-wrapper nolist w-100',
											'container_class' 	=> 'primary-menu-container',
											'items_wrap'      	=> '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
											'fallback_cb'     	=> false,
											'depth'				=> 3,
										)
									);
								?>
							</nav>
						</div>

						<div class="col-md-4">
							<div class="header__logo text-center">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img class="img-fluid" src="<?php echo ASSETS_URL;?>/img/Logo.svg" alt="<?php bloginfo('name');?>" style="aspect-ratio: 12/1" width="193">
								</a>
							</div>
						</div>

						<div class="col-md-4">
							<div class="header__right d-flex justify-content-end align-content-center align-items-center">
								<div class="icon-user">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/icons/icon-user.svg';?>" alt="User" loading="lazy"/></a>
								</div>
								<div class="icon-cart">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/icons/icon-shopping-bag.svg';?>" alt="Cart" loading="lazy"/></a>
								</div>
								<div class="icon-fav">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/icons/icon-heart.svg';?>" alt="Favorites" loading="lazy"/></a>
								</div>
								<div class="icon-support">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/icons/icon-support.svg';?>" alt="Support" loading="lazy"/></a>
								</div>
								<div class="icon-search">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/icons/icon-search.svg';?>" alt="Search" loading="lazy"/></a>
								</div>
								<div class="currency-list">
									<a href="#"><img src="<?php echo ASSETS_URL . '/img/icons/icon-currency.svg';?>" alt="Currency" loading="lazy"/></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header-benefits w-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="header-benefits__inner d-flex justify-content-between align-items-center align-content-center">
								<div class="header-benefits__inner--item d-flex justify-content-between align-items-center align-content-center">
									<img src="<?php echo ASSETS_URL . '/img/svg/benefits-exclusive.svg';?>" alt="Exclusive Deals for VIP 2 and up!" loading="lazy"/>
									<div class="h6"><a href="#">Exclusive Deals for VIP 2 and up!</a></div>
								</div>
								<div class="header-benefits__inner--item d-flex justify-content-between align-items-center align-content-center">
									<img src="<?php echo ASSETS_URL . '/img/svg/benefits-weekly.svg';?>" alt="Weekly New Arrivals" loading="lazy"/>
									<div class="h6"><a href="#">Weekly New Arrivals</a></div>
								</div>
								<div class="header-benefits__inner--item d-flex justify-content-between align-items-center align-content-center">
									<img src="<?php echo ASSETS_URL . '/img/svg/benefits-free-shipping.svg';?>" alt="Free Shipping" loading="lazy"/>
									<div class="h6"><a href="#">Free Shipping On Orders Over $100</a></div>
								</div>
								<div class="header-benefits__inner--item d-flex justify-content-between align-items-center align-content-center">
									<img src="<?php echo ASSETS_URL . '/img/svg/benefits-track.svg';?>" alt="Track Your Order" loading="lazy"/>
									<div class="h6"><a href="#">Track Your Order</a></div>
								</div>
								<div class="header-benefits__inner--item d-flex justify-content-between align-items-center align-content-center">
									<img src="<?php echo ASSETS_URL . '/img/svg/benefits-off.svg';?>" alt="10% Off On Your First Order!" loading="lazy"/>
									<div class="h6"><a href="#">10% Off On Your First Order!</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</header>