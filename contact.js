$(function() {
    $(window).scroll(function(){
        $('.contactFadein01').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.contactFadein02').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.contactFadein03').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.contactFadein04').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.contactFadein05').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.contactFadein06').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.contactFadein07').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.concactTextArea01').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +300){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.concactTextArea02').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +300){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.concactTextArea03').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +300){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.concactTextArea04').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +300){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.concactTextArea05').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('contactscrollin');
            }
        })
    })
})
$('.scrollUpButton').click(function(){
    $('.body,html').animate({scrollTop:0},500);//topへスクロール
    return false;
})