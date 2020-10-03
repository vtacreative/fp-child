<?php
/* THAT VENTURA BRAND FOOTER */
?>
	<footer id="footer-container">
		
		<div class="row">

			<div class="medium-12 columns text-center">
				
							<a href="http://www.instagram.com/thatventurabrand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-dot-med.jpg" width="200" height="200" alt="That Ventura Brand"></a>

							<p><a id="insta-dot" href="http://www.instagram.com/thatventurabrand">@thatventurabrand</a></p>
				
				
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="https://vtacreative.us18.list-manage.com/subscribe/post?u=ac8a90b28d7a2ffc746698802&amp;id=7937f250c9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					<label for="mce-EMAIL">Get deals in your inbox!</label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ac8a90b28d7a2ffc746698802_7937f250c9" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
				</div>

				<!--End mc_embed_signup-->
				

			</div><!--/.columns-->

		</div><!--/.row-->

		
		<!-- COPYRIGHT -->
		<div id="copyright" class="row">

			<div class="medium-6 large-6 columns footer-left">

				<p>&copy;<?php echo date('Y') . ' ' . COMPANY_NAME; ?><br><a href="/privacy-policy">Privacy</a>&nbsp;|&nbsp;<a href="/contact-us">Contact</a></p>
				
				
				

			</div>

			<div class="medium-6 large-6 columns footer-right">

				<p>

					<a href="http://www.instagram.com/thatventurabrand"><i class="social foundicon-instagram"></i></a>

					<a class="scroll" href="#top"><i class="enclosed foundicon-up-arrow"></i></a>

					<a href="/"><i class="general foundicon-home"></i></a>

				</p>

			</div>

		</div> <!--/.row-->
		
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