<?php
/**
 * The main template file
 * @package bee
 */

get_header();
?>
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<?php
	        	if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	  		<div class="col-md-4 ftco-animate">
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
  		<?php endwhile;	else : ?>
				<h6 class="text-center"><?php esc_html_e('No posts published','bee' ); ?></h6>
		<?php endif; ?>
		</div>

		<div class="row no-gutters my-5">
		  	<div class="col text-center">
				<div class="block-27">
					<?php bee_pagination(); ?>
				</div>
		  	</div>
		</div>

	</div>
</section>
<?php
get_footer();
