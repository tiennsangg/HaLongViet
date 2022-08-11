<?php
    /**
 Template Name: Chi tiết sản phẩm
     */

    get_header();
?>

<main class="products_detail_page">
    <!-- Phần bread-crumb -->
    <section class="navigation_bar">
        <div class="section-content">
            <div class="container">
                <div class="position-relative">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bread_crumb.jpg" alt="">
                    <div class="navigation_bar_content position-absolute w-100 h-100 d-flex align-items-center">
                        <div class="tab_web wow fadeInUp" data-wow-delay="0.15s">
                            <nav aria-label="breadcrumbs" class="rank_math_breadcrumb">
                                <a href="">Trang chủ</a>
                            </nav>
                        </div>
                        <h1 class="navigation-title">Sản phẩm</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- nội dung phần trong -->
    <div class="products_detail_top">
        <div class="section_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-7">
                        <div class="row">
                            <div class="col-sm-3 col-xl-3">
                                <div class="slider-nav-pro slick-vertical slick-slider">
                                    <div class="slick-list draggable">
                                        <div class="slick-track">
                                            <div class="item-small slick-slide slick-active">
                                                <div class="pa1 cursor-pointer w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="item-small slick-slide slick-active">
                                                <div class="pa1 cursor-pointer w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="item-small slick-slide slick-active">
                                                <div class="pa1 cursor-pointer w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="item-small slick-slide slick-active">
                                                <div class="pa1 cursor-pointer w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9 col-xl-9">
                                <div class="slider-for-pro slick-initialized slick-slider">
                                    <div class="slick-list draggable">
                                        <div class="slick-track">
                                            <div class="item-big slick-slide slick-current slick-active">
                                                <a href="" class="pa1  w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_1.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="item-big slick-slide slick-current slick-active">
                                                <a href="" class="pa1  w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_2.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="item-big slick-slide slick-current slick-active">
                                                <a href="" class="pa1  w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_3.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="item-big slick-slide slick-current slick-active">
                                                <a href="" class="pa1  w-100">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_4.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="products_detail_top_content">
                            <h1>Chậu lavabo treo tường chân đứng Viglacera</h1>
                            <div class="products_detail_price">
                                <ul class="d-flex align-items-center">
                                    <li class="old_price">
                                        <del>5.500.000</del>
                                    </li>
                                    <li class="new_price">
                                        <span>4.500.000</span>
                                    </li>
                                </ul>
                            </div>
                            <h2>Thông số kỹ thuật</h2>
                            <div class="products_detail_parameter">
                                <ul>
                                    <li>
                                        Chủng loại: Chậu rửa mặt lavabo có chân
                                    </li>
                                    <li>
                                        Kiểu dáng: Treo tường kích thước lớn
                                    </li>
                                    <li>
                                        Chất liệu: Men sứ Nano kháng khuẩn
                                    </li>
                                    <li>
                                        Bề mặt: Sáng bóng dễ vệ sinh
                                    </li>
                                    <li>
                                        Kích thước: 600 x 420 x 150mm
                                    </li>
                                    <li>
                                        Bao gồm: Chậu rửa lavabo, Bát treo, Chân chậu (chưa bao gồm vòi xả)
                                    </li>
                                </ul>
                            </div>
                            <div class="quick_buy">
                                <ul class="d-flex align-items-center justify-content-center">
                                    <li class="d-flex quick_buy_count">
                                        <div class="button_amount d-flex justify-content-between">
                                            <button id="minusButton">-</button>
                                            <input class="numberInput" value="0" type="number" id="numberInput" />
                                            <button id="plusButton">+</button>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/cart_item.svg"
                                            alt="">
                                    </li>
                                    <li class="quick_buy_btn">
                                        <a href="" class="btn">
                                            Mua ngay
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="purchase">
                                <div class="purchase_icon">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/cart_item_btn.svg"
                                        alt="">
                                </div>
                                <a href="" class="btn">
                                    <h3>Đặt mua ngay</h3>
                                    <span>giao hàng tận nơi trên toàn quốc</span>
                                </a>
                            </div>
                            <div class="products_detail_buycontact">
                                <ul class="">
                                    <li>
                                        <a href="" class="btn">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/phone_item_btn.svg"
                                                alt="">
                                            <span>0936.286.686</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="btn">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/facebook_item_btn.svg"
                                                alt="">
                                            <span>Chat Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="btn">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/zalo_item_btn.svg"
                                                alt="">
                                            <span>Chat Zalo</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="products_detail_address">
                                <h3>Địa chỉ</h3>
                                <div class="products_detail_address_ct">
                                    <ul>
                                        <li> TT 11 Ô 11, Khu đô thị Văn Phú, Phường Phú La, Quận Hà Đông, Thành phố Hà
                                            Nội, Việt Nam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nội dung chi tiết -->
    <div class="products_detail_main">
        <div class="section-content">
            <div class="container">
                <div class="products_detail_main_title tab">
                    <button class="tablinks" onclick="openCity(event, 'mota')" id="defaultOpen">Mô tả</button>
                    <button class="tablinks" onclick="openCity(event, 'thongso')">Thông số</button>
                </div>
                <div class="products_detail_main_bt">
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="products_detail_main_content">
                                <div class="products_detail_main_ct">
                                    <div id="mota" class="tabcontent">
                                        <h3 class="tabcontent_title">Đặc điểm nổi bật của Chậu lavabo treo tường
                                            chân đứng Viglacera</h3>
                                        <div class="tabcontent_ct">
                                            <p>
                                                Chậu lavabo treo tường chân đứng Viglacera thuộc loại chậu rửa treo
                                                tường. Có thiết kế lớn phù hợp cho phòng vệ sinh có không gian lớn.
                                                giúp dễ vệ sinh với bề mặt nhẵn bóng và có màu sắc trắng sáng tự nhiên.
                                                Đi kèm chân đỡ chậu rửa vững chắc có thể che đi phụ kiện xả mang đến
                                                không gian thẩm mỹ hoàn hảo cho phòng vệ sinh nhà bạn.
                                                Sản phẩm được áp dụng công nghệ men sứ Nano có khả năng kháng khuẩn giúp
                                                bạn dễ dàng vệ sinh hơn các loại men sứ thông thường khác. Lắp đặt nhanh
                                                chóng phù hợp cho mọi loại vòi rửa và phụ kiện xả trên thị trường.
                                            </p>
                                            <br>
                                            <div class="d-flex">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_img_1.jpg"
                                                    alt="" class="w-50">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_img_1.jpg"
                                                    alt="" class="w-50">
                                            </div>
                                            <br>
                                            <p>
                                                Chậu lavabo treo tường chân đứng Viglacera thuộc loại chậu rửa treo
                                                tường. Có thiết kế lớn phù hợp cho phòng vệ sinh có không gian lớn.
                                                giúp dễ vệ sinh với bề mặt nhẵn bóng và có màu sắc trắng sáng tự nhiên.
                                                Đi kèm chân đỡ chậu rửa vững chắc có thể che đi phụ kiện xả mang đến
                                                không gian thẩm mỹ hoàn hảo cho phòng vệ sinh nhà bạn.
                                                Sản phẩm được áp dụng công nghệ men sứ Nano có khả năng kháng khuẩn giúp
                                                bạn dễ dàng vệ sinh hơn các loại men sứ thông thường khác. Lắp đặt nhanh
                                                chóng phù hợp cho mọi loại vòi rửa và phụ kiện xả trên thị trường.
                                            </p>
                                            <br>
                                            <div class="d-flex">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/product_detail_img_2.jpg"
                                                    alt="">
                                            </div>
                                            <br>
                                            <p>
                                                Chậu lavabo treo tường chân đứng Viglacera thuộc loại chậu rửa treo
                                                tường. Có thiết kế lớn phù hợp cho phòng vệ sinh có không gian lớn.
                                                giúp dễ vệ sinh với bề mặt nhẵn bóng và có màu sắc trắng sáng tự nhiên.
                                                Đi kèm chân đỡ chậu rửa vững chắc có thể che đi phụ kiện xả mang đến
                                                không gian thẩm mỹ hoàn hảo cho phòng vệ sinh nhà bạn.
                                                Sản phẩm được áp dụng công nghệ men sứ Nano có khả năng kháng khuẩn giúp
                                                bạn dễ dàng vệ sinh hơn các loại men sứ thông thường khác. Lắp đặt nhanh
                                                chóng phù hợp cho mọi loại vòi rửa và phụ kiện xả trên thị trường.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="thongso" class="tabcontent">
                                        <h3 class="tabcontent_title">Thông số sản phẩm</h3>
                                        <div class="tabcontent_ct">
                                            <b>Thông tin / Giới thiệu</b>
                                            <br>
                                            <p> – Áo Bomber lót lông thiết kế chuẩn from , trẻ trung dễ phối đồ </p>
                                            <p> – Hàng xuất chính hãng , đường may và các chi tiết đều sắc nét. </p>
                                            <br>
                                            <p>
                                                Kích thước: <b>S – M – L – XL</b>
                                            </p>
                                            <p>
                                                Màu sắc: <b>XÁM – ĐEN – XANH DƯƠNG – ĐỎ</b>
                                            </p>
                                            <p>
                                                Chất liệu: <b>Gió dù</b>
                                            </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="products_detail_share d-flex">
                                    <h3>Chia sẻ: </h3>
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <a href="">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/share_facebook.svg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/share_zalo.svg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/share_ig.svg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/share_twiter.svg"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Phần nhận xét của khách hàng -->
                                <div class="products_detail_evaluate">
                                    <h3>Bình luận</h3>
                                    <!-- Để phần bình luận và nhận xét ở đây -->
                                    <div class="devvn_prod_cmt">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/binhluan.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="related_product">
                                <h3>Sản phẩm liên quan</h3>
                                <ul>
                                    <li class="related_product_item d-flex">
                                        <div class="related_product_item_img">
                                            <a href="" class="img_block">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/related_products_1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="related_product_item_title">
                                            <h4 class="text-line">
                                                <a href="">
                                                    Bồn cầu thông minh Viglacera V90
                                                </a>
                                            </h4>
                                            <ul class="related_product_price">
                                                <li class="related_product_old_price">
                                                    <del>
                                                        5.500.000
                                                    </del>
                                                </li>
                                                <li class="related_product_new_price">
                                                    4.500.000
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="related_product_item d-flex">
                                        <div class="related_product_item_img">
                                            <a href="" class="img_block">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/related_products_1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="related_product_item_title">
                                            <h4 class="text-line">
                                                <a href="">
                                                    Bồn cầu thông minh Viglacera V90
                                                </a>
                                            </h4>
                                            <ul class="related_product_price">
                                                <li class="related_product_old_price">
                                                    <del>
                                                        5.500.000
                                                    </del>
                                                </li>
                                                <li class="related_product_new_price">
                                                    4.500.000
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="related_product_item d-flex">
                                        <div class="related_product_item_img">
                                            <a href="" class="img_block">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/related_products_1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="related_product_item_title">
                                            <h4 class="text-line">
                                                <a href="">
                                                    Bồn cầu thông minh Viglacera V90
                                                </a>
                                            </h4>
                                            <ul class="related_product_price">
                                                <li class="related_product_old_price">
                                                    <del>
                                                        5.500.000
                                                    </del>
                                                </li>
                                                <li class="related_product_new_price">
                                                    4.500.000
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="related_product_item d-flex">
                                        <div class="related_product_item_img">
                                            <a href="" class="img_block">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/related_products_1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="related_product_item_title">
                                            <h4 class="text-line">
                                                <a href="">
                                                    Bồn cầu thông minh Viglacera V90
                                                </a>
                                            </h4>
                                            <ul class="related_product_price">
                                                <li class="related_product_old_price">
                                                    <del>
                                                        5.500.000
                                                    </del>
                                                </li>
                                                <li class="related_product_new_price">
                                                    4.500.000
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="related_product_item d-flex">
                                        <div class="related_product_item_img">
                                            <a href="" class="img_block">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/related_products_1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="related_product_item_title">
                                            <h4 class="text-line">
                                                <a href="">
                                                    Bồn cầu thông minh Viglacera V90
                                                </a>
                                            </h4>
                                            <ul class="related_product_price">
                                                <li class="related_product_old_price">
                                                    <del>
                                                        5.500.000
                                                    </del>
                                                </li>
                                                <li class="related_product_new_price">
                                                    4.500.000
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="related_product_item d-flex">
                                        <div class="related_product_item_img">
                                            <a href="" class="img_block">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/related_products_1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="related_product_item_title">
                                            <h4 class="text-line">
                                                <a href="">
                                                    Bồn cầu thông minh Viglacera V90
                                                </a>
                                            </h4>
                                            <ul class="related_product_price">
                                                <li class="related_product_old_price">
                                                    <del>
                                                        5.500.000
                                                    </del>
                                                </li>
                                                <li class="related_product_new_price">
                                                    4.500.000
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nội dung bên dưới -->
    <div class="products_detail_bottom">
        <div class="section-content">
            <div class="container">
                <div class="products_detail_bottom_content">
                    <div class="products_detail_bottom_content_item">
                        <h3>GIAO HÀNG MIỄN PHÍ & THANH TOÁN TẠI NHÀ.</h3>
                        <div class="products_detail_bottom_content_ct">
                            <b>Phạm vi bao gồm:</b> Ba Đình, Bắc Từ Liêm, Cầu Giấy, Đống Đa, Hà Đông, Hai Bà Trưng, Hoài
                            Đức, Hoàn Kiếm, Hoàng Mai, Nam Từ Liêm, Tây Hồ, Thanh Xuân, Chúng tôi hỗ trợ gửi hàng đi các
                            tỉnh thành / khu vực khác cho khách hàng có nhu cầu. Hỗ trợ miễn phí gửi hàng ra bến xe, xe
                            tải, xe khách tại nội thành Hà Nội. Chi phí vận chuyển từ xe hàng, xe tải tới vị trí của quý
                            khách vui lòng tự thỏa thuận và thanh toán
                        </div>
                    </div>
                    <div class="products_detail_bottom_content_item">
                        <h3>PHƯƠNG THỨC THANH TOÁN CHO KHÁCH NGOÀI HÀ NỘI.</h3>
                        <div class="products_detail_bottom_content_ct">
                            <ul>
                                <li>
                                    Quý khách vui lòng thanh toán trước 100% giá trị đơn hàng và phí vận chuyển (nếu
                                    có).
                                </li>
                                <li>
                                    Khi chuyển tiền quý khách vui lòng ghi chú số điện thoại / mã đơn hàng / nội dung
                                    sản phẩm cần đặt hàng.
                                </li>
                                <li>
                                    Sau khi nhận được tiền chúng tôi sẽ chủ động liên lạc với khách hàng và thống nhất
                                    thời gian, địa điểm giao hàng.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
    get_footer();