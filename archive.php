<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ellipticalreviews
 */

get_header(); ?>

  <section role="main">
	<div class="wrapper">
                    
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>

			<?php
		
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
</section>
        
<?php
get_footer();
