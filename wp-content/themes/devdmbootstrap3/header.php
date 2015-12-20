<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="custom-container">
    <div class="row">
        <div class="col-md-12" id="head_image">   
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="logo" class="img-responsive h_img" />
        </div>  
    </div>  
    <div class="col-md-12" id="banner">   
        <div class="row">
            <img src="<?php echo get_template_directory_uri() ?>/images/banner.png" alt="banner" class="img-responsive banner-image centered" />
        </div>  
    </div> 