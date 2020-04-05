<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bee
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-lg-4 sidebar ftco-animate">
  <div class="sidebar-box">
	<form action="#" class="search-form">
	  <div class="form-group">
		<span class="icon icon-search"></span>
		<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	  </div>
	</form>
  </div>
  <div class="sidebar-box ftco-animate">
	  <h3>Category</h3>
	<ul class="categories">
	  <li><a href="#">Construction <span>(6)</span></a></li>
	  <li><a href="#">House Renovation <span>(8)</span></a></li>
	  <li><a href="#">Painting <span>(2)</span></a></li>
	  <li><a href="#">Architecture Design <span>(2)</span></a></li>
	  <li><a href="#">Re-construction <span>(2)</span></a></li>
	</ul>
  </div>

  <div class="sidebar-box ftco-animate">
	<h3>Popular Articles</h3>
	<div class="block-21 mb-4 d-flex">
	  <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
	  <div class="text">
		<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
		<div class="meta">
		  <div><a href="#"><span class="icon-calendar"></span> Feb. 07, 2019</a></div>
		  <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
		  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
		</div>
	  </div>
	</div>
	<div class="block-21 mb-4 d-flex">
	  <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
	  <div class="text">
		<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
		<div class="meta">
		  <div><a href="#"><span class="icon-calendar"></span> Feb. 07, 2019</a></div>
		  <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
		  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
		</div>
	  </div>
	</div>
	<div class="block-21 mb-4 d-flex">
	  <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
	  <div class="text">
		<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
		<div class="meta">
		  <div><a href="#"><span class="icon-calendar"></span> Feb. 07, 2019</a></div>
		  <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
		  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
		</div>
	  </div>
	</div>
  </div>

  <div class="sidebar-box ftco-animate">
	<h3>Tag Cloud</h3>
	<ul class="tagcloud m-0 p-0">
	  <a href="#" class="tag-cloud-link">Construct</a>
	  <a href="#" class="tag-cloud-link">Build</a>
	  <a href="#" class="tag-cloud-link">Builder</a>
	  <a href="#" class="tag-cloud-link">Hammer</a>
	  <a href="#" class="tag-cloud-link">Saw</a>
	  <a href="#" class="tag-cloud-link">Measure</a>
	  <a href="#" class="tag-cloud-link">Line</a>
	</ul>
  </div>

  <div class="sidebar-box ftco-animate">
	  <h3>Archives</h3>
	<ul class="categories">
	  <li><a href="#">December 2018 <span>(30)</span></a></li>
	  <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
	  <li><a href="#">September 2018 <span>(6)</span></a></li>
	  <li><a href="#">August 2018 <span>(8)</span></a></li>
	</ul>
  </div>


  <div class="sidebar-box ftco-animate">
	<h3>Paragraph</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
  </div>
</div><!-- END COL -->
</div>
  </div>
