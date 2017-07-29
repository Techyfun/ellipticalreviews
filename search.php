<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ellipticalreviews
 */

get_header(); ?>

	<section role="main">
	<div class="wrapper">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					
					printf( esc_html__( 'Search Results for: %s', 'ellipticalreviews' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header>

			<?php
			
			while ( have_posts() ) : the_post();
				
				get_template_part( 'template-parts/content', 'search' );

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
</section>
<?php
get_footer();
