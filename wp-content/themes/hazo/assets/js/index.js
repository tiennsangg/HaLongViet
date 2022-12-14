(function ($) {
  window.onload = function () {
    $(document).ready(function () {
      menuMobile();
      backToTop();

    });
  };
})(jQuery);
new WOW().init();
function menuMobile() {
  if (
    $(".bar__mb").length ||
    $(".menu-mobile").length ||
    $(".overlay").length
  ) {
    $(".bar__mb").click(function () {
      $(".overlay").addClass("overlay-active");
      $(".menu-mobile").addClass("menu-mobile-active");
    });
    $(".overlay").click(function () {
      $(".overlay").removeClass("overlay-active");
      $(".menu-mobile").removeClass("menu-mobile-active");
      $(".box-search_header").removeClass("active");
    });
    $(".menu-mobile-close").click(function () {
      $(".overlay").removeClass("overlay-active");
      $(".menu-mobile").removeClass("menu-mobile-active");
    });
  }

  $(".menu-mobile ul li.menu-item-has-children>ul").before(
    `<span class="li-plus"></span>`
  );
  $(
    ".menu-mobile ul li.current-menu-parent.menu-item-has-children .li-plus"
  ).addClass("clicked");

  if ($(".li-plus").length) {
    $(".li-plus").click(function (e) {
      if ($(this).hasClass("clicked")) {
        $(this).removeClass("clicked").next("ul").slideUp(500);
      } else if ($(this).not(".clicked")) {
        $(".menu-mobile ul li > ul").slideUp(500);
        $(".li-plus").removeClass("clicked");
        $(this).addClass("clicked").next("ul").slideDown(500);
      } else if ($(this).parents().siblings("a").hasClass("clicked")) {
        $(".clicked").slideDown();
        $(".menu-mobile ul li > ul").slideUp(500);

        $(this).addClass("clicked").next("ul").slideDown(500);
      } else {
        $("#nav li a").removeClass("clicked").next("ul").slideUp(500);

        $(this).addClass("clicked").next("ul").slideDown(500);
      }
    });
  }
}

function backToTop() {
  var $backToTop = $(".back-to-top");
  $backToTop.hide();

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
      $backToTop.fadeIn();
    } else {
      $backToTop.fadeOut();
    }
  });

  $backToTop.on("click", function (e) {
    $("html, body").animate({ scrollTop: 0 }, 50);
  });
}

var setHeight = function setSameHeight(h, cl) {
  var h = 0;
  $(cl)
    .each(function () {
      if ($(this).outerHeight() > h) {
        h = $(this).outerHeight();
      }
    })
    .css({
      height: h,
    });
};

var productNameHeight = setHeight("av", ".product-item .product-name");


function duplicateSlides(cellSelector) {
  var $slides = $(cellSelector).clone();
  $slides.addClass("show-if-flickity-enabled");
  $(cellSelector).last().after($slides);
}

duplicateSlides(".corn-food .carousel-cell");

function slide_header() {
  $('.slide_div').flickity({
    cellAlign: 'left',
    contain: true,
    // autoPlay: 3000,
    wrapAround: true,
    freeScroll: false,// ???nh d???ng s??? ko b??? ?????t
    imagesLoaded: true, //c???n d??ng khi d??ng freescroll
    fade: true,
    pageDots: false,
    prevNextButtons: false,
    draggable: true,
  });
}
slide_header();

// Menu mobile
function menuMobile() {
  $(".header__bars").click(function () { //T??m class header__bar v?? b???t s??? ki???n click v??o class ???? t???o ra function
    $(".overlay").addClass("overlay-active");
    $(".menu-mobile").addClass("menu-mobile-active");
  });
  // show search
  $(".search-mobile").click(function () { //T??m class search-mobile-wrap v?? b???t s??? ki???n click v??o class ???? t???o ra function
    $(".overlay").addClass("overlay-active");
    $(".search-mobile-wrap").addClass("search-mobile-active");
  });
  // overlay remove
  $(".overlay").click(function () {
    $(".search-mobile-wrap").removeClass("search-mobile-active");
    $(".overlay").removeClass("overlay-active");
    $(".menu-mobile").removeClass("menu-mobile-active");
    $(".box-search_header").removeClass("active");
    $('.cart-quickview').removeClass('active');
    $('.product__sidebar').removeClass('active');
    $('.search__mobile').removeClass('active');

  });
  // icon close remove
  $(".menu-mobile-close").click(function () {
    $(".overlay").removeClass("overlay-active");
    $(".menu-mobile").removeClass("menu-mobile-active");
  });
  // search close remove
  $(".close-search").click(function () {
    $(".overlay").removeClass("overlay-active");
    $(".search-mobile-wrap").removeClass("search-mobile-active");
  });
  // $('.menu-mobile').show();    
  $(".menu-mobile ul li.menu-item-has-children>ul").before(`<span class="li-plus"></span>`);
  $(".menu-mobile ul li.current-menu-parent.menu-item-has-children .li-plus").addClass("clicked");
  // if ($(".li-plus").length) {
  $(".li-plus").click(function (e) {
    if ($(this).hasClass("clicked")) {
      $(this).removeClass('clicked').siblings('ul').slideUp(); //X??a class clicked bi???n tr??? th??nh c???ng, sibling(ul) c??ng c???p v???i th???ng ??ang ???n li-plus n?? add th??m slideUp ????? ????ng v??o 
    } else {
      $(this).parent().siblings('li').find('.li-plus').removeClass('clicked').find("ul").slideUp(); //
      $(this).parent().siblings().find("ul").slideUp();
      $(this).addClass('clicked').siblings('ul').slideDown();
    }
  });
  // }

}