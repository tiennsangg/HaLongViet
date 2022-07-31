<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hazo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php the_field('script_head', 'option'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="header">
		<div class="header-contact">
			<div class="container">
				<div class="s_container">

					<ul class="nav d-flex flex-wrap justify-content-center justify-content-lg-start">
						<li>
							<button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="180 Nguyễn Thị Minh Khai, P.Võ Thị Sáu, Q.3, TP.HCM">
								<a href="/" target="__blank">
								    <span> <i class="fas fa-map-marker-alt"></i> </span>
								    <span class="ms-1">TP.HCM</span>
							    </a>
							</button>
						</li>
						<li>
							<button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="phongvanduhoc2@gmail.com">
								<a href="mailto:phongvanduhoc2@gmail.com">
								    <span> <i class="fas fa-envelope"></i> </span>
								    <span class="ms-1">phongvanduhoc2@gmail.com</span>
							    </a>
							</button>
						</li>
						<li>
							<button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="090 8888 516 (Zalo, Viber, iMessage)">
								<a href="tel:090 8888 516">
								    <span style="display: inline-block; transform: rotate(90deg);"><i class="fa fa-phone" aria-hidden="true"></i> </span> 
								    <span class="ms-1">090 8888 516 (Zalo, Viber, iMessage)</span>
							    </a>
							</button>
						</li>
						<li>
							<button type="button" class="btn btn-alert d-none d-lg-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nhận thông báo">
								<a href="javascript:;" rel="nofollow">
								    <span> <i class="fas fa-envelope"></i> </span>
								    <span class="ms-1"> Nhận thông báo</span> 
								</a>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-top d-flex justify-content-between align-items-center py-2">
			<div class="container">
				<div class="s_container position-relative d-flex justify-content-between align-items-center">
					<div class="bar__mb d-lg-none d-flex align-items-center">
						<?php echo svg('menu', '30', '30') ?>
					</div>
					<div class="header__logo d-flex align-items-center">
						<?php 
						$custom_logo_id = get_theme_mod('custom_logo');
						$image = wp_get_attachment_image_src($custom_logo_id, 'full');
						printf(
							'
								<a href="%1$s" title="%2$s" class="header-sticky-logo"><img src="%3$s"></a>
							',
							get_bloginfo('url'),
							get_bloginfo('description'),
							$image[0]
						);
					?>
						<h2 class="ms-4 mb-0 d-none d-lg-block">QUICK VISA</h2>
					</div>
					<a href="javascript:;" rel="nofollow" class="btn-search d-lg-none" title="Search">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#b5cc3b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M17.5 17.5L13.875 13.875" stroke="#b5cc3b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</a>
					<div class="form-search box-search_header d-lg-block">
						<label for="" class="d-lg-none">Tìm Kiếm</label>
						<div class="box-search-close d-lg-none">
				            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15 1L1 15M1.00001 1L15 15" stroke="#b5cc3b" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
				        </div>
						<form method="get" class="searchform" action="" role="search">
							<div class="div-form position-relative d-flex form-group">
						   	   	<input type="text" class="search-field mb-0" name="s" value=""  placeholder="Tìm Kiếm..." autocomplete="off">
								<button type="submit">
									<?php echo svg('icon-search', '17', '17') ?>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="header__bottom d-flex align-items-center">
			<div class="container">
				<div class="s_container position-relative">
				<div class="menu-mobile d-lg-flex flex-column-reverse">
					<div class="menu-mobile-close d-lg-none">
						<svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8L8 16M8.00003 8L16 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</div>
					<div class="header__nav">
						<ul class="header-nav nav">
						<?php
							wp_nav_menu(array(
								'theme_location'  => 'menu-1',
								'container'       => '__return_false',
								'fallback_cb'     => '__return_false',
								'items_wrap'      => '%3$s',
								'depth'           => 2,

							));
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</div>
		
		<div class="overlay"></div>
	</header>
	
	
    <div class="overlay"></div>

	