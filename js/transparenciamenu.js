$(document).ready(function(){
    $(window).on('scroll',function(){
        if($(window).scrollTop()>150){
            $('.sticky-top').addClass('colormenust')
        } else {
            $('.sticky-top').removeClass('colormenust')
        }
    })

});