<?php

/**
Template Name: Trang chủ
 */

get_header();
?>
<main class="main_home" style="position: relative">
    <?php
    if (have_rows('home_components')) {
        while (have_rows('home_components')) : the_row();
            $module_name = get_row_layout();
            switch ($module_name):
                case $module_name:
                    get_template_part('components/' . $module_name);
            endswitch;
        endwhile;
    }
    ?>

    <div class="menu-mobile" style="display: block">
        <div class="menu-mobile-inner">
            <div class="menu-mobile-account d-flex align-items-center position-relative">
                <div class="menu-mobile-close position-absolute d-flex align-items-center justify-content-center">
                    <?php echo svg('close', '30', '30') ?>
                </div>
                <div class="menu-mobile-account__avatar d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 512 512">
                        <path
                            d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148    C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962    c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216    h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40    c59.551,0,108,48.448,108,108S315.551,256,256,256z"
                            data-original="#222222" class="active-path" fill="#222222"></path>
                    </svg>
                </div>
                <ul class="list-unstyled d-flex align-items-center mb-0 justify-content-evenly">
                    <li>
                        <a href="">Đăng nhập</a>
                    </li>
                    <li>
                        <a href="">Đăng ký</a>
                    </li>
                </ul>
            </div>
            <nav>
                <ul>
                    <li class="current-menu-item">
                        <a href="">Trang chủ</a>
                    </li>
                    <li class="">
                        <a href="">Giới thiệu</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="">Danh mục</a>
                        <ul>
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
                    </li>
                    <li>
                        <a href="#">Tin tức</a>
                    </li>
                    <li>
                        <a href="#">Thư viện ảnh</a>
                    </li>
            </nav>
        </div>
    </div>
    <div class="show-search">
        <div class="search-mobile-wrap">
            <div class="search-mobile">
                <div class="close-search">
                    <?php echo svg('close', '30', '30') ?>
                </div>
                <h2>Tìm kiếm</h2>
                <div class="search-input">
                    <form action="#">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button><?php echo svg('search-mobile', '25', '25') ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <!-- Section Slide Banner -->
    <section class="slide">
        <div class="slide_div">
            <?php for($i = 0; $i < 3; $i++){ ?>
            <div class="slide_item">
                <div class="slide_img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide/Rectangle 1.png" alt="">
                </div>
                <div class="slide_content">
                    <div class="content wow fadeInUp" data-wow-delay="0.15s">
                        <h2>KIẾN TẠO KHÔNG GIAN</h2>
                        <h3>Phòng tắm</h3>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- End Slide Banner -->

    <!-- Category -->
    <section class="category">
        <div class="category_div">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-lg-5">
                        <div class="category_image_large wow fadeInUp" data-wow-delay="0.15s">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/category/Rectangle 20.png"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-1 col-lg-1 category_t" style="background-color: #ffff">
                        <div class="category_title wow fadeInUp" data-wow-delay="0.15s">
                            <p>Dành cho phòng tắm</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="category_select wow fadeInUp" data-wow-delay="0.15s">
                            <div class="category_select_heading">
                                <p>thiết bị vệ sinh</p>
                                <!-- <div class="category_select_line"></div> -->
                            </div>
                            <div class="category_select_button">
                                <div class="row category_loop">
                                    <?php for($i = 0; $i < 9; $i++){ ?>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="category_select_item">
                                            <a href="#">
                                                <div class="img_large">
                                                    <div class="category_select_img">
                                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/category/image 130.png"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="category_select_name">Bồn cầu</div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <!-- CATEGORY_BRANDS -->
                            <div class="category_select_brands">
                                <div class="brands_items">
                                    <div class="row brands_loop">
                                        <?php for($i = 0; $i < 8; $i++){ ?>
                                        <div class="col-6 col-lg-6">
                                            <div class="logo_items">
                                                <div class="logo_brand_1">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/brands/image 86.png"
                                                        alt="" />
                                                </div>
                                                <div class="logo_brand_2">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/brands/image 90.png"
                                                        alt="" />
                                                </div>
                                                <div class="logo_brand_3">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/brands/image 94.png"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category -->

    <!-- New Product -->
    <section class="product_new">
        <div class="container">
            <div class="product_new_div wow fadeInRight" data-wow-delay="0.15s">
                <p class="heading">Sản phẩm mới</p>
                <div class="row loop_product_new">
                    <?php for($i = 0; $i < 12; $i++){ ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="product_new_items">
                            <a href="#">
                                <div class="div_img">
                                    <div class="product_new_img">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product/image 6.png"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="product_new_name">
                                    <p>Chậu lavabo treo tường chân đứng Viglacera ...</p>
                                </div>
                            </a>
                            <div class="product_new_price">
                                <span class="price">
                                    <ins>
                                        <span>4.500.000</span>
                                    </ins>
                                    &nbsp;
                                    <del>
                                        <span>5.500.000</span>
                                    </del>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="button_show_more">
                <button>Xem thêm</button>
            </div>
        </div>
    </section>
    <!-- End New Product -->

    <!-- Category Product -->
    <section class="category_product">
        <div class="category_product_div wow fadeInRight" data-wow-delay="0.15s">
            <div class="container">
                <div class="category_product_heading">
                    <ul>
                        <li><a href="">Thiết bị vệ sinh</a></li>
                        <li><a href="">Sơn gạch</a></li>
                        <li><a href="">Thiết bị nhà bếp</a></li>
                        <li><a href="">Điện gia dụng</a></li>
                    </ul>
                </div>
                <div class="category_product_product">
                    <div class="row loop_category_product">
                        <?php for($i = 0; $i < 8; $i++){ ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="product_new_items">
                                <a href="#">
                                    <div class="div_img">
                                        <div class="product_new_img">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product/image 6.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="product_new_name">
                                        <p>Chậu lavabo treo tường chân đứng Viglacera ...</p>
                                    </div>
                                </a>
                                <div class="product_new_price">
                                    <span class="price">
                                        <ins>
                                            <span>4.500.000</span>
                                        </ins>
                                        &nbsp;
                                        <del>
                                            <span>5.500.000</span>
                                        </del>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="button_show_more">
                    <button>Xem thêm</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Catagory Product -->

    <!-- Section Tin Tức -->
    <section class="news">
        <div class="news_div wow fadeInUp" data-wow-delay="0.15s">
            <h2>Tin tức</h2>
            <div class="container">
                <div class="row loop_news">
                    <?php for($i = 0; $i < 3; $i++){ ?>
                    <div class="col-12 col-md-4">
                        <div class="news_item">
                            <div class="news_item_img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news/Rectangle 26.png"
                                    alt="" />
                            </div>
                            <div class="news_item_title">
                                <a href="#">
                                    71 thiết kế phòng tắm nhỏ đẹp, nhà tắm đẹp đơn giản
                                    quyến rũ bất ngờ
                                </a>
                            </div>
                            <p class="date_post">30/6/2022</p>
                            <div class="news_item_desc">
                                <p>
                                    Diện tích mà gia đình bạn dành để cho phòng tắm chỉ có
                                    giới hạn? Bạn đang không nắm chắc vấn đề thiết kế nội
                                    thất sao cho hợp lý? Sử dụng vật liệu trang trí phòng
                                    tắm ra sao?
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="button_show_more">
                    <button>Xem thêm</button>
                </div>
                <div class="news_banner wow fadeInUp" data-wow-delay="0.15s">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/Rectangle 33.png"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Tin tức -->
    <h1 class="d-none"><?php echo wp_title() ?></h1>
</main>

<?php
get_footer();