$(document).ready(function () {
    
    $('#page').css('min-height',$(window).height());

    $(window).resize(function(){
        $('#page').css('min-height',$(window).height());
    });

    /*$('#block-uc_cart-0 .block-title').click(function(){
        location.href = '/shop/cart';
    });*/

});