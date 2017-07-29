<?php
// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');
// Home page first section

function home_banner_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'background' => '',
	), $atts );
return '<div class="featured-overflow">
<div class="featured-home" style="background-image: url('.esc_attr($a['background']).'); height: 545px;">
<div class="wrapper">
<div class="intro">
'.$content.' 
</div>
</div>
</div>
</div>' ;
}
add_shortcode( 'home-banner', 'home_banner_shortcode' );
// Home Logos section
function home_logos_shortcode($atts,$content = NULL){
    return '<div class="text-center homepage-logos">'.$content.'</div>';
}
add_shortcode('home-logos','home_logos_shortcode');
// Home page review section description
function home_third_section_shortcode($atts,$content = NULL){
  
    return $content;
}
add_shortcode('home-third-section','home_third_section_shortcode');

// cat post shortcode

// cat shortcode 
add_shortcode('cat-post', function($attr, $content){
	ob_start(); 
extract( shortcode_atts(array(
	'title' => 'Categories Title',
        'category' => 'Uncategorized',
        'right_post_count' => 2
), $attr) );

?>

<div class="diagonals">
<div class="wrapper">	
<div style="background-color:#fff;padding:20px;position:relative;top:-40px" class="shadowed">

<div class="panel panel-default panel-homepage">

  <div class="panel-heading text-center"> 
      <strong><?php echo $title ?></strong>
  </div>
  <div class="panel-body">

   <div class="col-sm-6 pick-number-1">
     <?php $queryObject = new  Wp_Query( array(
    'showposts' => 1,
    'post_type' => array('post'),
    'category_name' => $category,
    'order'    => 'DESC'
    ));
?>
      <?php if ( $queryObject->have_posts() ) : 
    while ( $queryObject->have_posts() ) :
        $queryObject->the_post();
      ?>
          <div style="padding:15px">
            <p class="top-pick">Our Top Pick</p>
                <div class="pull-right">                                  
       <a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'home-left', array( 'class'  => 'productimg' ) );
                 } 
	?></a>
              </div>
        <?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );?>          
           <?php the_excerpt(); ?>
            <div class="read-review-wrapper">               
              <a href="<?php echo get_permalink(); ?>" class="readreview" alt="Read Review"></a>
            </div>
          </div>
<?php endwhile;
endif; 
wp_reset_postdata();
?>
</div>

        <div class="col-sm-6"> 
              <?php $queryObjects = new  Wp_Query( array(
    'showposts' => $right_post_count,
    'post_type' => array('post'),
    'category_name' => $category,
    'order'            => 'ASC'
    ));

// The Loop
if ( $queryObjects->have_posts() ) : 
    while ( $queryObjects->have_posts() ) :
        $queryObjects->the_post();
      ?>
        <div class="col-xs-12 pick-number-2">
  
          <div style="padding:15px">
            <div class="pull-right">
            <a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'home-right', array( 'class'  => 'productimg' ) );
                 } 
	?></a>
           </div>            
            <p class="top-pick">Our Top Pick</p>
            <?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?> 
            
            <div class="read-review-wrapper">
             <a href="<?php echo get_permalink(); ?>" class="readreview" alt="Read Review"></a>
            </div>
          </div>
             </div>              
<?php endwhile;
endif; 
wp_reset_postdata();
?>
       

</div>
</div>
</div>
</div>
</div>
</div>
<?php return ob_get_clean();
});

// home guy shortcode

function home_Sales_Guys($atts,$content = NULL){
  
    return '
<div class="diagonals">
<div class="wrapper"> 
	<div style="background-color:#fff;position:relative;top:-35px;" class="shadowed salesguy">
           '.$content.' 
        </div>
</div>
</div>';
}
add_shortcode('home-Sales-Guys','home_Sales_Guys');