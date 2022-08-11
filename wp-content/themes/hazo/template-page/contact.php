<?php
    /**
 Template Name: Liên hệ
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
                        <h2>Liên hệ</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Top -->
    <section class="contact">
        <div class="container">
            <div class="contact_div">
                <div class="row">
                    <div class="col-6 col-lg-6">
                        <div class="contact_company">
                            <div class="contact_company_left">
                                <h2>Công ty cổ phần hà long việt</h2>
                                <div class="address">
                                    <p>
                                        TT 11 Ô 11, Khu đô thị Văn Phú, Phường Phú La, Quận Hà
                                        Đông, Thành phố Hà Nội, Việt Nam
                                    </p>
                                </div>
                                <div class="phone">
                                    <a href="tel:0123456798">0936.286.686</a>
                                </div>
                                <div class="mail">
                                    <a href="#">demo@gmail.com</a>
                                </div>
                                <div class="website">
                                    <a href="#">halongviet.com</a>
                                </div>
                                <div class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3723.038326573567!2d105.786651!3d21.0711314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aacfd5953bb9%3A0xeee48505653c81e8!2zMzIzIMSQLiBYdcOibiDEkOG7iW5oLCBYdcOibiDEkOG7iW5oLCBUw6J5IEjhu5MsIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1659348384555!5m2!1svi!2s"
                                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer(); 
    ?>