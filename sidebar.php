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
	  		<li><a href="#">Construction <span>(6)</span></a></li>
	  		<li><a href="#">House Renovation <span>(8)</span></a></li>
	  		<li><a href="#">Painting <span>(2)</span></a></li>
	  		<li><a href="#">Architecture Design <span>(2)</span></a></li>
	  		<li><a href="#">Re-construction <span>(2)</span></a></li>
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
			<li><a href="#">December 2018 <span>(30)</span></a></li>
			<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
			<li><a href="#">September 2018 <span>(6)</span></a></li>
			<li><a href="#">August 2018 <span>(8)</span></a></li>
		</ul>
  	</div>
	<div class="sidebar-box ftco-animate">
		<h3><?php esc_html_e('Paragraph','bee' ); ?></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
  	</div>
</div>
