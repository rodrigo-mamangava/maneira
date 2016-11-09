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
			<?php if( !is_page() ) { ?>
				<div class="searchbox">   
				    
				    <form name="search" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
				    	<input type="text" name="s" placeholder="PESQUISAR PUBLICAÇÕES"/>
				    	<input type="hidden" name="post_type" value="artigos" /> <!-- // hidden 'artigos' value -->
				    	<span class="glyphicon glyphicon-search white" id="search-publicacao"></span>
			  		</form>
			 	</div>
				<!-- <div class="searchbox">
					<input type="text" placeholder="PESQUISAR PUBLICAÇÕES"></input>
					<span class="glyphicon glyphicon-search white" id="search-publicacao"></span>
				</div> -->
			<?php } ?>


	</aside>
</div>
