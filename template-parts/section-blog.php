<?php 

/**
 * The template for displaying the Blog section
 *
 * @package bee
 */

?>

<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Blog</span>
            <h2 class="mb-4">Recent Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
        <?php
$id = ; 
$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 3));
?>

<?php if ( $posts_about->have_posts() ) : ?> 
    <div class="col-md-4 ftco-animate">
            <div class="blog-entry">

<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
<a href="<?php the_permalink(); ?>" class="block-20" style="background-image: url('images/image_1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day"><?php the_time('j')?></span>
                  <span class="mos"><?php the_time('M')?></span>
                  <span class="yr"><?php the_time('Y')?></span>
                </div>
              </a>
              <div class="text pt-4">
                <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="<?php the_permalink(); ?>" class="mr-2"><?php the_author() ?></a>
	                	<a href="<?php the_permalink(); ?>" class="meta-chat"><span class="icon-chat"></span>  <?php comments_popup_link('0', '1', '%')?></a>
	                </p>
                </div>
              </div>
            </div>
          </div>		
<?php endwhile; ?>
	</div>
<?php endif; ?>     
        </div>
			</div>
