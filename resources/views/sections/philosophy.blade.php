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
        }
        /* Base animation style */
        .slide {
            opacity: 0;
            transform: scale(0.9) rotate(0deg);
            filter: blur(4px);
            transition: all 0.8s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        /* On hover - reveal with rotation, slide and fade */
        .top-left:hover~.slide-A {
            transform: translateX(40px) scale(1);
            opacity: 1;
            filter: blur(0);
        }
        .top-right:hover~.slide-B {
            transform: translateX(-40px) scale(1);
            opacity: 1;
            filter: blur(0);
        }
        .bottom-left:hover~.slide-C {
            transform: translate(40px, -30px) scale(1);
            opacity: 1;
            filter: blur(0);
        }
        .bottom-right:hover~.slide-D {
            transform: translate(-40px, -30px) scale(1);
            opacity: 1;
            filter: blur(0);
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
    @media (min-width: 1280px) {
        .philosophy-wrapper { transform: scale(1); }
    }

    /* Tablets */
    @media (max-width: 1279px) and (min-width: 768px) {
        .philosophy-wrapper { transform: scale(0.85); }
    }

    /* Large Mobile */
    @media (max-width: 767px) and (min-width: 500px) {
        .philosophy-wrapper { transform: scale(0.65); }
    }

    /* Small Mobile */
    @media (max-width: 499px) {
        .philosophy-wrapper {
            transform: scale(0.55);
           
        }
    }

    /* Fix overflow container */
    .philosophy-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }
        
        
    </style>
</head>
<body>
    <!-- Our Philosophy Section -->
    <section class=" bg-white">
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
                <div class="relative w-full  h-[700px] flex items-center justify-center">
                    <!-- Center Image -->
                    <div class="absolute z-10 pointer-events-none">
                       <img src="{{ asset('images/sliders/New Project.png') }}" 
                                alt="Center Circle"
                                class="w-[550px] h-[550px] object-contain rounded-full">

                    </div>
                    
                    <!-- Invisible Hover Zones -->
                    <div class="zone top-left top-0 left-0"></div>
                    <div class="zone top-right top-0 right-0"></div>
                    <div class="zone bottom-left bottom-0 left-0"></div>
                    <div class="zone bottom-right bottom-0 right-0"></div>
                    
                    <!-- A - Structural Products -->
                   <div class="absolute top-[180px] left-0 flex items-center slide slide-A">
                    <a href="/products" class="flex items-center group">
                        <div class="w-[130px] h-[130px] bg-[#d4af37] rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#dbb845] z-10 group-hover:scale-105 transition">A</div>

                            <div class="bg-[#d4af37] text-white w-[500px] ml-[-110px] py-5 pl-[120px] pr-[80px] rounded-l-full shadow-lg group-hover:bg-[#c9a632] transition">
                                <h3 class="font-bold uppercase text-base">STRUCTURAL PRODUCTS</h3>
                                <p class="text-[13px] leading-tight">
                                    Building Strong Foundations: Concrete, steel, and core materials designed to deliver strength, safety, and longevity in every build.
                                </p>
                            </div>
                    </a>
                    </div>

                    
                    <!-- B - Lifestyle Products -->
                    <div class="absolute top-[180px] right-0 flex items-center justify-end slide slide-B">
                        <div
                            class="bg-[#25578f] text-white w-[500px] mr-[-110px] py-3 pr-[120px] pl-[80px] rounded-r-full shadow-lg text-right">
                            <h3 class="font-bold uppercase text-base">LIFESTYLE PRODUCTS</h3>
                            <p class="text-[13px] leading-tight">
                               Design Meets Functionality: From tiles and bath fittings to modular kitchens and electricals we blend beauty with performance for modern living.
                            </p>
                        </div>
                        <div
                            class="w-[130px] h-[130px] bg-[#25578f] rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#315b8b] z-10">
                            B
                        </div>
                    </div>
                    
                    <!-- C - Services -->
                    <div class="absolute bottom-[150px] left-0 flex items-center slide slide-C">
                        <div class="w-[130px] h-[130px] bg-[#25578f] rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#315b8b]  z-10">
                            C
                        </div>
                        <div
                            class="  bg-[#25578f]  text-white w-[550px] ml-[-110px] py-4 pl-[120px] pr-[150px] rounded-l-full shadow-lg">
                            <h3 class="font-bold uppercase text-base">SERVICES</h3>
                            <p class="text-[13px] leading-tight">
                                End-to-End Solutions: From project planning and execution to post-construction support, we deliver comprehensive services tailored to your needs.
                            </p>
                        </div>
                    </div>
                    
                    <!-- D - Network & Sustainability -->
                    <div class="absolute bottom-[150px] right-0 flex items-center justify-end slide slide-D">
                        <div class="bg-[#d4af37] text-white w-[520px] mr-[-110px] py-4 pr-[120px] pl-[80px] rounded-r-full shadow-lg text-right">
                            <h3 class="font-bold uppercase text-base">NETWORK & SUSTAINABILITY</h3>
                            <p class="text-[13px] leading-tight">
                                Nationwide Reach. Responsible Growth. Our expansive supply and manufacturing network spans across India, ensuring timely delivery and consistent quality wherever you build.
                            </p>
                        </div>
                        <div class="w-[130px] h-[130px] bg-[#d4af37]  rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg border-8 border-[#dbb845]  ">
                            D
                        </div>
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
            
            // Add event listeners for touch devices
            if ('ontouchstart' in window) {
                zones.forEach(zone => {
                    zone.addEventListener('touchstart', function(e) {
                        e.preventDefault();
                        const zoneClass = this.classList[1]; // Get 'top-left', 'top-right', etc.
                        const slide = document.querySelector(`.slide-${zoneClass.split('-')[1].toUpperCase()}`);
                        
                        // Toggle active state
                        if (slide.classList.contains('active')) {
                            slide.classList.remove('active');
                            resetSlide(slide);
                        } else {
                            // Remove active from all slides first
                            slides.forEach(s => {
                                s.classList.remove('active');
                                resetSlide(s);
                            });
                            
                            // Activate current slide
                            slide.classList.add('active');
                            activateSlide(slide, zoneClass);
                        }
                    });
                });
                
                // Close slides when clicking outside
                document.addEventListener('touchstart', function(e) {
                    if (!e.target.closest('.zone') && !e.target.closest('.slide')) {
                        slides.forEach(slide => {
                            slide.classList.remove('active');
                            resetSlide(slide);
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