<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reinforced Steel Bars - DC Indo Global</title>
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

        /* Custom CSS for animations and additional styling */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .spec-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .spec-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .spec-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
        }
        
        .spec-table td:first-child {
            font-weight: 600;
            color: var(--primary-blue);
            width: 40%;
        }
        
        .image-gallery img {
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        
        .image-gallery img:hover {
            transform: scale(1.05);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--accent-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body class="bg-white">

     @extends('layouts.app')

@section('title', 'Home - DC Indo Global')

@section('content')

    
   


    <!-- Page Header -->
    <section class="h-80 bg-cover bg-center flex items-center justify-center text-white" 
             style="background-image: url('https://images.unsplash.com/photo-1591474200742-8e512e6f98f8?w=1920')">
        <div class="bg-black/60 w-full h-full flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-5xl font-bold fade-in-up mb-4">Reinforced Steel Bars</h1>
                <p class="text-xl max-w-2xl mx-auto">High-strength TMT steel bars for reinforced concrete structures</p>
            </div>
        </div>
    </section>
    
    <!-- Breadcrumb -->
    <section class="py-4 bg-gray-50">
        <div class="container mx-auto px-4 md:px-10">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="index.html" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#D4AF37]">
                            <i class="fas fa-home mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="products.html" class="ml-1 text-sm font-medium text-gray-700 hover:text-[#D4AF37] md:ml-2">Products</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Reinforced Steel Bars</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Product Images -->
                <div>
                    <div class="mb-6 rounded-xl overflow-hidden shadow-lg">
                        <img id="main-image" src="https://images.unsplash.com/photo-1591474200742-8e512e6f98f8?w=800" alt="Reinforced Steel Bars" class="w-full h-96 object-cover">
                    </div>
                    <div class="grid grid-cols-4 gap-4 image-gallery">
                        <div class="border-2 border-transparent hover:border-[#D4AF37] rounded-lg overflow-hidden cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1591474200742-8e512e6f98f8?w=200" alt="Steel Bars 1" class="w-full h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="border-2 border-transparent hover:border-[#D4AF37] rounded-lg overflow-hidden cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=200" alt="Steel Bars 2" class="w-full h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="border-2 border-transparent hover:border-[#D4AF37] rounded-lg overflow-hidden cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=200" alt="Steel Bars 3" class="w-full h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="border-2 border-transparent hover:border-[#D4AF37] rounded-lg overflow-hidden cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc?w=200" alt="Steel Bars 4" class="w-full h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div>
                    <span class="inline-block px-3 py-1 bg-[#D4AF37] text-white text-sm font-semibold rounded-full mb-4">STRUCTURAL MATERIALS</span>
                    <h1 class="text-3xl font-bold text-[#0A2540] mb-4">Reinforced Steel Bars (TMT)</h1>
                    <p class="text-gray-600 mb-6">High-strength Thermo-Mechanically Treated (TMT) steel bars with excellent ductility, weldability, and corrosion resistance for reinforced concrete structures.</p>
                    
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-[#0A2540] mb-3">Key Features</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Superior strength with high yield stress</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Excellent ductility and bendability</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Enhanced corrosion resistance</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Superior weldability without loss of strength</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Fire-resistant properties</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-[#0A2540] mb-3">Available Grades & Sizes</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="mb-2"><strong>Grades:</strong> Fe 415, Fe 500, Fe 500D, Fe 550, Fe 600</p>
                            <p><strong>Diameters:</strong> 6mm to 50mm</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <button class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-6 py-3 text-lg font-semibold rounded-lg flex items-center justify-center">
                            <i class="fas fa-file-pdf mr-2"></i> Download Brochure
                        </button>
                        <button class="bg-[#0A2540] hover:bg-[#1E3A5F] text-white px-6 py-3 text-lg font-semibold rounded-lg flex items-center justify-center">
                            <i class="fas fa-phone mr-2"></i> Request Quote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-10">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="border-b">
                    <div class="flex overflow-x-auto">
                        <button class="tab-btn active px-6 py-4 font-semibold text-[#0A2540] border-b-2 border-[#D4AF37] whitespace-nowrap" data-tab="specifications">
                            Specifications
                        </button>
                        <button class="tab-btn px-6 py-4 font-semibold text-gray-600 hover:text-[#0A2540] whitespace-nowrap" data-tab="applications">
                            Applications
                        </button>
                        <button class="tab-btn px-6 py-4 font-semibold text-gray-600 hover:text-[#0A2540] whitespace-nowrap" data-tab="technical">
                            Technical Details
                        </button>
                        <button class="tab-btn px-6 py-4 font-semibold text-gray-600 hover:text-[#0A2540] whitespace-nowrap" data-tab="downloads">
                            Downloads
                        </button>
                    </div>
                </div>
                
                <div class="p-8">
                    <!-- Specifications Tab -->
                    <div id="specifications" class="tab-content active">
                        <h3 class="text-2xl font-bold text-[#0A2540] mb-6">Product Specifications</h3>
                        <div class="overflow-x-auto">
                            <table class="spec-table">
                                <tr>
                                    <td>Product Name</td>
                                    <td>Thermo-Mechanically Treated (TMT) Steel Bars</td>
                                </tr>
                                <tr>
                                    <td>Grade</td>
                                    <td>Fe 415, Fe 500, Fe 500D, Fe 550, Fe 600</td>
                                </tr>
                                <tr>
                                    <td>Diameter Range</td>
                                    <td>6mm to 50mm</td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td>Standard 12 meters or as per requirement</td>
                                </tr>
                                <tr>
                                    <td>Yield Strength</td>
                                    <td>415 N/mm² to 600 N/mm² (as per grade)</td>
                                </tr>
                                <tr>
                                    <td>Tensile Strength</td>
                                    <td>10% more than yield strength (minimum)</td>
                                </tr>
                                <tr>
                                    <td>Elongation</td>
                                    <td>14.5% to 20% (as per grade)</td>
                                </tr>
                                <tr>
                                    <td>Bend Test</td>
                                    <td>180° bend without fracture</td>
                                </tr>
                                <tr>
                                    <td>Chemical Composition</td>
                                    <td>Carbon: 0.25% max, Sulphur: 0.045% max, Phosphorus: 0.045% max</td>
                                </tr>
                                <tr>
                                    <td>Standards</td>
                                    <td>IS 1786:2008, BS 4449:2005, ASTM A615</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Applications Tab -->
                    <div id="applications" class="tab-content hidden">
                        <h3 class="text-2xl font-bold text-[#0A2540] mb-6">Applications</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-building text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-[#0A2540] mb-2">High-Rise Buildings</h4>
                                    <p class="text-gray-600">Ideal for structural framework in multi-story residential and commercial buildings.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-bridge text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-[#0A2540] mb-2">Bridges & Infrastructure</h4>
                                    <p class="text-gray-600">Used in bridge construction, flyovers, and other critical infrastructure projects.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-industry text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-[#0A2540] mb-2">Industrial Structures</h4>
                                    <p class="text-gray-600">Suitable for factories, warehouses, and industrial plants requiring high strength.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-home text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-[#0A2540] mb-2">Residential Construction</h4>
                                    <p class="text-gray-600">Perfect for foundations, columns, beams, and slabs in houses and apartments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Technical Details Tab -->
                    <div id="technical" class="tab-content hidden">
                        <h3 class="text-2xl font-bold text-[#0A2540] mb-6">Technical Details</h3>
                        <div class="prose max-w-none">
                            <h4 class="text-xl font-semibold text-[#0A2540] mb-3">Manufacturing Process</h4>
                            <p class="mb-4">Our TMT steel bars are manufactured using the advanced Thermo-Mechanical Treatment process which involves:</p>
                            <ul class="mb-6">
                                <li>Quenching - Rapid cooling of the hot-rolled bar to form a hardened outer layer</li>
                                <li>Self-tempering - Using the heat from the core to temper the outer layer</li>
                                <li>Atmospheric cooling - Final cooling to achieve the desired microstructure</li>
                            </ul>
                            
                            <h4 class="text-xl font-semibold text-[#0A2540] mb-3">Quality Assurance</h4>
                            <p class="mb-4">Every batch of our TMT steel bars undergoes rigorous testing including:</p>
                            <ul>
                                <li>Chemical composition analysis</li>
                                <li>Tensile strength testing</li>
                                <li>Bend and rebend tests</li>
                                <li>Metallographic examination</li>
                                <li>Dimensional accuracy checks</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Downloads Tab -->
                    <div id="downloads" class="tab-content hidden">
                        <h3 class="text-2xl font-bold text-[#0A2540] mb-6">Product Downloads</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-file-pdf text-red-500 text-2xl mr-4"></i>
                                    <div>
                                        <h4 class="font-semibold text-[#0A2540]">Product Brochure</h4>
                                        <p class="text-sm text-gray-600">Detailed product information and specifications</p>
                                    </div>
                                </div>
                                <button class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-4 py-2 rounded-lg">
                                    Download
                                </button>
                            </div>
                            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-file-pdf text-red-500 text-2xl mr-4"></i>
                                    <div>
                                        <h4 class="font-semibold text-[#0A2540]">Technical Data Sheet</h4>
                                        <p class="text-sm text-gray-600">Complete technical specifications and test data</p>
                                    </div>
                                </div>
                                <button class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-4 py-2 rounded-lg">
                                    Download
                                </button>
                            </div>
                            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-file-pdf text-red-500 text-2xl mr-4"></i>
                                    <div>
                                        <h4 class="font-semibold text-[#0A2540]">Installation Guide</h4>
                                        <p class="text-sm text-gray-600">Best practices for handling and installation</p>
                                    </div>
                                </div>
                                <button class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-4 py-2 rounded-lg">
                                    Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-16">
        <div class="container mx-auto px-4 md:px-10">
            <h2 class="text-3xl font-bold text-[#0A2540] mb-12 text-center">Related Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Product 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 transition-transform hover:-translate-y-2">
                    <div class="h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=500" alt="Ready Mix Concrete" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-[#D4AF37] text-white text-xs font-semibold rounded-full mb-4">STRUCTURAL</span>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Ready Mix Concrete</h3>
                        <p class="text-gray-600 mb-4">Precision-engineered concrete mixtures with consistent quality.</p>
                        <a href="product-detail-concrete.html" class="text-[#D4AF37] font-semibold hover:underline">View Details</a>
                    </div>
                </div>
                
                <!-- Related Product 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 transition-transform hover:-translate-y-2">
                    <div class="h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=500" alt="Construction Blocks" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full mb-4">FINISHING</span>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Construction Blocks</h3>
                        <p class="text-gray-600 mb-4">High-quality concrete blocks for walls and partitions.</p>
                        <a href="product-detail-blocks.html" class="text-[#D4AF37] font-semibold hover:underline">View Details</a>
                    </div>
                </div>
                
                <!-- Related Product 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 transition-transform hover:-translate-y-2">
                    <div class="h-56 overflow-hidden">
                        <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Solar Solutions" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full mb-4">SUSTAINABLE</span>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Solar Energy Solutions</h3>
                        <p class="text-gray-600 mb-4">High-efficiency solar panels for sustainable energy.</p>
                        <a href="product-detail-solar.html" class="text-[#D4AF37] font-semibold hover:underline">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-[#0A2540] text-white mb-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Interested in Our Steel Products?</h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Contact our product specialists for pricing, technical specifications, and customized solutions for your project.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="contact.html">
                    <button class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-8 py-4 text-lg font-semibold rounded-lg">
                        CONTACT OUR TEAM
                    </button>
                </a>
                <a href="tel:+911234567890">
                    <button class="bg-transparent hover:bg-white/10 text-white border border-white px-8 py-4 text-lg font-semibold rounded-lg">
                        CALL NOW
                    </button>
                </a>
            </div>
        </div>
    </section>
    

@endsection





    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Image gallery functionality
            function changeMainImage(src) {
                document.getElementById('main-image').src = src;
            }
            
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Show corresponding content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
            
            // Mobile menu functionality
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>



</body>
</html>