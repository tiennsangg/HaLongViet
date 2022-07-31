<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hazo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php the_field('script_head', 'option'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="header">
        <div class="container">
            <div class="header_div">
                <div class="header_logo">
                    <div class="logo_img">
                        <!-- Lấy ra ảnh menu -->
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        printf(
                            '<a href="%1$s" title="%2$s"><img src="%3$s"></a>',
                            get_bloginfo('url'),
                            get_bloginfo('description'),
                            $image[0]
                        );
                        ?>
                    </div>
                </div>
                <div class="header_search_phone">
                    <div class="header_search">
                        <div class="input_search">
                            <form action="#">
                                <input type="text" id="search" placeholder="Tìm kiếm">
                                <button class="button_search"><?php echo svg('search', '30', '30') ?></button>
                            </form>
                        </div>
                    </div>
                    <div class="header_phone">
                        <div class="svg_phone">
                            <?php echo svg('phone', '30', '30') ?> &nbsp;
                        </div>
                        <a href="tel:012345678">0936.286.686</a>
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <div class="header_menu_left">
                    <div class="menu_left_wrap">
                        <div class="category_hover">
                            <a class="a_category" href="#">Danh mục sản phẩm</a>
                            <div class="menu_left_div">
                                <ul class="menu_left">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location'  => 'menu-1',
                                        'container'       => '__return_false',
                                        'fallback_cb'     => '__return_false',
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 3,
                                    ));
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="header_menu_center"></div>
                <div class="header_signin_out"></div>
            </div>
        </div>
    </header>


    <!-- Lấy ra menu -->


    <div class="bar__mb d-lg-none d-block">
        <?php echo svg('menu', '30', '30') ?>
    </div>