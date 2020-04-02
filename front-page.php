<?php
/**
 *Template Name: Home Page
 */
get_header('main'); ?>

<?php
get_template_part( 'template-parts/sections/section-about');
get_template_part( 'template-parts/sections/section-services');
get_template_part( 'template-parts/sections/section-intro');
get_template_part( 'template-parts/sections/section-team');
get_template_part( 'template-parts/sections/section-project');
get_template_part( 'template-parts/sections/section-counter');
get_template_part( 'template-parts/sections/section-testimonials');
get_template_part( 'template-parts/sections/section-blog');
?>

<?php get_footer();
