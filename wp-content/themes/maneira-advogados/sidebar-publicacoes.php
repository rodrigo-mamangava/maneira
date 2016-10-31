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
				<!-- <?php $post_type = get_queried_object();
					echo $post_type->rewrite['slug'];
				?> -->
				Publicações
			</span>
		</div>
		<div class="page-resume">
			<span>
				Os profissionais do Maneira Advogados possuem extensa e destacada produção científica sobre os temas mais atuais.
			</span>
		</div>
			<?php if( !is_page() ) { ?>
				<!-- <form role="search" method="get" id="searchform"
				    class="searchbox" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				    <div>
				        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
				        <input type="text" placeholder="PESQUISAR PUBLICAÇÕES" value="<?php echo get_search_query(); ?>" name="s" id="s" />
				        <input type="submit" id="searchsubmit"
				            class="glyphicon glyphicon-search white" value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
				        <input type="hidden" name="post_type" value="publicacoes" />
				    </div>
				</form> -->
				<div class="searchbox">
					<input type="text" placeholder="PESQUISAR PUBLICAÇÕES"></input>
					<span class="glyphicon glyphicon-search white" id="search-publicacao"></span>
				</div>
			<?php } ?>


	</aside>
</div>
