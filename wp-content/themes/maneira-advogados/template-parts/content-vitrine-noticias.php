<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  	<?php $totalItens = wp_count_posts( 'noticias' )->publish; 
  		$totalConj = ceil($totalItens / 3);
        for ($h = 0; $h < $totalConj; $h++) {
            if ($h == 0) {
                echo '<li data-target="#myCarousel" data-slide-to="' . $h . '" class="active"></li>';
            } else {
                echo '<li data-target="#myCarousel" data-slide-to="' . $h . '"></li>';
            }
        }
    ?>
    </ol>
  

  <?php
	$type = 'noticias';
	$args=array(
		'post_type' => $type,
		'post_status' => 'publish',
		'caller_get_posts'=> 1);
	//$query= null;
	//$query = new WP_Query($args);
	$allPosts = get_posts($args);
	//if ( $query->have_posts() ) : 
	if ( count($allPosts) ) : 
		$gruposDePosts = array_chunk($allPosts, 3);

		?>
		
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		
		<?php 

		//while ( $query->have_posts() ) : $query->the_post(); 
			for($i = 0; $i < count($gruposDePosts); $i++){
				if($i == 0){ ?>
					<div class="item active">
				<?php
					for($j = 0; $j < count($gruposDePosts[$i]); $j++){
						$post = $gruposDePosts[$i][$j];
						setup_postdata( $post )

				?>
						<div class="col-lg-offset-1 col-lg-3">
							<div class="publish-and-news-item">
								<div class="publish-and-news-date">
									<span class="text-uppercase"><?php echo get_the_date(); ?></span>
								</div>
								<div class="publish-and-news-content">
									<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></p></a><p>
								</div>
							</div>
						</div>

				<?php } ?>
					</div>
				<?php }else{ ?>
					<div class="item">
				<?php
					for($k = 0; $k < count($gruposDePosts[$i]); $k++){ 
						$post = $gruposDePosts[$i][$k];
						setup_postdata( $post )

				?>
						<div class="col-lg-offset-1 col-lg-3">
							<div class="publish-and-news-item">
								<div class="publish-and-news-date">
									<span class="text-uppercase"><?php echo get_the_date(); ?></span>
								</div>
								<div class="publish-and-news-content">
									<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></p></a><p>
								</div>
							</div>
						</div>


				<?php } ?>
					</div>
			<?php }
			}

		?>
			
			
				
				
			</div>

		
		</div>
			
		

	<?php else: ?>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 50px;">
			<span style="font-size: 6.0rem;">Em Breve Notícias</span>
		</div>

 	<?php endif; ?>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>