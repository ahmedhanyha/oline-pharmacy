// sm_header Scripts

// open cart
$(".sm_header .top_header_content .cart_icon").click(function () { 
    $(".sm_header .top_header_content .cart_icon").toggleClass("active");
});
$(".sm_header .top_header_content .nav_bars").click(function () { 
    $(".side_nav").toggleClass("active");
    $(".overlay").fadeIn();
});


$('.overlay').click(function () {
    $(".side_nav").toggleClass("active");
    $(".overlay").fadeOut();
});




$('.home_slider .owl-carousel').owlCarousel({
    loop: true,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 1,
    margin: 0,
    stagePadding: 0,
    smartSpeed: 1200,
    autoplay: false,
    dots: false,
    autoHeight: false,
});
$('.categories .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 6,
    margin: 20,
    responsive:{
		0:{
			items:1
		},
		500:{
			items:2
		},
		650:{
			items:3
		},
		800:{
			items:5
		},
		1100:{
			items:6
		}
	},
    stagePadding: 0,
    smartSpeed: 1200,
    autoplay: false,
    dots: false,
    autoHeight: false,
});
$('.deals .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 5,
    margin: 20,
    responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		800:{
			items:4
		},
		1100:{
			items:5
		}
	},
    stagePadding: 0,
    smartSpeed: 1200,
    autoplay: false,
    dots: false,
    autoHeight: false,
});
$('.offers_item.first .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 1,
    margin: 0,
    stagePadding: 0,
    smartSpeed: 500,
    autoplayTimeout:8000,
    autoplay: true,
    dots: false,
    autoHeight: false,
});
$('.offers_item.second .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 1,
    margin: 0,
    stagePadding: 0,
    smartSpeed: 500,
    autoplayTimeout:3000,
    autoplay: true,
    dots: false,
    autoHeight: false,
});
$('.offers_item.last .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 1,
    margin: 0,
    stagePadding: 0,
    smartSpeed: 500,
    autoplayTimeout:5000,
    autoplay: true,
    dots: false,
    autoHeight: false,
});

$('.brands .owl-carousel').owlCarousel({
    loop: true,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 6,
    margin: 30,
    responsive:{
		0:{
			items:1
		},
		500:{
			items:2
		},
		650:{
			items:3
		},
		800:{
			items:5
		},
		1100:{
			items:6
		}
	},
    stagePadding: 0,
    smartSpeed: 1200,
    autoplay: false,
    dots: false,
    autoHeight: false,
});




$('.blog_item .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
    items: 1,
    margin: 0,
    stagePadding: 0,
    smartSpeed: 1000,
    autoplay: false,
    dots: false,
    autoHeight: false,
});






// offer counter Section At home Page


function updatecounter() {
	'use strict';
	let now = new Date();
	var mon = now.getMonth() + 1;
	console.log(mon);
	var year = now.getFullYear();
	if(mon == 12){
		mon = 0 ;
		year+=1
	}
	let offerDate = new Date(`${mon + 2} 1  ${year + 1}`);
	let dif = offerDate - now;
	let day = Math.floor(dif / 1000 / 60 / 60 / 24);
	let hour = Math.floor(dif / 1000 / 60 / 60) % 24;
	let minutes = Math.floor(dif / 1000 / 60) % 60;
	let seconds = Math.floor(dif / 1000) % 60;
	$('#day h2').text(() => (day < 10 ? '0' + day : day));
	$('#hour h2').text(hour < 10 ? '0' + hour : hour);
	$('#minutes h2').text(minutes < 10 ? '0' + minutes : minutes);
	$('#second h2').text(seconds < 10 ? '0' + seconds : seconds);
}
setInterval(updatecounter, 1000);