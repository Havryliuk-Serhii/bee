<?php
/**
 * The sidebar containing the main widget area
 * @package bee
 */
?>
<div class="col-lg-4 sidebar ftco-animate">
  	<div class="sidebar-box">
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
	  		<div class="form-group">
				<span class="icon icon-search"></span>
				<input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Type a keyword and hit enter', 'placeholder','bee' ); ?>" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
	  		</div>
		</form>
  	</div>
  	<div class="sidebar-box ftco-animate">
	  	<h3><?php esc_html_e('Category','bee' ); ?></h3>
		<ul class="categories">
            <?php wp_list_categories('show_count=1&title_li='); ?>
		</ul>
  	</div>
  	<div class="sidebar-box ftco-animate">
		<h3><?php esc_html_e('Popular Articles','bee' ); ?></h3>
		<?php echo bee_recent_posts(); ?>
  	</div>
  	<div class="sidebar-box ftco-animate">
		<h3><?php esc_html_e('Tag Cloud','bee' ); ?></h3>
		<ul class="tagcloud m-0 p-0">
			<?php the_tags('', '',''); ?>
		</ul>
  	</div>
  	<div class="sidebar-box ftco-animate">
	  	<h3><?php esc_html_e('Archives','bee' ); ?></h3>
		<ul class="categories">
			<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
		</ul>
  	</div>
	<div class="sidebar-box ftco-animate">
		<h3><?php esc_html_e('Paragraph','bee' ); ?></h3>
        <?php if(!dynamic_sidebar('sidebar-1')): ?>
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<?php endif; ?>
  	</div>
</div>
