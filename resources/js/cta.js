// CTA section animations
document.addEventListener('DOMContentLoaded', function() {
    gsap.to('.cta-section', {
        scrollTrigger: {
            trigger: '.cta-section',
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse"
        },
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power2.out"
    });
});