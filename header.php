<?php /* Template Name: Header */ ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	
	<header>
		<div class="container">
			<?php wp_nav_menu(); ?>
			<div class="icon-button"></div>
			<div data-icon="&#xe070;"  id="icon-user"></div>	
		</div>
	</header>