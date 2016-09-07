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
 * @package maneira_advogados
 */

get_header(); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="content-image">
			<div id="content-image-text">
				<span><?php echo get_field('resumo'); ?></span>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="about-company">
			<div class="col-xs-12 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-4">
				<div class="about-company-item">
					<h3 class="text-uppercase">Quem somos</h3>
					<?php echo get_field('quem_somos'); ?>
					<a class="text-uppercase" href="#">Saiba Mais</a>
				</div>
			</div>
			<div class="hidden-xs col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-xs-12 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-4">
				<div class="about-company-item">
					<h3 class="text-uppercase">Áreas de atuação</h3>
					<?php echo get_field('areas_de_atuacao'); ?>
					<a class="text-uppercase" href="<?php echo home_url('/areas-de-atuacao/'); ?>" rel="bookmark">Saiba Mais</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="publish-and-news-wrapper">
			<div class="publish-and-news">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mobile-wrap">
					<h3 class="text-uppercase">Notícias e Publicações</h3>
					<div class="row">
						<?php 
							$type = 'noticias';
							$args=array(
								'post_type' => $type,
								'post_status' => 'publish',
								'posts_per_page' => 3,
								'caller_get_posts'=> 1);
							$query= null;
							$query = new WP_Query($args);
							if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

								<div class="col-lg-offset-1 col-lg-3">
									<div class="publish-and-news-item">
										<div class="publish-and-news-date">
											<span class="text-uppercase"><?php echo get_the_date(); ?></span>
										</div>
										<div class="publish-and-news-content">
											<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></p></a><p>
										</div>
										<div class="publish-and-news-author">
											<span><?php echo get_the_author(); ?></span>
										</div>
									</div>
								</div>
							
								
							<?php endwhile; else: ?>

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 50px;">
									<span style="font-size: 6.0rem;">Em Breve Notícias</span>
								</div>

						 	<?php endif; ?>
					</div>
				</div>	
			</div>
		</div>
	</div> 
	

<?php
// get_sidebar();
get_footer();
