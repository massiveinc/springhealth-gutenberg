<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */

?>
	<footer>
		<div class="container">
			<div class="row">
					<div class="col-sm-3">
							<div class="footer-logo">
									<a href="<?php echo site_url();?>"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-shapes.png" width="37"></span><p>Mental health care that’s<br> precisely right for  you.</p></a>
							</div>
					</div>
					<div class="col-sm-6">
							<ul class="footer-links">
									<li><a href="<?php echo site_url();?>/our-approach">Our Approach</a></li>
									<li><a href="<?php echo site_url();?>/our-solutions">Our Solution</a></li>
									<li><a href="<?php echo site_url();?>/our-impact">Our Impact</a></li>
									<li><a href="<?php echo site_url();?>/#">Publications</a></li>
							</ul>
							<ul class="footer-links">
									<li><a href="<?php echo site_url();?>/about">About</a></li>
									<li><a href="<?php echo site_url();?>/#">Career</a></li>
									<li><a href="<?php echo site_url();?>/contact">Contact Us</a></li>
							</ul>
					</div>
					<div class="col-sm-3">
							<a href="#" class="hipaa"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hipaa.png" width="225" class="img-responsive"></a>
					</div>
			</div>
		</div>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/video-popup.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery("a.bla-1").YouTubePopUp({ autoplay: 1 });
	});
	if($(window).width() < 992){
		$(".navigation").append(`<span class="close-nav"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close.svg" width="18"></span>`)
		$(".nav-toggle").click(function(){
			$("body").toggleClass("open-nav");
			$(".nav-bg").fadeToggle(300);
		});
		$(".nav-bg, .close-nav").click(function(){
			$("body").removeClass("open-nav");
			$(".nav-bg").fadeOut(300);
		});
		$(document).on("click", ".dd-icon", function(){
			$(".dd-icon").siblings(".submenu").slideToggle(300);
		});
	}

	$(".menu-dropdown").prepend(`<span class="dd-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/caret-black.png" class="icon-default"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/caret-hover.png" class="icon-hover"></span>`);
	$(window).bind('orientationchange', function (event) {
		location.reload(true);
	});
</script>

<?php wp_footer(); ?>
</body>
</html>
