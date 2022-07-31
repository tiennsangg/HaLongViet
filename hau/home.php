<?php

/**
Template Name: Trang chủ
 */

get_header();
?>
<main>
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
    
    <section class="home-slide">
        <div class="slider-home slide-fullw">
            <?php for($i = 0; $i < 3; $i++){?>
                <div class="item-slide w-100">
                    <div class="pa1">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-aboutus.jpg" alt="Du học mỹ" class="fit-cover">
                    </div>          
                </div>
            <?php }?>
        </div>
    </section>

    <section class="home-advise-process home-item">
        <div class="container">
            <div class="s_container wow fadeInUp" data-wow-delay="0.5s">
                <div class="section-head mb-4">
                    <h2 class="text-uppercase text-center mb-0 position-relative d-flex align-items-center">
                        <span class="line-left-right"></span>
                        <span class="h2-container position-relative px-3">
                            <span class="icon-arrow me-2">
                                <?php echo svg('angle-left', '', '') ?>
                            </span>
                            <span>Quy trình tư vấn du học</span>
                        </span>
                        <span class="line-left-right"></span>
                    </h2>
                </div>

                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-4">
                            <div class="col-text h-100 d-flex align-items-center">
                                <blockquote class=" mb-0"> 
                                    <p><span>Là thương hiệu lớn trong lĩnh vực du học và mang trên mình sứ mệnh thắp sáng tương lai cho thế hệ trẻ Việt Nam, Du Học Phong Vân luôn đặt chữ <strong>TÍN</strong> lên hàng đầu và áp dụng những tiêu chuẩn quốc tế vào quy trình làm việc.</span></p> 
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-lg-8">
                            <div class="list-process d-flex flex-wrap position-relative">
                                <?php for($i = 0; $i < 6; $i++){?>
                                <div class="col-6 col-md-4 item-process position-relative text-center p-lg-3 p-2">
                                    <div class="item-process__img mx-auto">
                                        <div class="pa1 pa1x1">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Tu-van.png" alt="Tư vấn" class="fit-cover">
                                        </div>
                                    </div>
                                    <div class="item-process__text">
                                        <h5 class="mt-3 mb-0">Tư vấn ></h5>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="home-services home-item position-relative d-flex align-items-center">
        <div class="bg-image position-absolute w-100 h-100" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-service.jpg);"></div>
        <div class="bg-overflay position-absolute w-100 h-100"></div>
        <div class="container">
            <div class="s_container wow fadeInUp position-relative" data-wow-delay="0.5s">
                <div class="section-head mb-5">
                    <h2 class="text-uppercase text-center mb-0 position-relative d-flex align-items-center">
                        <span class="line-left-right"></span>
                        <span class="h2-container position-relative px-3">
                            <span class="icon-arrow me-2">
                                <?php echo svg('menu', '', '') ?>
                            </span>
                            <span>DỊCH VỤ</span>
                        </span>
                        <span class="line-left-right"></span>
                    </h2>
                </div>

                <div class="section-content">
                    <div class="list-services">
                        <div class="row">
                            <?php for($i = 0; $i < 9; $i++){?>
                            <div class="col-6 col-md-4 mb-4 mb-xl-5">
                                <a href="/" class="my-2 mt-xl-3 item-service position-relative text-center d-block" title="Dịch thuật">
                                    <div class="item-service__img mx-auto">
                                        <div class="pa1 pa1x1">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-service.png" alt="Dịch thuật" class="fit-cover">
                                        </div>
                                    </div>
                                    <div class="item-service__text">
                                        <h3 class="mt-3 mb-0">Dịch thuật</h3>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-why-advise home-item">
        <div class="container">
            <div class="s_container wow fadeInUp position-relative" data-wow-delay="0.5s">
                <div class="section-head mb-5">
                    <h2 class="text-uppercase text-center mb-0 position-relative d-flex align-items-center">
                        <span class="line-left-right"></span>
                        <span class="h2-container position-relative px-2 px-md-3">
                            <span>Lý do chọn tư vấn du học Phong Vân</span>
                        </span>
                        <span class="line-left-right"></span>
                    </h2>
                </div>

                <div class="section-content">
                    <div class="list-why-advise d-flex flex-column">
                        <div class="row">
                           <div class="col-12 col-md-8 d-flex align-items-center">
                               <div class="item-img w-100">
                                   <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top-50-asia.jpg" alt="" class="w-100 img-fluid">
                               </div>
                           </div>
                           <div class="col-12 col-md-4 d-flex align-items-center mt-3 mt-md-0">
                               <div class="item-content">
                                    <h4 style="text-align: justify;">“Thương hiệu Tiêu biểu Hội nhập Châu Á – Thái Bình Dương”</h4>
                                    <p style="text-align: justify;">Giải thưởng Top 50 Thương hiệu Tiêu biểu Hội nhập Châu Á – Thái Bình Dương vừa đạt được tiếp tục là một minh chứng rõ nét cho những nỗ lực không ngừng nghỉ của Du Học Phong Vân.</p>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 col-md-8 d-flex align-items-center">
                               <div class="item-img w-100">
                                   <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-map.png" alt="" class="w-100 img-fluid">
                               </div>
                           </div>
                           <div class="col-12 col-md-4 d-flex align-items-center mt-3 mt-md-0">
                               <div class="item-content">
                                    <h4 style="text-align: justify;">ƯU ĐIỂM NỔI BẬT CỦA CHÚNG TÔI</h4>
                                    <p style="text-align: justify;"><strong>Cung cấp các dịch vụ miễn phí bao gồm:</strong></p>
                                    <ul style=" list-style: disc; padding-left: 1rem;margin-bottom: 1rem;"> 
                                        <li>Tư vấn MIỄN PHÍ</li>
                                        <li>Dịch Thuật MIỄN PHÍ</li>
                                        <li>Xin trường và chuyển trường MIỄN PHÍ</li>
                                    </ul>
                                    <p style="text-align: justify;">
                                        <a href="" rel="nofollow">Xem thêm ></a>
                                    </p>
                               </div> 
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-review-customer home-item position-relative mask-arrow ">
        <div class="container">
            <div class="s_container wow fadeInUp position-relative" data-wow-delay="0.5s">
                <div class="section-head mb-5 pt-4">
                    <h2 class="text-uppercase text-center mb-0 position-relative d-flex align-items-center">
                        <span class="line-left-right"></span>
                        <span class="h2-container position-relative px-3">
                            <span>Cảm Nhận Khách Hàng PHONG VÂN</span>
                        </span>
                        <span class="line-left-right"></span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="s_container px-xl-3">
                <div class="section-content pb-0">
                    <div class="list-review">
                        <div class="row row-15">
                            <?php for($i = 0; $i < 8; $i++){?>
                            <div class="col-12 col-md-6 col-lg-3 wow fadeInUp position-relative mb-5" data-wow-delay="0.5s">
                               <a class="item-review d-block text-center" href="/">
                                    <div class="item-review__img img-hover">
                                        <div class="pa1">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-review-visa.png" alt="THỊNH PHÁT (TP.HCM) | DU HỌC MỸ" class="fit-cover">
                                        </div>
                                    </div>
                                    <div class="item-review__content mt-3">
                                        <label>Cảm nhận Khách Hàng</label>
                                        <h4 class="w-line w-two-line mt-2">
                                            THỊNH PHÁT (TP.HCM) | DU HỌC MỸ
                                        </h4>
                                        <p class="w-line w-two-line">
                                            Em là Phát (sinh năm 2004). Em vừa nhận được Visa du học                    
                                        </p>
                                    </div>
                               </a>
                               <div class="text-center">
                                    <a href="/" rel="nofollow" class="link-view d-inline-block text-uppercase font-weight-bold">
                                        Xem ngay
                                    </a>
                                </div>
                           </div>
                            <?php }?>
                        </div>
                        <div class="text-center">
                            <a href="/" rel="nofollow" class="view-all">Xem tất cả > </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-study-video home-item position-relative mask-arrow">
        <div class="container">
            <div class="s_container pt-3">
                <div class="row row-15">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <div class="item-col text-center h-100">
                            <h2 class="mb-0 p-2">Du Học</h2>
                            <div class="list-study">
                                <?php for($i = 0; $i < 8;$i++){?>
                                <a class="item-study  mb-1 d-block wow fadeInUp position-relative  img-hover" data-wow-delay="0.5s" href="Du Học Úc">
                                    <div>
                                        <div class="item-study__img">
                                            <div class="pa1"> 
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-study.jpg" alt="Du Học Úc" class="fit-cover"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-study__content position-absolute h-100 w-100 py-3 px-5 d-flex align-items-center">
                                        <h3 class="border-bottom-title title-line-center p-2 p-lg-3 pb-3 pb-lg-4 font-weight-bold">Du Học Úc</h3>
                                    </div>
                                </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <div class="item-col text-center h-100">
                            <h2 class="mb-0 p-2">Góc Chia Sẻ</h2>
                            <div class="list-study">
                                <?php for($i = 0; $i < 4; $i++){?>
                                <div class="item-video wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="item-video position-relative mb-4">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/LlHnB1PZPW4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div>
                                <a href="" rel="nofollow" class="link-more">> Xem thêm <</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-partner  home-item position-relative">
        <div class="container">
            <div class="s_container">
                <div class="section-head mb-4">
                    <h2 class="text-uppercase text-center mb-0 position-relative d-flex align-items-center">
                        <span class="line-left-right"></span>
                        <span class="h2-container position-relative px-3">
                            <span>ĐỐI TÁC CỦA PHONG VÂN </span> 
                        </span>
                        <span class="line-left-right"></span>
                    </h2>
                </div>
                <div class="section-content">
                    <div class="section-content__banner mb-4">
                       <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-doitac.jpg" alt="Banner đối tác">
                    </div>
                    <?php for($j = 0; $j < 3;$j++){?>
                    <div class="section-list-partner mb-3 mb-xl-5 pb-3 mb-lg-4">
                        <h4 class="mb-3">
                            <span class="d-inline-block">TRƯỜNG Mỹ</span>
                        </h4>
                        <div class="list-partner">
                            <?php for($i = 0;$i < 10;$i++){?>
                            <a class="item-partner d-block col-6 col-md-4 col-lg-2" data-fancybox="image-partner" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-partner.jpg">
                               <div class="pa1 pa1x1">
                                   <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-partner.jpg" alt="Logo đối tác" class="fit-cover">
                               </div>
                            </a>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                </div>

                <div class="section-ads">
                    <div class="row row-15">
                        <div class="col-12 col-md-6">
                            <div class="item-col h-100 px-3 px-xl-5 py-4 text-center col-xl-8 mx-auto">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ads-ngoaingu.png" alt="i ngữ Đa Minh" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="item-col h-100 px-3 px-xl-5 py-4 d-flex flex-column justify-content-center ">
                                <h3>Ngoại ngữ Đa Minh</h3>
                                <p>Nhà huấn luyện IELTS tin cậy nhất , uy tín nhất , và chất lượng giáo dục tốt nhất của người Việt cả nước .<p>
                                <a href="/" rel="nofollow" class="view-more font-weight-bold py-2 px-3 d-inline-block">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h1 class="d-none"><?php echo wp_title() ?></h1>
</main>

<?php
get_footer();
