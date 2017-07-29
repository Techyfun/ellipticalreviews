<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ellipticalreviews
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    
    <div class="post">
	<div class="row">
	    <div class="col-xs-4 text-center">
		<div class="image">		
                    <a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post', array( 'class'  => 'attachment-medium size-medium' ) );
                 } 
		?></a>	
			</div>
	    </div>
																	
            <div class="col-xs-8">
                
                <?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( ' <h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		 ?>
                
             <?php the_excerpt(); ?>	    
	
                    <a href="<?php echo get_permalink(); ?>" class="btn-orange3">Read More</a>
            </div>
    </div>
</div>
        
</article>
