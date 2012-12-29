<!DOCTYPE html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!--[if lt IE 9]>
    <script type="text/javascript">
         document.createElement('header');
         document.createElement('hgroup');
         document.createElement('nav');
         document.createElement('menu');
         document.createElement('section');
         document.createElement('article');
         document.createElement('aside');
         document.createElement('footer');
    </script>
<![endif]-->
	
	<head>

  <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome-ie7.css">
  <!-- Add jQuery library -->
  <script type="text/javascript" src="/assets/jquery-1.8.2.min.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="/assets/jquery.fancybox.js?v=2.1.3"></script>
  <link rel="stylesheet" type="text/css" href="/assets/jquery.fancybox.css?v=2.1.2" media="screen" />

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="/assets/jquery.fancybox-media.js?v=1.0.5"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('.fancybox').fancybox();

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });



    });
  </script>
  <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }
  </style>





		<meta charset="utf-8">
                <!--[if IE 8 ]><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"><![endif]-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                 
		
		<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		wp_title( '-', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'qs_framework' ), max( $paged, $page ) );
		?></title>
        
		
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<?php if( of_get_option('qs_favicon') ): ?>
            <link rel="icon" type="image/png" href="<?php echo of_get_option('qs_favicon'); ?>">
        <?php endif; ?>

		<!-- default stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/normalize.css">		      
		
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
                
            <!-- wordpress head functions -->
            <?php wp_head(); ?>
            <!-- end of wordpress head -->        


	
	<body <?php body_class(); ?>>
	

			
          
			<header role="banner">
			
            	<div id="header-bg"></div>
            	
				<div id="inner-header" class="wrapper clearfix">
					
                    <div class="row">
                    
                    	<div class="twelve columns">
                            <!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
                            <div id="logo" class="h1">
                            	<span><a href="<?php echo home_url(); ?>" rel="nofollow">
									<?php if(of_get_option('qs_logo')): ?>
                                        <img src="<?php echo of_get_option('qs_logo'); ?>" alt="<?php bloginfo('name'); ?>" />
                                    <?php else: ?>
                                        <span id="blog-name"><?php bloginfo('name'); ?></span>
                                    <?php endif; ?>
                                    </a>
                              	</span>
                            </div>

                            <!-- if you'd like to use the site description you can un-comment it below -->
                            <?php // bloginfo('description'); ?>
                            
                            
                            
                            <div class='menu-button'></div>	
                            <nav role="navigation">
                                <?php 
                                if ( has_nav_menu( 'primary' ) ) {
                                    wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => new qs_walker(), 'items_wrap'      => '<ul id="nav" class="%2$s sf-menu sf-js-enabled">%3$s</ul>', ) ); 
                                }
                                else {
                                    theme_nav();
                                }
                                 ?>
                            </nav>
                    
                    	</div>
                    
                    </div>
				
				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
		
	    		
<style type="text/css">
#header-bg {
    /*background:#ddd url(/assets/images/az_subtle_@2X.png) repeat center center;*/
    border:1px solid rgba(200,200,200,.2);
   -moz-box-shadow:    3px 3px 5px 1px rgba(200,200,200,.2);
  -webkit-box-shadow: 3px 3px 5px 1px rgba(200,200,200,.2);
  box-shadow:         3px 3px 5px 1px rgba(200,200,200,.2);
}


</style>