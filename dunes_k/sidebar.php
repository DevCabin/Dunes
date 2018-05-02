<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dunes_Periodontics
 */
?>

<aside id="secondary" class="widget-area">
	<?php if (is_page('blog')||is_home()) { ?>
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
<?php } elseif (is_page('contact')) { ?>
	<?php dynamic_sidebar( 'sidebar-contact' ); ?>
<?php } elseif (is_page('faq')) { ?>
	<?php dynamic_sidebar( 'sidebar-faq' ); ?>
<?php } elseif (is_page('patient-info')) { ?>
	<?php dynamic_sidebar( 'sidebar-patient-info' ); ?>
<?php } else {dynamic_sidebar( 'sidebar-1' ); } ?>
</aside><!-- #secondary -->
