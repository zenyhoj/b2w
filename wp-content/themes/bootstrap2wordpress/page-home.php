<?php
/*
Template Name: Home Page
*/ 

//Custom Fields

$prelaunch_price        =   get_post_meta(7, 'prelaunch_price', true);
$launch_price           =   get_post_meta(7, 'launch_price', true);
$final_price            =   get_post_meta(7, 'final_price', true);
$course_url             =   get_post_meta(7, 'course_url', true);
$button_text            =   get_post_meta(7, 'button_text', true);
$opt_in                 =   get_post_meta(7, 'opt_in', true);
$optin_button_text      =   get_post_meta(7, 'optin_button_text', true);

/*
Using Advanced Custom Fields Plugin for
Boost Your Income Section
*/
$income_feature_image   =   get_field('income_feature_image');
$income_section_title   =   get_field('income_section_title');
$income_section_desc    =   get_field('income_section_description');
$reason_1_title         =   get_field('reason_1_title');
$reason_1_desc          =   get_field('reason_1_description');
$reason_2_title         =   get_field('reason_2_title');
$reason_2_desc          =   get_field('reason_2_description');

//Who Should Take This Course Section
$who_feature_image   =   get_field('who_feature_image');
$who_section_title   =   get_field('who_section_title');
$who_section_body    =   get_field('who_section_body');

//Course Features Section
$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body  = get_field('features_section_body');

//Project Features Section 
$project_feature_title  = get_field('project_feature_title');
$project_feature_body   = get_field('project_feature_body');

//Instructor Section
$instructor_title       = get_field('instructor_title');
$instructor_name        = get_field('instructor_name');
$instructor_excerpt     = get_field('instructor_excerpt');
$instructor_full_bio    = get_field('instructor_full_bio');
$twitter_username       = get_field('twitter_username');
$facebook_username      = get_field('facebook_username');
$google_plus_username   = get_field('google_plus_username');
$num_students           = get_field('num_students');        
$num_reviews           = get_field('num_reviews');        
$num_courses           = get_field('num_courses');   



get_header(); ?>

 <!-- HERO 
        =============================================-->
    <!--data-type:background data-speed used for parallax-->
    <section id="hero" data-type="background" data-speed="10">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="b2w logo" class="logo">
                    </div>
                    <div class="col-sm-7 hero-text">
                        
                        <!--dynamic title name and h1-->
                        <h1><?php bloginfo('name'); ?></h1>
                        <!--end here-->

                        <p class="lead"><?php bloginfo('description'); ?>
                        </p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends Soon!</small></h4>
                                <span><?php echo $prelaunch_price;?></span>
                            </div>
                            <div class="price">
                                <h4>Launch Price <small>Coming Soon!</small></h4>
                                <span><?php echo $launch_price; ?></span>
                            </div>
                            <div class="price">
                                <h4>Final Price <small>Coming Soon!</small></h4>
                                <span><?php echo $final_price; ?></span>
                            </div>
                        </div>
                        <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" target = "_blank" role="button"><?php echo $button_text; ?></a></p>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <!-- Opt-in section 
        =============================================-->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $opt_in; ?></p>
                </div>

                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                        <?php echo $optin_button_text; ?>
                    </button>
                </div>
            </div>
        </div>

    </section>

    <!-- Boost your income section
        =============================================-->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">

            <!--if user uploaded an image-->
            
            <?php  if( !empty($income_feature_image) ) :   ?>
            
                <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php $income_feature_image['alt']; ?>">
            
            <?php endif; ?>
            <h2><?php echo $income_section_title;?></h2>
            </div> <!--section-header-->
            <p class="lead" ><?php echo $income_section_desc; ?></p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1_title; ?></h3>
                    <p><?php echo $reason_1_desc; ?></p>
                </div>
                <!--col-->
                <div class="col-sm-6">
                    <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_desc; ?></p>
                </div>
                <!--col-->
            </div>
        </div>
    </section>

    <!-- Who should take this course section 
        =============================================-->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">
                <!--if user uploaded an image-->
            <?php  if( !empty($income_feature_image) ) :   ?>
                <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php $income_feature_image['alt']; ?>">
            <?php endif; ?>

                <h2><?php echo $who_section_title; ?></h2>
                <div class="row">
                    <!--offsets 2 columns in the left-->
                    <div class="col-sm-8 col-sm-offset-2">
                        <?php echo $who_section_body; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                <?php endwhile; ?>

            </div>
        </div>

    </section>


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

            <?php endwhile; ?>
            </div>
            <!--row-->

        </div>

    </section>

    <!-- Video Featurette 
        =============================================-->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Watch the Course Introduction</h2>
                    <!--video src starts with // means accepts http or https-->
                    <iframe width="100%" height="415" src="//www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructor  
        =============================================-->
    <section id="instructor">
        <div class="container">
            <div class="row">
                <!--for small media screen display 8 columns wide, 6 columns wide for wider screens -->
                <div class="col-sm-8 col-md-6">

                    <div class="row">
                        <div class="col-lg-8">
                            <h2><?php echo $instructor_title; ?> <small><?php echo $instructor_name; ?></small></h2>
                        </div>

                        <div class="col-lg-4">

                            <?php if(!empty($twitter_username)) : ?>
                            <a href="https://twitter.com/<?php $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>

                             <?php if(!empty($facebook_username)) : ?>
                            <a href="https://facebook.com/<?php $facebook_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>

                             <?php if(!empty($google_plus_username)) : ?>
                            <a href="https://plus.google.com/<?php $google_plus_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-google-plus"></i></a>
                            <?php endif; ?>
                            
                        </div>
                    </div>

                    <p class="lead"><?php echo $instructor_excerpt; ?></p>
                    <p><?php echo $instructor_full_bio; ?></p>
                    <hr>

                    <h3>The Numbers <small> They don't lie.</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_students; ?> <span>Students</span>
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_reviews; ?> <span>Reviews</span>
                                </div>
                            </div>
                        </div>

                         <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $num_courses; ?> <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Testimonials 
        =============================================-->
    <section id="kudos">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What People Are Saying About Brad</h2>
                    
                    <!--Testimonial-->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                        </div>

                        <div class="col-sm-8">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim illum qui commodi eveniet, similique deleniti inventore voluptates exercitationem temporibus nulla, reprehenderit quam, ut sit sequi vel dolores in eos, explicabo!
                            <cite>&mdash; Brenna, Codecollege Grad</cite>
                            </blockquote>
                        </div>
                    </div><!--end of testimonial-->

                       <!--Testimonial-->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben with moustache">
                        </div>

                        <div class="col-sm-8">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim illum qui commodi eveniet, similique deleniti inventore voluptates exercitationem temporibus nulla, reprehenderit quam, ut sit sequi vel dolores in eos, explicabo!
                            <cite>&mdash; Brenna, Codecollege Grad</cite>
                            </blockquote>
                        </div>
                    </div><!--end of testimonial-->

                       <!--Testimonial-->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Aj">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim illum qui commodi eveniet, similique deleniti inventore voluptates exercitationem temporibus nulla, reprehenderit quam, ut sit sequi vel dolores in eos, explicabo!
                            <cite>&mdash; Brenna, Codecollege Grad</cite>
                            </blockquote>
                        </div>
                    </div><!--end of testimonial-->

                       <!--Testimonial-->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Brennan">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim illum qui commodi eveniet, similique deleniti inventore voluptates exercitationem temporibus nulla, reprehenderit quam, ut sit sequi vel dolores in eos, explicabo!
                            <cite>&mdash; Brenna, Codecollege Grad</cite>
                            </blockquote>
                        </div>
                    </div><!--end of testimonial-->
                </div>
            </div>
        </div>
    </section>

    <!-- Signup 
        =============================================-->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>
                        Are you ready to take your coding skills to the <strong>next level</strong>?
                    </h2>
                    
                    <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>

                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
