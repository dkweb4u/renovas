<!DOCTYPE html>
<html  <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renovas</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body  <?php body_class() ?>>
<main>
        <header>
            <div class="container">
              <div class="header-box">
                <div class="logo">
                    <a href="<?php echo site_url()?>">
                        <img src="<?php echo get_theme_file_uri('assets/images/logo/logo.svg') ?>" alt="Logo">
                    </a>
                    <div class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li class="menu-item-has-children"><a href="">Demos</a>
                        <ul class="sub-menu">
                            <li><a href="">Demo 1</a></li>
                            <li><a href="">Demo 2</a></li>
                            <li><a href="">Demo 3</a></li>
                        </ul>
                        </li>
                        <li><a href="">Essential Pages</a></li>
                        <li><a href="">Blogs</a></li>
                        <li><a href="">Help</a></li>
                   </ul>
                   <?php 
                //    wp_nav_menu(array(
                //     'theme_location' => 'headerMenuLocation'
                //    ));
                   ?>

                   <a href="" class="thm-btn-1">Get Started Now</a>
                </nav>
               
              </div>
            </div>
        </header>