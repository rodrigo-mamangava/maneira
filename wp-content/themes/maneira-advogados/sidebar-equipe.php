<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maneira_advogados
 */


?>

<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
	<aside>
		<div class="page-title">
			<span class="text-uppercase">
				<!-- <?php $post_type = get_queried_object();
					echo $post_type->rewrite['slug'];
				?> -->
				Nossa Equipe
			</span>
		</div>
		<div class="page-resume">
			<span>
				O Maneira Advogados é formado por uma ampla equipe de especialistas com atuação no contencioso e na consultoria nas áreas tributária, cível e empresarial.
			</span>
		</div>
			<?php if( !is_page() ) { ?>
				<div class="searchbox">
					<input type="text" placeholder="FILTRAR POR ADVOGADOS"></input>
					<span class="glyphicon glyphicon-search white" id="search-equipe"></span>
				</div>
			<?php } ?>
		<div class="hidden-xs membro-equipe">
			<?php
				$type = 'equipe';
				$args=array(
				  'post_type' => $type,
				  'post_status' => 'publish',
				  'posts_per_page' => -1,
				  'caller_get_posts'=> 1);

				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <span class="text-uppercase">
				    	<a href="#myModalEquipe-<?php echo get_the_ID();?>"
				    	   data-target="#myModalEquipe-<?php echo get_the_ID();?>"
				    	   data-toggle="modal"><?php the_title(); ?>
				    	</a>
				    </span>
			    <?php endwhile; }
					wp_reset_query();  // Restore global post data stomped by the_post().
			?>



		</div>
	</aside>
</div>
