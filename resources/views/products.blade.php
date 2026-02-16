<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products Overview</title>
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

        body {
            background-color: #f9fafb;
            font-family: 'Inter', sans-serif;
        }

        /* Category Styling */
        .category {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            background-color: #fff;
            transition: all 0.5s ease;
            padding: 1.5rem;
        }

        .category h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .category ul {
            list-style-type: disc;
            padding-left: 1.5rem;
        }

        .category li {
            margin-bottom: 0.25rem;
        }

        /* Hover Effect */
        .category:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .category {
                margin-bottom: 1rem;
            }
        }



        /* Button Active State */
        .product-filter-btn {
            transition: all 0.4s ease;
        }

        .product-filter-btn.active {
            background-color: #bfa44e;
            color: #fff;
            border-color: #bfa44e;
            box-shadow: 0 4px 10px rgba(191, 164, 78, 0.3);
        }

        /* Card Styling */
        .product-card-item {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            background-color: #fff;
            transition: all 0.4s ease;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
        }

        .product-card-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Animation */
        .fade-up-product {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-up-product.show {
            opacity: 1;
            transform: translateY(0);
        }


        /* moving text */
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            display: inline-flex;
            animation: marquee 25s linear infinite;
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














    <!-- products section -->
    <section id="product-section-main" class="py-20 px-6 md:px-16">
        <!-- Header -->
        <div class="text-center mb-14">
            <p class="text-[#bfa44e] uppercase font-semibold tracking-widest mb-2">Our Products</p>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">Explore Our Product Range</h1>
            <div class="w-24 h-[3px] bg-[#bfa44e] mx-auto mt-4"></div>
        </div>

        <!-- Filter Buttons -->
        <div id="product-filter-group" class="flex flex-wrap justify-center gap-4 mb-12">
            <button
                class="product-filter-btn active px-6 py-2.5 border border-gray-300 rounded-full text-sm font-medium"
                data-filter="all">All</button>
            <button class="product-filter-btn px-6 py-2.5 border border-gray-300 rounded-full text-sm font-medium"
                data-filter="structural">Structural Materials</button>
            <button class="product-filter-btn px-6 py-2.5 border border-gray-300 rounded-full text-sm font-medium"
                data-filter="modular">Modular Furnishings</button>
            <button class="product-filter-btn px-6 py-2.5 border border-gray-300 rounded-full text-sm font-medium"
                data-filter="green">Green Building Products</button>
            <button class="product-filter-btn px-6 py-2.5 border border-gray-300 rounded-full text-sm font-medium"
                data-filter="construction">Paver & Kerb Stone</button>
        </div>

        <!-- Product Cards -->
        <div id="product-cards-grid" class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Structural Materials -->
            <div class="product-card-item fade-up-product" data-category="structural">
                <img src="https://media.generalkinematics.com/wp-content/uploads/2024/02/Construction-Aggregate-Types.png"
                    class="w-full h-56 object-cover" alt="Aggregates">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Aggregates</h3>
                    <p class="text-gray-600 mb-4">High-quality crushed stone and sand engineered to give every structure a strong, dependable foundation. Built for consistency, performance, and long-term durability.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="structural">
                <img src="https://irp.cdn-website.com/bc4439fa/dms3rep/multi/Portland+Cement.jpg"
                    class="w-full h-56 object-cover" alt="Cement">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Cement</h3>
                    <p class="text-gray-600 mb-4">Premium-grade cement trusted for residential, commercial, and industrial projects. Designed to deliver strength, stability, and lasting value across every application.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="structural">
                <img src="https://images.pexels.com/photos/19913288/pexels-photo-19913288.jpeg?auto=compress&cs=tinysrgb&w=900"
                    class="w-full h-56 object-cover" alt="Concrete">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Concrete</h3>
                    <p class="text-gray-600 mb-4">Durable, ready-mix concrete crafted for today’s modern infrastructure. Ideal for large-scale developments that demand precision, reliability, and long-term performance.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="structural">
                <img src="https://www.servicesteel.org/wp-content/uploads/2021/07/shapes.jpg"
                    class="w-full h-56 object-cover" alt="Steel">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Steel</h3>
                    <p class="text-gray-600 mb-4">High-strength TMT bars and structural steel solutions that ensure unmatched durability and safety. Built to reinforce everything from homes to heavy-duty industrial frameworks.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="structural">
                <img src="{{ asset('images/products/chemical.jpeg') }}"
                    class="w-full h-56 object-cover" alt="Chemicals">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Chemicals & Admixtures</h3>
                    <p class="text-gray-600 mb-4">Advanced admixtures that enhance workability, boost strength, and improve the overall performance of concrete. Engineered to deliver superior results in every pour.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <!-- Modular Furnishings -->
            <div class="product-card-item fade-up-product" data-category="modular">
                <img src="https://images.pexels.com/photos/94865/pexels-photo-94865.jpeg?auto=compress&cs=tinysrgb&w=900"
                    class="w-full h-56 object-cover" alt="Kitchens">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Kitchens</h3>
                    <p class="text-gray-600 mb-4">Modern modular kitchens designed with a perfect blend of functionality, elegance, and premium craftsmanship. Built to look stunning—and perform effortlessly.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="modular">
                <img src="https://images.pexels.com/photos/34208346/pexels-photo-34208346.jpeg?auto=compress&cs=tinysrgb&w=900"
                    class="w-full h-56 object-cover" alt="Vanities">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Vanities</h3>
                    <p class="text-gray-600 mb-4">Stylish, space-saving vanities elevate your bathroom with a touch of sophistication. Crafted for durability, convenience, and timeless appeal.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="modular">
                <img src="{{ asset('images/products/led.jpeg') }}"  
                    class="w-full h-56 object-cover" alt="LED Panels">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">LED Panels</h3>
                    <p class="text-gray-600 mb-4">Energy-efficient LED panels that combine sleek design with exceptional brightness. Perfect lighting solutions for homes, workspaces, and commercial interiors.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="modular">
                <img src="https://images.pexels.com/photos/7512030/pexels-photo-7512030.jpeg"
                    class="w-full h-56 object-cover" alt="Wardrobes">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Wardrobes</h3>
                    <p class="text-gray-600 mb-4">Custom wardrobes crafted with smart storage systems, refined finishes, and a luxurious feel. Designed to keep your spaces organized—and beautiful.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <!-- Green Building Products -->
            <div class="product-card-item fade-up-product" data-category="green">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/Fly_Ash_Bricks.jpg"
                    class="w-full h-56 object-cover" alt="Fly Ash Bricks">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Fly Ash Bricks</h3>
                    <p class="text-gray-600 mb-4">Eco-friendly bricks that help reduce carbon emissions while offering greater strength and efficiency. A smarter choice for sustainable construction.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="green">
                <img src="{{ asset('images/products/aac-blocks.jpeg') }}"
                    class="w-full h-56 object-cover" alt="AAC Blocks">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">AAC Blocks</h3>
                    <p class="text-gray-600 mb-4">Lightweight, sound-insulated, and thermally efficient blocks ideal for modern, sustainable buildings. Designed to deliver comfort, safety, and energy savings.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <div class="product-card-item fade-up-product" data-category="green">
                <img src="https://images.pexels.com/photos/5691603/pexels-photo-5691603.jpeg?auto=compress&cs=tinysrgb&w=900"
                    class="w-full h-56 object-cover" alt="Green Putty">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Green Putty</h3>
                    <p class="text-gray-600 mb-4">Smooth, eco-friendly wall putty that ensures a superior finish while supporting sustainable building practices.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <!-- Paver stone -->
            <div class="product-card-item fade-up-product" data-category="construction">
                <img src="https://images.pexels.com/photos/17366761/pexels-photo-17366761.jpeg?auto=compress&cs=tinysrgb&w=900"
                    class="w-full h-56 object-cover" alt="Paver stone">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Paver stone</h3>
                    <p class="text-gray-600 mb-4">Premium quality paver blocks designed for durability and aesthetic appeal. Ideal for driveways, pathways, and outdoor landscapes.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <!-- Kerb stone -->
            <div class="product-card-item fade-up-product" data-category="construction">
                <img src="{{ asset('images/kerb-stone.jpeg') }}"
                    class="w-full h-56 object-cover" alt="Kerb stone">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Kerb stone</h3>
                    <p class="text-gray-600 mb-4">Heavy-duty kerb stones for road edges and pavement borders. Engineered for high impact resistance and long-lasting structural integrity.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

            <!-- Mining and Crushing -->
            <div class="product-card-item fade-up-product" data-category="construction">
                <img src="{{ asset('images/minjng-and-crushing.jpeg') }}"
                    class="w-full h-56 object-cover" alt="Mining and Crushing">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Mining and Crushing</h3>
                    <p class="text-gray-600 mb-4">Advanced mining and crushing solutions designed for efficiency and durability in rugged environments.</p>
                    <a href="/contact"
                        class="inline-block bg-[#bfa44e] text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-[#a8923e]">Learn
                        More</a>
                </div>
            </div>

        </div>
    </section>







    



    

    <script>
        // Filter Functionality
        const filterButtons = document.querySelectorAll(".product-filter-btn");
        const productCards = document.querySelectorAll(".product-card-item");

        filterButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                filterButtons.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                const filter = btn.dataset.filter;

                productCards.forEach(card => {
                    const show = filter === "all" || card.dataset.category === filter;
                    card.style.display = show ? "block" : "none";
                });
            });
        });

        // Scroll Animation
        const fadeItems = document.querySelectorAll('.fade-up-product');
        const showOnScroll = () => {
            fadeItems.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) el.classList.add('show');
            });
        };
        window.addEventListener('scroll', showOnScroll);
        showOnScroll();
    </script>

</body>

@endsection

</html>