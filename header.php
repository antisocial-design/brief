<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php
		if ( is_front_page() ) {
			echo get_bloginfo( 'name' );
			echo ' : ';
			echo get_bloginfo( 'description' );
		} 
		elseif ( is_404() ) {
			echo get_bloginfo( 'name' );
			echo ' : ';
			echo 'Oops!';
		}
		else {
			echo get_bloginfo( 'name' );
			echo ' : ';
			the_title();
		}
		?></title>
	<meta name="author" content="Humana Studio & antisocial.design">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo rand(111,999)?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/fonts/fonts.css?ver=<?php echo rand(111,999)?>">
	<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<div id="content" class="site-content">
			<div class="container">