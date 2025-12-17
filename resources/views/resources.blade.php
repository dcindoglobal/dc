<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - DC Indo Global</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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

        /* Custom styles for animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s, transform 0.8s;
        }

        .fade-in-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 0.8s, transform 0.8s;
        }

        .fade-in-right {
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.8s, transform 0.8s;
        }

        .fade-in-x {
            opacity: 0;
            transition: opacity 0.5s, transform 0.5s;
        }

        .visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        /* Card styling */
        .card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 1rem;
        }

        /* Form styling */
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: #0A2540;
            box-shadow: 0 0 0 3px rgba(10, 37, 64, 0.1);
        }

        .btn-primary {
            background-color: #0A2540;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #1a3a5c;
        }

        /* Logo grid animation */
        .logo-item {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .logo-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.15);
        }

        /* Sticker button styling */
        .sticker-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #D4AF37;
            color: white;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            z-index: 1000;
        }

        .sticker-button:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
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

<body class="bg-white">



@extends('layouts.app')

@section('title', 'Home - DC Indo Global')

@section('content')


   

    



           <!-- Vendor Registration Modal with Scrollbar -->
<div id="vendorModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center hidden z-50 transition-opacity">
    <div class="bg-white rounded-2xl shadow-2xl w-11/12 sm:w-[600px] max-h-[80vh] overflow-y-auto p-8 relative animate-fadeIn">
        <button id="closeVendorModalBtn" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition">
            ✕
        </button>
        <h2 class="text-2xl font-bold mb-4 text-gray-900">Register as a Vendor</h2>
        <p class="text-gray-500 text-sm mb-6">Join our network of trusted vendors and suppliers.</p>
        <form id="vendor-registration-form" class="space-y-4">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="company-name" class="block text-gray-700 font-medium mb-2">Company Name *</label>
                    <input type="text" id="company-name" class="form-input" required>
                </div>
                <div>
                    <label for="contact-person" class="block text-gray-700 font-medium mb-2">Contact Person *</label>
                    <input type="text" id="contact-person" class="form-input" required>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address *</label>
                    <input type="email" id="email" class="form-input" required>
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number *</label>
                    <input type="tel" id="phone" class="form-input" required>
                </div>
            </div>
            <div>
                <label for="address" class="block text-gray-700 font-medium mb-2">Company Address</label>
                <textarea id="address" rows="2" class="form-input"></textarea>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="vendor-type" class="block text-gray-700 font-medium mb-2">Vendor Type *</label>
                    <select id="vendor-type" class="form-input" required>
                        <option value="">Select Type</option>
                        <option value="material-supplier">Material Supplier</option>
                        <option value="equipment-rental">Equipment Rental</option>
                        <option value="subcontractor">Subcontractor</option>
                        <option value="consultant">Consultant</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="years-experience" class="block text-gray-700 font-medium mb-2">Years of Experience</label>
                    <input type="number" id="years-experience" class="form-input" min="0">
                </div>
            </div>
            <div>
                <label for="services" class="block text-gray-700 font-medium mb-2">Products / Services Offered *</label>
                <textarea id="services" rows="3" class="form-input" required></textarea>
            </div>
            <div>
                <label class="flex items-start">
                    <input type="checkbox" class="mt-1 mr-2" required>
                    <span class="text-gray-700 text-sm">I agree to the <a href="/contact" class="text-[#0A2540] hover:underline">terms and conditions</a> and understand that my information will be used for vendor evaluation purposes.</span>
                </label>
            </div>
            <button type="submit" class="btn-primary w-full">Submit Registration</button>
        </form>
    </div>
</div>


    <!-- Page Header -->
    <section class="h-80 bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1920')">
        <div class="bg-black/60 w-full h-full flex items-center justify-center">
            <h1 id="page-title" class="text-5xl font-bold fade-in-up">Resources</h1>
        </div>
    </section>

    <!-- Additional Resources Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">ADDITIONAL RESOURCES</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540]">Helpful Documents & Links</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="card p-6 text-center hover:shadow-xl transition-all duration-300">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#0A2540] rounded-full mb-4">
                        <i data-lucide="file-text" class="w-8 h-8 text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0A2540] mb-4">Vendor Guidelines</h4>
                    <p class="text-gray-600 mb-6">Download our comprehensive vendor guidelines and requirements
                        document.</p>
                    <a href="/contact" class="inline-flex items-center text-[#0A2540] font-medium">
                        <span>Download PDF</span>
                        {{-- <i data-lucide="download" class="w-4 h-4 ml-2"></i> --}}
                    </a>
                </div>

                <div class="card p-6 text-center hover:shadow-xl transition-all duration-300">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#0A2540] rounded-full mb-4">
                        <i data-lucide="clipboard-list" class="w-8 h-8 text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0A2540] mb-4">Project Portfolio</h4>
                    <p class="text-gray-600 mb-6">Browse through our completed projects and see our capabilities in
                        action.</p>
                    <a href="/contact" class="inline-flex items-center text-[#0A2540] font-medium">
                        <span>View Portfolio</span>
                        {{-- <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i> --}}
                    </a>
                </div>

                <div class="card p-6 text-center hover:shadow-xl transition-all duration-300">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#0A2540] rounded-full mb-4">
                        <i data-lucide="phone-call" class="w-8 h-8 text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0A2540] mb-4">Contact Procurement</h4>
                    <p class="text-gray-600 mb-6">Get in touch with our procurement team for any vendor-related queries.
                    </p>
                    <a href="/contact" class="inline-flex items-center text-[#0A2540] font-medium">
                        <span>Contact Us</span>
                        {{-- <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i> --}}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clientele Showcase Section -->
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">OUR PARTNERS</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540]">Clientele Showcase</h3>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-6">
                    We take pride in our partnerships with industry leaders and esteemed clients. Our collaborative
                    approach has helped us deliver exceptional construction solutions across various sectors.
                </p>
            </div>

            <!-- Client Logos Carousel -->
            <div class="mb-16">
                <div class="owl-carousel owl-theme" id="clients-carousel">
                    <!-- Client logos will be inserted here by JavaScript -->
                </div>
            </div>

            <!-- Client Testimonials -->
            <div class="mt-20">
                <h3 class="text-3xl font-bold text-[#0A2540] text-center mb-12">What Our Clients Say</h3>
                <div id="testimonials-container" class="grid md:grid-cols-3 gap-8">
                    <!-- Testimonials will be inserted here by JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor Registration Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <span class="text-sm font-semibold text-[#D4AF37] tracking-widest uppercase">
                    Partner With Us
                </span>
                <h2 class="mt-2 text-4xl md:text-5xl font-extrabold text-[#0A2540] tracking-tight">
                    Vendor Registration
                </h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Join our network of trusted vendors and suppliers. We're seeking reliable partners who share our
                    commitment to quality and excellence in the construction industry.
                </p>
            </div>

            <!-- Benefits List - Fully Centered -->
            <div class="max-w-3xl mx-auto mb-12">
                <div class="space-y-5">
                    <div class="flex items-center justify-center group text-center">
                        <div class="flex-shrink-0">
                            <div
                                class="w-8 h-8 bg-[#D4AF37] rounded-full flex items-center justify-center transition-transform group-hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="ml-4 text-gray-700 text-base md:text-lg font-medium max-w-md">
                            Access to ongoing and upcoming projects
                        </p>
                    </div>
                    <div class="flex items-center justify-center group text-center">
                        <div class="flex-shrink-0">
                            <div
                                class="w-8 h-8 bg-[#D4AF37] rounded-full flex items-center justify-center transition-transform group-hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="ml-4 text-gray-700 text-base md:text-lg font-medium max-w-md">
                            Timely payments and transparent processes
                        </p>
                    </div>
                    <div class="flex items-center justify-center group text-center">
                        <div class="flex-shrink-0">
                            <div
                                class="w-8 h-8 bg-[#D4AF37] rounded-full flex items-center justify-center transition-transform group-hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="ml-4 text-gray-700 text-base md:text-lg font-medium max-w-md">
                            Long-term partnership opportunities
                        </p>
                    </div>
                    <div class="flex items-center justify-center group text-center">
                        <div class="flex-shrink-0">
                            <div
                                class="w-8 h-8 bg-[#D4AF37] rounded-full flex items-center justify-center transition-transform group-hover:scale-110">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="ml-4 text-gray-700 text-base md:text-lg font-medium max-w-md">
                            Technical support and collaboration
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to Action Button -->
            <div class="text-center">
                <button id="openVendorModalBtn"
                    class="inline-flex items-center px-6 py-3 bg-[#0A2540] text-white text-lg font-semibold rounded-lg shadow-md hover:bg-[#D4AF37] hover:text-[#0A2540] transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:ring-opacity-50">
                    Become a Vendor
                </button>
            </div>
        </div>
    </section>

   

    <!-- SCRIPT -->
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Client data
       const clients = [
    { name: "Infosys", logo: "https://www.google.com/s2/favicons?sz=64&domain=infosys.com", category: "commercial" },
    { name: "Tata Group", logo: "https://www.google.com/s2/favicons?sz=64&domain=tata.com", category: "industrial" },
    { name: "Reliance Industries", logo: "https://www.google.com/s2/favicons?sz=64&domain=ril.com", category: "industrial" },
    { name: "Adani Group", logo: "https://www.google.com/s2/favicons?sz=64&domain=adani.com", category: "commercial" },
    { name: "Larsen & Toubro", logo: "https://www.google.com/s2/favicons?sz=64&domain=larsentoubro.com", category: "industrial" },
    { name: "Mahindra Group", logo: "https://www.google.com/s2/favicons?sz=64&domain=mahindra.com", category: "industrial" },
    { name: "Wipro", logo: "https://www.google.com/s2/favicons?sz=64&domain=wipro.com", category: "commercial" },
    { name: "HDFC Bank", logo: "https://www.google.com/s2/favicons?sz=64&domain=hdfcbank.com", category: "commercial" },
    { name: "Godrej Group", logo: "https://www.google.com/s2/favicons?sz=64&domain=godrej.com", category: "residential" },
    { name: "DLF Limited", logo: "https://www.google.com/s2/favicons?sz=64&domain=dlf.in", category: "residential" },
    { name: "Prestige Group", logo: "https://www.google.com/s2/favicons?sz=64&domain=prestigeconstructions.com", category: "residential" },

    // Already optimal
    { name: "Government of India", logo: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emblem_of_India.svg/800px-Emblem_of_India.svg.png", category: "government" }
];

        // Testimonials data
        const testimonials = [
            {
                name: "Rajesh Kumar",
                position: "Project Director, Infosys",
                content: "DC Indo Global delivered our corporate campus ahead of schedule while maintaining exceptional quality standards. Their attention to detail and project management capabilities are impressive.",
                rating: 5
            },
            {
                name: "Priya Sharma",
                position: "CEO, Prestige Group",
                content: "Working with DC Indo Global on our residential complex was a seamless experience. Their team demonstrated expertise and professionalism throughout the project lifecycle.",
                rating: 5
            },
            {
                name: "Amit Patel",
                position: "Operations Head, Adani Group",
                content: "The industrial facility built by DC Indo Global has exceeded our expectations. Their in-house manufacturing capabilities provided significant cost and time savings.",
                rating: 4
            }
        ];

        // Render clients in Owl Carousel
        function renderClients() {
            const container = $('#clients-carousel');
            container.empty(); // Clear previous items

            clients.forEach(client => {
                const clientItem = `
                    <div class="logo-item bg-white p-6 rounded-xl flex items-center justify-center fade-in-up">
                        <img src="${client.logo}" alt="${client.name}" class="max-h-24 max-w-full object-contain">
                    </div>
                `;
                container.append(clientItem);
            });

            // Initialize Owl Carousel
            container.owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000, // Move every 3 seconds
                autoplayHoverPause: true,
                responsive: {
                    0: { items: 2 }, // 2 items on mobile
                    600: { items: 4 }, // 4 items on tablet
                    1000: { items: 6 } // 6 items on desktop
                }
            });
        }

        // Render testimonials
        function renderTestimonials() {
            const container = document.getElementById('testimonials-container');

            testimonials.forEach(testimonial => {
                const testimonialItem = document.createElement('div');
                testimonialItem.className = 'card p-6 bg-white fade-in-up';

                // Generate star rating
                let stars = '';
                for (let i = 0; i < 5; i++) {
                    if (i < testimonial.rating) {
                        stars += '<i data-lucide="star" class="w-5 h-5 text-[#D4AF37] fill-current"></i>';
                    } else {
                        stars += '<i data-lucide="star" class="w-5 h-5 text-gray-300"></i>';
                    }
                }

                testimonialItem.innerHTML = `
                    <div class="flex mb-4">
                        ${stars}
                    </div>
                    <p class="text-gray-600 italic mb-6">"${testimonial.content}"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-[#0A2540] rounded-full flex items-center justify-center text-white font-bold mr-4">
                            ${testimonial.name.charAt(0)}
                        </div>
                        <div>
                            <h5 class="font-bold text-[#0A2540]">${testimonial.name}</h5>
                            <p class="text-gray-500 text-sm">${testimonial.position}</p>
                        </div>
                    </div>
                `;

                container.appendChild(testimonialItem);
            });

            // Re-initialize icons for newly added elements
            lucide.createIcons();
        }

        // Form submission handler
        function setupFormSubmission() {
            const form = document.getElementById('vendor-registration-form');

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Basic form validation
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('border-red-500');
                    } else {
                        field.classList.remove('border-red-500');
                    }
                });

                if (isValid) {
                    // In a real application, you would send the form data to a server
                    alert('Thank you for your registration! We will review your application and contact you soon.');
                    form.reset();
                    document.getElementById('vendorModal').classList.add('hidden');
                } else {
                    alert('Please fill in all required fields.');
                }
            });
        }

        // Modal handlers
        function setupModalHandlers() {
          
            const openVendorModalBtn = document.getElementById('openVendorModalBtn');
            const closeVendorModalBtn = document.getElementById('closeVendorModalBtn');
            const vendorModal = document.getElementById('vendorModal');

         

            // Vendor Modal
            openVendorModalBtn.addEventListener('click', () => {
                vendorModal.classList.remove('hidden');
            });

            closeVendorModalBtn.addEventListener('click', () => {
                vendorModal.classList.add('hidden');
            });

            vendorModal.addEventListener('click', (e) => {
                if (e.target === vendorModal) {
                    vendorModal.classList.add('hidden');
                }
            });
        }

        // Intersection Observer for animations
        function setupIntersectionObserver() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            // Observe all elements with animation classes
            document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .fade-in-x').forEach(el => {
                observer.observe(el);
            });
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function () {
            renderClients();
            renderTestimonials();
            setupFormSubmission();
            setupModalHandlers();
            setupIntersectionObserver();

            // Animate page title immediately
            document.getElementById('page-title').classList.add('visible');
        });
    </script>
</body>

@endsection

</html>