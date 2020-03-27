<?php
/**
 * The template for displaying the Slider hero section
 * @package bee
 */
 $title_request = get_post_meta(8, 'title_request', true);
 ?>
<?php $slider = new WP_Query(array('post_type' => 'slider', 'posts_per_page'=> 2,'order' => 'ASC')) ?>
<section class="home-slider owl-carousel">
  <?php if ( $slider->have_posts() ) : while ( $slider->have_posts() ) : $slider->the_post(); ?>
      <div class="slider-item" <?php echo bee_thumbnail(); ?> data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate pl-md-5">
            <h1 class="mb-4"><?php the_title(); ?></h1>
            <h3 class="subheading"><?php the_content(); ?></h3>
            <p><a href="<?php echo get_the_permalink();?>" class="btn btn-secondary px-4 py-3 mt-3"><?php echo $title_request; ?></a></p>
          </div>
        </div>
        </div>
      </div>
    <?php endwhile;
          wp_reset_postdata();
        endif; ?>
</section>
