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
			<?php get_sidebar('publicacoes') ?>
			<div class="col-lg-6">
				<div class="publicacoes-selection">
					<span class="text-uppercase selected" id="publicacoes-artigos" page="artigos">Artigos</span>
					<span class="text-uppercase" id="publicacoes-palestras" page="palestras">Palestras</span>
				</div>
				<div class="content-text-publicacoes">
					<div class="artigos"><?php get_template_part( 'template-parts/content', 'artigos' ); ?></div>
					<div class="palestras"><?php get_template_part( 'template-parts/content', 'palestras' ); ?></div>
				</div>
			</div>
		</div>
		
	</div>
	

<?php
get_footer();
