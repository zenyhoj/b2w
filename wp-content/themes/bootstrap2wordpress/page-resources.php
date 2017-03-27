<?php 
/*
Template Name: Resources Page
*/
get_header();
//get resources image
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!--====FEATURE IMAGE=================-->

    <?php 
        if(has_post_thumbnail( ) ) { //check if it has post thumbnail ?>

        <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </section>
      <?php } else { //fallback image ?> 

      <!--default image-->
        <section class="feature-image feature-image-default" data-type="background" data-speed="2">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </section>

    <?php } ?>


    <!--======MAIN CONTENT==================-->
    <div class="container">
        <div class="row" id="primary">
            <div id="content" class="col-sm-12">
                <section class="main-content">

                    <?php while (have_posts() ) : the_post(); ?>
                        <!--pull in content in the resources page content editor-->
                        <?php the_content(); ?>
                    <?php endwhile; ?>

                    <!--loop through resource-->
                    <?php $loop = new WP_Query(array('post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                  

                    <hr>

                    <div class="resource-row clearfix">

                          <?php while($loop->have_posts()) : $loop->the_post(); ?>
                          <?php
                            //custom fields for project resource
                            $resource_image     = get_field('resource_image');
                            $resource_url       = get_field('resource_url');
                            $add_button         = get_field('add_button');
                            $button_text        = get_field('button_text');
                          ?>
                           <div class="resource">
                                <!--use this when using custom fields-->
                                <img src="<?php echo $resource_image[url]; ?>" alt="$resource_image[url]">
                                
                                <h3><a href="<?php echo $resource_url; ?>" target="_blank"><?php the_title(); ?></a></h3>
                                <?php echo the_content(); ?>

                                    <?php if(!empty($button_text)) : ?>
                                <!--show the button-->
                                <a href="<?php echo $resource_url; ?>" target="_blank" class="btn btn-success"><?php echo $button_text?></a>
                                <?php endif; ?>
                            </div>

                          <?php endwhile; ?>
                    </div>

                </section><!--main-content-->

            </div><!--content-->
        </div>
    </div><!--container-->
    <?php get_footer(); ?>