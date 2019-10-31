<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bee
 */

get_header();
?>
<section class="hero-wrap hero-wrap-2"
	style="background-image: url('<?php echo get_theme_file_uri( 'images/bg_1.jpg');?>');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Blog</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo get_the_permalink();?>">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i
							class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
