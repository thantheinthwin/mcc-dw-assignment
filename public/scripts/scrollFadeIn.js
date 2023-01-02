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