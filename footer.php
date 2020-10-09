<?php
/* FOUND PRESS FOOTER */
?>
	<footer id="footer-container">
		
		<div id="footer-content" class="row">

			<div class="medium-12 columns text-center">
				
				<p>Some Content</p>

			</div><!--/.columns-->

		</div><!--/#footer-content-->

		
		<!-- COPYRIGHT -->
		<div id="copyright" class="row">

			<div class="medium-6 large-6 columns footer-left">

				<p>&copy;&nbsp;<?php echo date('Y') . ' ' . COMPANY_NAME; ?><br><a href="/privacy-policy">Privacy</a>&nbsp;|&nbsp;<a href="/contact-us">Contact</a></p>

			</div>

			<div class="medium-6 large-6 columns footer-right">

				<p>

					<a target="_blank" href="<?php echo IG; ?>"><i class="social foundicon-instagram"></i></a>

					<a class="scroll" href="#top"><i class="enclosed foundicon-up-arrow"></i></a>

					<a href="/"><i class="general foundicon-home"></i></a>

				</p>

			</div>

		</div> <!--/#copyright-->
		
	</footer>

</div><!--/#page-->


<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>


<script>
// 	SCROLL TO TOP
jQuery(document).ready(function() {
    jQuery('a.scroll').bind('click',function(event){
        var $anchor = jQuery(this);
 
        jQuery('html, body').stop().animate({
            scrollTop: jQuery($anchor.attr('href')).offset().top
        }, 1000);
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        event.preventDefault();
    });
});

//	INITIALIZE FOUNDATION JS
jQuery(document).ready(function($) {
	$(document).foundation();
});
</script>

<?php wp_footer(); ?>
</body>
</html>