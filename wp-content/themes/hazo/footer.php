<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hazo
 */

?>

<?php the_field('script_body', 'option'); ?>
<?php wp_footer(); ?>

<!-- Footer -->
<footer style="background-color: #e4e4e4; padding-top: 105px">
    <div class="footer_div">
        <div class="container">
            <div class="row">
                <div class="col12 col-lg-3">
                    <div class="about_company">
                        <h2>CÔNG TY CỔ PHẦN HÀ LONG VIỆT</h2>
                        <p class="footer_address">
                            <strong>Địa chỉ:</strong>&nbsp;TT 11 Ô 11, Khu đô thị Văn
                            Phú, Phường Phú La, Quận Hà Đông, Thành phố Hà Nội, Việt
                            Nam
                        </p>
                        <p class="footer_phone">
                            <strong>Điện thoại:</strong>&nbsp; 0936.286.686
                        </p>
                        <p class="footer_email">
                            <strong>Email:</strong>&nbsp; demo@gmail.com
                        </p>
                        <div class="footer_fb">
                            <div class="img_fb">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/Facebook.png"
                                    alt="" />
                            </div>
                            <div class="img_ins">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/Instagram.png"
                                    alt="" />
                            </div>
                            <div class="img_zl">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/Zalo.png"
                                    alt="" />
                            </div>
                            <div class="img_mail">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/Email.png"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col12 col-lg-2">
                    <div class="footer_direct">
                        <h2>điều hướng</h2>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Sản phẩm</a>
                        <a href="#">Chính sách</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Liên hệ</a>
                    </div>
                </div>
                <div class="col12 col-lg-2">
                    <h2>Chính sách</h2>
                    <a href="#">Chính sách bảo hành</a>
                    <a href="#">Chính sách bảo hành</a>
                    <a href="#">Chính sách bảo hành</a>
                    <a href="#">Chính sách bảo hành</a>
                    <a href="#">Chính sách bảo hành</a>
                </div>
                <div class="col12 col-lg-5">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form_advise">
                                <h2>Đăng ký tư vấn</h2>
                                <form action="#">
                                    <input type="text" name="name" id="name" placeholder="Họ tên" />
                                    <input type="text" name="Email" id="Email" placeholder="Email" />
                                    <input type="text" name="phone" id="phone" placeholder="Số điện thoại" />
                                </form>

                                <div class="button_show_more">
                                    <button>Gửi đăng ký</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="footer_map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0384496018546!2d105.78894165120646!3d21.07112648590667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aacfd5953bb9%3A0xeee48505653c81e8!2zMzIzIMSQLiBYdcOibiDEkOG7iW5oLCBYdcOibiDEkOG7iW5oLCBUw6J5IEjhu5MsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1659522246995!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_line_color" style="background-color: #905b00"></div>
    </div>
</footer>
<!-- End Footer -->


<div class="back-to-top">
    <?php echo svg('back-top', '18', '18') ?>
</div>
</body>

</html>