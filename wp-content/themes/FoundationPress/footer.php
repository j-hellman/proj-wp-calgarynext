<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

	<footer>
		<div class="footer-container">

			<!-- Logo & Description Section-->
			<div class="sec about" >
				<img src="../../../../calgary_next/wp-content/themes/FoundationPress/src/assets/images/CN-LOGO.png" alt="Calgary Next Logo">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, eget sollicitudin posuere tortor, mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			
			<!-- QuickLinks Section-->
			<div class="sec quicklinks link-hover">
				<h3>Links</h3>
				<ul>
					<li><a href="../../calgary_next">Home</a></li>
					<li><a href="calgary_next/category-business">Business</a></li>
					<li><a href="calgary_next/category-events">Events</a></li>
					<li><a href="calgary_next/category-restaurants">Restaurants & Food</a></li>
					<li><a href="calgary_next/category-entertainment">Sports & Entertainment</a></li>
					<li><a href="calgary_next/about">About</a></li>
					<li><a href="calgary_next/contact">Contact Us</a></li>
				</ul>
			</div>
			
			<!-- Social medias icons Section-->
			<div class="sec followUs link-hover">
				<h3>Follow Us</h3>
				<ul class="sci">
					<li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
				</ul>
			</div>
			
			<!-- Newsletter Section-->
			<div class="sec newsletter">
			<?php
				// MailPoet plugin
				$form_widget = new \MailPoet\Form\Widget();
				echo $form_widget->widget(array('form' => 6, 'form_type' => 'php')); ?>
			</div>
		</div>

		<!-- Copyright Section -->
		<div class="copyrightText">
			<p>Calgary Next 2021  © All rights reserved.</p>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
