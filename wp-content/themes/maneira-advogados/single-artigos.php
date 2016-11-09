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
	<div class="hidden-xs col-sm-5 col-md-5 col-lg-5">
		<aside class="sidebar-publicacoes-single text-uppercase">
			<span class="publicacoes-date"><?php echo get_the_date();?></span>
			<div class="sidebar-publicacoes-single-author">
				<span><?php echo get_field('autor'); ?></span>
			</div>
		</aside>
	</div>
	<div class="col-sm-6 col-lg-5">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="content-text-publicacoes-single">
				<h3 class="publicacoes-single-title"><?php the_title(); ?></h3>
				<span class="publicacoes-single-subtitle">
					<em><?php echo get_field('subtitulo'); ?></em>
				</span>
				<p class="publicacoes-single-content"><?php the_content();?></p>
				<span class="text-uppercase publicacoes-single-author"><?php echo get_field('autor'); ?></span>
			</div>
			<div class="row">
				<div class="col-lg-7 publicacoes-single-all">
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

				
<?php
get_footer();