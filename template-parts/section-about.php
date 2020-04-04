<?php
/**
 * The template for displaying the Abot us section
 * @package bee
 */
?>
<section class="ftco-section ftco-no-pt ftco-margin-top">
    <div class="container">
        <div class="row">
            <!--
               <div class="col-md-4">
                   <div class="request-quote">
                       <div class="bg-primary py-4">
                           <span class="subheading">Be Part of our Business</span>
                           <h3>Request A Quote</h3>
                       </div>
                       <form action="#" class="request-form ftco-animate">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="First Name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Last Name">
                           </div>
                           <div class="form-group">
                               <div class="form-field">
                           <div class="select-wrap">
                     <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                     <select name="" id="" class="form-control">
                       <option value="">Select Your Services</option>
                       <option value="">Construction</option>
                       <option value="">Renovation</option>
                       <option value="">Interior Design</option>
                       <option value="">Exterior Design</option>
                       <option value="">Painting</option>
                     </select>
                   </div>
                     </div>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Phone">
                           </div>
                           <div class="form-group">
                     <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                   </div>
                   <div class="form-group">
                     <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
                   </div>
                       </form>
                   </div>
               </div>
           -->
           <?php
               $about_post = new WP_Query(array('category_name' => 'about'));
               if ($about_post->have_posts() ) :
               while ($about_post->have_posts() ) : $about_post->the_post();
           ?>
            <div class="col-md-8 wrap-about py-5 ftco-animate">
                <div class="heading-section mb-5">
                    <h2 class="mb-4"><?php the_title(); ?></h2>
                </div>
                <div class="">
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-secondary px-5 py-3"><?php esc_html_e('Read More','bee' ); ?></a></p>
                </div>
            </div>
            <?php endwhile;
                    endif;
                wp_reset_query();
            ?>
        </div>
    </div>
</section>
