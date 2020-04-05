<?php
	get_header();
?>
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<?php
	        	while (have_posts() ) : the_post(); ?>
	  		<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 ftco-animate'); ?>>
				<div class="blog-entry">
		  			<div class="block-20" <?php echo bee_thumbnail(); ?>></div>
		  			<div class="text pt-4">
						<h3 class="heading"><?php the_title(); ?></h3>
						<?php the_content(); ?>
		  			</div>
				</div>
	  		</div>
  			<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>
		</div>
	</div>
</section>
<?php
	get_footer();
