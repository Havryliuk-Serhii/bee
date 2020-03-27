<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">

        <div class="row mb-5">
          	<div class="col-md">
            	<div class="ftco-footer-widget mb-5">
              		<h2 class="ftco-heading-2 logo"><span class="flaticon-bee"></span><?php bloginfo( 'name' ); ?></h2>
                  <p><?php the_field('footer_descr'); ?></p>
              	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
		                <li class="ftco-animate"><a href="<?php echo get_option('tw-link'); ?>"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="<?php echo get_option('fb-link'); ?>"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="<?php echo get_option('in-link'); ?>"><span class="icon-instagram"></span></a></li>
              		</ul>
            	</div>
          	</div>

          	<div class="col-md">
            	<div class="ftco-footer-widget mb-5 ml-md-4">
              	<h2 class="ftco-heading-2"><?php esc_html_e('Services','bee' ); ?></h2>
                <?php wp_nav_menu( [
                        	'theme_location'  => 'services',
                        	'menu'            => '',
                        	'container'       => false,
                        	'echo'            => true,
                        	'fallback_cb'     => '',
                        	'before'          => '',
                        	'after'           => '',
                        	'link_before'     => '<span class="ion-ios-arrow-round-forward mr-2">',
                        	'link_after'      => '</span>',
                        	'items_wrap'      => '<ul id="%1$s" class="list-unstyled">%3$s</ul>',
                        	'depth'           => 0,
                        	'walker'          => '',
                        ] );
                ?>
            	</div>
          	</div>
            
          	<div class="col-md-5">
            	<div class="ftco-footer-widget mb-5">
              	<h2 class="ftco-heading-2"><?php esc_html_e('Recent Blog', 'bee' ); ?></h2>
                <?php echo bee_recent_posts(); ?>
            	</div>
          	</div>

          	<div class="col-md">
            	<div class="ftco-footer-widget mb-5">
            		<h2 class="ftco-heading-2"><?php esc_html_e('Newsletter','bee' ); ?></h2>
              		<!--<form action="#" class="subscribe-form">
                		<div class="form-group">
                  			<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  			<input type="submit" value="Subscribe" class="form-control submit px-3">
                		</div>
              		</form>  -->
            	</div>
          	</div>
        </div>

        <div class="row">
          	<div class="col-md-12 text-center">
            	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="<?php echo home_url('https://colorlib.com'); ?>" target="_blank">Colorlib</a>
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
