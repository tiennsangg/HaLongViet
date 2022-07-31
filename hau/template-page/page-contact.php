<?php

/**
Template Name: Trang liên hệ
 */
get_header();
?>
	<main id="page_contact" class="content-main">
		<h1 class="d-none">Liên hệ</h1>

		<section class="section-breacrum position-relative">
			<div class="bg-section w-100 position-absolute h-100">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-contact.jpg" alt="Background" class="fit-cover">
				<div class="bg-color w-100 position-absolute h-100"></div>
			</div>
			<div class="content position-relative text-center">
				<div class="container">
					<div class="s_container wow fadeInUp" data-wow-delay="0.5s">
						<h2>Giúp chúng tôi thấu hiểu</h2>
						<p>Du Học Phong Vân luôn lắng nghe và phục vụ Quý Khách Hàng.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section-content">
			<div class="container">
				<div class="s_container">

					<div class="chat-call">
						<div class="row row-15">
							<div class="col-12 col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
								<div class="item-col text-center h-100">
									<div class="item-col_img mx-auto mb-3">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chat-call-ct.png" alt="Call">
									</div>
									<div class="item-col__content">
										<h4>Gọi Tư Vấn Viên</h4>
										<p>Quý khách quan tâm tới dịch vụ của Phong Vân? Hãy gọi ngay cho Tư Vấn Viên nhé.</p>
									</div>
									<a href="tel:" class="d-inline-block link-chat-call text-uppercase font-weight-bold mt-4"> Gọi Ngay </a>
								</div>
							</div>
							<div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.5s">
								<div class="item-col text-center h-100">
									<div class="item-col_img mx-auto mb-3">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chat-call2-ct.png" alt="Chat">
									</div>
									<div class="item-col__content">
										<h4>Chat trực tuyến</h4>
										<p>Đôi khi bạn cần một chút giúp đỡ. Đừng lo lắng, chúng tôi ở đây vì bạn. </p>
									</div>
									<a href="http://m.me/" class="d-inline-block link-chat-call text-uppercase font-weight-bold mt-4">Messenger</a>
								</div>
							</div>
						</div>
					</div>

					<div class="contact-form">
						<div class="row row-15">
							<div class="col-12 col-md-6 wow fadeInLeft" data-wow-delay="0.5s">
								<div class="item-col h-100">
									<?php
									 	echo do_shortcode('[contact-form-7 id="6" title="Thông tin liên hệ"]');
									?>
								</div>
							</div>
							<div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.5s">
								<div class="item-col h-100">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7838.889098320686!2d106.691258!3d10.777224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3a5e50577b%3A0x2d8a3dfb1d7d6a72!2zNjNkIFbDtSBWxINuIFThuqduLCBQaMaw4budbmcgNiwgUXXhuq1uIDMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1657103436779!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	
<?php
get_footer();