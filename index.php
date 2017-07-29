<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ellipticalreviews
 */

get_header(); ?>

<section role="main" class="">  
	
<div class="wrapper">

	<div class="content">
	
		<div class="row">
                    <div class="col-sm-8"> 
                    
                    <?php
		if ( have_posts() ) :

			
			while ( have_posts() ) : the_post();

				
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

                    <div class="pagination">
                        
                       <?php the_posts_pagination(array(
			'next_text' => '<span aria-hidden="true">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>',
			'prev_text' => '<span aria-hidden="true"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> Prev </span>',
			'screen_reader_text' => ' ',
			'type'  => 'list'
			)); ?>
                    
                    </div>
                    </div>
                    
                    <div class="col-sm-4">
			<div class="sidebar">
                           <?php get_sidebar(); ?>
                            
                        </div>
		    </div>
		
	</div>
	</div>
</div>

		
	
</div>
	
</section>
		
<?php
get_footer();
