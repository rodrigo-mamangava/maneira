<?php
/**
 * The template for displaying archive pages.
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
			<?php get_sidebar('noticias') ?>
			<div class="col-lg-5">
				<div class="content-text-noticias">
					<?php 
					
						while ( have_posts() ) : the_post(); ?>
							<div class="content-text-noticias-item">
								<span class="noticias-date"><?php the_date(); ?></span>
								<h3 class="noticias-title"><?php the_title(); ?></h3>
								<p class="noticias-content"><?php the_content(); ?></p>
								<span class="text-uppercase noticias-author"><?php echo get_the_author(); ?> </span>
							</div>
						<?php endwhile;?> 
						
				</div>
			</div>
		</div>
		
	</div>
	

<?php
get_footer();