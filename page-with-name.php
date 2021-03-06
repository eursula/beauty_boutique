<?php /* Template Name: Page with Name */ ?>

<?php get_header(); ?>
	<div class="face-pic">
		<div id="slider1_container" style="position: fixed; top: 0px; left: 0px; width: 1400px; height: 650px;">
	        <!-- Slides Container -->
	        <div u="slides" style="position: fixed; left: 50%; top: 0px; margin-left: -700px; width: 1400px; height: 650px;
	            overflow: hidden;">
	            <div>
	            	<img u="image" src="wp-content/themes/my-theme/css/img/beauty-large.png" />
	            </div>
	            <div><img u="image" src="wp-content/themes/my-theme/css/img/stone-spa.jpg" /></div>
	            <div><img u="image" src="wp-content/themes/my-theme/css/img/beauty-therapy.jpg" /></div> 
	        </div>
	    </div>
	</div> <!-- Jssor Slider End -->
	<!--<div class="face-pic">
		<img src="wp-content/themes/my-theme/css/img/beauty-large.png" alt="">
	</div>-->
	<!--<div class="face-pic" style="position:fixed">
		<div id="slides">
	    	<img src="wp-content/themes/my-theme/css/img/beauty-large.png" alt="slider1">
	      	<img src="wp-content/themes/my-theme/css/img/stone-spa.jpg" alt="slider2">
	      	<img src="wp-content/themes/my-theme/css/img/beauty-therapy.jpg" alt="slider3">
	    </div>
	</div>-->
	<div id="content">
		<div class="container flex flex-column flex-a-center">
			<div class="title">
				<h1 id="name1">BEAUTY</h1>
				<h1 id="name2">BOUTIQUE</h1>
				<div class="main-pic">
					<div id="x-pic"></div>
			</div>	
		</div>
		
		<div class="promotion-box">
			<?php echo types_render_field('promotion_box', ['output' => 'html']); ?>
		</div>
	
	</div>
	<?php get_footer(); ?>
		

