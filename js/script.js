(function($) {

    $(window).scroll(function(){
        if ($(this).scrollTop() > 0 && $(window).width() >= 730) {
            $('#menu').removeClass('menu-fixed').addClass('menu-scroll').fadeIn(1000);
            $('.sub-menu').css({'opacity' : '0', 'z-index' : '-1'});
            $('.menu-item-56').css('display', 'block');
            $('.menu-item-78').css('display', 'block');
            $('.menu-item-has-children').addClass('hidden');
        } else {
            $('#menu').removeClass('menu-scroll').addClass('menu-fixed').fadeIn(1000);
            $('.menu-item-has-children').removeClass('hidden');
            $('.menu-item-56').css('display', 'none');
            $('.menu-item-78').css('display', 'none');
        }
    });

    $('a.tlacitko').on('click', function(e) {
        let cil = $(this).attr('href');
        let menu = $('#menu');
        let rychlost = 1000;

        $("html, body").stop().animate(
            { scrollTop: $(cil).offset().top - menu.height() },
            rychlost);

        e.preventDefault();
    });

    $('li.menu-item-80').on('click', function() {
        if($('#menu-menu').hasClass('hamburger-menu')){
            $('li.menu-item-80').removeClass('hamburger-menu-button-close');
            $('#menu-menu').removeClass('hamburger-menu');
            $('.list-hidden').css('display', 'none');
        }else{
            $('.list-hidden').css('display', 'block');
            $('li.menu-item-80').addClass('hamburger-menu-button-close');
            $('#menu-menu').addClass('hamburger-menu');
        }
    });

    /*$('ul li > .sub-menu').parent().click(function() {
        var submenu = $(this).children('.sub-menu');
        if ( $(submenu).is(':hidden') ) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });*/


    $('li > ul.sub-menu').parent().click(function() {
        showSubMenu($(this).children('ul.sub-menu'));
    });

    $('ul.sub-menu > li:first-child').children().click(function() {
        hideSubMenu($(this).parent('ul.sub-menu'));
    });

    /*
    $('#menu-item-74').on('click', function() {
        showSubMenu($('#menu-item-74  > ul.sub-menu'));
    });

    $('#menu-item-75').on('click', function() {
        showSubMenu($('#menu-item-75  > ul.sub-menu'));
    });

    $('#menu-item-76').on('click', function() {
        showSubMenu($('#menu-item-76  > ul.sub-menu'));
    });

    $('#menu-item-77').on('click', function() {
        showSubMenu($('#menu-item-77  > ul.sub-menu'));
    });
    

    $('#menu-item-82').on('click', function() {
        hideSubMenu();
    });

    $('#menu-item-83').on('click', function() {
        hideSubMenu();
    });

    $('#menu-item-84').on('click', function() {
        hideSubMenu();
    }); */

    function showSubMenu($param) {
            $param.css({'opacity':'1', 'z-index':'1'});
    }

    function hideSubMenu(){
        $('.sub-menu').css({'opacity' : '0', 'z-index' : '-1'});
    }

})( jQuery );