<?php
/**
 * The template for displaying the Blog section
 * @package bee
 */
?>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <span class="subheading"><?php esc_html_e('Blog','bee' ); ?></span>
        <h2 class="mb-4"><?php esc_html_e('Recent Blog','bee' ); ?></h2>
        <p><?php the_field('descr_blog') ?></p>
      </div>
    </div>

    <div class="row">
      <?php
              $id = 3;
              $posts_blog = new WP_Query(array('cat' => $id, 'posts_per_page' => 3));
           if ($posts_blog->have_posts() ) :
               		while ($posts_blog->have_posts() ) : $posts_blog->the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 ftco-animate'); ?>>
        <div class="blog-entry">
          <a href="<?php the_permalink() ?>" class="block-20" <?php echo bee_thumbnail(); ?>>
            <div class="meta-date text-center p-2">
              <span class="day"><?php the_time('j')?></span>
              <span class="mos"><?php the_time('F')?></span>
              <span class="yr"><?php the_time('Y')?></span>
            </div>
          </a>
          <div class="text pt-4">
            <h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <div class="d-flex align-items-center mt-4">
              <p class="mb-0"><a href="<?php the_permalink() ?>" class="btn btn-primary"><?php esc_html_e('Read More','bee' ); ?><span class="ion-ios-arrow-round-forward"></span></a></p>
              <p class="ml-auto mb-0">
                <a href="<?php the_permalink() ?>" class="mr-2"><?php the_author(); ?></a>
                <a href="<?php the_permalink() ?>" class="meta-chat"><span class="icon-chat"></span><?php comments_number('0', '1', '%')?></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; else : ?>
    					<h6 class="text-center"><?php esc_html_e('No posts published','bee' ); ?></h6>
    		<?php endif;
                wp_reset_query();
            ?>
    </div>
  </div>
</section>
