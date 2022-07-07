$(function() {
    $(window).scroll(function(){
        $('.menuFadein01').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('menuscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.menuFadein02').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('menuscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.menuFadein03').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('menuscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.menuFadein04').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('menuscrollin');
            }
        })
    })
})
$(function() {
    $(window).scroll(function(){
        $('.menuFadein05').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > targetElement - windowHeight +400){
                $(this).delay(500).addClass('menuscrollin');
                $(".lunchContainar").delay(1500).addClass('lunchscrollin');
                $(".dinnerContainar").delay(1800).addClass('dinnerscrollin');
                $(".afternooonteaContainar").delay(2000).addClass('afternoonteascrollin');
                $(".lunchkaten").delay(600).animate({"width":"0%"},(300),function(){
                    $(".dinnerkaten").animate({"width":"0%"},(300),function(){
                        $(".afternoonteakaten").animate({"width":"0%"},(300),function(){
                            $(".lunchkaten").animate({"height":"0%"});
                            $(".dinnerkaten").animate({"height":"0%"});
                            $(".afternoonteakaten").animate({"height":"0%"});
                        });
                    });
                });
            };
        });
    });
});