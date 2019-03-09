(function($) {

    $(document).ready(function(){
        $('.menu-item-56 > a').addClass('tlacitko');
        $('.menu-item-78 > a').addClass('tlacitko');
    });

    $(window).scroll(function(){
        if ( ($(this).scrollTop() > 0) && ($(window).width() >= 730) ) {
            $('#menu').removeClass('menu-fixed').addClass('menu-scroll').fadeIn(1000);
            $('.sub-menu').css({'display' : 'none'});
            $('.menu-item-56').css('display', 'flex');
            $('.menu-item-78').css('display', 'flex');
            $('.menu-item-has-children').addClass('hidden');
        } else if( ($(this).scrollTop() >= 0) && ($(window).width() < 730) && (!$('#menu-menu').hasClass('hamburger-menu'))) {
            $('.menu-item-56').css('display', 'flex');
            $('.menu-item-78').css('display', 'flex');
        } else {
            $('#menu').removeClass('menu-scroll').addClass('menu-fixed').fadeIn(1000);
            $('.menu-item-has-children').removeClass('hidden');
            $('.menu-item-56').css('display', 'none');
            $('.menu-item-78').css('display', 'none');
        }
    });

    $('a.tlacitko').click(function(e) {
        let cil = $(this).attr('href');
        let menu = $('#menu');
        let rychlost = 1000;

        $("html, body").stop().animate(
            { scrollTop: $(cil).offset().top - menu.height() },
            rychlost);

        e.preventDefault();
    });

    $('li.menu-item-80').click(function() {
            $('#menu-menu > li:first-child').toggleClass('hamburger-menu-button-close');
            $('#menu-menu').toggleClass('hamburger-menu');
            if(!$('#menu-menu').hasClass('hamburger-menu')){
                $('.menu-item-56').css('display', 'flex');
                $('.menu-item-78').css('display', 'flex');
            }else{
                $('.menu-item-56').css('display', 'none');
                $('.menu-item-78').css('display', 'none');
            }
    });

    $('#menu-menu li.menu-item-has-children > a').click(function(e){
        e.preventDefault();
        $('ul.sub-menu').not($(this).parents()).slideUp(200);
        $(this).siblings('.sub-menu').slideToggle('slow');
        e.stopPropagation();
    });


    $('.sub-menu li:first-child').click(function(){
        event.preventDefault();
        $(this).parents('.sub-menu').first().slideToggle('fast');

    });

})( jQuery );