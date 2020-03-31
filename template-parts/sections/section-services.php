<?php
/**
 * The template for displaying the Services
 * @package bee
 */
?>
<section class="ftco-services ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
          	     <span class="subheading"><?php esc_html_e('Services','bee' ); ?></span>
                 <h2 class="mb-4"><?php esc_html_e('Our Services','bee' ); ?></h2>
                 <p><?php the_field('services_descr') ?></p>
            </div>
        </div>
		<div class="row">
            <?php
                $services_post = new WP_Query(array('category_name' => 'services','order' => 'ASC', 'posts_per_page'=>4));
			    if ($services_post->have_posts() ) :
			    while ($services_post->have_posts() ) : $services_post->the_post();
            ?>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <?php if ( $thumb_class = get_post_meta( $post->ID, 'thumb_class', true ) ) : ?>
	                        <span class="<?php echo $thumb_class ?>"></span>		                              	
                        <?php endif; ?>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading"><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
                endif;
            wp_reset_query();
        ?>
        </div>
	</div>
</section>
