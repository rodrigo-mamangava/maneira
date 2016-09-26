<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maneira_advogados
 */

?>

<?php 

//MONTAR QUERY TRAZENDO APENAS CONTEUDO DE CATEGORIA ARTIGOS DO POST TYPE PUBLICACOES
	$type = 'publicacoes';
	$cat_id = get_cat_ID('palestras');
	$args=array(
		'cat' => $cat_id,
		'post_type' => $type,
		'post_status' => 'publish',
		'caller_get_posts'=> 1);
	$query= null;
	$query = new WP_Query($args);
	while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="content-text-publicacoes-item">
			<span class="publicacoes-date"><?php the_date(); ?></span>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><div class="mini-video"><?php the_content(); ?></div></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><h3 class="publicacoes-palestras-title"><?php the_title(); ?></h3></a>
				<p class="publicacoes-content"><?php echo get_field('subtitulo');; ?></p>
				<span class="text-uppercase publicacoes-author"><?php echo get_the_author(); ?></span>		
			</div>
		</div>
	<?php endwhile; 
?>

<!-- <div class="content-text-publicacoes-item">
	<span class="publicacoes-date">07 de Junho, 2016</span>
	<div class="row">
		<div class="col-lg-6">
			<img src="<?php echo get_bloginfo('template_directory');?>/image/palestra-example.png" alt="palestra-img">
		</div>
		<div class="col-lg-6">
			<h3 class="publicacoes-title">Excelencia em advogacia tributária</h3>
			<p class="publicacoes-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<span class="text-uppercase publicacoes-author">André Mendes Moreira</span>		
		</div>
	</div>
</div>
<div class="content-text-publicacoes-item">
	<span class="publicacoes-date">07 de Junho, 2016</span>
	<div class="row">
		<div class="col-lg-6">
			<img src="<?php echo get_bloginfo('template_directory');?>/image/palestra-example.png" alt="palestra-img">
		</div>
		<div class="col-lg-6">
			<h3 class="publicacoes-title">Excelencia em advogacia tributária</h3>
			<p class="publicacoes-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<span class="text-uppercase publicacoes-author">André Mendes Moreira</span>		
		</div>
	</div>
</div>
<div class="content-text-publicacoes-item">
	<span class="publicacoes-date">07 de Junho, 2016</span>
	<div class="row">
		<div class="col-lg-6">
			<img src="<?php echo get_bloginfo('template_directory');?>/image/palestra-example.png" alt="palestra-img">
		</div>
		<div class="col-lg-6">
			<h3 class="publicacoes-title">Excelencia em advogacia tributária</h3>
			<p class="publicacoes-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<span class="text-uppercase publicacoes-author">André Mendes Moreira</span>		
		</div>
	</div>
</div> -->
