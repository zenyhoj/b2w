<?php
//Project Features Section 
$project_feature_title  = get_field('project_feature_title');
$project_feature_body   = get_field('project_feature_body');
?>


    <!-- Project Features 
        =============================================-->
    <section id="project-features">
        <div class="container">
            <div class="section-header">
                <h2><?php echo $project_feature_title; ?></h2>
                <p class="lead"><?php echo $project_feature_body; ?></p>
            </div>
            <div class="row">

                <?php $loop = new WP_Query(array('post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-sm-4">
                <?php if(has_post_thumbnail() ) {
                the_post_thumbnail(); 
                } ?>
                <!--using native wordpress function to fetch the title and content-->
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>

            <?php endwhile; wp_reset_query(); ?>
            </div>
            <!--row-->
        </div>
    </section>