<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">

        <div class="row mb-5">
          	<div class="col-md">
            	<div class="ftco-footer-widget mb-5">
              		<h2 class="ftco-heading-2 logo"><span class="flaticon-bee"></span><?php bloginfo( 'name' ); ?></h2>
              		<!--
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              		<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              		</ul>-->
            	</div>
          	</div>

          	<div class="col-md">
            	<div class="ftco-footer-widget mb-5 ml-md-4">
              	<!--<h2 class="ftco-heading-2">Services</h2>
		            <ul class="list-unstyled">
		                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Construction</a></li>
		                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Renovation</a></li>
		                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Painting</a></li>
		                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Interior Design</a></li>
		                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Exterior Design</a></li>
		            </ul>-->
            	</div>
          	</div>
          	<div class="col-md-5">
            	<div class="ftco-footer-widget mb-5">
              		<h2 class="ftco-heading-2"<?php esc_html_e('Recent Blog', 'bee' ); ?>></h2>
                  <?php $recent_post = new WP_Query( 'posts_per_page=2' ); ?>
                  <?php while ($recent_post -> have_posts()) : $recent_post -> the_post(); ?>
              		<div class="block-21 mb-4 d-flex">
                		<a class="blog-img mr-4" <?php echo bee_thumbnail('post_recent'); ?>></a>
                		<div class="text">
                  			<h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                  			<div class="meta">
                    			<div><a href="#"><span class="icon-calendar"></span> <?php the_time('M,j,Y'); ?></a></div>
                    			<div><a href="#"><span class="icon-person"></span><?php the_author(); ?></a></div>
                    			<div><a href="#"><span class="icon-chat"></span> <?php comments_number('0', '1', '%')?></a></div>
                  			</div>
                		</div>
              		</div>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                  ?>
            	</div>
          	</div>

          	<div class="col-md">
            	<div class="ftco-footer-widget mb-5">
            		<!--<h2 class="ftco-heading-2">Newsletter</h2>
              		<form action="#" class="subscribe-form">
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
