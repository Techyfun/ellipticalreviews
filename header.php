<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ellipticalreviews
 */
global $ellipticalreviews_opt;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <title>Elliptical Reviews: Best Machines of 2017</title>				
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=0">
            <link href="<?php echo $ellipticalreviews_opt['favicon'][url] ; ?>" rel="shortcut icon">         
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
           <script src="<?php bloginfo('template_directory'); ?>/asset/js/jquery-1.11.3.min.js"></script>	
           <style type="text/css">
            <?php if ( (isset($ellipticalreviews_opt['custom-css'])) && ($ellipticalreviews_opt['custom-css'] != "") ) : ?>
            <?php echo $ellipticalreviews_opt['custom-css']; ?>
            <?php endif; ?>
            </style>
            <?php wp_head(); ?>
            <?php if ( (isset($ellipticalreviews_opt['analytics_js'])) && ($ellipticalreviews_opt['analytics_js'] != "") ) : ?>
            <?php echo $ellipticalreviews_opt['analytics_js']; ?>
            <?php endif; ?>	
    </head>           
<body <?php body_class(); ?>>
<nav class="top-nav hidden-xs" role="navigation">
        <div class="wrapper">
                <div class="pull-right">
               <?php if ($ellipticalreviews_opt['ellipticalreviews-twitter']) :?>			
            <a href="<?php echo $ellipticalreviews_opt['ellipticalreviews-twitter'] ; ?>" class="social" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php else : ?>
            <?php endif ;?> 
              <?php if ($ellipticalreviews_opt['ellipticalreviews-facebook']) :?>			     
              <a href="<?php echo $ellipticalreviews_opt['ellipticalreviews-facebook'] ; ?>" class="social" target="_blank"><i class="fa fa-facebook"></i></a>
            <?php else : ?>
            <?php endif ;?>
               <?php if ($ellipticalreviews_opt['ellipticalreviews-rss']) :?>			     
              <a href="<?php echo $ellipticalreviews_opt['ellipticalreviews-rss'] ; ?>" class="social"><i class="fa fa-rss"></i></a>
            <?php else : ?>
            <?php endif ;?>
                </div>
<?php if ( has_nav_menu( 'menu-top' ) ) {
                        wp_nav_menu( array(
                            'menu'              => 'menu-top',
                            'theme_location'    => 'menu-top',
                            'menu_class'        => 'nav navbar-nav',
                            'menu_id'        => 'menu-top-menu',
                           )
                        );
            }
                      ?>             

            <br clear="all">
        </div>
</nav>
<header class="header">
    <div class="wrapper">
       <div class="top-bar">
                    <div class="pull-right hidden-xs" style="margin-top:10px">
                  <?php if ($ellipticalreviews_opt['header-banner-link']) :?>
                      <a href="<?php echo $ellipticalreviews_opt['header-banner-link'] ; ?>"> 
                 <?php else: ?>	
                   <a href="<?php bloginfo('url') ; ?>">
                 <?php endif ?>  			
                 <?php if ( (isset($ellipticalreviews_opt['header-banner'][url])) && ($ellipticalreviews_opt['header-banner'][url] != "") ) : ?>	    <img src="<?php echo $ellipticalreviews_opt['header-banner'][url] ; ?>" alt="As Seen On">		            
                 <?php else : ?>				    
                 <?php endif; ?>								
                   </a>   
                    </div>
              <div class="logo">			
            <?php if($ellipticalreviews_opt['logo'][url]):?>
                    <a href="<?php bloginfo('url');  ?>">
            <img class="logo-img" src="<?php  echo $ellipticalreviews_opt['logo'][url] ; ?>" alt="Logo" />
                    </a>	    
            <?php	else : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif ;?>		                      
            </div>
            </div>
            </div>
            <nav class="main-nav" role="navigation">
                    <div class="wrapper">
                            <a class="visible-xs-block visible-sm-block pull-right mobile-search-icon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a class="mobilemenu" onclick="$('.main-nav .nav').toggle()">
                                    <span class="hamburger">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                    </span>
                                    MENU
                            </a>
                                                                                           
               <?php if ( has_nav_menu( 'primary' ) ) {
                                        wp_nav_menu( array(
                                            'menu'              => 'primary',
                                            'theme_location'    => 'primary',  
                                            'depth'             => 4,
                                            'menu_class'        => 'nav navbar-nav',
                                            'menu_id'        => 'menu-main',
                                           'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                           'walker'            => new wp_bootstrap_navwalker())
                                        );
			    }
                ?>
         
                    
                    </div>
            </nav>
</form>
</header>