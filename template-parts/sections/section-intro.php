<?php
/**
 * The template for displaying the intro
 * @package bee
 */
?>
<?php
    $intro_post = new WP_Query(array('category_name' => 'intro','order' => 'ASC'));
    if ($intro_post->have_posts() ) :
    while ($intro_post->have_posts() ) : $intro_post->the_post(); 
?>
<section class="ftco-intro" <?php echo bee_thumbnail(); ?> data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <p class="mb-0"><a href="<?php the_permalink(); ?>" class="btn btn-primary px-4 py-3"><?php esc_html_e('Know more about us','bee' ); ?></a></p>
                </div>
            </div>
        </div>
</section>
<?php endwhile;
        endif;
    wp_reset_query();
?>
