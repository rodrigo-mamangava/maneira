<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maneira_advogados
 */

get_header(); ?>
	<div class="row">
		<div class="col-lg-12" id="content-image">
			<div id="content-image-text">
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</span>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="about-company">
			<div class="col-lg-offset-1 col-lg-4">
				<div class="about-company-item">
					<h3 class="text-uppercase">Quem somos</h3>
					<p>Eduardo Maneira Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<a class="text-uppercase" href="#">Saiba Mais</a>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-offset-1 col-lg-4">
				<div class="about-company-item">
					<h3 class="text-uppercase">Áreas de atuação</h3>
					<p>Eduardo Maneira Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<a class="text-uppercase" href="#">Saiba Mais</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="publish-and-news-wrapper">
			<div class="publish-and-news">
			<div class="col-lg-12">
				<h3 class="text-uppercase">Notícias e Publicações</h3>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-3">
						<div class="publish-and-news-item">
							<div class="publish-and-news-date">
								<span class="text-uppercase">28 de Junho de 2016</span>
							</div>
							<div class="publish-and-news-content">
								<p>Em matéria penal, primeiro direito do réu é ser bem acusado</p>
							</div>
							<div class="publish-and-news-author">
								<span>André Mendes Moreira</span>
							</div>
						</div>
					</div>
					<div class="col-lg-offset-1 col-lg-3">
						<div class="publish-and-news-item">
							<div class="publish-and-news-date">
								<span class="text-uppercase">28 de Junho de 2016</span>
							</div>
							<div class="publish-and-news-content">
								<p>Em matéria penal, primeiro direito do réu é ser bem acusado</p>
							</div>
							<div class="publish-and-news-author">
								<span>André Mendes Moreira</span>
							</div>	
						</div>
					</div>
					<div class="col-lg-offset-1 col-lg-3">
						<div class="publish-and-news-item">
							<div class="publish-and-news-date">
								<span class="text-uppercase">28 de Junho de 2016</span>
							</div>
							<div class="publish-and-news-content">
								<p>Em matéria penal, primeiro direito do réu é ser bem acusado</p>
							</div>
							<div class="publish-and-news-author">
								<span>André Mendes Moreira</span>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
		
	</div>
	

<?php
// get_sidebar();
get_footer();
