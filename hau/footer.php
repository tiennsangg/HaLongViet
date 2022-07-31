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

<section class="section-footer-news">
	<div class="container">
		<div class="s_container">
			<div class="list-news">
				<div class="row row-15">
					<div class="col-12 col-lg-6 wow fadeInLeft mb-4 mb-lg-0" data-wow-delay="0.5s">
						<div class="item-col item-col-text">
							<div class="ul-title-news mb-4 border-bottom-title">Tin Mới</div>
							<ul>
								<?php for($i = 0; $i < 9; $i++){?>
								<li>
									<a href="" title="ĐẠI HỌC JAMES COOK SINGAROPE">
										ĐẠI HỌC JAMES COOK SINGAROPE
									</a>
								</li>
							    <?php }?>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
						<div class="item-col item-col-image">
							<div class="row">
								<?php for($i = 0; $i < 6; $i++){?>
								<div class="col-12 col-md-6">
									<div class="item-col-news-img position-relative">
										<a href="/" title="DU HỌC ÚC- ĐẠI HỌC, THẠC SĨ KHÔNG CHỨNG MINH TÀI CHÍNH- (CQU)" class="img-hover d-block">
											<div class="pa1">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-news-footer.jpg" alt="DU HỌC ÚC- ĐẠI HỌC, THẠC SĨ KHÔNG CHỨNG MINH TÀI CHÍNH- (CQU)" class="fit-cover">
											</div>
											<div class="content position-absolute w-100 h-100 font-weight-bold text-center d-flex align-items-center justify-content-center p-3">
												<h5 class="mb-0 font-weight-bold">DU HỌC ÚC- ĐẠI HỌC, THẠC SĨ KHÔNG CHỨNG MINH TÀI CHÍNH- (CQU) </h5>
											</div>
										</a>
									</div>
								</div>
							<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php wp_footer(); ?>
<footer id="footer">
	<div class="container">
		<div class="s_container">
			<div class="row">
				<div class="col-12 col-lg-4 mb-4 mb-lg-0">
					<div class="item-col">
						<div class="footer-info">
							<div> 
								<strong>CÔNG TY DU HỌC PHONG VÂN</strong> 
							</div>
							<div>
								<strong>Địa chỉ:</strong>
								180 Nguyễn Thị Minh Khai, P.Võ Thị Sáu, Q.3, TP.HCM
							</div>
							<div>
								<strong>Điện Thoại:</strong>
								028. 6678 0892 - 028. 6660 2319 
							</div>
							<div>
								<strong>Email:</strong>
								phongvanduhoc2@gmail.com
							</div>
							<div>
								<strong>Website:</strong>
								duhocphongvan.com
							</div>
							<div>
								<strong>Hotline:</strong>
								 090 8888 516 (Zalo, Viber, iMessage)
							</div>
						</div>
						<div class="footer-info">
							<div> 
								<strong>PHONG VAN EDUCATION </strong>
							</div>
							<div>
								<strong>Address:</strong>
								180 Nguyen Thi Minh Khai, Vo Thi Sau Ward, District 3, Ho Chi Minh City, Vietnam
							</div>
							<div>
								<strong>Tel:</strong>
								(+84)28. 6678 0892 - 28. 6660 2319 
							</div>
							<div>
								<strong>Email:</strong>
								phongvanduhoc2@gmail.com
							</div>
							<div>
								<strong>Website:</strong>
								duhocphongvan.com
							</div>
							<div>
								<strong>Hotline:</strong>
								 090 8888 516 (Zalo, Viber, iMessage)
							</div>
							<div>
								Giờ Làm Việc: 8h - 17h
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="item-col">
						<p>
							<strong>Yêu Cầu Tư Vấn</strong>
						</p>
						<div class="contact-form">
							<?php
							 	echo do_shortcode('[contact-form-7 id="6" title="Thông tin liên hệ"]');
							?>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="item-col">
						<p>
							<strong>Fanpage</strong>
						</p>
						<p>
							<iframe style="border: none; overflow: hidden;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwww.duhocphongvan.edu.vn%2F&amp;tabs=timeline&amp;width=375&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=2436788866551259" width="100%" height="415" frameborder="0" scrolling="no"></iframe>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>

<script>
    (function($) { "use strict";

      $(document).ready(function(){"use strict";
        
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';    
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength / height);
          progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).scroll(updateProgress); 
        var offset = 50;
        var duration = 550;
        jQuery(window).on('scroll', function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
          } else {
            jQuery('.progress-wrap').removeClass('active-progress');
          }
        });       
        jQuery('.progress-wrap').on('click', function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
        
        
      });
      
    })(jQuery); 
</script>

</body>

</html>