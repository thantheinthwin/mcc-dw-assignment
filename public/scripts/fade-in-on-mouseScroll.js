$(function(){
    $("#roadmap").css({opacity: "0"});
    $(window).scroll(function(){
        $("#roadmap").each(function(){
            var ePos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();

            if(scroll > ePos - windowHeight + windowHeight/5){
                $(this).animate({opacity: "25%"}, {duration: 1000, easing: 'swing'})
            }
        });
    });
});