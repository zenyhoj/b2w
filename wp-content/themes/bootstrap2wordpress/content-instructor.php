<?php
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
?>
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
