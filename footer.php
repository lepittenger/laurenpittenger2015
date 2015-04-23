    	</div><!-- / #main -->
	</div><!-- / #inner-wrap -->
</div><!-- / #wrapper -->

<div id="footer">
	<div class="footer-wrapper">
		<div class="widgets">

			<div class="column first">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer: Column 1') ) : ?> <?php endif; ?>
			</div><!-- / .column -->

			<div class="column middle">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer: Column 2') ) : ?> <?php endif; ?>
			</div><!-- / .column -->


			<div class="column last">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer: Column 4') ) : ?> <?php endif; ?>
			</div><!-- / .column -->

			<div class="cleaner">&nbsp;</div>
        </div>
   </div><!-- / .footer-wrapper -->
   <div class="copyright">
        <div class="footer-wrapper">
			<div class="left"><p class="copy"><?php _e('Copyright', 'wpzoom'); ?> &copy; 2013-<?php echo date("Y",time()); ?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved', 'wpzoom'); ?>.</p></div>
			<div class="right"></div>

        </div>
	</div<!-- / .footer-wrapper -->
</div><!-- / #footer -->


<script type="text/javascript">
jQuery(document).ready(function($) {

	<?php if (is_home() && option::get('featured_posts_show') == 'on') { ?>
 	jQuery("#slider").flexslider({
 		controlNav: false,
		directionNav:true,
		animationLoop: true,
   		animation: "<?php if (option::get('slideshow_effect') == 'Slide') { ?>slide<?php } else { ?>fade<?php } ?>",
		useCSS: false,
		smoothHeight: true,
		slideshow: <?php if (option::get('slideshow_auto') == 'on') { echo "true"; } else { echo "false"; } ?>,
		<?php if (option::get('slideshow_auto') == 'on') { ?>slideshowSpeed:<?php echo option::get('slideshow_speed'); ?>,<?php } ?>
		pauseOnAction: true,
		animationSpeed: 600
 	});
	<?php } ?>

	<?php wp_reset_query(); if (is_singular('portfolio')) { ?>
 	jQuery("#portfolio-slider").flexslider({
 		controlNav: false,
		directionNav:true,
		animationLoop: true,
		slideshow: false,
  		animation: "slide",
		useCSS: false,
		smoothHeight: true,
		slideshow: false,
 		animationSpeed: 300
 	});
	<?php } ?>

});
</script>

<?php wp_footer(); ?>
</body>
</html>
