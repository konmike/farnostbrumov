(function($) {
    let sub = $('.sub-menu');
    if ($(window).width() < 895) {
        sub.addClass('animated fadeInDown');
    }
    else {
        sub.addClass('animated fadeInRight');
    }

    $('.menu-item-has-children').click(function() {
        $(this).children('.sub-menu:first').css({'display':'block'});
    });

    $('.sub-menu li:first-child').click(function() {
        $(this).parents('.sub-menu:first').slideToggle('fast');
    });

    $(document).on('click', 'a[href^="#"].smooth-scroll', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1000);
    });

    $(window).scroll(function() {
        var top_of_projects = $("#news").offset().top;
        var top_of_contact = $("#contact").offset().top;
        var bottom_of_projects = $("#news").offset().top + $("#news").outerHeight();
        var bottom_of_contact = $("#contact").offset().top + $("#contact").outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_projects) && (top_of_screen < bottom_of_projects)){
            $('#scroll-button').css('display', 'block');
            $('#down').css('display', 'inline-block');
        } else if((bottom_of_screen > top_of_contact) && (top_of_screen < bottom_of_contact)) {
            $('#scroll-button').css('display', 'block');
            $('#down').css('display', 'none');
        }else {
            $('#scroll-button').slideToggle('fast');
        }
    });

    $('.menu-item-7').click(function() {
        $('#menu-menu').toggleClass('menu--drop-down');
        /*if(!$('#menu-menu').hasClass('hamburger-menu')){
            $('.menu-item-56').css('display', 'flex');
            $('.menu-item-78').css('display', 'flex');
        }else{
            $('.menu-item-56').css('display', 'none');
            $('.menu-item-78').css('display', 'none');
        }*/
    });

})( jQuery );