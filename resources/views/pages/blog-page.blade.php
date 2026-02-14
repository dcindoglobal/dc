<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Future of Sustainable Construction in India - DC Indo Global Blog</title>
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
        
        .visible {
            opacity: 1;
            transform: translate(0, 0);
        }
        
        /* Card styling */
        .card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 1rem;
        }
        
        /* Blog content styling */
        .blog-content h2 {
            font-size: 1.875rem;
            font-weight: 700;
            color: #0A2540;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        
        .blog-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #0A2540;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }
        
        .blog-content p {
            margin-bottom: 1.25rem;
            line-height: 1.7;
            color: #4B5563;
        }
        
        .blog-content ul, .blog-content ol {
            margin-bottom: 1.25rem;
            padding-left: 1.5rem;
        }
        
        .blog-content li {
            margin-bottom: 0.5rem;
            line-height: 1.7;
            color: #4B5563;
        }
        
        .blog-content blockquote {
            border-left: 4px solid #D4AF37;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #6B7280;
        }
        
        /* Tag styling */
        .tag {
            display: inline-block;
            background-color: #f3f4f6;
            color: #4b5563;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        
        .tag:hover {
            background-color: #e5e7eb;
        }
        
        /* Share buttons */
        .share-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            transition: all 0.3s;
        }
        
        .share-btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-white">


     @extends('layouts.app')

    @section('title', 'Home - DC Indo Global')

    @section('content')






    <!-- Page Header -->
    <section class="h-96 bg-cover bg-center flex items-center justify-center text-white" 
             style="background-image: linear-gradient(rgba(10, 37, 64, 0.7), rgba(10, 37, 64, 0.7)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200')">
        <div class="w-full h-full flex items-center justify-center">
            <div class="text-center max-w-4xl px-4">
                <div class="flex justify-center mb-6">
                    <span class="tag bg-[#D4AF37] text-white text-sm">Sustainability</span>
                </div>
                <h1 id="page-title" class="text-4xl md:text-5xl lg:text-6xl font-bold fade-in-up mb-6">The Future of Sustainable Construction in India</h1>
                <div class="flex flex-wrap justify-center items-center text-lg fade-in-up">
                    <div class="flex items-center mr-6 mb-2">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white font-bold mr-3">
                            AS
                        </div>
                        <span>Arun Sharma</span>
                    </div>
                    <div class="flex items-center mr-6 mb-2">
                        <i data-lucide="calendar" class="w-5 h-5 mr-2"></i>
                        <span>June 15, 2024</span>
                    </div>
                    <div class="flex items-center mb-2">
                        <i data-lucide="clock" class="w-5 h-5 mr-2"></i>
                        <span>8 min read</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Blog Content -->
                <div class="lg:w-2/3">
                    <article class="blog-content">
                        <!-- Introduction -->
                        <p class="text-xl text-gray-700 font-medium mb-8">
                            As India continues its rapid urbanization, the construction industry faces both immense opportunities and significant challenges. Sustainable construction practices are no longer optional but essential for creating resilient, efficient, and environmentally responsible infrastructure.
                        </p>
                        
                        <h2>The Current Landscape of Construction in India</h2>
                        
                        <p>
                            India's construction sector is one of the largest in the world, contributing significantly to the nation's GDP. However, traditional construction methods have often prioritized speed and cost over environmental considerations. The industry accounts for approximately 22% of India's total greenhouse gas emissions and consumes vast amounts of natural resources.
                        </p>
                        
                        <div class="my-8">
                            <img src="https://images.unsplash.com/photo-1541976590-713941681591?w=1000" alt="Modern construction site" class="w-full rounded-2xl shadow-lg">
                            <p class="text-center text-gray-500 text-sm mt-2">Modern construction techniques are evolving to incorporate sustainable practices</p>
                        </div>
                        
                        <h2>Key Sustainable Construction Trends</h2>
                        
                        <h3>1. Green Building Materials</h3>
                        
                        <p>
                            The shift toward eco-friendly materials is gaining momentum across India. Traditional materials like concrete and steel are being supplemented or replaced with sustainable alternatives:
                        </p>
                        
                        <ul>
                            <li><strong>Bamboo:</strong> A rapidly renewable resource with excellent structural properties</li>
                            <li><strong>Recycled steel and plastic:</strong> Reducing waste and energy consumption</li>
                            <li><strong>Low-carbon concrete:</strong> Incorporating industrial byproducts like fly ash</li>
                            <li><strong>Rammed earth:</strong> Traditional technique with modern applications</li>
                        </ul>
                        
                        <h3>2. Energy-Efficient Design</h3>
                        
                        <p>
                            Building orientation, natural ventilation, and passive solar design are becoming standard practices in sustainable construction. These approaches significantly reduce energy consumption for heating, cooling, and lighting.
                        </p>
                        
                        <blockquote>
                            "Sustainable construction isn't just about materials—it's about designing buildings that work with their environment rather than against it."
                        </blockquote>
                        
                        <h3>3. Water Conservation Systems</h3>
                        
                        <p>
                            With water scarcity affecting many parts of India, sustainable construction emphasizes rainwater harvesting, greywater recycling, and efficient plumbing fixtures. These systems can reduce municipal water consumption by 30-50%.
                        </p>
                        
                        <div class="bg-blue-50 p-6 rounded-2xl my-8 border-l-4 border-[#0A2540]">
                            <h3 class="text-xl font-bold text-[#0A2540] mb-2">DC Indo Global's Sustainable Initiatives</h3>
                            <p class="text-gray-700">
                                At DC Indo Global, we've implemented comprehensive sustainability protocols across all our projects. Our recent commercial complex in Hyderabad achieved a 40% reduction in energy consumption and 50% water savings compared to conventional buildings of similar scale.
                            </p>
                        </div>
                        
                        <h2>Government Initiatives and Policies</h2>
                        
                        <p>
                            The Indian government has launched several initiatives to promote sustainable construction:
                        </p>
                        
                        <ul>
                            <li><strong>Energy Conservation Building Code (ECBC):</strong> Mandatory efficiency standards for commercial buildings</li>
                            <li><strong>Green Rating for Integrated Habitat Assessment (GRIHA):</strong> National rating system for green buildings</li>
                            <li><strong>Leadership in Energy and Environmental Design (LEED):</strong> Internationally recognized certification promoted in India</li>
                            <li><strong>Smart Cities Mission:</strong> Incorporating sustainability in urban development</li>
                        </ul>
                        
                        <h2>Challenges and Opportunities</h2>
                        
                        <p>
                            While the momentum for sustainable construction is building, several challenges remain:
                        </p>
                        
                        <ul>
                            <li>Higher upfront costs for green technologies</li>
                            <li>Limited awareness among smaller developers</li>
                            <li>Supply chain issues for sustainable materials</li>
                            <li>Need for skilled labor trained in green techniques</li>
                        </ul>
                        
                        <p>
                            However, these challenges present significant opportunities for innovation, job creation, and leadership in the global construction industry.
                        </p>
                        
                        <h2>The Road Ahead</h2>
                        
                        <p>
                            The future of sustainable construction in India looks promising. With technological advancements, growing environmental awareness, and supportive policies, we're witnessing a paradigm shift in how buildings are designed, constructed, and operated.
                        </p>
                        
                        <p>
                            At DC Indo Global, we're committed to being at the forefront of this transformation, developing innovative solutions that balance economic growth with environmental responsibility.
                        </p>
                        
                        <!-- Tags -->
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <div class="flex flex-wrap gap-2">
                                <span class="tag">Sustainable Construction</span>
                                <span class="tag">Green Building</span>
                                <span class="tag">India</span>
                                <span class="tag">Eco-friendly Materials</span>
                                <span class="tag">Energy Efficiency</span>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Author Bio -->
                    <div class="card p-8 mt-12 bg-gray-50">
                        <div class="flex flex-col md:flex-row items-center md:items-start">
                            <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                                <div class="w-20 h-20 bg-[#0A2540] rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    AS
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-[#0A2540] mb-2">About the Author</h3>
                                <p class="text-gray-700 mb-4">
                                    Arun Sharma is the Head of Sustainability at DC Indo Global with over 15 years of experience in green building design and implementation. He has led numerous award-winning sustainable construction projects across India and serves on several national committees for environmental building standards.
                                </p>
                                <div class="flex space-x-4">
                                    <a href="https://www.linkedin.com/company/dc-indo-global/?viewAsMember=true" class="text-[#0A2540] hover:text-[#D4AF37] transition-colors">
                                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                                    </a>
                                    {{-- 
                                    <a href="#" class="text-[#0A2540] hover:text-[#D4AF37] transition-colors">
                                        <i data-lucide="twitter" class="w-5 h-5"></i>
                                    </a>
                                    --}}
                                    <a href="mailto:info@dcindoglobal.com" class="text-[#0A2540] hover:text-[#D4AF37] transition-colors">
                                        <i data-lucide="mail" class="w-5 h-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Share Section -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row items-center justify-between">
                            <h3 class="text-lg font-bold text-[#0A2540] mb-4 sm:mb-0">Share this article</h3>
                            <div class="flex space-x-3">
                                {{-- 
                                <a href="#" class="share-btn bg-[#3b5998] text-white">
                                    <i data-lucide="facebook" class="w-4 h-4"></i>
                                </a>
                                <a href="#" class="share-btn bg-[#1da1f2] text-white">
                                    <i data-lucide="twitter" class="w-4 h-4"></i>
                                </a>
                                --}}
                                <a href="#" class="share-btn bg-[#0077b5] text-white">
                                    <i data-lucide="linkedin" class="w-4 h-4"></i>
                                </a>
                                <a href="#" class="share-btn bg-[#25d366] text-white">
                                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation Between Posts -->
                    <div class="flex flex-col sm:flex-row justify-between mt-12 pt-8 border-t border-gray-200">
                        <a href="#" class="group flex items-center mb-4 sm:mb-0">
                            <i data-lucide="arrow-left" class="w-5 h-5 mr-2 text-[#0A2540] group-hover:text-[#D4AF37] transition-colors"></i>
                            <div>
                                <p class="text-sm text-gray-500">Previous Article</p>
                                <p class="text-[#0A2540] font-medium group-hover:text-[#D4AF37] transition-colors">Innovations in Pre-Cast Concrete Technology</p>
                            </div>
                        </a>
                        <a href="#" class="group flex items-center text-right sm:text-left ml-auto">
                            <div>
                                <p class="text-sm text-gray-500">Next Article</p>
                                <p class="text-[#0A2540] font-medium group-hover:text-[#D4AF37] transition-colors">Safety First: Implementing New Protocols</p>
                            </div>
                            <i data-lucide="arrow-right" class="w-5 h-5 ml-2 text-[#0A2540] group-hover:text-[#D4AF37] transition-colors"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:w-1/3">
                    <!-- Table of Contents -->
                    <div class="card p-6 bg-white mb-8 sticky top-8">
                        <h3 class="text-xl font-bold text-[#0A2540] mb-4">Table of Contents</h3>
                        <ul class="space-y-2">
                            <li><a href="#current-landscape" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">
                                <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>
                                <span>The Current Landscape</span>
                            </a></li>
                            <li><a href="#sustainable-trends" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">
                                <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>
                                <span>Sustainable Construction Trends</span>
                            </a></li>
                            <li><a href="#government-initiatives" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">
                                <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>
                                <span>Government Initiatives</span>
                            </a></li>
                            <li><a href="#challenges-opportunities" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">
                                <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>
                                <span>Challenges & Opportunities</span>
                            </a></li>
                            <li><a href="#road-ahead" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">
                                <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>
                                <span>The Road Ahead</span>
                            </a></li>
                        </ul>
                    </div>
                    
                    <!-- Related Posts -->
                    <div class="card p-6 bg-white mb-8">
                        <h3 class="text-xl font-bold text-[#0A2540] mb-4">Related Articles</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=200" alt="Safety protocols" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                                <div>
                                    <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">Safety First: Implementing New Protocols at DC Indo Global</a>
                                    <p class="text-gray-500 text-sm mt-1">May 28, 2024</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200" alt="Green materials" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                                <div>
                                    <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">Green Building Materials: What's Next for Sustainable Construction</a>
                                    <p class="text-gray-500 text-sm mt-1">May 5, 2024</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=200" alt="AI in construction" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                                <div>
                                    <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">The Role of AI in Modern Construction Management</a>
                                    <p class="text-gray-500 text-sm mt-1">April 10, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Newsletter Signup -->
                    <div class="card p-6 bg-[#0A2540] text-white">
                        <h3 class="text-xl font-bold mb-4">Stay Updated</h3>
                        <p class="mb-4 text-gray-300">Get the latest articles and industry insights delivered to your inbox.</p>
                        <form class="space-y-3">
                            <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded-lg text-gray-800">
                            <button type="submit" class="w-full bg-[#D4AF37] text-white py-2 rounded-lg font-medium hover:bg-[#c19b2a] transition-colors">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-[#0A2540] mb-6">Interested in Sustainable Construction?</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">Our team of sustainability experts can help you implement green building practices in your next project.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="px-6 py-3 bg-[#0A2540] text-white rounded-lg font-medium hover:bg-[#1a3a5c] transition-colors">Consult Our Experts</a>
                <a href="#" class="px-6 py-3 bg-white text-[#0A2540] border border-[#0A2540] rounded-lg font-medium hover:bg-gray-100 transition-colors">View Sustainable Projects</a>
            </div>
        </div>
    </section>

   
@endsection


    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Smooth scrolling for table of contents
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add IDs to headings for table of contents navigation
        document.addEventListener('DOMContentLoaded', function() {
            const headings = document.querySelectorAll('.blog-content h2');
            const headingIds = [
                'current-landscape',
                'sustainable-trends',
                'government-initiatives',
                'challenges-opportunities',
                'road-ahead'
            ];
            
            headings.forEach((heading, index) => {
                if(headingIds[index]) {
                    heading.id = headingIds[index];
                }
            });
            
            // Intersection Observer for animations
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
            document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
                observer.observe(el);
            });
            
            // Animate page title immediately
            document.getElementById('page-title').classList.add('visible');
        });
    </script>





</body>
</html>