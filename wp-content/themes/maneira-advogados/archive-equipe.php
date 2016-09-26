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
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img-responsive" id="content-image"></div>
	</div>
	<div class="row">
		<div class="main-content-wrapper" id="equipe-page">	
			<?php get_sidebar('equipe') ?>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="content-equipe-wrapper">
					<div class="no-member">
						<span>Nenhum membro encontrado</span>
					</div>
					
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="content-equipe">
							<div class="equipe-membro">
								<div class="row">
									<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-9 col-md-offset-2 col-md-9 col-lg-offset-4 col-lg-8">
										<?php if ( has_post_thumbnail() ) {
												$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
												echo "<img class='img-responsive' src='$img[0]' />"; 
											}else{
												echo "<img src=''/>";
											}
										?>
										<div class="equipe-membro-info">
											<!-- <span class="equipe-membro-cargo text-uppercase"><?php echo get_field('cargo'); ?></span> -->
											<span class="equipe-membro-nome text-uppercase"><?php echo the_title(); ?></span>
											<span class="equipe-membro-email"><?php echo get_field('email'); ?></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-offset-3 col-xs-9 col-sm-offset-3 col-sm-7 col-md-offset-3 col-md-7 col-lg-offset-5 col-lg-7 equipe-membro-mais-info">
										<a href="#myModalEquipe-<?php echo get_the_ID();?>" data-target="#myModalEquipe-<?php echo get_the_ID();?>" data-toggle="modal"><span class="text-uppercase" id="more-info">Mais Informações</span>
											<span class="glyphicon glyphicon-plus white" id="plus-sign"></span>
										</a>
										
									</div>
								</div>
							</div>
						</div>

						<!-- MODAL -->
						<div id="myModalEquipe-<?php echo get_the_ID();?>" class="modal fade container-fluid myModalEquipe" role="dialog" data-keyboard="true">
					        <div class="modal-dialog row">

					            <!-- Modal content-->
					            <div class="hidden-xs hidden-sm modal-content">
					            	<div id="modal-wrapper">
					            		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					            			<button type="button" class="close" data-dismiss="modal">&times;</button>
											
											<div class="row">
												<div class="col-xs-offset-3 col-xs-6 col-sm-offset-4 col-sm-4 col-md-offset-2 col-md-6 col-lg-offset-2 col-lg-6">
													<div class="equipe-membro">
														<?php if ( has_post_thumbnail() ) {
																$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
																echo "<img class='img-responsive' src='$img[0]' />"; 
															}else{
																echo "<img src=''/>";
															}
														?>
													</div>
												</div>
												
											</div>
											<div class="row">
												<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-4 col-lg-offset-3 col-lg-4">
													<div class="equipe-membro">
														<div class="equipe-membro-info">
															<!-- <span class="equipe-membro-cargo text-uppercase"><?php echo get_field('cargo'); ?></span> -->
															<span class="equipe-membro-nome text-uppercase"><?php the_title(); ?></span>
															<span class="equipe-membro-email"><?php echo get_field('email'); ?></span>
														</div>
													</div>
												</div>
												
											</div>
											<div class="row">
												<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-6 col-md-5 col-lg-offset-6 col-lg-5">
													<div class="equipe-membro">
														<ul class="nav nav-tabs text-uppercase">
															<li class="active" content="biografia"><a>Biografia</a></li>
														    <li content="formacao"><a>Formação</a></li>
														    <!-- <li content="premios"><a>Prêmios</a></li> -->
														    <li content="idiomas"><a>Idiomas</a></li>
													  	</ul>
													  	<div class="modal-tabs-content biografia">
													  		<?php echo get_field('biografia'); ?>
													  	</div>
													  	<div class="modal-tabs-content formacao">
													  		<?php echo get_field('formacao'); ?>
													  	</div>
													  	<!-- <div class="modal-tabs-content premios">
													  		<?php echo get_field('premios'); ?>
													  	</div> -->
													  	<div class="modal-tabs-content idiomas">
													  		<?php echo get_field('idioma'); ?>
													  	</div>
													  	
													</div>
												</div>
												
											</div>
											<div class="row">
												<div class="col-xs-offset-4 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-7 col-md-4 col-lg-offset-7 col-lg-4">
													<div class="links">
														<div class="link-item">
															<a target="_blank" href="<?php echo get_field('lattes'); ?>">
																<img src="<?php echo get_bloginfo('template_directory');?>/image/lattes.png" alt="lattes">
																<span>Currículo Lattes</span>
															</a>
														</div>
														<div class="link-item">
															<a target="_blank" href="<?php echo get_field('linkedin'); ?>">
																<img src="<?php echo get_bloginfo('template_directory');?>/image/linkedin.png" alt="linkedin">
																<span>LinkedIn</span>
															</a>
														</div>
														<div class="link-item">
															<a href="<?php echo get_post_type_archive_link( 'publicacoes' ); 
																		echo '#';
																		echo the_title(); ?>">
																<img src="<?php echo get_bloginfo('template_directory');?>/image/artigo.png" alt="artigo">
																<span>Artigos</span>
															</a>
														</div>
														
														
														
													</div>
												</div>
												
											</div>
											
					            		</div>	
										
										
					            	</div>
					            </div>

					            <div class="hidden-md hidden-lg modal-content-mobile">
					            	<div id="modal-wrapper">
					            		
					            			<!--  -->
											
											<!-- <div class="row"> -->
												<div class="img-overlay">
													<div class="overlay"></div>
													<div class="col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-2 col-md-6 col-lg-offset-2 col-lg-6 equipe-imagem-mobile img-responsive" style="
														<?php if ( has_post_thumbnail() ) {
																$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
																echo "background-image:url($img[0])";

															}else{
																echo "";
															}
														?>">

														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<div class="equipe-membro-info">
															<!-- <span class="equipe-membro-cargo text-uppercase"><?php echo get_field('cargo'); ?></span> -->
															<span class="equipe-membro-nome text-uppercase"><?php the_title(); ?></span>
															<span class="equipe-membro-email"><?php echo get_field('email'); ?></span>
														</div>
														
													</div>
												</div>
												
												
											
											
												<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-6 col-md-5 col-lg-offset-6 col-lg-5 equipe-membro-mobile-wrapper">
													<ul class="nav nav-tabs text-uppercase">
														<li class="active" content="biografia"><a>Biografia</a></li>
													    <li content="formacao"><a>Formação</a></li>
													    <!-- <li content="premios"><a>Prêmios</a></li> -->
													    <li content="idiomas"><a>Idiomas</a></li>
												  	</ul>
												  	<div class="modal-tabs-content biografia">
												  		<?php echo get_field('biografia'); ?>
												  	</div>
												  	<div class="modal-tabs-content formacao">
												  		<?php echo get_field('formacao'); ?>
												  	</div>
												  	<!-- <div class="modal-tabs-content premios">
												  		<?php echo get_field('premios'); ?>
												  	</div> -->
												  	<div class="modal-tabs-content idiomas">
												  		<?php echo get_field('idioma'); ?>
												  	</div>
													<div class="links">
														<div class="link-item col-xs-4">
															<a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'lattes', true); ?>">
																<img src="<?php echo get_bloginfo('template_directory');?>/image/lattes.png" alt="lattes">
																<span>Lattes</span>
															</a>
														</div>
														<div class="link-item col-xs-4">
															<a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'linkedin', true); ?>">
																<img src="<?php echo get_bloginfo('template_directory');?>/image/linkedin.png" alt="linkedin">
																<span>LinkedIn</span>
															</a>
														</div>
														<div class="link-item col-xs-4">
															<a target="_blank" href="<?php echo get_post_type_archive_link( 'publicacoes' ); 
																		echo '#';
																		echo the_title(); ?>">
																<img src="<?php echo get_bloginfo('template_directory');?>/image/artigo.png" alt="artigo">
																<span>Artigos</span>
															</a>
														</div>
													</div>
												</div>
												
											
										
										
					            	</div>
					            </div>

					        </div>
					    </div>

					<?php endwhile;?>
					
				</div>
				
				
			</div>
		</div>
		
	</div>
	

<?php
get_footer();