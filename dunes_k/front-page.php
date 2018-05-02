<?php
/**
 * Template Name: Services
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dunes_Periodontics
 */

get_header();
?>

<?php /*
<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<?php
	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
		endif;

		/* Start the Loop
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

	</main><!-- #main -->
</div><!-- #primary -->

*/ ?>

<?php
//get_sidebar();
//get_footer();

?>


         <div class="banner">

              <span class="tri-shape-bt"></span>

            <div class="container">

              <span class="tri-shape"></span>


               <div class="banner-cnt">
                  <h1>Our Services</h1>
                  <p>The ultimate goal of periodontics is to restore optimal periodontal support. We offer a variety of services to meet your periodontal needs. Learn more about out services below, and contact us with any questions Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint </p>
               </div>

            </div><!-- container -->
         </div><!-- banner -->


         <div class="main-content">
            <div class="container">
               <div class="main-blk">
                  <div class="surgical-main">

                     <ul>
                        <li>
                           <div class="surgical-blk">
                              <div class="eclipse">
                                 <figure><img src="<?php echo  get_template_directory_uri(); ?>/Dunes_files/eclipse.jpg" width="264" height="264" alt="img"></figure>
                              </div>
                              <div class="surgical-in">
                                 <h2>Surgical and Non-Surgical Periodontal Treatment  </h2>
                                 <p>We offer a full range of periodontal therapy to treat all periodontal disease from the earliest to the most advanced cases. Most recently, a dual wavelength laser- assisted surgical treatment protocol has been adopted and used with great success for the treatment of moderate to advanced periodontal cases. The benefits of this minimally invasive laser protocol are many. It is extremely effective with fewer long term side effects including minimal recession of the gingival tissue following treatment and reduced incidence of cold hypersensitivity. It is also capable of regenerating missing periodontal attachment-including bone. Generally, patients are very pleased with the results.</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="surgical-blk">
                              <div class="eclipse">
                                 <figure><img src="<?php echo  get_template_directory_uri(); ?>/Dunes_files/eclipse.jpg" width="264" height="264" alt="img"></figure>
                              </div>
                              <div class="surgical-in">
                                 <h2>Repair and Treatment of Failing Implants</h2>
                                 <p>The dual wavelength laser protocol is also effective for treating ailing and/or failing implants caused by peri-implantitis. This approach has been found to be highly successful in removing the biofilm from exposed implant threads.</p>
                                 <p>Our laser treatment can predictably kill the biofilm in the threads and disinfect the implant. This resolves the infection that causes the bone loss. Phenomenal results have been achieved, helping to retain implants which have a very unfavorable prognosis prior to treatment.</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="surgical-blk">
                              <div class="eclipse">
                                 <figure><img src="<?php echo  get_template_directory_uri(); ?>/Dunes_files/eclipse.jpg" width="264" height="264" alt="img"></figure>
                              </div>
                              <div class="surgical-in">
                                 <h2>Regenerative Therapy</h2>
                                 <p>The ultimate goal of periodontics is to restore optimal periodontal support. We offer regenerative treatments to help reclaim patients’ lost periodontal attachment. We achieve this through traditional bone grafting techniques or by using advanced laser treatment protocols.</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="surgical-blk">
                              <div class="eclipse">
                                 <figure><img src="<?php echo  get_template_directory_uri(); ?>/Dunes_files/eclipse.jpg" width="264" height="264" alt="img"></figure>
                              </div>
                              <div class="surgical-in">
                                 <h2>Dental Implants</h2>
                                 <p>We place tissue and bone level Straumann dental implants. We also have CBCT technology available to aid in the treatment planning and placement of implants.</p>
                                 <p>We provide a full range of grafting procedures to create adequate quantity and quality of supporting bone prior to implant placement. We do this through ridge augmentation, sinus grafts and socket preservation grafts.</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="surgical-blk">
                              <div class="eclipse">
                                 <figure><img src="<?php echo  get_template_directory_uri(); ?>/Dunes_files/eclipse.jpg" width="264" height="264" alt="img"></figure>
                              </div>
                              <div class="surgical-in">
                                 <h2>Grafting</h2>
                                 <p>Connective tissue grafts: connective tissue grafts are placed primarily to increase the zone of attached tissue and to help gain root coverage over exposed roots when root coverage is possible.</p>
                                 <p>Free gingival grafts: free gingival grafts are placed in areas where root coverage is simply not attainable. The purpose of this type of graft is to increase keratinized attached tissue.</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="surgical-blk">
                              <div class="eclipse">
                                 <figure><img src="<?php echo  get_template_directory_uri(); ?>/Dunes_files/eclipse.jpg" width="264" height="264" alt="img"></figure>
                              </div>
                              <div class="surgical-in">
                                 <h2>Other Services</h2>
                                 <p>Crown lengthening <span>Done prior to restoring the tooth or to treat “biologic with violations”.</span></p>
                                 <ul class="biospy">
                                    <li><a href="/index.html#">Biopsy</a></li>
                                    <li><a href="/index.html#">Oral medicine</a></li>
                                    <li><a href="/index.html#">Occlusal therapy</a></li>
                                    <li><a href="/index.html#">Periodontal splinting</a></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                     </ul>

                  </div>
                  <div class="education">
                     <h2>Continuing Education Courses</h2>
                     <p>Dr. Terry enjoys teaching all aspects of periodontal therapy and is available to provide your staff with CE courses tailor-made to your special office needs. Popular courses include:</p>
                     <ul>
                        <li><a href="/index.html#">Periodontal treatment planning for the general dental office</a></li>
                        <li><a href="/index.html#">Gingival grafting</a></li>
                        <li><a href="/index.html#">Dental implant maintenance</a></li>
                        <li><a href="/index.html#">Laser periodontal therapy</a></li>
                     </ul>
                  </div>

               </div>
            </div>
         </div><!-- main-content -->

<?php
get_footer();
?>
