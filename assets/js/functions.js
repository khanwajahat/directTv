// sticky header
/*$(window).scroll(function() {    
var scroll = $(window).scrollTop();
//>=, not <=
if (scroll >= 300) {
//clearHeader, not clearheader - caps H
$("header").addClass("stickyheader");
} else {
$("header").removeClass("stickyheader");  
}#phone-country,#phone-coun
});*/
// sticky header end

// wow start
new WOW().init();
// wow end

// sticky social
$(document).scroll(function () {
	"use strict";
    var y = $(this).scrollTop();
    if (y > 200) {
        $('.sticky-container').fadeIn();
    } else {
        $('.sticky-container').fadeOut();
    }

    if (y >= 70) {
        $(".header-main").addClass("fixed");
    } else {
        $(".header-main").removeClass("fixed");
    } 

}); 
// sticky social end

// GOTO by Scroll
// function goToByScroll(e){$("html,body").animate({scrollTop:$(e).offset().top},1e3,"",function(){$(this).stop(true,true)})}

// $(function() {
//   $('a[href*="#"]:not([href="#"])').click(function() {
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//       if (target.length) {
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1500);
//         return false;
//       }
//     }
//   });
// });


$(document).ready(function() {
"use strict";






// Active Current Page
var str=location.href.toLowerCase();
$(".nav-area-full a").each(function() {
if (str.indexOf(this.href.toLowerCase()) > -1) {
$(".active").removeClass("active");
$(this).parent().addClass("active");
}
});	
// Active Current Page end


   //*****************************
    // Mobile Navigation
    //*****************************
    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
    });   

    $('.firstlevel li a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).siblings('ul').slideUp();
        }else{
            $('.firstlevel li a').removeClass('active');
            $(this).addClass('active');
            $('.dropdown').slideUp();
            $(this).siblings('ul').slideDown();
        }
    });

    $('.mainnav > li > a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).parents('li').children('.firstlevel').slideUp();
        }else{
            $(this).addClass('active');
            $(this).parents('li').children('.firstlevel').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.firstlevel').slideUp();
        }
    }); 
 

$(".cs-slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    adaptiveHeight: true
    
    });

////// main slider
 $(".home-slider").slick({
    dots: true,
    arrows: true,
    infinite: !0,
    speed: 1000,
    slidesToShow: 1,
    autoplay: !0,
    autoplaySpeed: 4000,
    adaptiveHeight: !0,
    responsive: [
    {
      breakpoint: 767,
      settings: {
    dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
    });

// progress bar
 var time = 4;
 var $bar, $slick, isPause, tick, percentTime;
$slick = $('.home-slider'); 
$bar = $('.slider-progress .progress');   
$('.slider-wrapper').on({
mouseenter: function() { isPause = true; },
mouseleave: function() { isPause = false; }
});
 function startProgressbar() { resetProgressbar(); percentTime = 0; isPause = false; tick = setInterval(interval, 10); }
  function interval() {
    if(isPause === false) { percentTime += 1 / (time+0.1); $bar.css({ width: percentTime+"%" }); if(percentTime >= 100)
        { $slick.slick('slickNext'); startProgressbar(); }
    }
  }
function resetProgressbar() { $bar.css({ width: 0+'%' }); clearTimeout(tick); }
startProgressbar();  
////// main slider end

////// number slider
 var slickOpts = {
    dots: true,
    arrows: true,
    infinite: !0,
    speed: 1000,
    slidesToShow: 1,
    autoplay: !0,
    autoplaySpeed: 4000,
    adaptiveHeight: !0,
    prevArrow: $('.prev-btn'),
    nextArrow: $('.next-btn'),

    customPaging: function(slick,index) {
        return '<a> 0' + (index + 1) + '</a>';
    }
  };

  $('.number-slider').slick(slickOpts);
////// number slider end

////// mob slider
    $(".sliderxs").slick({
        arrows: false,
        dots: true,
        autoplay: true,
		adaptiveHeight: true,
        responsive: [
            {
              breakpoint: 10000,
              settings: "unslick"
            },
            {
              breakpoint: 767,
              settings: {
                unslick: true
              }
            }
        ]
    });
////// mob slider end


// $(".package-slider").slick({
//         dots: true,
//         arrows: false,
//         infinite: false,
//         speed: 600,
//         autoplay: true,
//         autoplaySpeed: 2000,
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         adaptiveHeight: true,
//     responsive: [
//             {
//                 breakpoint: 991,
//                 settings: {
//                     slidesToShow: 2,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 767,
//                 settings: {
//                     slidesToShow: 1,
//                     slidesToScroll: 1
//                 }
//             }
//         ]
//     }); 



////// testimonial slider
$(".testimonials-slider-main").slick({
  dots: true,
  arrows: true,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  //fade: true,
  //cssEase: 'linear',    
    });  
////// testimonial slider end

//*****************************
    // Responsive Slider
    //*****************************
    var respsliders = {
      1: {slider : '.packslider'},
      2: {slider : '.boxwrap'}
      


    };

    //*****************************
    // Function for Responsive Slider 767
    //*****************************

    $.each(respsliders, function() {

        $(this.slider).slick({
            arrows: false,
            dots: false,
            autoplay: true,
            settings: "unslick",
            responsive: [
                {
                  breakpoint: 2000,
                  settings: "unslick"
                },
                {
                    breakpoint: 767,
                    settings: {
                        unslick: true
                    }
                }
            ]
        });
    });  

////// product gallery slider
$(".product-slider-gallery").slick({
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 800,
  autoplay: true,
  autoplaySpeed: 3000,
  //fade: true,
  //cssEase: 'linear',    
   asNavFor: '.product-gallery-nav'
    });  
$('.product-gallery-nav').slick({
  dots: false,
  arrows: true,  
  slidesToShow: 4,
  slidesToScroll: 1,
  speed: 800,
  autoplay: true,
  autoplaySpeed: 3000,
  vertical:true,
  verticalSwiping:true,
  focusOnSelect: true,
  //centerMode: true,
  asNavFor: '.product-slider-gallery',
  responsive: [
      {
      breakpoint: 991,
      settings: {
      vertical:false,
      }
    },
    {
    breakpoint: 776,
    settings: {
     vertical:false,
    }
  },
    {
      breakpoint: 480,
      settings: {
        vertical:false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
]
}); 
////// product gallery slider end





$('.thumb-slider').slick({
centerMode: true,
centerPadding: '0px',
arrows: true,
slidesToShow: 3,
slidesToScroll: 1,
responsive: [
{
breakpoint: 768,
settings: {
arrows: false,
dots:false,
centerMode: true,
centerPadding: '10px',
slidesToShow: 3
}
},
{
breakpoint: 767,
settings: {
arrows: false,
dots:false,
centerMode: false,
centerPadding: '10px',
slidesToShow: 1
}
},
{
breakpoint: 480,
settings: {
arrows: false,
dots:false,
centerMode: true,
centerPadding: '10px',
slidesToShow: 1
}
}
]
});

///// gallery simple
$('.slider-for').slick({
dots: true,
arrows:false,
infinite: true,
speed: 500,
slide: 'li',
fade: false,
cssEase: 'linear',
centerMode: true,
slidesToShow: 1,
variableWidth: true,
autoplay: true,
autoplaySpeed: 4000,
responsive: [{
	breakpoint: 800,
	settings: {
		arrows: false,
		centerMode: false,
		centerPadding: '40px',
		variableWidth: false,
		slidesToShow: 1,
		dots: true
	},
	breakpoint: 1200,
	settings: {
		arrows: false,
		centerMode: false,
		centerPadding: '40px',
		variableWidth: false,
		slidesToShow: 1,
		dots: true
	}
}],
customPaging: function (slider, i) {
	return '<button class="tab">' + $('.thumbsmain li:nth-child(' + (i + 1) + ')').html() + '</button>';
}
});
///// gallery simple end

////// gallery slider
$(".gallery-slider-main").slick({
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 2000,
  fade: true,
  cssEase: 'linear',    
   asNavFor: '.gallery-nav-main'
    });  
$('.gallery-nav-main').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  //vertical:true,
  asNavFor: '.gallery-slider-main',
  dots: true,
  //centerMode: true,
  focusOnSelect: true
});	
////// gallery slider end



////// thumb gallery slider
$(".bid-slider-gallery").slick({
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 800,
  autoplay: true,
  autoplaySpeed: 3000,
  //fade: true,
  //cssEase: 'linear',    
   asNavFor: '.bid-gallery-nav'
    });  
$('.bid-gallery-nav').slick({
  dots: false,
  arrows: false,  
  slidesToShow: 5,
  slidesToScroll: 5,
  speed: 800,
  autoplay: true,
  autoplaySpeed: 3000,
  vertical:true,
  focusOnSelect: true,
  //centerMode: true,
  asNavFor: '.bid-slider-gallery',
  responsive: [
{
breakpoint: 767,
settings: {
 vertical:false,
}
}
]
});

// my custom slider starts

// $(".partner-slider").slick({
//     dots: false,
//     arrows: false,
//     infinite: true,
//     speed: 600,
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     responsive: [{
//         breakpoint: 991,
//         settings: {
//             slidesToShow: 2,
//             slidesToScroll: 1
//         }
//     }, {
//         breakpoint: 767,
//         settings: {
//             slidesToShow: 1,
//             slidesToScroll: 1
//         }
//     }]
// });

//*****************************
    // Tabbing 
    //*****************************
    
    $('[data-targetit]').on('click',function () {
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        var target = $(this).data('targetit');
        $('.'+target).siblings('[class^="tabs"]').removeClass('current');
        $('.'+target).addClass('current');
    });


////// thumb gallery slider end

////// tabs generic (nav and tabs in main div)
$('.tab-custom .tab-custom-nav a').click(function(event){
$(this).closest('li').siblings('li').children('a').removeClass('current');
$(this).addClass('current');
$(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
$(this.hash).show();
event.preventDefault();
$('.sliderxs').slick('setPosition');
});
////// tabs generic end

////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-nav a').click(function(event){
$(this).closest('li').siblings('li').children('a').removeClass('current');
$(this).addClass('current');
$(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
$(this.hash).show();
event.preventDefault();
$('.sliderxs').slick('setPosition');
});
////// tabs custom end

////// Accordion 
$('.accordion .quest-title.active1').addClass('active');
// $('#accordion-1').slideDown(300).addClass('open');
function close_accordion_section() {
jQuery('.accordion .quest-title').removeClass('active');
jQuery('.accordion .quest-content').slideUp(300).removeClass('open');
}
jQuery('.quest-title').click(function(e) {
// Grab current anchor value
var currentAttrValue = jQuery(this).attr('href');
if(jQuery(e.target).is('.active')) {
close_accordion_section();
}else {
close_accordion_section();
// Add active class to section title
jQuery(this).addClass('active');
// Open up the hidden content panel
jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
}
e.preventDefault();
});
////// Accordion end 

////// fancybox
$('[data-fancybox="swf-file"]').fancybox({
	iframe : {
		css : {
			width : '336px',
			height : '280px'
		}
	}
});

$('[data-fancybox="video-file"]').fancybox({
	iframe : {
		css : {
			width : '580px',
			height : '340px'
		}
	}
});		
////// fancybox end

// intel Tel Input

 $("#phone-country,#phone-coun").intlTelInput({
     
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
   geoIpLookup: function(callback) {
  $.ajax({
      url: 'https://telize-v1.p.mashape.com/geoip',
      type: 'GET',
      data: {},
      dataType: 'json',
      success: function (data) {
        var countryCode = (data && data.country_code) ? data.country_code : "";
        $('input[type=pc]').val(countryCode);
       
        callback(countryCode);
      },
      error: function (err) {
        //alert("")
      },
      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-Mashape-Authorization", "qKsg8tYMdTmshjZ0eSZznAWBhwOFp1huvy7jsnNg3rhw4x8SGD"); // Enter here your Mashape key
      }
    }); 
     },
       initialCountry: "auto",
       nationalMode: true,
       separateDialCode: true,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
     // utilsScript: "assets/js/utils.js"
    });

setTimeout(function(){
    $('input[name="ctry"]').val($('.selected-dial-code').text());
    $('input[name="pc"]').val( $('.country-list .country.active .country-name').text());
}, 3000);

$('body').delegate('.country','click',function(){
$('input[name="pc"]').val($(this).find('.dial-code').text());

var oldString2=$('.selected-flag').attr('title').toUpperCase();
  var newString12 = oldString2.split(':',1)[0];
               $('input[name="ctry"]').val(newString12);
 });



// car scroll top
var $scrolltop = jQuery('.car-top');
jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() >= 200) {
        $scrolltop.addClass("show");
        $scrolltop.addClass("car-down");
    } else {
        $scrolltop.removeClass("show");
        setTimeout(function() {
            $scrolltop.removeClass('car-down');
        }, 300);
    }
});
$scrolltop.on('click', function() {
jQuery('html,body').animate({
    scrollTop: 0
}, 800);
jQuery(this).addClass("car-run");
setTimeout(function() {
    $scrolltop.removeClass('car-run');
}, 1000);
return false;
});
// car scroll top end

}); // document ready end
 
 ////// slick gallery counter
var $gallery = $('.gallery-slider-main');
var slideCount = null;

$gallery.on('init', function(event, slick){
	"use strict";
  slideCount = slick.slideCount;
  setSlideCount();
  setCurrentSlideNumber(slick.currentSlide);
});

$gallery.on('beforeChange', function(event, slick, currentSlide, nextSlide){
	"use strict";
  setCurrentSlideNumber(nextSlide);
});

function setSlideCount() {
	"use strict";
  var $el = $('.slide-count-wrap').find('.total');
  $el.text(slideCount);
}

function setCurrentSlideNumber(currentSlide) {
	"use strict";
  var $el = $('.slide-count-wrap').find('.current');
  $el.text(currentSlide + 1);
}
////// slick gallery counter end
 

// validate contact form on keyup and submit
    $("#banform").validate({
      rules: {
        username: {
          required: true,
          minlength: 2
        },
        email: {
          required: true,
          email: true
        },
        agree: "required"
      },
      messages: {
        username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        email: "Please enter a valid email address"
      }
    });

    $("#contactForm").validate();



////// footer year
$(function(){
"use strict";
var theYear = new Date().getFullYear();
$('#year').html(theYear);
});	




$(function(){
//Slim Scroller
    
        $.mCustomScrollbar.defaults.theme="light-1"; //set "light-2" as the default theme
        $(".list-scroll").mCustomScrollbar({
            scrollButtons:{
                enable:true
            },
            callbacks:{
                onTotalScroll:function(){ addContent(this) },
                onTotalScrollOffset:100,
                alwaysTriggerOffsets:false
            }
        });

    
}); 