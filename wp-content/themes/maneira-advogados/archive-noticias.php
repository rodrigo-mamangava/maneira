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
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img-responsive" id="content-image"></div>
	</div>
	<div class="row">
		<div class="main-content-wrapper" id="noticias-page">	
			<?php get_sidebar('noticias') ?>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
				<div class="content-text-noticias">
					<?php 
					
						while ( have_posts() ) : the_post(); ?>
							<div class="content-text-noticias-item">
								<span class="noticias-date"><?php echo get_the_date(); ?></span>
								<a href="<?php the_permalink(); ?>" rel="bookmark"><h3 class="noticias-title"><?php the_title(); ?></h3></a>
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