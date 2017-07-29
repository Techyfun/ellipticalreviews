<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
Template Name: Home
*/
get_header();
?>

 <?php  while ( have_posts() ) : the_post();		
        the_content();
	endwhile; ?>


<?php get_footer();