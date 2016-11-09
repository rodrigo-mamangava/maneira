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

	<div class="single-publicacoes-palestras-wrapper">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?> 
				<div class="single-publicações-video single-mini-video">
					<?php the_content();?>
				</div>
				<div class="content-text-publicacoes-single">
					<h3 class="publicacoes-palestras-single-title"><?php the_title(); ?></h3>
					<span class="publicacoes-palestras-single-subtitle">
						<em><?php echo get_field('subtitulo'); ?></em>
					</span>
					<?php echo get_field('texto'); ?>
					
				</div>
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7 col-md-offset-5 col-md-7 col-lg-offset-8 col-lg-4 publicacoes-single-all">
						<span class="glyphicon glyphicon-plus white" id="left-arrow"></span>
						<a href="<?php echo get_post_type_archive_link( 'artigos' ); ?>">
							<span class="text-uppercase" id="all-news">Todas as Publicações</span>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

				
<?php
get_footer();