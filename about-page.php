<?php
/**
 * Template Name: Page About
 */
get_header(); ?>


    <section class="ftco-counter img" id="section-counter" style="background-image: url(<?php echo get_theme_file_uri('images/bg_3.jpg' ); ?>);" data-stellar-background-ratio="0.5">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="<?php the_field('counter_years'); ?>">0</strong>
              </div>
              <div class="text-2">
              	<span>Years of <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="<?php the_field('counter_project'); ?>">0</strong>
              </div>
              <div class="text-2">
              	<span>Project <br>Successful</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="<?php the_field('counter_expert'); ?>">0</strong>
              </div>
              <div class="text-2">
              	<span>Professional <br>Expert</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="<?php the_field('counter_happy_cust'); ?>">0</strong>
              </div>
              <div class="text-2">
              	<span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/bg_2.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	            <h2 class="mb-4">We Are Highly Recommendable Construction Firm</h2>
	          </div>
	          <div class="">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php
        get_template_part( 'template-parts/sections/section-testimonials');
        get_template_part( 'template-parts/sections/section-intro');
        get_template_part( 'template-parts/sections/section-team');

        ?>
<?php get_footer();
