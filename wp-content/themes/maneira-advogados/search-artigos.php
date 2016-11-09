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
        <div class="main-content-wrapper" id="publicacoes-page">    
            <?php get_sidebar('search-publicacoes') ?>
            <div class="col-md-6 col-lg-6">
                <div class="content-text-publicacoes">
                    <div class="no-publish">
                        <span>Nenhuma publicação encontrada</span>
                    </div> 
                    
                    <div class="search-content">
                    <h4>Resultado de pesquisa para : <?php echo "$s"; ?> </h4>
                    <?php
                        $type = 'artigos';
                        $custom_query_args = array( 
                            'post_type' => $type,
                            'post_status' => 'publish',
                            's'=> $s);

                        // Instantiate custom query
                        $custom_query = new WP_Query( $custom_query_args );

                        // Pagination fix
                        $temp_query = $wp_query;
                        $wp_query   = NULL;
                        $wp_query   = $custom_query;

                        if ( $custom_query->have_posts() ) : 
                            while ( $custom_query->have_posts() ) : 
                                $custom_query->the_post(); ?>
                                    
                                    <div class="content-text-publicacoes-item">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><h3 class="publicacoes-title"><?php the_title(); ?></h3></a>
                                        <span class="text-uppercase publicacoes-author">Por <?php echo get_field('autor'); ?></span>
                                    </div>
                                      
                                    
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>   
                </div><!-- content-text-publicacoes -->  
            </div>
        </div>
    </div>
    

<?php
get_footer(); ?>


