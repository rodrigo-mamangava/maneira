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
		<div class="main-content-wrapper" id="publicacoes-page">	
			<?php get_sidebar('artigos') ?>
			<div class="col-md-6 col-lg-6">
				<div class="row" id="publicacoes-selection">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="artigos">
						<span class="text-uppercase selected" id="publicacoes-artigos" page="artigos">Artigos</span>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="palestras">
						<a href="<?php echo get_post_type_archive_link( 'palestras' ); ?>">
							<span class="text-uppercase" id="publicacoes-palestras" page="palestras">Palestras</span>
						</a>
					</div>
					
					
				</div>
				<div class="content-text-publicacoes">
					<div class="no-publish">
						<span>Nenhuma publicação encontrada</span>
					</div>

					<?php

					// Define custom query parameters

						$type = 'artigos';
						$cat_id = get_cat_ID('artigos');
						$custom_query_args = array( 
							// 'cat' => $cat_id,
							'post_type' => $type,
							'post_status' => 'publish',
							'posts_per_page' => 3);

					// Get current page and append to custom query parameters array
					$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

					// Instantiate custom query
					$custom_query = new WP_Query( $custom_query_args );

					// Pagination fix
					$temp_query = $wp_query;
					$wp_query   = NULL;
					$wp_query   = $custom_query;

					// Output custom query loop
					if ( $custom_query->have_posts() ) :
					    while ( $custom_query->have_posts() ) :
					        $custom_query->the_post(); ?>
					       	<div class="content-text-publicacoes-item">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><h3 class="publicacoes-title"><?php the_title(); ?></h3></a>
								<span class="text-uppercase publicacoes-author">Por <?php echo get_field('autor'); ?></span>
							</div>
					    <?php endwhile;
					endif; 
					// Reset postdata

					wp_reset_postdata();

					// Custom query loop pagination
					// custom_pagination_mmgv(2);
					next_posts_link();
					previous_posts_link();

					// Reset main query object
					$wp_query = NULL;
					$wp_query = $temp_query; ?>

				</div>
			</div>
		</div>
		
	</div>
	

<?php
get_footer();
