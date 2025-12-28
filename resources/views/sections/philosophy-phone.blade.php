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
            width: 30%;
            height: 20%;
            z-index: 20;
            cursor: pointer;
        }

        /* CENTER IMAGE CONTAINER */
        .center-container {
            position: relative;
            z-index: 10;
        }

        /* RESPONSIVE SCALE SYSTEM */
        .philo-wrapper {
            transform-origin: center;
            width: 100%;
        }

        @media (min-width: 1280px) {
            .philo-wrapper { transform: scale(1.2); }
        }
        @media (max-width: 1279px) and (min-width: 768px) {
            .philo-wrapper { transform: scale(1); }
        }
        @media (max-width: 767px) and (min-width: 500px) {
            .philo-wrapper { transform: scale(1); }
        }
        @media (max-width: 499px) {
            .philo-wrapper { transform: scale(1); }
        }

        /* VISUAL ZONE INDICATORS (optional - can remove if not needed) */
        .zone-indicator {
            position: absolute;
            width: 50px;
            height: 50px;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }

        .philo-zone:hover ~ .center-container .zone-indicator {
            opacity: 0;
        }

        .zone-indicator-top-left {
            top: 0;
            left: 0;
            background: #d4af37;
            border-radius: 0 0 100% 0;
        }

        .zone-indicator-top-right {
            top: 0;
            right: 0;
            background: #25578f;
            border-radius: 0 0 0 100%;
        }

        .zone-indicator-bottom-left {
            bottom: 0;
            left: 0;
            background: #25578f;
            border-radius: 0 100% 0 0;
        }

        .zone-indicator-bottom-right {
            bottom: 0;
            right: 0;
            background: #d4af37;
            border-radius: 100% 0 0 0;
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
        <div class="philo-wrapper bg-white mt-12">
            <div class="w-full h-[400px] relative flex items-center justify-center">

                <!-- ZONES WITH LINKS -->
                <!-- Zone A (top-left): /products -->
                <a href="/products" class="philo-zone philo-zone-top-left top-12 left-16 rounded-full"></a>

                <!-- Zone B (top-right): /services -->
                <a href="/services" class="philo-zone philo-zone-top-right top-24 right-2 rounded-full"></a>

                <!-- Zone C (bottom-left): /resources -->
                <a href="/resources" class="philo-zone philo-zone-bottom-left bottom-24 left-0 rounded-full"></a>

                <!-- Zone D (bottom-right): /our-strength -->
                <a href="/our-strength" class="philo-zone philo-zone-bottom-right bottom-12 right-24 rounded-full"></a>

                <!-- CENTER IMAGE WITH VISUAL INDICATORS -->
                <div class="center-container" style="margin-bottom: 0px; margin-top: 0px;">
                    <!-- Zone Visual Indicators -->
                    <div class="zone-indicator zone-indicator-top-left"></div>
                    <div class="zone-indicator zone-indicator-top-right"></div>
                    <div class="zone-indicator zone-indicator-bottom-left"></div>
                    <div class="zone-indicator zone-indicator-bottom-right"></div>
                    
                    <!-- Center Image -->
                    <img src="{{ asset('images/sliders/New Project.png') }}"
                         alt="Center Circle"
                         class="w-[550px] h-[550px] object-contain rounded-full hover:scale-105 transition duration-300">
                </div>

            </div>
        </div>
    </div>
</section>

<!-- JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const zones = document.querySelectorAll('.philo-zone');
        
        // Add visual feedback on hover
        zones.forEach(zone => {
            zone.addEventListener('mouseenter', function() {
                const zoneClass = [...this.classList]
                    .find(c => c.startsWith('philo-zone-'))
                    .replace('philo-zone-', '');
                
                // Add visual feedback to corresponding indicator
                const indicator = document.querySelector(`.zone-indicator-${zoneClass}`);
                if (indicator) {
                    indicator.style.opacity = '0.5';
                }
            });
            
            zone.addEventListener('mouseleave', function() {
                const zoneClass = [...this.classList]
                    .find(c => c.startsWith('philo-zone-'))
                    .replace('philo-zone-', '');
                
                // Reset visual feedback
                const indicator = document.querySelector(`.zone-indicator-${zoneClass}`);
                if (indicator) {
                    indicator.style.opacity = '0.1';
                }
            });
        });

        // Mobile touch handling
        if ('ontouchstart' in window) {
            zones.forEach(zone => {
                zone.addEventListener('touchstart', function(e) {
                    // Prevent default to handle click manually
                    e.preventDefault();
                    
                    // Visual feedback
                    const zoneClass = [...this.classList]
                        .find(c => c.startsWith('philo-zone-'))
                        .replace('philo-zone-', '');
                    
                    const indicator = document.querySelector(`.zone-indicator-${zoneClass}`);
                    if (indicator) {
                        indicator.style.opacity = '0.7';
                        setTimeout(() => {
                            indicator.style.opacity = '0.1';
                        }, 300);
                    }
                    
                    // Navigate to link
                    window.location.href = this.href;
                });
            });
        }
    });
</script>

</body>
</html>