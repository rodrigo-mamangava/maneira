<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package maneira_advogados
 */

get_header(); ?>
<div class="row">
	<div class="col-lg-12" id="content-image"></div>
</div>
<div class="row">
	
	<div class="hidden-xs col-lg-5">
		<aside class="sidebar-noticias-single text-uppercase">

			<span class="noticias-date"><?php echo get_the_date(); ?></span>
			<div class="sidebar-noticias-single-author">
				<span><?php get_the_author(); ?></span>
			</div>

			<div class="sidebar-noticias-single-tag">

				<?php
				$posttags = get_the_tags();
				if ($posttags) {
				  foreach($posttags as $tag) {
				    echo '<span class="text-uppercase">' . $tag->name . '</span>'; 
				  }
				}
				?>
  				
				
				
			</div>

		</aside>
	</div>
	<div class="col-lg-5">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="content-text-noticias-single">
				<h3 class="noticias-single-title"><?php the_title(); ?></h3>
				<span class="noticias-single-subtitle">
					<em><?php echo get_field('subtitulo'); ?></em>
				</span>
				<p class="noticias-single-content"><?php the_content();?></p>
				<span class="text-uppercase noticias-single-author"><?php echo get_field('autor'); ?></span>
			</div>
			<div class="row">
				<div class="col-lg-7 noticias-single-all">
					<span class="glyphicon glyphicon-plus white" id="left-arrow"></span>
					<a href="<?php echo get_post_type_archive_link( 'noticias' ); ?>">
						<span class="text-uppercase" id="all-news">Todas as Notícias</span>
					</a>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
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

								<div class="col-sm-4 col-lg-offset-1 col-lg-3">
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
get_footer();