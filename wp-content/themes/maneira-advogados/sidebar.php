<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maneira_advogados
 */


?>

<div class="col-lg-5">
	<aside>
		<div class="page-title">
			<span class="text-uppercase">
				<?php if( is_page() ) {
							the_title();
						}else{
							$cat_name = get_category(get_query_var('cat'))->name;
							echo $cat_name;
						}?></span>
		</div>
		<div class="page-resume">
			<span>
				<?php if( is_page() ) {
						echo get_post_meta(get_the_ID(), 'descricao', true);
					}else{
						$cat_name = get_category(get_query_var('cat'))->description;
						echo $cat_name;
				}?>
			</span>
		</div>
	</aside>
</div>