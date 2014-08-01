<!DOCTYPE html>
<html lang="">
	<head>
		<title><?php echo get_bloginfo('name');  wp_title(); ?></title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/stylesheets/applications.css">
	</head>
	<body <?php body_class($class); ?>>