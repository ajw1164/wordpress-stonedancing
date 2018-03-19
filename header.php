<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>StoneDancing | <?php echo $title; ?></title>
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#sd-navbarNav">
<div id="sd-navigation" class="sd-navigation">
    <div class="container sd-nav-wrap px-0">
        <nav class="sd-main-nav navbar navbar-expand-lg navbar-light bg-light pt-3 px-1">
            <picture class="m-0">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/stone-dancing-logo-w400.jpg">
                <source media="(min-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/stone-dancing-logo-w300.jpg">
                <source media="(min-width: 414px)" srcset="<?php echo get_template_directory_uri(); ?>/img/stone-dancing-logo-w200.jpg">              
                <img src="<?php echo get_template_directory_uri(); ?>/img/stone-dancing-logo-w130.jpg" alt="" class="px-0 img-fluid">
            </picture>
            <div class="sd-heading-tagline text-center
                        p-0 m-0">Mary Nelson's Personal<br>Hot and Cold<br>Stone Therapies</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
                <?php 
                    $args = array(
                        'menu_class' => 'navbar-nav', // ul classes
                        'container_class' => 'collapse navbar-collapse pl-4', // container classes
                        'container_id' => 'navbarNavDropdown',
                        'theme_location' => 'home_menu'
                    );
                    wp_nav_menu( $args );
                ?>
            
        </nav>
    </div>
</div> <!-- .sd-navigation -->