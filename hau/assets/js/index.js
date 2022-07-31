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


// js new

$(function () {
  $('[data-bs-toggle="tooltip"]').tooltip()
})

// popup search and book
function searchPopup() {
  
    $(".btn-search").click(function() {
        $(".overlay").addClass("overlay-active");
        $("body").addClass("overlay-active");
        $(".box-search_header").addClass("active");
    });
  

    $('.box-search-close').click(function() {
        $(".overlay").removeClass("overlay-active");
        $("body").removeClass("overlay-active");
        $(".box-search_header").removeClass("active");
    })
  
}
searchPopup();

function SliderFullW(){
  $('.slide-fullw').flickity({
    "cellAlign": "left",
    "imagesLoaded": true,
    "lazyLoad": 1,
    "contain": true,
    "draggable": true,
    "prevNextButtons": true,
    "pageDots": true,
    "freeScroll": false,
    "groupCells": true,
    "autoPlay": 4000,
    "pauseAutoPlayOnHover" : true,
    "wrapAround":true
  });
}
SliderFullW();

function slidePartner(){
  $('.list-partner').flickity({
    "cellAlign": "left",
    "imagesLoaded": true,
    "lazyLoad": 1,
    "contain": true,
    "draggable": true,
    "prevNextButtons": true,
    "pageDots": true,
    "freeScroll": false,
    "groupCells": true,
    "autoPlay": 4000,
    "pauseAutoPlayOnHover" : true,
    "wrapAround":true
  });
}
slidePartner();