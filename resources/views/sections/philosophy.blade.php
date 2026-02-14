<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Philosophy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .zone {
            position: absolute;
            width: 50%;
            height: 50%;
            z-index: 20;
            cursor: pointer;
        }
        /* Base animation style */
        .slide {
            opacity: 0;
            transform: scale(0.9) rotate(0deg);
            filter: blur(4px);
            transition: all 0.8s cubic-bezier(0.25, 0.8, 0.25, 1);
            pointer-events: none; /* Prevent clicks on hidden slides */
        }
        
        /* Show slides on hover - FIXED: Added direct hover on slide itself */
        .top-left:hover ~ .slide-A,
        .slide-A:hover,
        .slide-A.visible {
            transform: translateX(40px) scale(1);
            opacity: 1;
            filter: blur(0);
            pointer-events: auto; /* Enable clicks when visible */
        }
        
        .top-right:hover ~ .slide-B,
        .slide-B:hover,
        .slide-B.visible {
            transform: translateX(-40px) scale(1);
            opacity: 1;
            filter: blur(0);
            pointer-events: auto;
        }
        
        .bottom-left:hover ~ .slide-C,
        .slide-C:hover,
        .slide-C.visible {
            transform: translate(40px, -30px) scale(1);
            opacity: 1;
            filter: blur(0);
            pointer-events: auto;
        }
        
        .bottom-right:hover ~ .slide-D,
        .slide-D:hover,
        .slide-D.visible {
            transform: translate(-40px, -30px) scale(1);
            opacity: 1;
            filter: blur(0);
            pointer-events: auto;
        }
        
        /* Add a floating animation when visible */
        .slide:hover {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        /* 🔥 NEW FULL RESPONSIVE RESIZE SYSTEM */
        .philosophy-wrapper {
            transform-origin: center;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        /* Desktop – Normal scale */
        @media (min-width: 1600px) {
            .philosophy-wrapper { transform: scale(1); }
        }

        /* Laptop / Small Desktop */
        @media (max-width: 1599px) and (min-width: 1450px) {
            .philosophy-wrapper { transform: scale(1); }
        }

        /* Smaller Laptop */
        @media (max-width: 1449px) and (min-width: 1300px) {
            .philosophy-wrapper { transform: scale(0.75); }
        }

        /* Tablets / Small Laptops */
        @media (max-width: 1299px) and (min-width: 768px) {
            .philosophy-wrapper { transform: scale(0.7); }
        }

        /* Large Mobile */
        @media (max-width: 767px) and (min-width: 500px) {
            .philosophy-wrapper { transform: scale(0.65); }
            /* Make slides always visible on mobile */
            .slide {
                opacity: 1;
                transform: scale(1);
                filter: blur(0);
                pointer-events: auto;
            }
        }

        /* Small Mobile */
        @media (max-width: 499px) {
            .philosophy-wrapper {
                transform: scale(0.55);
            }
            /* Make slides always visible on mobile */
            .slide {
                opacity: 1;
                transform: scale(1);
                filter: blur(0);
                pointer-events: auto;
            }
        }

        /* Fix overflow container */
        .philosophy-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        
        /* Make zone links cover the entire area */
        .zone-link {
            display: block;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <!-- Our Philosophy Section -->
    <section class="bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 transition-all duration-500 hover:text-blue-700">
                    Our Philosophy
                </h1>
                <p class="text-xl text-gray-600 transition-all duration-500 hover:text-gray-800 mb-[5px]">
                    GLOBAL STANDARDS. INDIAN GRIT.
                </p>
                <p class="text-lg text-gray-600 transition-all duration-500 hover:text-gray-800 max-w-4xl mx-auto">
                    We believe that world-class infrastructure begins with uncompromising quality and a deep understanding of local needs. At DC Indo Global, every product and project carries the strength of global benchmarks and the heart of Indian craftsmanship.
                </p>
            </div>
          
            <div class="philosophy-wrapper bg-white flex justify-center items-center min-h-screen">
                <div class="relative w-full h-[700px] flex items-center justify-center">
                    <!-- Center Image -->
                    <div class="absolute z-10 pointer-events-none">
                       <img src="{{ asset('images/sliders/New Project.png') }}" 
                                alt="Center Circle"
                                class="w-[550px] h-[550px] object-contain rounded-full">
                    </div>
                    
                    <!-- Invisible Hover Zones WITHOUT LINKS - Links will be added via JavaScript -->
                    <div class="zone top-left top-0 left-0"></div>
                    <div class="zone top-right top-0 right-0"></div>
                    <div class="zone bottom-left bottom-0 left-0"></div>
                    <div class="zone bottom-right bottom-0 right-0"></div>
                    
                    <!-- A - Structural Products -->
                    <div class="absolute top-[180px] left-0 flex items-center slide slide-A">
                        <a href="/products" class="flex items-center group">
                            <div class="w-[130px] h-[130px] bg-[#d4af37] rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#dbb845] z-10 group-hover:scale-105 transition">A</div>
                            <div class="bg-[#d4af37] text-white w-[500px] ml-[-110px] py-5 pl-[120px] pr-[80px] rounded-l-full shadow-lg group-hover:bg-[#c9a632] transition">
                                <h3 class="font-bold uppercase text-base">Our Products</h3>
                                <p class="text-[13px] leading-tight">
                                    Building Strong Foundations: Concrete, steel, and core materials designed to deliver strength, safety, and longevity in every build.
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- B - Lifestyle Products -->
                    <div class="absolute top-[180px] right-0 flex items-center justify-end slide slide-B">
                        <a href="/products" class="flex items-center group">
                            <div class="bg-[#25578f] text-white w-[500px] mr-[-110px] py-3 pr-[120px] pl-[80px] rounded-r-full shadow-lg text-right group-hover:bg-[#1e4675] transition">
                                <h3 class="font-bold uppercase text-base">Our Services</h3>
                                <p class="text-[13px] leading-tight">
                                  End-to-End Solutions: From project planning and execution to post-construction support, we deliver comprehensive services tailored to your needs.
                                </p>
                            </div>
                            <div class="w-[130px] h-[130px] bg-[#25578f] rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#315b8b] z-10 group-hover:bg-[#1e4675] transition">
                                B
                            </div>
                        </a>
                    </div>
                    
                    <!-- C - Services -->
                    <div class="absolute bottom-[150px] left-0 flex items-center slide slide-C">
                        <a href="/services" class="flex items-center group">
                            <div class="w-[130px] h-[130px] bg-[#25578f] rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#315b8b] z-10 group-hover:bg-[#1e4675] transition">
                                C
                            </div>
                            <div class="bg-[#25578f] text-white w-[550px] ml-[-110px] py-4 pl-[120px] pr-[150px] rounded-l-full shadow-lg group-hover:bg-[#1e4675] transition">
                                <h3 class="font-bold uppercase text-base">Network & sustainability</h3>
                                <p class="text-[13px] leading-tight">
                                    Discover our partners, client success stories, and opportunities to collaborate with DC Indo Global through trusted vendor partnerships and long-term industry relationships.
                                </p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- D - Network & Sustainability -->
                    <div class="absolute bottom-[150px] right-0 flex items-center justify-end slide slide-D">
                        <a href="/services" class="flex items-center group">
                            <div class="bg-[#d4af37] text-white w-[520px] mr-[-110px] py-4 pr-[120px] pl-[80px] rounded-r-full shadow-lg text-right group-hover:bg-[#c9a632] transition">
                                <h3 class="font-bold uppercase text-base">Our Strength</h3>
                                <p class="text-[13px] leading-tight">
                                   Our strength lies in quality-driven execution, trusted partnerships, skilled professionals, and a customer-first approach that delivers consistent results across every project.
                                </p>
                            </div>
                            <div class="w-[130px] h-[130px] bg-[#d4af37] rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#dbb845] group-hover:bg-[#c9a632] transition">
                                D
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <script>
    // Our Philosophy Section Interactions
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize hover effects for philosophy section
        const zones = document.querySelectorAll('.zone');
        const slides = document.querySelectorAll('.slide');
        
        // Add click handlers to zones (simulate links)
        zones.forEach(zone => {
            zone.addEventListener('click', function(e) {
                const zoneClass = this.classList[1]; // Get 'top-left', 'top-right', etc.
                let url = '/products'; // default for A 
                
                // Determine URL based on zone
                if (zoneClass === 'bottom-left') {
                    url = '/resources'; // C connects to /resources
                } else if (zoneClass === 'bottom-right') {
                    url = '/our-strength'; // D connects to /our-strength
                } else if (zoneClass === 'top-right') {
                    url = '/services'; // B connects to /services
                }
                
                // Navigate to the URL
                window.location.href = url;
            });
            
            // Add mouseenter/mouseleave events to show/hide slides
            zone.addEventListener('mouseenter', function(e) {
                const zoneClass = this.classList[1];
                const slide = document.querySelector(`.slide-${zoneClass.split('-')[1].toUpperCase()}`);
                
                if (slide) {
                    slide.classList.add('visible');
                }
            });
            
            zone.addEventListener('mouseleave', function(e) {
                const zoneClass = this.classList[1];
                const slide = document.querySelector(`.slide-${zoneClass.split('-')[1].toUpperCase()}`);
                
                if (slide && !slide.matches(':hover')) {
                    slide.classList.remove('visible');
                }
            });
        });
        
        // Add mouseenter/mouseleave to slides themselves
        slides.forEach(slide => {
            slide.addEventListener('mouseenter', function() {
                this.classList.add('visible');
            });
            
            slide.addEventListener('mouseleave', function() {
                this.classList.remove('visible');
            });
            
            // Add click handlers for slide links
            const slideLink = slide.querySelector('a');
            if (slideLink) {
                // Update D slide link to /resources
                if (slide.classList.contains('slide-D')) {
                    slideLink.href = '/resources';
                }
            }
        });
        
        // Add event listeners for touch devices
        if ('ontouchstart' in window) {
            zones.forEach(zone => {
                zone.addEventListener('touchstart', function(e) {
                    e.preventDefault();
                    const zoneClass = this.classList[1];
                    const slide = document.querySelector(`.slide-${zoneClass.split('-')[1].toUpperCase()}`);
                    
                    // Toggle active state
                    if (slide.classList.contains('active')) {
                        slide.classList.remove('active');
                        slide.classList.remove('visible');
                    } else {
                        // Remove active from all slides first
                        slides.forEach(s => {
                            s.classList.remove('active');
                            s.classList.remove('visible');
                        });
                        
                        // Activate current slide
                        slide.classList.add('active');
                        slide.classList.add('visible');
                    }
                });
            });
            
            // Close slides when clicking outside
            document.addEventListener('touchstart', function(e) {
                if (!e.target.closest('.zone') && !e.target.closest('.slide')) {
                    slides.forEach(slide => {
                        slide.classList.remove('active');
                        slide.classList.remove('visible');
                    });
                }
            });
        }
        
        // Function to activate slide
        function activateSlide(slide, zoneClass) {
            switch(zoneClass) {
                case 'top-left':
                    slide.style.transform = 'translateX(40px) scale(1)';
                    break;
                case 'top-right':
                    slide.style.transform = 'translateX(-40px) scale(1)';
                    break;
                case 'bottom-left':
                    slide.style.transform = 'translate(40px, -30px) scale(1)';
                    break;
                case 'bottom-right':
                    slide.style.transform = 'translate(-40px, -30px) scale(1)';
                    break;
            }
            slide.style.opacity = '1';
            slide.style.filter = 'blur(0)';
        }
        
        // Function to reset slide
        function resetSlide(slide) {
            slide.style.transform = '';
            slide.style.opacity = '';
            slide.style.filter = '';
        }
    });
</script>
</body>
</html>