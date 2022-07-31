<?php

/**
Template Name: Trang video
 */
get_header();
?>
	<main id="page_share_video" class="content-main">
		<h1 class="d-none">Chia sẻ du học sinh mỹ 2020</h1>

		<section class="section-content">
			<div class="container">
				<div class="s_container">
					<div class="row list-video">
						<?php for($i = 0; $i < 7; $i++){?>
						<div class="col-12 col-md-6 col-video wow fadeInUp" data-wow-delay="0.5s">
							<div class="item-video position-relative mb-4">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/LlHnB1PZPW4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<h2>
								<em>Chia sẻ của du học sinh Mỹ 2020</em>
							</h2>
						</div>
					    <?php }?>
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
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();