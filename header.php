<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pontano+Sans|Syncopate|Abel&display=swap" rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>
 
<body <?php body_class(); ?>>

<div class="container">
    <header class="site-header">
        <div class="logo">
            <h1 id="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <h3 id="site-description"><?php bloginfo( 'description' ); ?></h3>
        </div>
        <div id="show-nav"><a href="#">Toggle</a></div>
        <nav class="navigation-menu">
            <?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu($args) ?>
        </nav>
    </header>