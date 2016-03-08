<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="/scripts/emailpage.js"></script>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="http://roryo.co/buc/wp-content/themes/_strap-master/js/modernizr.js"></script> <!-- Modernizr -->
<link rel="stylesheet" href="http://roryo.co/buc/wp-content/themes/_strap-master/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="http://roryo.co/buc/wp-content/themes/_strap-master/css/style.css" type="text/css" media="all">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://roryo.co/buc/wp-content/themes/_strap-master/js/main.js"></script> <!-- Resource jQuery -->

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="site-navigation" class="main-navigation navbar-default navbar-fixed-top noverlap" role="navigation">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>
			<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="sr-only"><?php _e('Toggle navigation', '_s'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="#"><img style="margin-top: -10px;" src="http://roryo.co/buc/wp-content/uploads/2016/01/cannonShield.png" alt="" width="40" height="50"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-main">
	            <ul class="nav navbar-nav">
		            <?php if( has_nav_menu( 'primary' ) ) :
			            wp_nav_menu( array(
		                        'theme_location'  => 'primary',
		                        'container'       => false,
		                        //'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
		                        'walker'          => new Bootstrap_Nav_Menu(),
		                        'fallback_cb'     => null,
				                'items_wrap'      => '%3$s',// skip the containing <ul>
		                    )
		                );
	                else :
		                wp_list_pages( array(
				                'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
				                'walker'          => new Bootstrap_Page_Menu(),
				                'title_li'        => null,
			                )
		                );
		            endif; ?>
	            </ul>
            </div><!-- /.navbar-collapse -->
			</div>
		</nav><!-- #site-navigation -->


<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		
	</header><!-- #masthead -->
	

	<div id="content" class="site-content noverlap">
	
