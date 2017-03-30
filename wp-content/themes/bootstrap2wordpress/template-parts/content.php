<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
                    <i class="fa fa-user"></i> <?php the_author(); ?>
                    <i class="fa fa-clock-o"></i><time> <?php the_date(); ?> </time>
                    <i class="fa fa-folder-open"></i> <?php the_category( ', ' ); ?>
                    <i class="fa fa-tags"></i> <?php the_tags( '', ', ', ''); ?>
                            <div class="post-comments-badge">
                                <a href="">
                                    <i class="fa fa-comments"></i> <?php comments_number(0, 1, '%s'); ?>
                                </a>
                            </div> <!--post-comment-badge-->
							<?php edit_post_link( ' Edit', '<i class="fa fa-pencil"></i>',''); ?>
             </div> <!--.post-details-->
		<?php endif; ?>
	</header><!-- .entry-header -->

			<?php if (has_post_thumbnail( ) ) { //check for feature image ?>
			<div class="post-image img">
				<?php the_post_thumbnail(); ?>
            </div>
				<?php } ?> <!--post-image-->

                    
					<div class="post-excerpts">
                        <?php the_content('...continue reading &raquo;'); ?>
                    </div><!--post-excerpt-->
					
					<?php /* the_excerpt(); not working using
							function new_excerpt_more($more) {
       							global $post;
							return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
							}
							add_filter('excerpt_more', 'new_excerpt_more');
							
							which must be added below functions.php --?needs more research
						*/
					
					 ?>

</article><!-- #post-## -->
