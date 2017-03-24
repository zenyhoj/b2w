<?php
//Course Features Section
$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body  = get_field('features_section_body');
?>


    <!-- Course Features 
        =============================================-->
    <section id="course-features">
        <div class="container">
            <div class="section-header">
                   <!--if user uploaded an image-->
            <?php  if( !empty($features_section_image) ) :   ?>
                <img src="<?php echo $features_section_image['url']; ?>" alt="<?php $features_section_image['alt']; ?>">
            <?php endif; ?>

                <h2><?php echo $features_section_title; ?></h2>
                
                <?php if( !empty($features_section_body)) : ?>
                <p class="lead"> <?php echo $features_section_body; ?></p>
                <?php endif; ?>

            </div>
            
            <div class="row">
                <!--Accessing Custom Post Type course features-->
                <?php $loop = new WP_Query(array('post_type' => 'course_features', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                
                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                 
                <div class="col-sm-2">
                    <i class="<?php the_field('course_feature_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div>
                <?php endwhile; wp_reset_query(); ?>

            </div>
        </div>

    </section>