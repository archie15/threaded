<?php
/**
 * This is the template that displays all of the <footer> section and rest of html code.
 *
 * 
 * @package threaded-theme
 * @since 1.0.0
 */

?>
		</div><!-- #app -->
			
		<footer class="footer">
 			 <div class="footer__top">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-2">
							<h4>Company Info</h4>
							<ul class="nolist">
								<li class="list-item"><a href="#">About THREADED</a></li>
								<li class="list-item"><a href="#">Affiliate</a></li>
								<li class="list-item"><a href="#">Blog</a></li>
								<li class="list-item"><a href="#">Careers</a></li>
							</ul>
						</div>						
						<div class="col-12 col-md-2">
							<h4>Help &amp; Support</h4>
							<ul class="nolist">
								<li class="list-item"><a href="#">FAQ</a></li>
								<li class="list-item"><a href="#">Shipping</a></li>
								<li class="list-item"><a href="#">Returns</a></li>
								<li class="list-item"><a href="#">How To Order</a></li>
								<li class="list-item"><a href="#">How To Track</a></li>
							</ul>
						</div>						
						<div class="col-12 col-md-2">
							<h4>Customer Care</h4>
							<ul class="nolist">
								<li class="list-item"><a href="#">Contact Us</a></li>
								<li class="list-item"><a href="#">Payment Methods</a></li>
							</ul>
						</div>						
						<div class="col-12 col-md-6 text-uppercase">
							<div class="d-block">
								<h4>Follow Us</h4>
								<div class="social d-flex justify-content-start align-content-center align-items-start">
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/social/facebook.svg';?>" alt="Facebook"/></a></div>
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/social/instagram.svg';?>" alt="Instagram"/></a></div>
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/social/twitter.svg';?>" alt="Twitter"/></a></div>
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/social/youtube.svg';?>" alt="Youtube"/></a></div>								
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/social/pinterest.svg';?>" alt="Pinterest"/></a></div>
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/social/tiktok.svg';?>" alt="Tiktok"/></a></div>
								</div>
							</div>		
							<div class="d-block mt-2 pt-2">
								<h4>We Accept</h4>
								<div class="social d-flex justify-content-start align-content-center align-items-start">
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/payments/visa.svg';?>" alt="Visa"/></a></div>
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/payments/mastercard.svg';?>" alt="Mastercard"/></a></div>
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/payments/maestro.svg';?>" alt="Maestro"/></a></div>
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/payments/american.svg';?>" alt="American"/></a></div>								
									<div class="item"><a href="#"><img src="<?php echo ASSETS_URL . '/img/payments/paypal.svg';?>" alt="Paypal"/></a></div>
								</div>
							</div>
						</div>	
					</div>
					<div class="row mt-3">
						<div class="col-md-8">
							<div class="copyright">&copy;2021 THREADED All Rights Reserved.</div>
						</div>
						<div class="col-md-4 text-end">
							<a href="#"><img class="img-fluid" src="<?php echo ASSETS_URL;?>/img/Logo.svg" alt="<?php bloginfo('name');?>" style="aspect-ratio: 12/1" width="193"></a>
						</div>
					</div>
				</div>
			 </div>
		</footer>

		<?php wp_footer();?>
	</body>
</html>
