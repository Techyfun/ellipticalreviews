<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    $opt_name = "ellipticalreviews_opt";
    $theme = wp_get_theme(); // For use with some settings. Not necessary.
    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
	'dev_mode'             => FALSE,
        'menu_title'           => __( 'Theme Options', 'ellipticalreviews' ),
	'page_title'           => __( 'Theme Options', 'ellipticalreviews' ),
	 'menu_type'            => 'menu',
	'footer_credit'     => 'Sajjad',
	'allow_sub_menu'       => FALSE,
	 'update_notice'        => FALSE,
	 'admin_bar'            => FALSE,
        'customizer'           => true
    );

    Redux::setArgs( $opt_name, $args );
    Redux::setSection( $opt_name, array(
        'title'  => __( 'General', 'ellipticalreviews' ),
        'id'     => 'general',        
        'icon'   => 'el el-home',
        'fields' => array(       
	     array (
                'title' => __('Favicon', 'ellipticalreviews'),            
                'id' => 'favicon',
                'type' => 'media',
		   'hint'     => array(
                    'content' => '<em>Upload your custom Favicon image. <br>.ico or .png file required.</em>',
                )
              
            )
	    
        )
    ) );
    
    // Header Start 
    Redux::setSection( $opt_name, array(
        'icon'   => 'el el-laptop',
        'title'  => __( 'Header', 'ellipticalreviews' ),
        'fields' => array(           
        ),
        
    ) );
    
         Redux::setSection( $opt_name, array(
       
        'title'    => __( 'Logo', 'ellipticalreviews' ),
        'subsection' => true,
        'fields'     => array(
        
         array (
                'title' => __('Upload Logo', 'ellipticalreviews'),            
                'id' => 'logo',
                'type' => 'media',
		   'hint'     => array(
                    'content' => '<em>Upload your custom logo. <br>jpg or .png file required.</em>',
                )
              
            ),
	   
        )
        
    ) );
	 
	       Redux::setSection( $opt_name, array(
       
        'title'    => __( 'Header Banner', 'ellipticalreviews' ),
        'subsection' => true,
        'fields'     => array(
        
         array (
                'title' => __('Header Banner', 'ellipticalreviews'),            
                'id' => 'header-banner',
                'type' => 'media',
		   'hint'     => array(
                    'content' => '<em>Upload your header banner images.</em>',
                )
              
            ),
	       array (
                'title' => __('Header banner link', 'ellipticalreviews'),            
                'id' => 'header-banner-link',
                'type' => 'text',
		   'hint'     => array(
                    'content' => '<em>Add your header banner link</em>',
                )
              
            ),
	   
        )
        
    ) );
	 
	     
// Header end	     
	    
// Start Advanced option 

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Advanced Option', 'ellipticalreviews' ),
        'id'     => 'advanced',        
        'icon'   => 'el el-adjust',
        'fields' => array(       
	  
	    array(
                'id'       => 'analytics_js',
                'type'     => 'ace_editor',
		'mode'     => 'javascript',
                'theme'    => 'monokai',
                'title'    => __( 'Google Analytics  Code', 'ellipticalreviews' ),
		'subtitle' => __( 'Paste your JS code here.', 'ellipticalreviews' ),
                'hint'     => array(
                    'content' => '<em>Add your Google analytics code here.</em>',
                )
                
            ),
	    	
	    	
	       array(
                'id'       => 'custom-css',
                'type'     => 'ace_editor',
                'title'    => __( 'CSS Code', 'ellipticalreviews' ),
                'subtitle' => __( 'Paste your CSS code here.', 'ellipticalreviews' ),
                'mode'     => 'css',
                'theme'    => 'monokai',
		   'hint'     => array(
                    'content' => '<em>Add your custom css code here.</em>',
                )
               
            ),
            		    
        )
    ) );	 
    
    // End  Advanced option 
    // social link
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Solcial', 'ellipticalreviews' ),
        'id'     => 'social',
	'desc'     => 'Top bar right social link',       
        'icon'   => 'el el-address-book',
        'fields' => array(       
	  
	      array(
                'id'       => 'ellipticalreviews-facebook',
                'type'     => 'text',
                'title'    => __( 'Facebook', 'ellipticalreviews' ),            
                'hint'     => array(
                    'content' => 'Add facebook profile link here',
                )
	    ),
	      array(
                'id'       => 'ellipticalreviews-twitter',
                'type'     => 'text',
                'title'    => __( 'Twitter', 'ellipticalreviews' ),            
                'hint'     => array(
                    'content' => 'Add twitter profile link here',
                )
	    ),
	      array(
                'id'       => 'ellipticalreviews-rss',
                'type'     => 'text',
                'title'    => __( 'RSS', 'ellipticalreviews' ),            
                'hint'     => array(
                    'content' => 'Add RSS link here',
                )
	    ),
	      array(
                'id'       => 'ellipticalreviews-google',
                'type'     => 'text',
                'title'    => __( 'Google Plus', 'ellipticalreviews' ),            
                'hint'     => array(
                    'content' => 'Add Google Plus profile link here',
                )
	    )
	    
        )
    ) );
    
    // Start Footer  option 

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'ellipticalreviews' ),
        'id'     => 'footer',        
        'icon'   => 'el el-edit',
        'fields' => array(       
	  
	      array(
                'id'       => 'footer-copyright',
                'type'     => 'text',
                'title'    => __( 'Footer Copy right text', 'knifeable' ),            
                'hint'     => array(
                    'content' => 'Add your footer copyright text.',
                )
	    )   
	    
        )
    ) );	 
    
    // End  Footer option 
	 