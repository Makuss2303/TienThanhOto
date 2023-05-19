<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <div class="container">
            <nav class="navbar-pc">
                <div class="header__item">
                    <div class="header__logo">
                        <a href="<?= home_url() ?>">
                            <figure>
                                <?php if ( get_theme_mod( 'tienthanh_oto' ) ) : ?>
                                <img src="<?php echo get_theme_mod( 'tienthanh_oto' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() ?>./assets/images/logo-header.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                <?php endif; ?>
                            </figure>
                        </a>
                    </div>
                    <div class="header__nav">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header_menu_location',
                                    'menu_class' => 'header__nav-menu',
                                )
                            );
                        ?>
                        <!-- <ul class="header__nav-menu" id="myheader__nav">
                            <li><a class="header__nav-links" href="/">TRANG CHỦ</a></li>
                            <li><a class="header__nav-links" href="/">GIỚI THIỆU</a></li>
                            <li><a class="header__nav-links" href="/">SẢN PHẨM</a></li>
                            <li><a class="header__nav-links" href="/">TIN TỨC</a></li>
                            <li><a class="header__nav-links" href="/">LIÊN HỆ</a></li>
                            <li><a class="header__nav-links" href="/">ĐĂNG KÝ LÁI THỬ</a></li>
                            <li>
                                <a class="header__nav-links" href="/">
                                    <button type="button" class="btn btn-danger header__nav-button">0911 422 892</button>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </nav>
            <nav class="navbar-mobile">
                <div class="navbar">
                    <div class="header__logo">
                        <a href="<?= home_url() ?>">
                            <figure>
                                <?php if ( get_theme_mod( 'tienthanh_oto' ) ) : ?>
                                <img src="<?php echo get_theme_mod( 'tienthanh_oto' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() ?>./assets/images/logo-header.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                <?php endif; ?>
                            </figure>
                        </a>
                    </div>
                    <div class="menu">
                        <input class="checkbox" type="checkbox">
                        <div class="hamberger">
                            <div class="top-line"></div>
                            <div class="center-line"></div>
                            <div class="bottom-line"></div>
                        </div>   
                        <div class="back-disable"></div>
                        <div class="slider">
                            <?php
                                wp_nav_menu(
                                array(
                                    'theme_location' => 'header_menu_location',
                                    'menu_class' => 'slider-menu',			    
                                )
                                );
                            ?>  
                            <!-- <ul class="slider-menu" id="myheader__nav__mobile">
                                <li class="slider-premium"><a href="/">TRANG CHỦ</a></li>
                                <li class="slider-premium"><a href="/">GIỚI THIỆU</a></li>
                                <li class="slider-premium"><a href="/">SẢN PHẨM</a></li>
                                <li class="slider-premium"><a href="/">TIN TỨC</a></li>
                                <li class="slider-premium"><a href="/">LIÊN HỆ</a></li>
                                <li class="slider-premium"><a href="/">ĐĂNG KÝ LÁI THỬ</a></li>
                                <li class="slider-signin">
                                    <a class="header__nav-links" href="/"><button type="button" class="btn btn-danger header__nav-button">0911 422 892</button></a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- back-to-top -->
    <a id="backTop-btn" onclick="window,topFunction()" title="Go to top">
        <i class="fa-solid fa-angles-up"></i>
    </a>
    <!-- end back-to-top -->