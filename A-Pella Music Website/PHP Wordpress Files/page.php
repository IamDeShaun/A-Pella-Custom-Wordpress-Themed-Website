<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package A-Pella_Music
 */


get_header(); 

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->id) );

?>
<!-- FEATURE IMAGE
	================================================== -->
      <?php if ( has_post_thumbnail() ) { ?>
    
    <section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    	
    </section>
    
    <?php } else { // Fallback Image ?>
    
     <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    	
    </section>
    
    <?php } ?>

   <br />
   <br />
	<div id="primary" class="row">
		<main id="content" class="site-main" role="main">
			<div class="wrapper" id="page-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
