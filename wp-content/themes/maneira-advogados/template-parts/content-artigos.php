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
	$type = 'publicacoes';
	$cat_id = get_cat_ID('artigos');
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
			<h3 class="publicacoes-title"><?php the_title(); ?></h3>
			<p class="publicacoes-content"><?php the_content(); ?></p>
			<span class="text-uppercase publicacoes-author"><?php echo get_the_author(); ?></span>
		</div>
	<?php endwhile;
?>


<!-- <div class="content-text-publicacoes-item">
	<span class="publicacoes-date">07 de Junho, 2016</span>
	<h3 class="publicacoes-title">Excelencia em advogacia tributária</h3>
	<p class="publicacoes-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur.</p>
	<span class="text-uppercase publicacoes-author">André Mendes Moreira</span>
</div>
<div class="content-text-publicacoes-item">
	<span class="publicacoes-date">07 de Junho, 2016</span>
	<h3 class="publicacoes-title">Excelencia em advogacia tributária</h3>
	<p class="publicacoes-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur.</p>
	<span class="text-uppercase publicacoes-author">André Mendes Moreira</span>
</div>
<div class="content-text-publicacoes-item">
	<span class="publicacoes-date">07 de Junho, 2016</span>
	<h3 class="publicacoes-title">Excelencia em advogacia tributária</h3>
	<p class="publicacoes-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur.</p>
	<span class="text-uppercase publicacoes-author">André Mendes Moreira</span>
</div>
 -->