<?php 

/**
 * The template for displaying the Slider hero section
 *
 * @package bee
 */

$btn_request = get_post_meta('', 'btn_request', true);

?>

<section class="home-slider owl-carousel">
<?php $slider = new WP_Query(array('post_type' => 'slider')) ?>
<?php if ( $slider->have_posts() ) : ?>
  <div class="slider-item" data-stellar-background-ratio="0.5" style="">
    <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
      <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="col-md-6 text ftco-animate pl-md-5">
            <h1 class="mb-4"><?php the_title();?></h1>
            <?php the_excerpt(  );?>
            <p><a href="" class="btn btn-secondary px-4 py-3 mt-3"><?php echo $btn_request;?></a></p>
            </div>
        </div>
      </div>
      <?php endwhile; ?>
	</div>
    <?php endif; ?>


</section>