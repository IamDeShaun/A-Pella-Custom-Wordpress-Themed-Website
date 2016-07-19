<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A-Pella_Music
 */

?>

	

<?php wp_footer(); ?>

<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="https://soundcloud.com/user-42272445" target="_blank"><i class="fa fa-2x fa-soundcloud" aria-hidden="true"></i>
</a></li>
						<li><a href="https://www.twitter.com/apella518" target="_blank"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
</a></li>
						<li><a href="https://www.facebook.com/leroy.apella" target="_blank"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
</a></li>
						
					</ul>
				</nav>
			</div><!-- end col -->
			<div class="col-sm-6">
				<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'footer',
							'container'			=> 'nav',
							'menu_class'		=> 'list-unstyled list-inline'
							
						) );
					?>
			</div><!-- end col -->
			<div class="col-sm-3">
				<p>&copy; 2016 Mr.Cole </p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory');  ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');  ?>/assets/js/main.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
</body>
</html>
