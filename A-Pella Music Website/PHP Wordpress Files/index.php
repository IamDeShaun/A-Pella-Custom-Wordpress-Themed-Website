<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package A-Pella_Music
 */

get_header(); ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	
        
</section>

  <!-- BLOG CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <main id="content" class="col-sm-8" role="main">
             <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

		 get_template_part( 'template-parts/content', 'none' );

		endif; ?>
             
             </main> <!--Content ---->
             
                <!-- SIDEBAR
			================================================== -->
		    <aside class="col-sm-4">
              <?php get_sidebar(); ?>
             </aside>
             
             </div><!---Primary----->
             </div><!--Container---->
             
<?php get_footer(); ?>
