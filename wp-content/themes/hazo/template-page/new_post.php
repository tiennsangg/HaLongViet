<?php
    /**
 Template Name: Bài viết tin tức
     */

    get_header();
?>

<main class="policy">
    <!-- Banner Top -->
    <section class="banner_top">
        <div class="banner_top_div">
            <div class="banner_top_img">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/banner_about.png" alt="" />
                <div class="banner_content">
                    <div class="content">
                        <a href="#">Trang chủ</a>
                        <h2>Tin tức</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Top -->
    <section class="post_new">
        <div class="div">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="div_post">
                            <div class="post_title">
                                <h2>Mẫu gương phòng tắm đẹp, hấp dẫn năm 2022</h2>
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/Group.png"
                                    alt="" />
                                <p class="date-post">20/4/2022</p>
                                <p class="p_up_by">Bởi Admin</p>
                            </div>
                            <div class="post_content">
                                <p class="text_content">Đang cập nhật</p>
                                <div class="img_content">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/image 13.png"
                                        alt="" />
                                </div>
                                <p class="text_content">Tiếp tục đang cập nhật</p>
                                <div class="img_content">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/image 14.png"
                                        alt="" />
                                </div>
                                <p class="text_content">Tiếp tục đang cập nhật</p>
                            </div>
                        </div>
                        <div class="div_share">
                            <p>Chia sẻ:</p>
                            <div class="share_icon">
                                <div class="icon_fb">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/fb.png"
                                        alt="" />
                                </div>
                                <div class="icon_zalo">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/zalo2.png"
                                        alt="" />
                                </div>
                                <div class="icon_insta">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/inst.png"
                                        alt="" />
                                </div>
                                <div class="icon_twitter">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/twitter.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="news_related_product">
                            <h2 class="h2_related">Sản phẩm liên quan</h2>
                            <div class="product_related">
                                <div class="row loop_news_related">
                                    <div class="col-12 col-lg-6">
                                        <div class="product_new_items">
                                            <a href="#">
                                                <div class="div_img">
                                                    <div class="product_new_img">
                                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/item_imgassets/images/product/image 9.png"
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
                <!-- Tin tức liên quan -->
                <section class="related_news">
                    <div class="related_news_div">
                        <div class="news_heading">
                            <h2>Tin tức liên quan</h2>
                        </div>
                        <div class="related_news_items">
                            <div class="row loop_news_related_2">
                                <div class="col-6 col-xs-4 col-lg-4 col-xl-3">
                                    <div class="news_item">
                                        <div class="item_img">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/Rectangle 26 (2).png"
                                                alt="" />
                                        </div>
                                        <div class="item_title">
                                            <a href="#">
                                                71 thiết kế phòng tắm nhỏ đẹp, nhà tắm đẹp đơn
                                                giản quyến rũ bất ngờ
                                            </a>
                                        </div>
                                        <div class="item_date_post">
                                            <p>30/6/2022</p>
                                        </div>
                                        <div class="item_desc text-line">
                                            <p>
                                                Diện tích mà gia đình bạn dành để cho phòng tắm
                                                chỉ có giới hạn? Bạn đang không nắm chắc vấn đề
                                                thiết kế nội thất sao cho hợp lý? Sử dụng vật liệu
                                                trang trí phòng tắm ra sao?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer(); 
    ?>