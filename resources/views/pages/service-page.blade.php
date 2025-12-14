<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management - DC Indo Global Construction</title>
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
        
        .service-hero {
            background: linear-gradient(rgba(10, 37, 64, 0.8), rgba(10, 37, 64, 0.9)), url('https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=1920');
            background-size: cover;
            background-position: center;
        }
        
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .process-step {
            position: relative;
        }
        
        .process-step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 40px;
            left: 50%;
            width: 80%;
            height: 2px;
            background: #D4AF37;
            transform: translateX(-50%);
        }
        
        @media (max-width: 768px) {
            .process-step:not(:last-child):after {
                display: none;
            }
        }
        
        .tab-button {
            transition: all 0.3s ease;
        }
        
        .tab-button.active {
            background-color: #D4AF37;
            color: white;
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
    </style>
</head>
<body class="bg-white">


     @extends('layouts.app')

    @section('title', 'Home - DC Indo Global')

    @section('content')



   

    <!-- Service Hero Section -->
    <section class="service-hero py-24 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/20 backdrop-blur-sm mb-6">
                    <i class="fas fa-home mr-2 text-[#D4AF37]"></i>
                    <span class="text-sm font-medium">Construction Management</span>
                </div>
                <h1 class="text-5xl font-bold mb-6 fade-in-up">Professional Construction Management Services</h1>
                <p class="text-xl mb-8 fade-in-up" style="animation-delay: 0.3s;">
                    Comprehensive project oversight from concept to completion, ensuring your construction project stays on time, on budget, and exceeds quality expectations.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 fade-in-up" style="animation-delay: 0.5s;">
                    <a href="#contact" class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-8 py-3 rounded-lg font-medium text-center transition duration-300">
                        Request Consultation
                    </a>
                    <a href="#process" class="bg-transparent border-2 border-white hover:bg-white hover:text-[#0A2540] text-white px-8 py-3 rounded-lg font-medium text-center transition duration-300">
                        Our Process
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-[#0A2540] mb-6">What is Construction Management?</h2>
                    <p class="text-gray-600 mb-6">
                        Construction Management is a professional service that uses specialized, project management techniques to oversee the planning, design, and construction of a project, from its beginning to its end.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our construction management team acts as your representative, ensuring that your project objectives are met regarding quality, cost, schedule, and scope. We coordinate all aspects of the construction process while managing the relationship between all project stakeholders.
                    </p>
                    
                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-[#D4AF37]">
                        <h3 class="font-bold text-lg text-[#0A2540] mb-2">Why Choose Our Construction Management Services?</h3>
                        <p class="text-gray-600">
                            With over 15 years of experience managing complex construction projects, we have the expertise to navigate challenges, mitigate risks, and deliver successful outcomes for our clients.
                        </p>
                    </div>
                </div>
                
                <div class="lg:pl-8">
                    <div class="bg-gray-50 rounded-xl p-2">
                        <img 
                            src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800" 
                            alt="Construction Management" 
                            class="w-full h-80 object-cover rounded-lg"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-[#0A2540] mb-4">Our Construction Management Approach</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    We employ a comprehensive approach that covers all aspects of your construction project
                </p>
            </div>
            
            <div class="stagger-animation grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-clipboard-list text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Project Planning</h3>
                    <p class="text-gray-600">
                        Detailed project planning including scope definition, scheduling, budgeting, and resource allocation to set your project up for success from day one.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-money-bill-wave text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Cost Management</h3>
                    <p class="text-gray-600">
                        Comprehensive cost planning, estimation, and control to ensure your project stays within budget while maintaining quality standards.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-calendar-alt text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Time Management</h3>
                    <p class="text-gray-600">
                        Advanced scheduling techniques and progress monitoring to keep your project on track and deliver on time, every time.
                    </p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-clipboard-check text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Quality Assurance</h3>
                    <p class="text-gray-600">
                        Rigorous quality control processes and inspections to ensure all work meets or exceeds industry standards and client expectations.
                    </p>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-shield-alt text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Risk Management</h3>
                    <p class="text-gray-600">
                        Proactive identification and mitigation of potential risks to minimize disruptions and keep your project moving forward smoothly.
                    </p>
                </div>
                
                <!-- Feature 6 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="h-12 w-12 rounded-lg bg-[#D4AF37] flex items-center justify-center text-white mb-4">
                        <i class="fas fa-handshake text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-3">Contract Administration</h3>
                    <p class="text-gray-600">
                        Management of all contracts, subcontracts, and agreements to ensure compliance and protect your interests throughout the project.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section id="process" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-[#0A2540] mb-4">Our Construction Management Process</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    A structured approach to ensure your project's success from conception to completion
                </p>
            </div>
            
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Step 1 -->
                    <div class="process-step text-center">
                        <div class="h-20 w-20 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Project Initiation</h3>
                        <p class="text-gray-600">
                            We begin with understanding your vision, requirements, constraints, and objectives to define project scope and feasibility.
                        </p>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="process-step text-center">
                        <div class="h-20 w-20 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Planning & Design</h3>
                        <p class="text-gray-600">
                            Detailed project planning, scheduling, budgeting, and design development to create a comprehensive project roadmap.
                        </p>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="process-step text-center">
                        <div class="h-20 w-20 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Preconstruction</h3>
                        <p class="text-gray-600">
                            Contractor selection, procurement, permitting, and mobilization to prepare for the construction phase.
                        </p>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="process-step text-center">
                        <div class="h-20 w-20 rounded-full bg-[#D4AF37] flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">4</div>
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Construction & Control</h3>
                        <p class="text-gray-600">
                            Active project oversight, quality control, progress monitoring, and issue resolution during construction.
                        </p>
                    </div>
                </div>
                
                <div class="mt-12 bg-[#0A2540] text-white rounded-xl p-8">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h3 class="text-2xl font-bold mb-4">Ready to Start Your Project?</h3>
                            <p class="text-gray-300 mb-6">
                                Let our experienced construction management team guide your project to success. Contact us today for a free consultation.
                            </p>
                            <a href="#contact" class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-6 py-3 rounded-lg font-medium inline-block transition duration-300">
                                Get Started Today
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <div class="bg-white/10 p-4 rounded-lg backdrop-blur-sm">
                                <i class="fas fa-headset text-5xl text-[#D4AF37]"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#0A2540] mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-5xl mx-auto">
                    Common questions about our construction management services
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <!-- FAQ 1 -->
                    <div class="border-b">
                        <button class="faq-question w-full text-left p-6 font-medium text-lg text-[#0A2540] flex justify-between items-center">
                            <span>What is the difference between a Construction Manager and a General Contractor?</span>
                            <i class="fas fa-chevron-down text-[#D4AF37]"></i>
                        </button>
                        <div class="faq-answer p-6 pt-0 text-gray-600 hidden">
                            A Construction Manager acts as the owner's representative, providing professional management services throughout the project. A General Contractor is responsible for the physical construction work. While a GC focuses on building, a CM focuses on managing the entire process from planning to completion, including coordinating with architects, engineers, and contractors.
                        </div>
                    </div>
                    
                    <!-- FAQ 2 -->
                    <div class="border-b">
                        <button class="faq-question w-full text-left p-6 font-medium text-lg text-[#0A2540] flex justify-between items-center">
                            <span>How does construction management save me money?</span>
                            <i class="fas fa-chevron-down text-[#D4AF37]"></i>
                        </button>
                        <div class="faq-answer p-6 pt-0 text-gray-600 hidden">
                            Construction management can save you money through value engineering, efficient scheduling that reduces downtime, proactive risk management that prevents costly issues, competitive bidding processes, and careful budget control throughout the project lifecycle. Our expertise helps avoid common pitfalls that lead to budget overruns.
                        </div>
                    </div>
                    
                    <!-- FAQ 3 -->
                    <div class="border-b">
                        <button class="faq-question w-full text-left p-6 font-medium text-lg text-[#0A2540] flex justify-between items-center">
                            <span>At what project stage should I hire a Construction Manager?</span>
                            <i class="fas fa-chevron-down text-[#D4AF37]"></i>
                        </button>
                        <div class="faq-answer p-6 pt-0 text-gray-600 hidden">
                            The ideal time to hire a Construction Manager is during the pre-design or early design phase. This allows us to provide valuable input on constructability, materials selection, scheduling, and budgeting while the design is still flexible. However, we can provide value at any stage of your project.
                        </div>
                    </div>
                    
                    <!-- FAQ 4 -->
                    <div class="border-b">
                        <button class="faq-question w-full text-left p-6 font-medium text-lg text-[#0A2540] flex justify-between items-center">
                            <span>What types of projects do you manage?</span>
                            <i class="fas fa-chevron-down text-[#D4AF37]"></i>
                        </button>
                        <div class="faq-answer p-6 pt-0 text-gray-600 hidden">
                            We manage a wide range of construction projects including commercial buildings, residential complexes, industrial facilities, healthcare facilities, educational institutions, hospitality projects, and specialized structures. Our team has experience with projects ranging from $500,000 to $50+ million in value.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto bg-gradient-to-r from-[#0A2540] to-[#1a3a5f] rounded-2xl text-white p-12 text-center">
                <h2 class="text-3xl font-bold mb-4">Start Your Project With Confidence</h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                    Let's discuss how our construction management services can bring your vision to life while saving you time, money, and stress.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+911234567890" class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-8 py-3 rounded-lg font-medium transition duration-300">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
                    <a href="mailto:info@dcindoglobal.com" class="bg-transparent border-2 border-white hover:bg-white hover:text-[#0A2540] text-white px-8 py-3 rounded-lg font-medium transition duration-300">
                        <i class="fas fa-envelope mr-2"></i> Email Us
                    </a>
                </div>
            </div>
        </div>
    </section>




   @endsection

    <!-- SCRIPT -->
    <script>
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const quoteModal = document.getElementById('quoteModal');

        openModalBtn.addEventListener('click', () => {
            quoteModal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            quoteModal.classList.add('hidden');
        });

        // Close when clicking outside modal content
        quoteModal.addEventListener('click', (e) => {
            if (e.target === quoteModal) {
                quoteModal.classList.add('hidden');
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize stagger animation
            const staggerSection = document.querySelector('.stagger-animation');
            staggerSection.classList.add('animate');
            
            // FAQ functionality
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    
                    // Toggle answer visibility
                    if (answer.classList.contains('hidden')) {
                        answer.classList.remove('hidden');
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    } else {
                        answer.classList.add('hidden');
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                });
            });
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function() {
                    // This would toggle a mobile menu in a real implementation
                    alert('Mobile menu would open here');
                });
            }
        });
    </script>
</body>
</html>