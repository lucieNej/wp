<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"> -->
        <?php
        add_bootstrap();
?>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>

 </head>
 <body <?php body_class(); ?>>
   	<header class="my-logo">
   			<h1 class="text-center m-5"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name');?></a></h1>

   	<nav id="topMenuWp" class="navbar navbar-expand-lg navbar-light bg-light mb-5">
          
            <?php
            wp_nav_menu();
            ?>
    </nav>
	</header>
 