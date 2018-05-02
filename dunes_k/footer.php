<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dunes_Periodontics
 */

?>
<?php /*
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dunes_k' ) ); ?>">
				<?php

				printf( esc_html__( 'Proudly powered by %s', 'dunes_k' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php

				printf( esc_html__( 'Theme: %1$s by %2$s.', 'dunes_k' ), 'dunes_k', '<a href="http://kravebranding.com">George Featherstone</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

*/ ?>


<!-- FOOTER.PHP -->

<?php if(!is_page('our-services') && !is_front_page() && ! is_post_type_archive('services')){ ?>
</div><!-- container -->
<?php } ?>
</div><!-- #content -->




<?php if (is_page('our-services') || is_front_page() || is_post_type_archive('services')) { ?>
	<div class="shape">
	 	<span class="tri-bottom"></span>
	</div>
<?php } ?>



<div class="footer">
	 <div class="container">
			<div class="footer-in">
				 <div class="footer-left">
					 <div class="clearfix">
						 <?php
						 wp_nav_menu( array(
							 'theme_location' => 'menu-1',
							 'menu_id'        => 'primary-menu',
						 ) );
						 ?>
					 </div>
				 </div>
				 <address>
						<p>150 Tower Rd., Suite 110 <br>Dakota Dunes, SD 57049 <a href="tell:605.540.4477">605.540.4477</a></p>
				 </address>
				 <div class="clear"></div>
			</div>
	 </div>
</div>
</div><!-- WRAPPER -->
<script src="<?php echo  get_template_directory_uri(); ?>/Dunes_files/jquery.min.js"></script>
<script>
$(document).ready(function(e){
			//  TOGGLE BUTTON
	 $('#nav-icon1').click(function(){
	 $('body').toggleClass('open');
			 });
	$('nav ul li').clone().appendTo('.sidebar');

});

</script>
<!-- wrapper ends -->

<?php wp_footer(); ?>

</body>
</html>
