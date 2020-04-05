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
                        <a href="#" class="tag-cloud-link">Life</a>
                        <a href="#" class="tag-cloud-link">Sport</a>
                        <a href="#" class="tag-cloud-link">Tech</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                </div>
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>George Washington</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php
    get_footer();
