<?php

/**
Template Name: Trang giới thiệu
 */
get_header();
?>
	<main id="page_aboutus" class="content-main">
		<h1 class="d-none">Giới thiệu</h1>

		<section class="section-content">
			<div class="container">
				<div class="s_container">
					<div class="slider-aboutus slide-fullw">
				        <?php for($i = 0; $i < 3; $i++){?>
							<div class="item-slide w-100">
								<div class="pa1">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-aboutus.jpg" alt="Du học mỹ" class="fit-cover">
								</div>			
							</div>
						<?php }?>
					</div>
					<div class="content py-3">
						<p>Nội dung đang cập nhật...</p>
					</div>
				</div>
			</div>
		</section>
	</main>


<?php
get_footer();
