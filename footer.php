<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bee
 */

$ftco_title_1 = get_post_meta(5, 'ftco_title_1', true);
 $ftco_title_2 = get_post_meta(5, 'ftco_title_2', true);
 $ftco_title_3 = get_post_meta(5, 'ftco_title_3', true);


?>
<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo"><span class="flaticon-bee"></span><?php bloginfo( 'name' ); ?></h2>
              <p><?php bloginfo( 'description' ); ?></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
			        <?php if(!dynamic_sidebar( 'social_icons' )): ?>
              <?php endif; ?>
              </ul>
            </div>
            
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2"><?php echo $ftco_title_1; ?></h2>
              <?php 
                wp_nav_menu( [
                  'theme_location'  => 'services',
                  'container'       => false, 
                  'menu_class'      => 'list-unstyled', 
                  'menu_id'         => '',                         
                  'fallback_cb'     => '__return_false',
                  'items_wrap'      => '<ul class="list-unstyled">%3$s</ul>',
                 ] );
              ?>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2"><?php echo $ftco_title_2; ?></h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4"><?php echo get_the_post_thumbnail( 53, 'little-thumb'); ?></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(53); ?></a></h3>
                  <div class="meta">
                    <div><a href="<?php the_permalink(); ?>"><span class="icon-calendar"></span> <?php the_time('M. j, Y')?></a></div>
                    <div><a href="<?php the_permalink(); ?>"><span class="icon-person"></span> <?php the_author() ?></a></div>
                    <div><a href="<?php the_permalink(); ?>"><span class="icon-chat"></span> <?php comments_popup_link('no comments', '1', '%')?></a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
              <a class="blog-img mr-4"><?php echo get_the_post_thumbnail( 56, 'little-thumb'); ?></a>
                <div class="text">
                   <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(56); ?></a></h3>
                  <div class="meta">
                    <div><a href="<?php the_permalink(); ?>"><span class="icon-calendar"></span> <?php the_time('M. j, Y')?></a></div>
                    <div><a href="<?php the_permalink(); ?>"><span class="icon-person"></span> <?php the_author() ?></a></div>
                    <div><a href="<?php the_permalink(); ?>"><span class="icon-chat"></span> <?php comments_popup_link('no comments', '1', '%')?></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2"><?php echo $ftco_title_3; ?></h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="<?php echo esc_url( __( 'https://colorlib.com', 'bee' ) ); ?>" target="_blank"><?php
				/* translators: %s: Colorlib */
				printf( __( '%s.', 'bee' ), 'Colorlib' );
				?></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php wp_footer(); ?>

</body>
</html>
