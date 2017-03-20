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


<footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p><a href="#"><img src="<?php bloginfo(stylesheet_directory); ?>/assets/img/b2w.png" alt="b2w logo"></a></p>
                </div>

                <div class="col-sm-6">
                    <nav>
                        <ul class="list-unstyled list-inline">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li> <a href="#resources">Resources</a></li>
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

 <?php wp_footer(); ?>
 
 <!-- Bootstrap core JS --> 
 <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
