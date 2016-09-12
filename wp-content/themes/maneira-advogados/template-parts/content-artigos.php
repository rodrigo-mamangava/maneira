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
			<a href="<?php the_permalink(); ?>" rel="bookmark"><h3 class="publicacoes-title"><?php the_title(); ?></h3></a>
			<p class="publicacoes-content"><?php the_content(); ?></p>
			<span class="text-uppercase publicacoes-author"><?php echo get_the_author(); ?></span>
		</div>
	<?php endwhile;
?>