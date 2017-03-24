<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

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

    <!-- Footer 
        =============================================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/b2w.png" alt="b2w logo"></a></p>
                </div>

                <div class="col-sm-6">
                    <nav>
                        <ul class="list-unstyled list-inline">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#resources">Resources</a></li>
                            <li><a href="">Contact</a></li>
                            <li  class="signup-link"><a href="/">Signup now</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-sm-3">
                    <p class="pull-right">
                        &copy;2014 Brad Hussey
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Modal 
        =============================================-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span> <span class="sr-only">Close</span> </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
                </div>

                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling
                        courses, <em>for free!</em></p>
                

                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your Firstname</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your firstname">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">Your Email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="Your email">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Subscribe!">
                </form>

                <hr>
                     <p class="small text-center">By providing your email, you consent to receiving occassional promotional emails &amp; newsletters. <br>No
                        Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</p>
                </div>
            </div>
        
    </div>

 <?php wp_footer(); ?>
 
 <!-- Bootstrap core JS --> 
 <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
