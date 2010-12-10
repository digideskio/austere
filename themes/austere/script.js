$(document).ready(function () {
    
    $('#page').css('min-height',$(window).height());

    $(window).resize(function(){
        $('#page').css('min-height',$(window).height());
    });

    if ($('#cart-form-products').length) {
        $('#cart-form-products th:contains("Qty")').css('color','#777777');
    }

});