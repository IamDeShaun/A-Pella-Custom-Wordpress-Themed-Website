<?php
/**
 	Template Name: About Page
	
 */
 
$about_bio = get_field('about_bio');
$about_description = get_field('about_description');
$about_image = get_field('about_image');

get_header(); ?>

<!-- FEATURE IMAGE
	================================================== -->
	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		
        
	</section>
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">About Mr. Cole</p>
			    	
			    	<hr>
			<div class="col-sm-4">
					<p class="aboutbio"><?php echo $about_bio; ?></p>
				</div><!-- col -->
				<div class="col-sm-5">
					<p class="aboutdescription"><?php echo $about_description; ?></p>
				</div><!-- col -->
				<div class="col-sm-3">
					<img src="<?php echo $about_image ['url']; ?>" alt="Cole World">
				</div><!-- col -->
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	

    

<?php get_footer(); ?>
