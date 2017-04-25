<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!--Bootstrap core css-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
<!--favicon-->
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico">
    <!--font-awesome icons-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="all" href='<?php bloginfo( 'style.css' ); ?>'>
    <!--Google fonts -->

<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css"> -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">-->




<?php wp_head(); ?>

<!-- HTML5 SHIV for IE --><!-- If using Modernizr you can remove this script! -->
                <!--[if lt IE 9]>
                       <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<!--CONVERTING STATIC HEADER TO DYNAMIC-->

 <header class="site-header" role="banner">
        <!-- NAVBAR
        =============================================-->
        <div class="navbar-wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top navbar-white " role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <a class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/b2w.png" alt="b2w logo"></a>
                    </div>
                    <!--navbar-header-->

	          <!--creating the dynamic header using wp_nav_menu-->
		  <?php
					/*	wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'container'			=>	'nav',
							'container_class'	=>	'navbar-collapse collapse',
							'menu_class'		=>	'nav navbar-nav navbar-right'*/


							//bootstrap-nav-walker code
		wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                // 'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())

	       );
		?>
                </div>
                <!--container-->
            </nav>
            <!--navbar-->
        </div>
        <!--navbar-wrapper-->
    </header>
