<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Section</title>
    <!-- Tailwind CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary-blue: #0A2540;
            --secondary-blue: #1E3A5F;
            --accent-gold: #D4AF37;
            --light-gold: #F4C542;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920');
            background-size: cover;
            background-position: center;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .shadow-3xl {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .top-bar {
            background: linear-gradient(90deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
        }

        .header-main {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            position: relative;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--accent-gold);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-gold);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-blue);
        }

        .logo-subtext {
            font-size: 0.75rem;
            color: #666;
            letter-spacing: 1px;
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Custom Owl Carousel Navigation */
        #services-carousel .owl-nav {
            position: absolute;
            top: -60px;
            right: 0;
            display: flex;
            gap: 10px;
        }

        #services-carousel .owl-nav button {
            background: #D4AF37 !important;
            color: #0A2540 !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex !important;
            align-items: center;
            justify-content: center;
            font-size: 20px !important;
            transition: background 0.3s;
        }

        #services-carousel .owl-nav button:hover {
            background: #ffffff !important;
        }

        #services-carousel .owl-nav button span {
            display: none;
        }

        #services-carousel .owl-nav button.owl-prev::before {
            content: "\f053";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }

        #services-carousel .owl-nav button.owl-next::before {
            content: "\f054";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }

        /* Card Styles */
        .service-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .service-card .image-container {
            height: 200px;
            background-size: cover;
            background-position: center;
            opacity: 0.6;
            transition: opacity 0.5s, transform 0.5s;
            border-radius: 0.75rem;
        }

        .service-card:hover .image-container {
            opacity: 0.8;
            transform: scale(1.05);
        }

        /* Unique Background Images */
        .construction-service .image-container {
            background-image: url('https://images.pexels.com/photos/3184438/pexels-photo-3184438.jpeg?auto=compress&cs=tinysrgb&w=600');
        }

        .real-estate-service .image-container {
            background-image: url('https://images.pexels.com/photos/323705/pexels-photo-323705.jpeg?auto=compress&cs=tinysrgb&w=600');
        }

        .property-management-service .image-container {
            background-image: url('https://images.pexels.com/photos/4386397/pexels-photo-4386397.jpeg?auto=compress&cs=tinysrgb&w=600');
        }

        .architecture-service .image-container {
            background-image: url('https://images.pexels.com/photos/373894/pexels-photo-373894.jpeg?auto=compress&cs=tinysrgb&w=600');
        }

        .mining-logistics-service .image-container {
            background-image: url('https://images.pexels.com/photos/373965/pexels-photo-373965.jpeg?auto=compress&cs=tinysrgb&w=600');
        }

        /* Accessibility focus styles */
        .service-card a:focus {
            outline: 2px solid #D4AF37;
            outline-offset: 2px;
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {
            .service-card .image-container {
                height: 150px;
            }
        }

        /* Floating WhatsApp Button Styling */
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #25D366; /* WhatsApp green */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.2s ease;
            z-index: 1000;
        }
        .whatsapp-btn:hover {
            transform: scale(1.1);
        }
        .whatsapp-icon {
            width: 35px;
            height: 35px;
            fill: white;
        }
    </style>
</head>

<body>


    @extends('layouts.app')

@section('title', 'Home - DC Indo Global')

@section('content')


   


  

<!-- Services Section -->
<section id="services-section" class="py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">OUR SERVICES</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Comprehensive Construction Solutions
            </h3>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                From residential to industrial, we provide end-to-end construction services
            </p>
        </div>

        <!-- Owl Carousel -->
        <div id="services-carousel" class="owl-carousel owl-theme relative">

            <!-- Card 1 -->
            <div class="service-card flex flex-col p-6 rounded-xl overflow-hidden group border border-white/10 bg-gradient-to-br from-[#0A2540] to-[#1E3A5F] backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                <div class="image-container w-full h-48 overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg" alt="Architecture & Interior Design" class="w-full h-full object-cover">
                </div>
                <div class="relative z-10 mt-4 flex flex-col items-start flex-1">
                    <div class="w-16 h-16 bg-[#D4AF37] rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-pencil-ruler text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Architecture & Interior Design</h4>
                    <p class="text-gray-300 text-sm mb-4 flex-1">
                      Creative architectural and interior design solutions crafted around the client’s vision. We blend innovation, functionality, and aesthetic excellence to shape spaces that truly stand out.
                    </p>
                    <a href="/contact" class="px-4 py-2 bg-[#D4AF37] text-[#0A2540] font-semibold rounded-lg hover:bg-yellow-500 transition-all duration-300">
                        Know More
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="service-card flex flex-col p-6 rounded-xl overflow-hidden group border border-white/10 bg-gradient-to-br from-[#0A2540] to-[#1E3A5F] backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                <div class="image-container w-full h-48 overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/34457267/pexels-photo-34457267.jpeg" alt="Real Estate Development" class="w-full h-full object-cover">
                </div>
                <div class="relative z-10 mt-4 flex flex-col items-start flex-1">
                    <div class="w-16 h-16 bg-[#D4AF37] rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-building text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Real Estate Development</h4>
                    <p class="text-gray-300 text-sm mb-4 flex-1">
                      End-to-end planning, development, and management of modern commercial and residential spaces. We create thoughtfully designed projects that balance functionality, aesthetics, and long-term value.
                    </p>
                    <a href="/contact" class="px-4 py-2 bg-[#D4AF37] text-[#0A2540] font-semibold rounded-lg hover:bg-yellow-500 transition-all duration-300">
                        Know More
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="service-card flex flex-col p-6 rounded-xl overflow-hidden group border border-white/10 bg-gradient-to-br from-[#0A2540] to-[#1E3A5F] backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                <div class="image-container w-full h-48 overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/8293646/pexels-photo-8293646.jpeg" alt="Construction Services" class="w-full h-full object-cover">
                </div>
                <div class="relative z-10 mt-4 flex flex-col items-start flex-1">
                    <div class="w-16 h-16 bg-[#D4AF37] rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-hard-hat text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Construction Services (EPC Contractor)</h4>
                    <p class="text-gray-300 text-sm mb-4 flex-1">
                      Comprehensive EPC contracting for residential, commercial, and industrial developments. From engineering to execution, we deliver turnkey projects with precision, efficiency, and uncompromised quality.
                    </p>
                    <a href="/contact" class="px-4 py-2 bg-[#D4AF37] text-[#0A2540] font-semibold rounded-lg hover:bg-yellow-500 transition-all duration-300">
                        Know More
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="service-card flex flex-col p-6 rounded-xl overflow-hidden group border border-white/10 bg-gradient-to-br from-[#0A2540] to-[#1E3A5F] backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                <div class="image-container w-full h-48 overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/7415036/pexels-photo-7415036.jpeg" alt="Property Management" class="w-full h-full object-cover">
                </div>
                <div class="relative z-10 mt-4 flex flex-col items-start flex-1">
                    <div class="w-16 h-16 bg-[#D4AF37] rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-tasks text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Property & Facility Management</h4>
                    <p class="text-gray-300 text-sm mb-4 flex-1">
                       Professional property and facility management services that ensure seamless operations, enhanced performance, and long-term asset value for residential, commercial, and industrial spaces.
                    </p>
                    <a href="/contact" class="px-4 py-2 bg-[#D4AF37] text-[#0A2540] font-semibold rounded-lg hover:bg-yellow-500 transition-all duration-300">
                        Know More
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="service-card flex flex-col p-6 rounded-xl overflow-hidden group border border-white/10 bg-gradient-to-br from-[#0A2540] to-[#1E3A5F] backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                <div class="image-container w-full h-48 overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/6169057/pexels-photo-6169057.jpeg" alt="Mining & Logistics" class="w-full h-full object-cover">
                </div>
                <div class="relative z-10 mt-4 flex flex-col items-start flex-1">
                    <div class="w-16 h-16 bg-[#D4AF37] rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-truck-moving text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Mining & Logistic Services</h4>
                    <p class="text-gray-300 text-sm mb-4 flex-1">
                        Integrated mining operations and logistics support tailored for large-scale industrial projects. We provide dependable solutions that streamline supply, movement, and material handling.
                    </p>
                    <a href="/contact" class="px-4 py-2 bg-[#D4AF37] text-[#0A2540] font-semibold rounded-lg hover:bg-yellow-500 transition-all duration-300">
                        Know More
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- JS to make all cards equal height -->
<script>
    function setEqualHeight() {
        const cards = document.querySelectorAll('.service-card');
        let maxHeight = 0;

        // Reset height
        cards.forEach(card => card.style.height = 'auto');

        // Find max height
        cards.forEach(card => {
            const cardHeight = card.offsetHeight;
            if (cardHeight > maxHeight) maxHeight = cardHeight;
        });

        // Set all cards to max height
        cards.forEach(card => card.style.height = maxHeight + 'px');
    }

    window.addEventListener('load', setEqualHeight);
    window.addEventListener('resize', setEqualHeight);
</script>



  

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $("#services-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                responsive: {
                    0: { items: 1 },
                    640: { items: 2 },
                    1024: { items: 3 },
                    1280: { items: 4 }
                },
                navText: ['', ''],
                ariaLabel: 'Service carousel'
            });
        });
    </script>
</body>

@endsection

</html>