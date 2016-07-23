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
			<?php get_sidebar('equipe') ?>
		<div class="col-lg-6">
			<div class="content-equipe-wrapper">
				
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="content-equipe">
						<div class="equipe-membro">
							<div class="row">
								<div class="col-lg-offset-4 col-lg-8">
									<?php if ( has_post_thumbnail() ) {
											$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
											echo "<img class='img-responsive' src='$img[0]' />"; 
										}else{
											echo "<img src=''/>";
										}
									?>
									<div class="equipe-membro-info">
										<span class="equipe-membro-cargo text-uppercase"><?php echo get_post_meta(get_the_ID(), 'cargo', true); ?></span>
										<span class="equipe-membro-nome text-uppercase"><?php echo get_post_meta(get_the_ID(), 'membro', true); ?></span>
										<span class="equipe-membro-email"><?php echo get_post_meta(get_the_ID(), 'email', true); ?></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-offset-5 col-lg-7 equipe-membro-mais-info">
									<a href="#myModalEquipe" data-target="#myModalEquipe" data-toggle="modal"><span class="text-uppercase" id="more-info">Mais Informações</span></a>
									<span class="glyphicon glyphicon-plus white" id="plus-sign"></span>
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