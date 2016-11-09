<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maneira_advogados
 */


?>

<div class="col-md-5 col-lg-5">
	<aside>
		<div class="page-title">
			<span class="text-uppercase">
				Publicações
			</span>
		</div>
		<div class="page-resume">
			<span>
				Os profissionais do Maneira Advogados possuem extensa e destacada produção científica sobre os temas mais atuais.
			</span>
		</div>
			
				
			<div class="searchbox">
				<span class="glyphicon glyphicon-plus white" id="left-arrow"></span>
				<a href="<?php echo get_post_type_archive_link( 'artigos' ); ?>">
					<span class="text-uppercase" id="back-to-publish">Todas as Publicações</span>
				</a>
			</div>
			

	</aside>
</div>
