<?php

/**
Template Name: Trang chi tiết hình ảnh
 */
get_header();
?>
	<main id="page_detail_image" class="content-main">
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
									<h1 class="border-bottom-title title-line-center title-main">Hình Phụ Huynh – Học Sinh</h1>
								</div> 
								<div class="content-img item-news__img mb-2 mb-md-0">
									<div class="pa1">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-image.jpg" alt="Hình Phụ Huynh – Học Sinh" class="fit-cover">
									</div>
								</div>
								<div class="content p-2 p-md-3 p-lg-4">
									<div class="list-lib-image">
										<div class="row">
											<?php for($i = 0; $i < 12; $i++){?>
											<div class="col-6 col-md-4  wow fadeInUp" data-wow-delay="0.5s">
												<a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-image.jpg" data-fancybox="list_image" class="item-news__img img-hover">
													<div class="pa1">
														<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-image.jpg" alt="Hình Phụ Huynh – Học Sinh" class="fit-cover">
													</div>
												</a>
											</div>
											<?php }?>
										</div>
									</div>
									
									<div class="related_posts mt-4">
										<h3 class="mb-4">Hình ảnh liên quan</h3>
										<div class="list-news-re">
											<div class="row">
												<?php for($i = 0; $i < 3; $i++){?>
												<div class="col-6 col-lg-4 mb-3">
													<div class="item-news d-block">
														<a class="item-news__img d-block"  href="" title="Hình Ảnh Visa">
															<div class="pa1">
																<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-image.jpg" alt="Hình Ảnh Visa" class="fit-cover">
															</div>
														</a>
														<div class="item-news__content mt-2">
															<h4>
																<a href="/" title="Hình Ảnh Visa" class="w-line w-two-line">
																	Hình Ảnh Visa
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
												<a href="/" title=" Du Học Úc">
													<span class="me-2 d-none d-md-inline"><?php echo svg('angle-left', '10', '') ?></span>
													<span>Du Học Úc</span>
												</a>
											</h5>
										</li>
										<li class="col-12 col-md-6 p-md-3 p-2">
											<h5>
												<a href="/" title="Hình ảnh đối tác">
													<span>Hình ảnh đối tác</span>
													<span class="ms-2 d-none d-md-inline"><?php echo svg('angle-right', '10', '') ?></span>
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