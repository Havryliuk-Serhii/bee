<?php
/**
 * The template for displaying the Team section
 * @package bee
 */
?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading"><?php esc_html_e('Team','bee' ); ?></span>
                <h2 class="mb-4"><?php esc_html_e('Our Professional Team','bee' ); ?></h2>
                <p><?php the_field('team_descr') ?></p>
            </div>
        </div>
        <div class="row">
            <?php
			    $team_mate = new WP_Query(array('category_name' => 'team','order' => 'ASC', 'posts_per_page'=>4));
			    if ($team_mate->have_posts() ) :
			    while ($team_mate->have_posts() ) : $team_mate->the_post(); ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" <?php echo bee_thumbnail(); ?>></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3><?php the_title(); ?></h3>
                        <span class="position mb-2"><?php the_field('team_position') ?></span>
                        <div class="faded">
                            <?php the_content(); ?>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="<?php the_field('tw_link'); ?>"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="<?php the_field('fb_link'); ?>"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="<?php the_field('gp_link'); ?>"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="<?php the_field('in_link'); ?>"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
                    endif;
                wp_reset_query();
            ?>
        </div>
    </div>
</section>
