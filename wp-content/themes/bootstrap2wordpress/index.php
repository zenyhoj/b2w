<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_Wordpress
 */

get_header(); ?>

  	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
        <h1 class="page-title">Blog</h1>
	</section>

	    <!--Blog Content-->
    <div class="container">
        <div class="row" id="primary">
            <main id="content" class="col-sm-8" role="main">
			
				<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

			</main>

			 <!--=================SIDEBAR=====================-->
                <aside class="col-sm-4">
					<?php get_sidebar(); ?>
				</aside>

		</div><!--#primary-->
	</div><!--.container-->


<?php

get_footer();
