<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maneira_advogados
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<script type="text/javascript" src="//fast.fonts.net/jsapi/a6de48dd-097a-4db1-ad15-8f33a740f57a.js"></script>
</head>

<body id="<?php if( is_home() ){ 
					echo "index-page";
				}else{
					echo "";
				};
			?>" 
		<?php body_class(); ?>
	>
	<div id="myModal" class="modal fade container-fluid" role="dialog">
	    <div class="modal-dialog">

	        <!-- Modal content-->
	        <div class="modal-content row">
	        	<div id="modal-wrapper" class="col-lg-offset-2 col-lg-8">	
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<i id="search" class="glyphicon glyphicon-search white"></i>
					<a href="search-page.html"><i id="right-arrow" class="glyphicon glyphicon-arrow-right white"></i></a>
					<input type="text" placeholder="Buscar Advogados, Notícias, Artigos..."></input>
	        	</div>
	        </div>

	    </div>
	</div>
	<div id="myModalEquipe" class="modal fade container-fluid" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content row">
            	<div id="modal-wrapper">	
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="equipe-membro">
						<!-- <img src="image/foto-advogado.png" alt="advogado">	 -->
						<?php if ( has_post_thumbnail() ) {
								$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
								echo "<img class='img-responsive' src='$img[0]' />"; 
							}else{
								echo "<img src=''/>";
							}
						?>
						
						<div class="col-lg-offset-2 col-lg-5">
							<div class="equipe-membro-info">
								<span class="equipe-membro-cargo text-uppercase"><?php echo get_post_meta(get_the_ID(), 'cargo', true); ?></span>
								<span class="equipe-membro-nome text-uppercase"><?php echo get_post_meta(get_the_ID(), 'membro', true); ?></span>
								<span class="equipe-membro-email"><?php echo get_post_meta(get_the_ID(), 'email', true); ?></span>
							</div>
							
						</div>

						<div class="col-lg-offset-5 col-lg-4">
							<ul class="nav nav-tabs text-uppercase">
								<li class="active" content="biografia"><a>Biografia</a></li>
							    <li content="formacao"><a>Formação</a></li>
							    <li content="premios"><a>Prêmios</a></li>
							    <li content="idiomas"><a>Idiomas</a></li>
						  	</ul>
						  	<div class="modal-tabs-content biografia">
						  		<p><?php echo get_post_meta(get_the_ID(), 'biografia', true); ?></p>
						  	</div>
						  	<div class="modal-tabs-content formacao">
						  		<p><?php echo get_post_meta(get_the_ID(), 'formacao', true); ?></p>
						  	</div>
						  	<div class="modal-tabs-content premios">
						  		<p><?php echo get_post_meta(get_the_ID(), 'premios', true); ?></p>
						  	</div>
						  	<div class="modal-tabs-content idiomas">
						  		<p><?php echo get_post_meta(get_the_ID(), 'idiomas', true); ?></p>
						  	</div>
					  	</div>
					  							
					</div>
					
            	</div>
            </div>

        </div>
    </div>
	<div id="page-wraper" class="container-fluid">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
		 
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-content" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php echo home_url(); ?>">
			      	<img alt="Brand" src="<?php echo get_bloginfo('template_directory');?>/image/logo.png">
			      </a>
			    </div>

			    <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        		'container_id'      => 'nav-content',
		                'menu_class'        => 'nav navbar-nav text-uppercase',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>

			    <!-- <div class="collapse navbar-collapse" id="nav-content">
			    	<ul class="nav navbar-nav text-uppercase">
			        	<li><a href="index.html">Institucional</a></li>
			        	<li><a href="atuacao.html">Áreas de atuação</a></li>
			        	<li><a href="equipe.html">Equipe</a></li>
			        	<li><a href="noticias.html">Notícias</a></li>
			        	<li><a href="publicacoes.html">Publicações</a></li>
			        	<li><a href="#">Contato</a></li>
			        	<li><a href="#">Área do Cliente</a></li>
			        	<li><a class="glyphicon glyphicon-search" data-target="#myModal" data-toggle="modal" id="MainNavHelp" href="#myModal"></a></li>
			        	<li class="divider-vertical"></li>
			        	<li><a href="#">PT</a></li>
			        	<li><a href="#">EN</a></li>
			     	</ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
		</header>
	<div id="main-content">