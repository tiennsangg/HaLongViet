<?php

/**
Template Name: Trang hình ảnh
 */
get_header();
?>
	<main id="page_news" class="content-main">
		<section class="section-breacrum position-relative section-breacrum-main">
			<div class="content position-relative text-center">
				<div class="container">
					<div class="s_container">
						<h1 class="text-uppercase font-weight-bold">
							Category Archives:
							<span>HÌNH ẢNH</span>
						</h1>
						<div class="taxonomy-description">
							<p>Hình ảnh</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-content">
			<div class="container">
				<div class="s_container">
					<dv class="row row-15">
						<div class="col-12 col-lg-8 col-xl-9 mb-4 mb-md-5 mb-lg-0">
							<div class="list-news">
								<?php for($i = 0; $i < 10;$i++){?>
								<div class="item-news wow fadeInUp" data-wow-delay="0.5s">
									<a class="item-news__img d-block" href="/">
										<div class="row mx-0">
											<div class="col-12 col-md-5 px-0">
												<div class="pa1">
													<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-image.jpg" alt="Hình Phụ Huynh – Học Sinh" class="fit-cover">
												</div>
											</div>
											<div class="col-12 col-md-7 d-flex align-items-center justify-content-center p-3 py-md-1">
												<div class="item-news__content text-center">
													<h4 class="w-line w-two-line font-weight-bold mb-2 border-bottom-title title-line-center">Hình Phụ Huynh – Học Sinh</h4>
													<p class="w-line w-two-line mb-0"></p> 
												</div>
											</div>
										</div>
									</a>
								</div>
								<?php }?>
							</div>
							<div class="nav-pagination mt-4">
								<ul class="page-numbers nav-pagination links text-center">
									<li>
										<a class="page-number" href="/">1</a>
									</li>
									<li>
										<span aria-current="page" class="page-number current">2</span>
									</li>
								</ul>
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