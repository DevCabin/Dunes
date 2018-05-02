<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dunes_Periodontics
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<span class="tri-shape"></span>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<aside id="secondary" class="widget-area">
	<img src="<?php the_field('main_image');?>" alt="" />
</aside><!-- #secondary -->

<?php
//get_sidebar();
get_footer();
