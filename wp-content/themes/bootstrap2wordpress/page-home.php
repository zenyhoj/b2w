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
                        <!--<p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>-->
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

    <!-- Boost your income 
        =============================================-->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-boost.png" alt="Chart">
                <h2>How You Can Boost Your Income</h2>
            </div>
            <!--section-header-->
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, veniam quis consectetur. Est amet, dolores omnis
                maxime commodi dignissimos voluptas saepe tempore magnam facilis fugit, incidunt explicabo cum voluptates.
                Autem.
            </p>

            <div class="row">
                <div class="col-sm-6">
                    <h3>Make money on the side</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At neque odio enim officiis, vitae praesentium
                        tenetur, mollitia labore perferendis, magni dicta et. Facilis consequatur officiis veritatis, nemo
                        sed cupiditate voluptate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque veniam
                        repudiandae ab. Iure fugit, minima adipisci, illum maxime rerum labore, magnam dolores harum necessitatibus,
                        eos soluta reiciendis nulla itaque incidunt! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quas odio quaerat veritatis veniam nulla, ex ipsa vitae quos consectetur, dolor enim magnam
                        temporibus error voluptatum incidunt provident quod! Molestias, voluptatibus.
                    </p>
                </div>
                <!--col-->
                <div class="col-sm-6">
                    <h3>Create a full time income</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At neque odio enim officiis, vitae praesentium
                        tenetur, mollitia labore perferendis, magni dicta et. Facilis consequatur officiis veritatis, nemo
                        sed cupiditate voluptate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque veniam
                        repudiandae ab. Iure fugit, minima adipisci, illum maxime rerum labore, magnam dolores harum necessitatibus,
                        eos soluta reiciendis nulla itaque incidunt! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quas odio quaerat veritatis veniam nulla, ex ipsa vitae quos consectetur, dolor enim magnam
                        temporibus error voluptatum incidunt provident quod! Molestias, voluptatibus.
                    </p>
                </div>
                <!--col-->
            </div>
        </div>
    </section>

    <!-- Who benefits 
        =============================================-->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and pencil">
                <h2>Who Should Take This Course?</h2>
                <div class="row">
                    <!--offsets 2 columns in the left-->
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3>Graphics &amp; Web Designers</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                            their infancy.</p>
                        <p>
                            Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, <strong>making it over 2000 years old. </strong></p>

                        <h3>Enterpreneurs</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English.</p>
                        <p>
                            Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
                            at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                            from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
                            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                            Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                            book is a treatise on the theory of ethics, very popular during the Renaissance. The first line
                            of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                        <h3>Employees</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                            their infancy.</p>
                        <p>
                            Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
                            at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                            from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
                            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                            Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                            book is a treatise on the theory of ethics, very popular during the Renaissance. The first line
                            of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                        <h3>Code Hobbyist</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                            their infancy. Various versions have evolved over the years, sometimes by accident, sometimes
                            on purpose (injected humour and the like)</p>
                        <p>
                            Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
                            at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                            from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
                            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                            Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                            book is a treatise on the theory of ethics, very popular during the Renaissance. The first line
                            of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
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
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
                <h2>Course Features</h2>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <i class="ci ci-computer"></i>
                    <h4>Lifetime access to 80+ lectures</h4>
                </div>

                <div class="col-sm-2">
                    <i class="ci ci-watch"></i>
                    <h4>10+ Hours of HD Video Content</h4>
                </div>

                <div class="col-sm-2">
                    <i class="ci ci-calendar"></i>
                    <h4>30-day Moneyback Guarantee</h4>
                </div>

                <div class="col-sm-2">
                    <i class="ci ci-community"></i>
                    <h4>Access To a Community of Likeminded Students</h4>
                </div>

                <div class="col-sm-2">
                    <i class="ci ci-instructor"></i>
                    <h4>Direct Access to the Instructor</h4>
                </div>

                <div class="col-sm-2">
                    <i class="ci ci-device"></i>
                    <h4>Accessible Content on Your Mobile Device</h4>
                </div>




            </div>
        </div>

    </section>


    <!-- Project Features 
        =============================================-->
    <section id="project-features">
        <div class="container">
            <div class="section-header">
                <h2>Project Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Accusamus impedit autem, nulla
                    quibusdam harum, fugit voluptate veniam distinctio commodi minima ullam possimus rerum, <em>laborum dolores deserunt</em>,
                    aut exercitationem aspernatur magni.</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
                    <h3>Sexy &amp; Modern Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio minus alias, impedit quia excepturi
                        a qui incidunt tempore reprehenderit neque perspiciatis veritatis consectetur sunt at ut, nam hic
                        porro enim.</p>

                </div>

                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
                    <h3>Quality HTML5 &amp; CSS3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio minus alias, impedit quia excepturi
                        a qui incidunt tempore reprehenderit neque perspiciatis veritatis consectetur sunt at ut, nam hic
                        porro enim.</p>

                </div>

                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
                    <h3>Easy to use CMS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio minus alias, impedit quia excepturi
                        a qui incidunt tempore reprehenderit neque perspiciatis veritatis consectetur sunt at ut, nam hic
                        porro enim.</p>

                </div>



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
                            <h2>Your Instructor <small>Brad Hussey</small></h2>
                        </div>

                        <div class="col-lg-4">
                            <a href="https://twitter.com/joebals" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://facebook.com/zenyhoj" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://plus.google.com/+joebals" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus officia illo saepe autem neque
                        beatae distinctio explicabo iste sunt.</p>
                    <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable.
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                        chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
                        over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                        which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected
                        humour, or non-characteristic words etc.</p>

                    <hr>

                    <h3>The Numbers <small> They don't lie.</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41,000+ <span>Students</span>
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    568 <span>Reviews</span>
                                </div>
                            </div>
                        </div>

                         <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    8 <span>Courses</span>
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
