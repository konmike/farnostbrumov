(function($) {

    $(window).scroll(function(){
        if ($(this).scrollTop() > 0) {
            $('#menu').removeClass('menu-fixed').addClass('menu-scroll').fadeIn(1000);
            $('.submenu').css({'opacity' : '0', 'z-index' : '-1'});
            $('.list-hidden').css('display', 'block');
            $('.list').addClass('hidden');
        } else {
            $('#menu').removeClass('menu-scroll').addClass('menu-fixed').fadeIn(1000);
            $('.list').removeClass('hidden');
            $('.list-hidden').css('display', 'none');
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

    $('#farnost').on('click', function() {
        hideShowSubMenu($('#submenu_f'));
    });

    $('#zivotfarnosti').on('click', function() {
        hideShowSubMenu($('#submenu_zf'));
    });

    $('.close').on('click', function() {
        closeSubMenu();
    });

    function hideShowSubMenu($param) {
        if(($param).css('opacity') === '1')
            $param.css({'opacity': '0', 'z-index':'-1'});
        else
            $param.css({'opacity':'1', 'z-index':'1'});
    }

    function closeSubMenu(){
        $('.submenu').css({'opacity' : '0', 'z-index' : '-1'});
    }

})( jQuery );