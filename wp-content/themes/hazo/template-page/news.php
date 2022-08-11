<?php
    /**
 Template Name: Tin tức
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

    <section class="news">
        <div class="container">
            <div class="news_posts">
                <div class="post_heading">
                    <h2>Tin tức</h2>
                </div>
                <div class="row loop_news">
                    <div class="col-12 col-xs-6 col-lg-4 col-xl-3">
                        <div class="news_item">
                            <div class="item_img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner/Rectangle 26 (2).png"
                                    alt="" />
                            </div>
                            <div class="item_title">
                                <a href="#">
                                    71 thiết kế phòng tắm nhỏ đẹp, nhà tắm đẹp đơn giản
                                    quyến rũ bất ngờ
                                </a>
                            </div>
                            <div class="item_date_post">
                                <p>30/6/2022</p>
                            </div>
                            <div class="item_desc text-line">
                                <p>
                                    Diện tích mà gia đình bạn dành để cho phòng tắm chỉ có
                                    giới hạn? Bạn đang không nắm chắc vấn đề thiết kế nội
                                    thất sao cho hợp lý? Sử dụng vật liệu trang trí phòng
                                    tắm ra sao?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_show_more">
                <button>Xem thêm</button>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer(); 
    ?>