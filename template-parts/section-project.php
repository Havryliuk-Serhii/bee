<?php
/**
 * The template for displaying the Project section
 * @package bee
 */
?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container-fluid p-0">
		<div class="row no-gutters justify-content-center mb-5 pb-2">
          	<div class="col-md-6 text-center heading-section ftco-animate">
          		<span class="subheading"><?php esc_html_e('Projects','bee' ); ?></span>
            	<h2 class="mb-4"><?php esc_html_e('Featured Projects','bee' ); ?></h2>
            	<p><?php the_field('project_descr'); ?></p>
          	</div>
        </div>
    	<div class="row no-gutters">
			<?php
			    $project_gallery = new WP_Query(array('category_name' => 'projects','order' => 'ASC', 'posts_per_page'=>8));
			    if ($project_gallery->have_posts() ) :
			    while ($project_gallery->have_posts() ) : $project_gallery->the_post(); ?>
    		<div class="col-md-6 col-lg-3 ftco-animate">
    			<div class="project">
					<?php the_post_thumbnail( $size = 'post-thumbnail', ['class' => 'img-fluid', 'title' => '.the_title().'] ) ?>
	    			<div class="text">
	    				<span><?php the_field('project_spec'); ?></span>
	    				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    			</div>
	    			<a href="<?php echo get_the_post_thumbnail_url($post, 'full') ?>" class="icon image-popup d-flex justify-content-center align-items-center">
	    				<span class="icon-expand"></span>
	    			</a>
    			</div>
    		</div>
		<?php endwhile;
				endif;
			wp_reset_query();
		?>
    	</div>
    </div>
</section>
