<?php
/**
 * The template for displaying all single posts
 * @package bee
 */
    get_header();
?>
<section class="ftco-section">
	<div class="container">
		<div class="row">
            <?php
    		    while ( have_posts() ) :  the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 ftco-animate'); ?>>
                <h2 class="mb-3"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <?php the_tags('', '',''); ?>
                    </div>
                </div>
                <?php echo bee_author(); ?>
                <?php if ( comments_open() || get_comments_number() ) :
                        comments_template();
                        endif; ?>
            </div>
            <?php endwhile; ?>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php
    get_footer();
