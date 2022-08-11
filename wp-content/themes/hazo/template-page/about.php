<?php
    /**
 Template Name: Về chúng tôi
     */

    get_header();
?>
<main>
    <!-- Banner Top -->
    <section class="banner_top">
        <div class="banner_top_div">
            <div class="banner_top_img">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/banner_about.png" alt="" />
                <div class="banner_content">
                    <div class="content">
                        <a href="#">Trang chủ</a>
                        <h2>Giới thiệu</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Top -->
    <!-- About -->
    <section class="about">
        <div class="about_div">
            <div class="container">
                <div class="about_heading">
                    <ul>
                        <li><a href="">Giới thiệu chung</a></li>
                        <li><a href="">Galery ảnh</a></li>
                    </ul>
                </div>
                <div class="about_post row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="post">
                            <div class="post_heading">
                                <p>Về chúng tôi</p>
                            </div>
                            <div class="post_content">
                                <p>Đang cập nhật</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="post_img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/image_about.png"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="about_vision_mission row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="vision">
                            <div class="vision_heading">
                                <h2>Tầm nhìn</h2>
                            </div>
                            <div class="vision_content">
                                <p>Đang cập nhật</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="mission">
                            <div class="mission_heading">
                                <h2>Sứ mệnh</h2>
                            </div>
                            <div class="mission_content">
                                <p>Đang cập nhật</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Sản phẩm đã xem -->
    <section class="product_watched">
        <div class="container">
            <div class="product_watched_div">
                <div class="watched_heading">
                    <h2>Sản phẩm đã xem</h2>
                </div>
                <div class="watched_product">
                    <div class="category_product_product">
                        <div class="row loop_watched_product">
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
                                            <p>
                                                Chậu lavabo treo tường chân đứng Viglacera ...
                                            </p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End sản phẩm đã xem -->

</main>

<?php
    get_footer(); 
    ?>