<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ellipticalreviews
 */

get_header(); ?>
<section role="main">
   <div class="wrapper">      
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-single', get_post_format() );			
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>           
  </div>
</section>
            
<?php
get_sidebar();
get_footer();
