<?php

/**
Template Name: Trang chi tiết tin tức
 */
get_header();
?>
	<main id="page_detail_news" class="content-main">
		<section class="section-content">
			<div class="container">
				<div class="s_container">
					<dv class="row row-15">
						<div class="col-12 col-lg-8 col-xl-9 mb-4 mb-lg-0">
							<div class="item-col-content">
								<div class="head-content p-2 p-md-3 p-lg-4 text-center">
									<h6 class="entry-category"> 
										<a href="/">Du Học Mỹ</a>,
										<a href="/">Tin Tức</a>
									</h6> 
									<h1 class="border-bottom-title title-line-center title-main">CHUYÊN VISA MỸ- TỈ LỆ VISA CAO</h1>
								</div> 
								<div class="content-img item-news__img">
									<div class="pa1">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-news-footer.jpg" alt="CHUYÊN VISA MỸ- TỈ LỆ VISA CAO" class="fit-cover">
									</div>
								</div>
								<div class="content p-2 p-md-3 p-lg-4">
									<p>Nội dung đang cập nhật...</p>
								

									<div class="related_posts mt-4">
										<h3 class="mb-4">Bài viết liên quan</h3>
										<div class="list-news-re">
											<div class="row">
												<?php for($i = 0; $i < 3; $i++){?>
												<div class="col-6 col-lg-4 mb-3">
													<div class="item-news d-block">
														<a class="item-news__img d-block"  href="" title="BẢNG XẾP HẠNG 2020 THẠC SĨ KỸ THUẬT Ô TÔ TỐT NHẤT">
															<div class="pa1">
																<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-news-footer.jpg" alt="BẢNG XẾP HẠNG 2020 THẠC SĨ KỸ THUẬT Ô TÔ TỐT NHẤT" class="fit-cover">
															</div>
														</a>
														<div class="item-news__content mt-2">
															<h4>
																<a href="/" title="BẢNG XẾP HẠNG 2020 THẠC SĨ KỸ THUẬT Ô TÔ TỐT NHẤT" class="w-line w-two-line">
																	BẢNG XẾP HẠNG 2020 THẠC SĨ KỸ THUẬT Ô TÔ TỐT NHẤT
																</a>
															</h4>
														</div>
													</div>
												</div>
												<?php }?>
											</div>
										</div>
									</div>

									<div class="list-socal-share border-bottom-title text-center mt-4">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/share-socail.png" alt="">
									</div>
								</div>

								<div class="navigation-post">
									<ul class="d-flex flex-nowrap flex-column flex-md-row">
										<li class="col-12 col-md-6 p-md-3 p-2">
											<h5>
												<a href="/" title=" DU HỌC SINH ĐẮN ĐO Ở LẠI HAY VỀ VIỆT NAM">
													<span class="me-2 d-none d-md-inline"><?php echo svg('angle-left', '10', '') ?></span>
													<span>DU HỌC SINH ĐẮN ĐO Ở LẠI HAY VỀ VIỆT NAM</span>
												</a>
											</h5>
										</li>
										<li class="col-12 col-md-6 p-md-3 p-2">
											<h5>
												<a href="/" title="TRƯỜNG TRUNG HỌC WILLIAM ACADEMY">
													<span>TRƯỜNG TRUNG HỌC WILLIAM ACADEMY </span>
													<span class="ms-2  d-none d-md-inline"><?php echo svg('angle-right', '10', '') ?></span>
												</a>
											</h5>
										<li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xl-3">
							<?php get_template_part('template-parts/content-sidebar-news'); ?>
						</div>
					</dv>
				</div>
			</div>
		</section>
	</main>

	
<?php
get_footer();