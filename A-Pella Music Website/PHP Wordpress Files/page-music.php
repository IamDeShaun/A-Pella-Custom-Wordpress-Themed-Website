<?php
/**
 	Template Name: Music Page
 */
 
 $apella_music = get_field('apella_music');

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
                
			    	<?php while ( have_posts() ): the_post(); ?>
                     
                     	<?php the_content(); ?>
                     
                    <?php endwhile; //end of the loop ?>
                    
                     <?php $loop = new WP_Query( array( 'post_type' => 'apellasongs','orderby' => 'post_id', 'order' => 'ASC' )) ?>
			    	<p class="lead">Latest A-Pella Music</p>
                    <hr>
        <div class="row">
         <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <?php 
						$apella_music = get_field('apella_music');
				      ?>
                              
			<div class="col-sm-6">
                <?php echo $apella_music;  ?>
				</div><!-- col -->
                 <?php endwhile; ?>
                </div> <!--Row-->
			    </section>	
		    </div><!-- content -->	    
	    </div><!-- primary -->
    </div><!-- container -->
	
<?php get_footer(); ?>