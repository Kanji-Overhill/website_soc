$(window).on("scroll load",function () {
    if ($(window).scrollTop() > $("header").outerHeight()) {
        $('header figure img').addClass('md:h-6');
    } else{
        $('header figure img').removeClass('md:h-6');
    }
});

$('a.toggle-submenu,.new-submenu .Menu').on('mouseenter',function(){
    $('.new-submenu').fadeIn();
});

$('a.toggle-submenu,.new-submenu .Menu').on('mouseleave',function () {
    setTimeout(function(){
        if($('a.toggle-submenu:hover,.new-submenu .Menu:hover').length <= 0){
            $('.new-submenu').fadeOut();
        }
    },500);
});

$('#btn_menu_mobile').click(function(e) {
    e.preventDefault();
    $(this).addClass('hidden');
    $('#close_menu_mobile').removeClass('hidden');
    $('nav').fadeIn();
})

$('#close_menu_mobile').click(function(e) {
    e.preventDefault();
    $(this).addClass('hidden');
    $('#btn_menu_mobile').removeClass('hidden');
    $('nav').fadeOut();
})