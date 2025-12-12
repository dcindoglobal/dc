<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Philosophy</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* HOVER ZONES */
        .philo-zone {
            position: absolute;
            width: 50%;
            height: 50%;
            z-index: 20;
        }

        /* BASE SLIDE STYLE */
        .philo-slide {
          
        }

        /* HOVER REVEAL */
        .philo-zone-top-left:hover ~ .philo-slide-A {
           
        }
        .philo-zone-top-right:hover ~ .philo-slide-B {
          
        }
        .philo-zone-bottom-left:hover ~ .philo-slide-C {
           
        }
        .philo-zone-bottom-right:hover ~ .philo-slide-D {
           
        }

        /* REMOVED FLOATING ANIMATION 
        .philo-slide:hover { animation: philo-float 3s ease-in-out infinite; }
        @keyframes philo-float { ... }
        */

        /* RESPONSIVE SCALE SYSTEM */
        .philo-wrapper {
            transform-origin: center;
            width: 100%;
            /* display: flex;
            justify-content: center; */
        }

        @media (min-width: 1280px) {
            .philo-wrapper { transform: scale(1); }
        }
        @media (max-width: 1279px) and (min-width: 768px) {
            .philo-wrapper { transform: scale(0.85); }
        }
        @media (max-width: 767px) and (min-width: 500px) {
            .philo-wrapper { transform: scale(0.65); }
        }
        @media (max-width: 499px) {
            .philo-wrapper { transform: scale(0.55); }
        }

       
    </style>
</head>

<body>
<section class="bg-white">
    <div class="container mx-auto px-4">

        <!-- HEADINGS -->
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Our Philosophy
            </h1>
            <p class="text-xl text-gray-600 mb-[5px]">
                GLOBAL STANDARDS. INDIAN GRIT.
            </p>
            <p class="text-lg text-gray-600 transition-all duration-500 hover:text-gray-800 max-w-4xl mx-auto">
                    We believe that world-class infrastructure begins with uncompromising quality and a deep understanding of local needs. At DC Indo Global, every product and project carries the strength of global benchmarks and the heart of Indian craftsmanship.
                </p>
        </div>

        <!-- MAIN INTERACTION SECTION -->
        <div class="philo-wrapper bg-white  min-h-screen">
            <div class=" w-full  flex items-center justify-center">

               

                <!-- ZONES -->
                <div class="philo-zone philo-zone-top-left top-0 left-0"></div>
                <div class="philo-zone philo-zone-top-right top-0 right-0"></div>
                <div class="philo-zone philo-zone-bottom-left bottom-0 left-0"></div>
                <div class="philo-zone philo-zone-bottom-right bottom-0 right-0"></div>


                <div class="transform scale-[1.2]">


                    <div class="flex-row mb-2">

                        <!-- SLIDE A -->
                        {{-- <div class="flex mb-2  items-center philo-slide philo-slide-A">
                            <div class="flex items-center">
                                <div class="w-[130px] h-[130px] bg-green-700 rounded-full flex items-center
                                            justify-center text-white text-3xl font-bold shadow-lg border-8 border-green-900 z-10">
                                    A
                                </div>
                                <div class="bg-green-700 text-white w-[500px] ml-[-110px] py-5 pl-[120px] pr-[80px]
                                            rounded-l-full shadow-lg">
                                    <h3 class="font-bold uppercase text-base">STRUCTURAL PRODUCTS</h3>
                                    <p class="text-[13px] leading-tight">
                                        Building Strong Foundations: Concrete, steel, and core materials designed to deliver strength, safety, and longevity in every build.
                                    </p>
                                </div>
                            </div>
                        </div> --}}

                        <!-- SLIDE B -->
                        {{-- <div class=" flex mb-2 items-center justify-end philo-slide philo-slide-B">
                            <div class="bg-sky-600 text-white w-[500px] mr-[-110px] py-3 pr-[120px] pl-[80px]
                                        rounded-r-full shadow-lg text-right">
                                <h3 class="font-bold uppercase text-base">LIFESTYLE PRODUCTS</h3>
                                <p class="text-[13px] leading-tight">
                                    Design Meets Functionality: From tiles and bath fittings to modular kitchens and electricals we blend beauty with performance for modern living.
                                </p>
                            </div>
                            <div class="w-[130px] h-[130px] bg-sky-600 rounded-full flex items-center justify-center
                                        text-white text-3xl font-bold shadow-lg border-8 border-sky-700 z-10">
                                B
                            </div>
                        </div> --}}


                    </div>


                    <!-- CENTER IMAGE -->
                   <a href="/products" class="z-10 block" style="margin-bottom: -547px; margin-top: -160px;">
    <img src="{{ asset('images/sliders/New Project.png') }}"
         class="w-[550px] h-[550px] object-contain rounded-full hover:scale-105 transition duration-300">
</a>

              
                <div class="">


                     <!-- SLIDE C -->
                    {{-- <div class=" flex mb-2 items-center philo-slide philo-slide-C">
                        <div class="w-[130px] h-[130px] bg-blue-600 rounded-full flex items-center justify-center
                                    text-white text-3xl font-bold shadow-lg border-8 border-blue-800 z-10">
                            C
                        </div>
                        <div class="bg-blue-600 text-white w-[550px] ml-[-110px] py-4 pl-[120px] pr-[150px]
                                    rounded-l-full shadow-lg">
                            <h3 class="font-bold uppercase text-base">SERVICES</h3>
                            <p class="text-[13px] leading-tight">
                                End-to-End Solutions: From project planning and execution to post-construction support, we deliver comprehensive services tailored to your needs.
                            </p>
                        </div>
                    </div> --}}

                    <!-- SLIDE D -->
                    {{-- <div class=" flex items-center justify-end philo-slide philo-slide-D">
                        <div class="bg-teal-600 text-white w-[520px] mr-[-110px] py-4 pr-[120px] pl-[80px]
                                    rounded-r-full shadow-lg text-right">
                            <h3 class="font-bold uppercase text-base">NETWORK & SUSTAINABILITY</h3>
                            <p class="text-[13px] leading-tight">
                                Nationwide Reach. Responsible Growth. Our expansive supply and manufacturing network spans across India, ensuring timely delivery and consistent quality wherever you build.
                            </p>
                        </div>
                        <div class="w-[130px] h-[130px] bg-teal-600 rounded-full flex items-center justify-center
                                    text-white text-3xl font-bold shadow-lg border-8 border-teal-800">
                            D
                        </div>
                    </div> --}}

                </div>


            </div>

                
               

            </div>
        </div>
    </div>
</section>

<!-- JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const zones = document.querySelectorAll('.philo-zone');
        const slides = document.querySelectorAll('.philo-slide');

        if ('ontouchstart' in window) {
            zones.forEach(zone => {
                zone.addEventListener('touchstart', function(e) {
                    e.preventDefault();

                    const zoneClass = [...this.classList]
                        .find(c => c.startsWith('philo-zone-'))
                        .replace('philo-zone-', '');

                    const slide = document.querySelector(`.philo-slide-${zoneClass.toUpperCase()}`);

                    slides.forEach(s => resetSlide(s));
                    activateSlide(slide, zoneClass);
                });
            });
        }

        function activateSlide(slide, zoneClass) {
            let transformMap = {
                "top-left": "translateX(40px) scale(1)",
                "top-right": "translateX(-40px) scale(1)",
                "bottom-left": "translate(40px,-30px) scale(1)",
                "bottom-right": "translate(-40px,-30px) scale(1)"
            };

            slide.style.transform = transformMap[zoneClass];
            slide.style.opacity = "1";
            slide.style.filter = "blur(0)";
        }

        function resetSlide(slide) {
            slide.style.transform = "";
            slide.style.opacity = "";
            slide.style.filter = "";
        }
    });
</script>

</body>
</html>
