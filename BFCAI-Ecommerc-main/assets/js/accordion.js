$(document).ready(function(){
    $('.accordion-content:first-of-type .accordion-content-desc').show();
    $('.accordion-content:first-of-type .accordion-content-title i').addClass('active');
    $('.accordion-content-title i').click(function () {
        if ($(this)[0].className =="accordion-content-title i active") {
            return 0;
        }else{
            $(this).toggleClass('fa-angle-down').toggleClass('fa-angle-up');
            $(this).parent().next().slideToggle();
        }
    });
});