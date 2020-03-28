<?php
/**
 * The template for displaying the Testimonials section
 * @package bee
 */
?>
<section class="ftco-section testimony-section">
     <div class="container">
       <div class="row ftco-animate">
         <div class="col-md-6 col-lg-6 col-xl-4">
           <div class="heading-section ftco-animate">
             <span class="subheading"><?php esc_html_e('Services','bee' ); ?></span>
             <h2 class="mb-4"><?php esc_html_e('Experience Great Services','bee' ); ?></h2>
           </div>
           <div class="services-flow">

             <div class="services-2 p-4 d-flex ftco-animate">
               <div class="icon">
                 <span class="flaticon-engineer"></span>
               </div>
               <div class="text">
                 <h3><?php the_field('service_title_1'); ?></h3>
                 <p><?php the_field('service_content_1') ?></p>
               </div>
             </div>

             <div class="services-2 p-4 d-flex ftco-animate">
               <div class="icon">
                 <span class="flaticon-engineer-1"></span>
               </div>
               <div class="text">
                 <h3><?php the_field('service_title_2'); ?></h3>
                 <p><?php the_field('service_content_2') ?></p>
               </div>
             </div>
             <div class="services-2 p-4 d-flex ftco-animate">
               <div class="icon">
                 <span class="flaticon-engineer-2"></span>
               </div>
               <div class="text">
                 <h3><?php the_field('service_title_3'); ?></h3>
                 <p><?php the_field('service_content_3') ?></p>
               </div>
             </div>
           </div>
         </div>

         <div class="col-xl-1 d-xl-block d-none"></div>
         <div class="col-md-6 col-lg-6 col-xl-7">
           <div class="heading-section ftco-animate mb-5">
             <span class="subheading"><?php esc_html_e('Testimonials','bee' ); ?></span>
             <h2 class="mb-4"><?php esc_html_e('Satisfied Customer','bee' ); ?></h2>
             <p><?php the_field('test_descr'); ?></p>
           </div>
           <?php
              	 $testimonial_slider = new WP_Query( array('post_type' => 'testimonial_slider','posts_per_page' => 3, 'order' => 'ASC') ); ?>
          <div class="carousel-testimony owl-carousel">
             <?php if ($testimonial_slider->have_posts()) :
                           while ($testimonial_slider->have_posts()) : $testimonial_slider->the_post(); ?>
             <div class="item">
               <div class="testimony-wrap">
                 <div class="text bg-light p-4">
                   <span class="quote d-flex align-items-center justify-content-center">
                     <i class="icon-quote-left"></i>
                   </span>
                   <?php the_content(); ?>
                   <p class="name"><?php the_author(); ?></p>
                   <span class="position"><?php the_field('client_position') ?></span>
                 </div>
                 <div class="user-img" <?php echo bee_thumbnail(); ?>>
                 </div>
               </div>
             </div>
           <?php endwhile;  endif;
           								wp_reset_query(); ?>
           </div>
         </div>
       </div>
     </div>
   </section>
