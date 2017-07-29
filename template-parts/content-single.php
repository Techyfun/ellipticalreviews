<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>


			<article class="content" id="post-<?php the_ID(); ?>">
			<div class="wrapper" itemscope="" itemtype="https://data-vocabulary.org/Review">
				<div class="row">
				
					<div class="col-sm-8">
					
				           
              <?php
		if ( is_single() ) :
			the_title( '<h1 class="h1-line"><span>', '</span></h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		 ?>
           <div class="post-media post-single-media">               
	     <a href="<?php the_permalink(); ?>">
	    <?php if ( has_post_thumbnail() ) {
	      the_post_thumbnail( 'post', array( 'class'  => 'img-responsive aligncenter size-full' ) );
	     } 
		?></a>				
           </div>                            
 <?php the_content(); ?>
                                        
                                        
                                        
                                        </div>
					<div class="col-sm-4">
					
					<div class="sidebar">
                                            
      				<?php get_sidebar(); ?>
    					    				</div>
    			</div>
				</div>
				
				
				
				
		    </div>
		</article>