document.body.onload = function() {
    setTimeout(function(){
        var preloader = document.getElementById('page-preloader');
        if(!preloader.classList.contains('done')) {
            preloader.classList.add('done');
            document.body.classList.add('loaded');
        }
    }, 1000);
}

$(document).ready(function(){

    $('.menu-item-has-children > a').each(function () {
        $(this).after("<span class='submenu-expand-btn'></span>");
    });

	$('.header__menu-btn').on('click', function(){
        if ( $(this).hasClass('is-active') ) {
            $(this).removeClass('is-active');
            $('.header-controls-wrap').removeClass('is-active');
            $('body').addClass('loaded');
        } else {
            $(this).addClass('is-active');
            $('.header-controls-wrap').addClass('is-active');
            $('body').removeClass('loaded');
        }
    });

    $('.main-nav a').on('click', function(){
        $('.header__menu-btn').removeClass('is-active');
        $('body').addClass('loaded');
        $('.header-controls-wrap').removeClass('is-active');
    }); 

    $('.menu-item-has-children .submenu-expand-btn').on('click', function(e){
        e.preventDefault();
        if ( $(this).hasClass('is-active') ) {
          $(this).removeClass('is-active');
          $(this).next('.sub-menu').slideUp();
        } else {
          $(this).addClass('is-active');
          $(this).next('.sub-menu').slideDown();
        }
    });

    $('.staff-item .read-more-link').on('click', function(e){
        e.preventDefault();
        if ( $(this).hasClass('is-active') ) {
          $(this).removeClass('is-active');
          $(this).parents('.text').find('.hidden-part').slideUp();
        } else {
          $(this).addClass('is-active');
          $(this).parents('.text').find('.hidden-part').slideDown();
        }
    });

    jQuery(function() {
        AOS.init({
            once: true,
        });   
    });

});

function headerStuff(){
    if($(window).scrollTop()>1){
        $('.header').addClass('scrolled');
    }else{
        $('header').removeClass('scrolled');
    }
};

headerStuff();

$(window).scroll(function(){
    headerStuff();
});

$(window).on('resize', function(){
  
});