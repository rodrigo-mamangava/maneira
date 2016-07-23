<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maneira_advogados
 */


?>

<div class="col-lg-5">
	<aside>
		<div class="page-title">
			<span class="text-uppercase">
				<?php $post_type = get_queried_object();
					echo $post_type->rewrite['slug'];
				?>
			</span>
		</div>
		<div class="page-resume">
			<span>
				O Maneira advogados reúne profissionais qualificados, que se formaram e atuam	nas instituições de ensino mais conceitudas.
			</span>
		</div>
			<?php if( !is_page() ) { ?>
				<div class="searchbox">
					<input type="text" placeholder="PESQUISAR EQUIPE"></input>
					<span class="glyphicon glyphicon-search white"></span>
				</div>
			<?php } ?>
	</aside>
</div>