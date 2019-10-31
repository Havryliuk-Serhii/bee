<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bee
 */

get_header();
?>

<section class="hero-wrap hero-wrap-2"
	style="background-image: url('<?php echo get_theme_file_uri( 'images/bg_1.jpg');?>');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Blog</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo get_the_permalink();?>">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
							class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<?php if ( $posts_blog->have_posts() ) : ?>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">

					<?php while ( $posts_blog->have_posts() ) : $posts_blog->the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="block-20"
						style="background-image: url('images/image_1.jpg');">
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
							<p class="mb-0"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More <span
										class="ion-ios-arrow-round-forward"></span></a></p>
							<p class="ml-auto mb-0">
								<a href="<?php the_permalink(); ?>" class="mr-2"><?php the_author() ?></a>
								<a href="<?php the_permalink(); ?>" class="meta-chat"><span class="icon-chat"></span>
									<?php comments_popup_link('0', '1', '%')?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
	</div>
</section>

<?php
get_footer();