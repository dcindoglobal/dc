<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Strength - DC Indo Global Construction</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/@tailwindcss/forms@0.5.3/dist/index.umd.js"></script>
     <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
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
            font-family: 'Inter', sans-serif;
        }
        
        .strength-hero {
            background: linear-gradient(rgba(10, 37, 64, 0.85), rgba(10, 37, 64, 0.95)), url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1920');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .timeline-item {
            position: relative;
            padding-left: 60px;
        }
        
        .timeline-item:before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            height: 100%;
            width: 2px;
            background: #D4AF37;
        }
        
        .timeline-dot {
            position: absolute;
            left: 12px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #D4AF37;
            border: 4px solid white;
            z-index: 1;
        }
        
        .value-card {
            border-top: 4px solid #D4AF37;
            transition: all 0.3s ease;
        }
        
        .value-card:hover {
            background-color: #0A2540;
            color: white;
            transform: translateY(-5px);
        }
        
        .value-card:hover h3,
        .value-card:hover p {
            color: white;
        }
        
        .counter-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #D4AF37, #F4C542);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .stagger-animation > * {
            opacity: 0;
            transform: translateY(20px);
        }
        
        .stagger-animation.animate > * {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        .stagger-animation.animate > *:nth-child(1) { animation-delay: 0.1s; }
        .stagger-animation.animate > *:nth-child(2) { animation-delay: 0.2s; }
        .stagger-animation.animate > *:nth-child(3) { animation-delay: 0.3s; }
        .stagger-animation.animate > *:nth-child(4) { animation-delay: 0.4s; }
        .stagger-animation.animate > *:nth-child(5) { animation-delay: 0.5s; }
        .stagger-animation.animate > *:nth-child(6) { animation-delay: 0.6s; }
        
        .mission-vision-box {
            background: linear-gradient(135deg, #0A2540 0%, #1E3A5F 100%);
            position: relative;
            overflow: hidden;
        }
        
        .mission-vision-box:before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
            z-index: 0;
        }
        
        .in-house-capability {
            background: linear-gradient(rgba(10, 37, 64, 0.05), rgba(10, 37, 64, 0.05));
            border-left: 4px solid #D4AF37;
        }
    </style>
</head>
<body class="bg-white">


     @extends('layouts.app')

    @section('title', 'Our Strength - DC Indo Global')

    @section('content')

    <!-- Strength Hero Section -->
    <section class="strength-hero py-24 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/20 backdrop-blur-sm mb-6">
                    <i class="fas fa-award mr-2 text-[#D4AF37]"></i>
                    <span class="text-sm font-medium">Our Strength & Legacy</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 fade-in-up">Built on 13+ Years of Excellence</h1>
                <p class="text-xl mb-8 fade-in-up" style="animation-delay: 0.3s;">
                    Shaping India's landscape with innovation, reliability, and an unwavering commitment to quality since 2012.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up" style="animation-delay: 0.5s;">
                    <a href="#story" class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-8 py-3 rounded-lg font-medium text-center transition duration-300">
                        Our Story
                    </a>
                    <a href="#values" class="bg-transparent border-2 border-white hover:bg-white hover:text-[#0A2540] text-white px-8 py-3 rounded-lg font-medium text-center transition duration-300">
                        Our Values
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section id="story" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-[#0A2540] mb-6">OUR STORY</h2>
                    <h3 class="text-2xl font-semibold text-[#D4AF37] mb-4">Over 13 Years of Building Excellence</h3>
                    <p class="text-gray-600 mb-6">
                        Since 2012, DC Indo Global has been shaping spaces and setting new standards in the Indian construction industry. What started as a small vision has grown into a trusted legacy—built on innovation, reliability, and a genuine commitment to doing things the right way.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Whether it's a modern commercial hub or a technically demanding industrial facility, we take pride in turning ambitious plans into structures that stand strong for decades.
                    </p>
                    
                    <div class="in-house-capability p-6 rounded-lg mb-8">
                        <h3 class="font-bold text-lg text-[#0A2540] mb-2">We don't just build</h3>
                        <p class="text-gray-600">
                            We create, manufacture, and execute with a complete sense of responsibility. With our own manufacturing units and a team of 13+ experts, we maintain full control over quality and timelines. Every project benefits from our in-house capabilities, ensuring precision, consistency, and a seamless workflow from the first blueprint to the final finish.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="counter-number mb-2">13+</div>
                            <p class="text-gray-600 font-medium">Years Experience</p>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="counter-number mb-2">100+</div>
                            <p class="text-gray-600 font-medium">Projects Completed</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:pl-8">
                    <div class="rounded-xl overflow-hidden shadow-2xl">
                        <img 
                            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800" 
                            alt="DC Indo Global Team" 
                            class="w-full h-auto object-cover rounded-lg"
                        >
                        {{-- <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#0A2540] to-transparent p-6 text-white">
                            <p class="text-lg font-semibold">Building India's Future, One Project at a Time</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="values" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="mission-vision-box rounded-2xl text-white p-8 md:p-12">
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Mission -->
                        <div class="relative z-10">
                            <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-6">
                                <i class="fas fa-bullseye text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                            <p class="text-gray-300 mb-4">
                                To deliver high-quality, cost-effective projects on time by empowering motivated, agile, and focused teams. We believe in relationships built on trust and transparency, and stay committed to fairness in every interaction—with employees, clients, vendors, and partners.
                            </p>
                        </div>
                        
                        <!-- Vision -->
                        <div class="relative z-10">
                            <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-6">
                                <i class="fas fa-eye text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                            <p class="text-gray-300">
                                To be the benchmark for superior construction services by continually elevating quality, embracing innovation, and delivering with integrity and purpose. Our goal is simple: create lasting value and uphold a reputation that makes our name synonymous with excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-[#0A2540] mb-4">Our Core Values</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    The principles that guide every decision we make and every project we undertake
                </p>
            </div>
            
            <div class="stagger-animation grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="value-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-gem text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Quality Excellence</h3>
                    <p class="text-gray-600">
                        We never compromise on quality. Every material, every process, and every finish meets the highest standards of durability and craftsmanship.
                    </p>
                </div>
                
                <!-- Value 2 -->
                <div class="value-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-handshake text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Integrity & Transparency</h3>
                    <p class="text-gray-600">
                        We build relationships on trust. Clear communication, honest dealings, and ethical practices define every interaction.
                    </p>
                </div>
                
                <!-- Value 3 -->
                <div class="value-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Innovation</h3>
                    <p class="text-gray-600">
                        Embracing new technologies, sustainable practices, and smarter construction methods to deliver better outcomes for our clients.
                    </p>
                </div>
                
                <!-- Value 4 -->
                <div class="value-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-calendar-check text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Timely Delivery</h3>
                    <p class="text-gray-600">
                        We honor our commitments. Our streamlined processes and experienced team ensure projects are completed on schedule.
                    </p>
                </div>
                
                <!-- Value 5 -->
                <div class="value-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Team Excellence</h3>
                    <p class="text-gray-600">
                        Our 13+ experts are our greatest strength. We invest in our people, fostering a culture of growth, collaboration, and excellence.
                    </p>
                </div>
                
                <!-- Value 6 -->
                <div class="value-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-industry text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">In-House Control</h3>
                    <p class="text-gray-600">
                        With our own manufacturing units, we maintain complete quality control from raw materials to final installation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-[#0A2540] mb-4">Our Journey of Excellence</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    From humble beginnings to becoming a trusted name in construction
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <!-- Timeline Item 1 -->
                <div class="timeline-item mb-12">
                    <div class="timeline-dot"></div>
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="text-[#D4AF37] font-bold mb-2">2012</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-3">The Foundation</h3>
                        <p class="text-gray-600">
                            DC Indo Global was established with a vision to redefine construction standards in India. Started with a small but dedicated team focused on quality residential projects.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="timeline-item mb-12">
                    <div class="timeline-dot"></div>
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="text-[#D4AF37] font-bold mb-2">2015</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-3">Expansion & Growth</h3>
                        <p class="text-gray-600">
                            Expanded into commercial construction. Established our first manufacturing unit to ensure better quality control and timely delivery of materials.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="timeline-item mb-12">
                    <div class="timeline-dot"></div>
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="text-[#D4AF37] font-bold mb-2">2018</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-3">Industrial Expertise</h3>
                        <p class="text-gray-600">
                            Ventured into industrial construction, bringing technical expertise to complex projects. Team grew to 13+ experts across various domains.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="timeline-item mb-12">
                    <div class="timeline-dot"></div>
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="text-[#D4AF37] font-bold mb-2">2022</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-3">National Recognition</h3>
                        <p class="text-gray-600">
                            Completed 100+ projects across India. Received industry recognition for innovation and quality in construction practices.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 5 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="text-[#D4AF37] font-bold mb-2">Present</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-3">Building the Future</h3>
                        <p class="text-gray-600">
                            Continuing our legacy of excellence with ongoing projects across residential, commercial, and industrial sectors. Focused on sustainable construction and technological innovation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Strengths -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-[#0A2540] mb-4">What Sets Us Apart</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    The unique advantages that make DC Indo Global your trusted construction partner
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div class="h-16 w-16 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">In-House Manufacturing</h3>
                    <p class="text-gray-600">Complete control over quality and timelines with our own manufacturing units</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="h-16 w-16 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Expert Team</h3>
                    <p class="text-gray-600">13+ years of collective expertise across all construction domains</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="h-16 w-16 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">End-to-End Service</h3>
                    <p class="text-gray-600">From blueprint to final finish, we handle every aspect seamlessly</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="h-16 w-16 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Quality Assurance</h3>
                    <p class="text-gray-600">Rigorous quality checks at every stage of construction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto bg-gradient-to-r from-[#0A2540] to-[#1a3a5f] rounded-2xl text-white p-12 text-center">
                <h2 class="text-3xl font-bold mb-4">Partner with a Company Built on Strength</h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                    13+ years of excellence, in-house manufacturing capabilities, and a team of experts ready to bring your vision to life with unmatched quality and reliability.
                </p>
                {{-- <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+911234567890" class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-8 py-3 rounded-lg font-medium transition duration-300">
                        <i class="fas fa-phone mr-2"></i> Call Our Experts
                    </a>
                    <a href="/projects" class="bg-transparent border-2 border-white hover:bg-white hover:text-[#0A2540] text-white px-8 py-3 rounded-lg font-medium transition duration-300">
                        <i class="fas fa-building mr-2"></i> View Our Projects
                    </a>
                </div> --}}
            </div>
        </div>
    </section>

   @endsection

    <!-- SCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize stagger animation
            const staggerSection = document.querySelector('.stagger-animation');
            if (staggerSection) {
                staggerSection.classList.add('animate');
            }
            
            // Counter animation
            const counters = document.querySelectorAll('.counter-number');
            counters.forEach(counter => {
                const target = parseInt(counter.innerText);
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.innerText = Math.ceil(current) + (counter.innerText.includes('+') ? '+' : '');
                        setTimeout(updateCounter, 30);
                    } else {
                        counter.innerText = target + (counter.innerText.includes('+') ? '+' : '');
                    }
                };
                
                // Start counter when in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(counter);
            });
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function() {
                    // This would toggle a mobile menu in a real implementation
                    // alert('Mobile menu would open here');
                });
            }
        });
    </script>
</body>
</html>