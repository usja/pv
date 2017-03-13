<!DOCTYPE html>
<html <? language_attributes(); ?> class="no-js">
<head>
	<title><? bloginfo('name'); ?> <? wp_title(); ?></title>
	<meta charset="<? bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="nK">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="icon" type="image/png" href="<? bloginfo('stylesheet_directory'); ?>/assets/images/favicon.png">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
	<? wp_enqueue_script("jquery"); ?>
	<? wp_head(); ?>
</head>


<header class="nk-header nk-header-opaque">
        <!--
        START: Navbar
    -->
        <nav class="nk-navbar nk-navbar-top">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="<? bloginfo('url'); ?>" class="nk-nav-logo">
                        <img src="<? bloginfo('stylesheet_directory'); ?>/assets/images/logo-light.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="<? bloginfo('stylesheet_directory'); ?>/assets/images/logo.svg" alt="" width="85">
                    </a>
					<? 
						wp_nav_menu(array('fallback_cb' => '','menu' => 'menu', 'menu_class' => '','items_wrap' => '<ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">%3$s</ul>'));
					?>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon hidden-lg-up">
                            <a href="#" class="nk-navbar-full-toggle">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>




    <!--
    START: Navbar Mobile
-->
    <nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
        <div class="nk-navbar-bg">
            <div class="bg-image" style="background-image: url('<? bloginfo('stylesheet_directory'); ?>/assets/images/bg-menu.jpg')"></div>
        </div>
        <div class="nk-nav-table">
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-header">

                        <div class="nk-nav-logo">
                            <a href="<? bloginfo('url'); ?>" class="nk-nav-logo">
                                <img src="<? bloginfo('stylesheet_directory'); ?>/assets/images/logo-light.svg" alt="" width="85">
                            </a>
                        </div>

                        <div class="nk-nav-close nk-navbar-full-toggle">
                            <span class="nk-icon-close"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row-full nk-nav-row">
                <div class="nano">
                    <div class="nano-content">
                        <div class="nk-nav-table">
                            <div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
                                <ul class="nk-nav">
                                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-social">
                        <ul>
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>



