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
    $(".side_nav").removeClass("active");
    $(".overlay").fadeOut();
});

// open side filters
$(".toolbar .open_filters").click(function () { 
    $(".shop .filters").toggleClass("active");
    $(".overlay").fadeIn();
});


$('.overlay').click(function () {
    $(".shop .filters").removeClass("active");
    $(".overlay").fadeOut();
});






$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 150,
      max: 550,
      values: [ 150, 550 ],
      slide: function( event, ui ) {
        $( "#amount" ).val(ui.values[ 0 ]);
        $( "#amount2" ).val(ui.values[ 1 ]);
    },
    });
    $( "#amount" ).val($("#slider-range" ).slider( "values", 0 ));
    $( "#amount2" ).val($("#slider-range" ).slider( "values", 1 ));
  });


$('#slider-range').on( "click",function (e) { 
    priceStart =  ($('#amount').val());
    priceEnd =  ($('#amount2').val());
    console.log(priceStart);
    console.log(priceEnd);
});