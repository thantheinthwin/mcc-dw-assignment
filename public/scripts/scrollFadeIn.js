// $(function (){
//     $(".roadmaps").css({opacity: "0"});
//     $(window).scroll(function(){
//         $(".roadmaps").each(function(){
//             var ePos = $(this).offset().top;
//             var scroll = $(window).scrollTop();
//             var windowHeight = $(window).height();

//             if(scroll > ePos - windowHeight + windowHeight/5){
//                 $(this).animate({opacity: "25%"}, {duration: 1000, easing: 'swing'})
//             }
//         });
//     });
// });

const roadmaps = document.querySelectorAll(".roadmaps");

const fadeInObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        entry.target.classList.toggle("fade-in", entry.isIntersecting);
        if(entry.isIntersecting) fadeInObserver.unobserve(entry.target);
    });
}, {
    rootMargin: '-15%'
});

roadmaps.forEach(roadmap => {
    fadeInObserver.observe(roadmap)
})