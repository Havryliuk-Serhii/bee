<?php
$title_request = get_post_meta(8, 'title_request', true);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="flaticon-bee mr-1"></span><?php bloginfo( 'name' ); ?></a>
				</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text d-flex align-items-center">
						    	<span><?php echo get_option('my_email'); ?></span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text d-flex align-items-center">
						    	<span><?php echo get_option('my_phone'); ?></span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center align-items-stretch">
					    	<p class="mb-0 d-flex d-block">
					    		<a href="<?php echo get_the_permalink();?>" class="btn btn-primary d-flex align-items-center justify-content-center">
					    			<span><?php echo $title_request; ?></span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    	<div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        		<span class="oi oi-menu"></span> Menu
	      		</button>
	      		<?php get_search_form(); ?>
	      		<div class="collapse navbar-collapse" id="ftco-nav">
				  <?php
								wp_nav_menu( [
												'theme_location' => 'primary',
												'container' => false,
												'menu_class' => 'menu',
												'menu_id' => '',
												'fallback_cb' => '__return_false',
												'items_wrap' => '<ul id="%1$s" class="navbar-nav mr-auto">%3$s</ul>',
												'depth' => 0,
												'walker' => new Bootstrap_Menu_Walker(),
								] );
					?>
	        	</div>
	    	</div>
	  	</nav>
    <!-- END nav -->
		<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo get_theme_file_uri('images/bg_1.jpg' ); ?>);" data-stellar-background-ratio="0.5">
	       <div class="overlay"></div>
	       <div class="container">
	         <div class="row no-gutters slider-text align-items-center justify-content-center">
	           <div class="col-md-9 ftco-animate text-center">
	             <h1 class="mb-2 bread"><?php single_post_title(); ?></h1>
<!--
							 <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
-->
						 </div>
	         </div>
	       </div>
	     </section>
