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
 * @package maneira_advogados
 */

get_header(); ?>
	<div class="row">
		<div class="col-lg-12" id="content-image"></div>
	</div>
	<div class="row">
		<div class="main-content-wrapper">
			<?php get_sidebar() ?>
			<div class="col-lg-5">
				<div class="content-text">

					<?php 
					
						while ( have_posts() ) : the_post(); 
							the_content();
							endwhile;

					?> 
	        
					
				</div>
			</div>	
		</div>
		
	</div>
	

<?php
get_footer();
