// About section animations
document.addEventListener('DOMContentLoaded', function() {
    gsap.utils.toArray('.about-section .floating-animation').forEach((element, i) => {
        gsap.to(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse"
            },
            opacity: 1,
            y: 0,
            duration: 1,
            delay: i * 0.2,
            ease: "power2.out"
        });
    });
});