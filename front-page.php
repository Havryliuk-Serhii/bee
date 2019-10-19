<?php  
/**
 *Template Name: Home Page
 */
get_header(); ?>

<?php 
get_template_part( 'template-parts/section-slider');	
get_template_part( 'template-parts/section-about');
get_template_part( 'template-parts/section-services');
get_template_part( 'template-parts/section-intro');
get_template_part( 'template-parts/section-team');
get_template_part( 'template-parts/section-progect');
get_template_part( 'template-parts/section-testimonials');
get_template_part( 'template-parts/section-blog');
?>

<?php get_footer(); ?>		