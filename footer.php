<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_1.0
 */

?>
		 <div id="google-reviews"></div>
		 <script>
jQuery(document).ready(function($) {
   $("#google-reviews").googlePlaces({
  
   });

  

});
</script>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
		<div class="site-info">
			<div class="site-info-column">
				<h5>Title A</h5>
				<a href="link">title A</a>
				<a href="link">title A</a>
				<a href="link">title A</a>
			</div>
			<div class="site-info-column">
				<h5>Title B</h5>
				<a href="link">title B</a>
				<a href="link">title B</a>
				<a href="link">title B</a>
			</div>

			<div class="site-info-column">
				<h5>Title C</h5>
				<a href="link">title C</a>
				<a href="link">title C</a>
				<a href="link">title C</a>
			</div>

		</div><!-- .site-info -->

	<div class="contact-form">
		<?php echo do_shortcode( '[contact-form-7 id="7" title="Contact Form 1"]' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
