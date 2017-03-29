<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php ?>">
        <meta name="keywords" content="<?php ?>">
        <meta name="robots" content="all">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
        <title><?php bloginfo('sitename'); ?><?php wp_title(); ?> | <?php bloginfo('url'); ?></title>
        <?php wp_head(); ?>
        <!-- TODO : fullfill metatags-->
    </head>
<body>
<div id="wrapper">
<header>
    <div id="logo"><?php echo "Logo"; ?></div>
    <div id="topnavmenu"><?php echo "top_left menu"; ?></div>
    <div id="slider"><?php echo "Slider"; ?></div>
</header>