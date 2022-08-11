<?php
    /**
 Template Name: Thư viện ảnh
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
    <!-- Galery Images -->
    <section class="galery">
        <div class="about_galery">
            <div class="container">
                <div class="galery_heading wow fadeInUp" data-wow-delay="0.15s">
                    <ul>
                        <li><a href="">Giới thiệu chung</a></li>
                        <li><a href="">Galery ảnh</a></li>
                    </ul>
                </div>
                <div class="galery_post">
                    <div class="galery_heading wow fadeInDown" data-wow-delay="0.15s">
                        <h2>Hình ảnh</h2>
                        <div class="galery_desc text-line">
                            <p>
                                Một thực tế đã có từ lâu rằng người đọc sẽ bị phân tâm bởi
                                nội dung có thể đọc được của một trang khi nhìn vào bố cục
                                của nó. Điểm đáng chú ý của việc sử dụng Lorem Ipsum là nó
                                có sự phân bố các chữ cái bình thường ít nhiều, trái ngược
                                với việc sử dụng 'Nội dung ở đây, nội dung ở đây',
                            </p>
                        </div>
                    </div>
                    <div class="galery_img">
                        <div class="galery_img_heading wow fadeInDown" data-wow-delay="0.15s">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="img_heading_1">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/galery_images/heading1.png"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="img_heading_2">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/galery_images/heading2.png"
                                            alt="" />
                                    </div>
                                    <div class="img_heading_2">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/galery_images/heading2.png"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="galery_item_img wow fadeInRight" data-wow-delay="0.15s">
                            <div class="row loop_galery">
                                <?php for($i = 0; $i < 6; $i++){ ?>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="item_img">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/galery_images/img.png"
                                            alt="" />
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="button_show_more">
                                <button>Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Galery -->
</main>

<?php
    get_footer(); 
    ?>