<?php
/**
 * Template Name: Page About
 */
get_header(); ?>
<?php  get_template_part( 'template-parts/section-counter');?>
    <?php
        $about_post = new WP_Query(array('category_name' => 'about'));
        if ($about_post->have_posts() ) :
        while ($about_post->have_posts() ) : $about_post->the_post();
    ?>
    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" <?php echo bee_thumbnail(); ?>>
					</div>
					<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	            <h2 class="mb-4"><?php the_title(); ?></h2>
	          </div>
	          <div class="">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
    <?php endwhile;
            endif;
        wp_reset_query();
    ?>
        <?php
        get_template_part( 'template-parts/section-testimonials');
        get_template_part( 'template-parts/section-intro');
        get_template_part( 'template-parts/section-team');

        ?>
<?php get_footer();
