<?php
/**
 	Template Name: Contact Page
	
 */
 

get_header(); ?>

<!-- FEATURE IMAGE
	================================================== -->
	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		
        
	</section>
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row js--wp-5" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			
			    	 <?php while ( have_posts() ): the_post(); ?>
                     
                     	<?php the_content(); ?>
                     
                    <?php endwhile; //end of the loop ?>
		
		    	
		    </div><!-- content -->
	    </div><!-- primary -->
    </div><!-- container -->

    

<?php get_footer(); ?>
