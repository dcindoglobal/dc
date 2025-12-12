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
        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
</style>

    <!-- Top Bar -->
    <div class="top-bar text-white py-2 text-sm">
        <div class="container mx-auto px-4 md:px-10 flex flex-row md:flex-row sm:flex-row justify-between items-center gap-2 sm:gap-0">
            <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6 text-center sm:text-left">
                <a href="tel:+911234567890" class="flex items-center justify-center hover:text-[#D4AF37] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mr-2">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                    </svg>
                    <span>+91 123 456 7890</span>
                </a>
                <a href="mailto:info@dcindoglobal.com" class="flex items-center hidden md:block justify-center hover:text-[#D4AF37] transition-colors">
                    <i class="far fa-envelope mr-2 text-xs"></i>
                    <span>info@dcindoglobal.com</span>
                </a>
            </div>
            <!-- Social Icons -->
            <div class="flex items-center space-x-4 mt-2 sm:mt-0">
                <!-- YouTube -->
                <div class="relative group">
                    <a href="#" class="hover:text-[#D4AF37] transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <span
                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap"
                        style="z-index: 999;">
                        YouTube
                    </span>
                </div>
                <!-- LinkedIn -->
                <div class="relative group">
                    <a href="#" class="hover:text-[#D4AF37] transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <span
                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-99"
                        style="z-index: 999;">
                        LinkedIn
                    </span>
                </div>
                <!-- Twitter -->
                <div class="relative group">
                    <a href="#" class="hover:text-[#D4AF37] transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <span
                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap"
                        style="z-index: 999;">
                        Twitter
                    </span>
                </div>
                <!-- Facebook -->
                <div class="relative group">
                    <a href="#" class="hover:text-[#D4AF37] transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <span
                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap"
                        style="z-index: 999;">
                        Facebook
                    </span>
                </div>
                <!-- Instagram -->
                <div class="relative group">
                    <a href="#" class="hover:text-[#D4AF37] transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <span
                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap"
                        style="z-index: 999;">
                        Instagram
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="header-main sticky top-0 z-50 bg-white shadow">
        <div class="container mx-auto px-4 md:px-10 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
               <a href="{{ url('/') }}">
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 sm:w-16 md:w-18">
                        <img src="{{ asset('images/logo-dec.png') }}" alt="Logo Text" class="w-36 sm:w-44 md:w-50">
                    </div>
                </a>

                
                <!-- Navigation -->
                <nav class="hidden lg:flex space-x-6 xl:space-x-8">
                    <a href="/" class="nav-link text-[#0A2540]">HOME</a>
                    <a href="/about" class="nav-link text-[#0A2540]">ABOUT US</a>
                    <a href="/products" class="nav-link text-[#0A2540]">PRODUCTS</a>
                    <a href="/services" class="nav-link text-[#0A2540]">SERVICES</a>
                    <a href="/resources" class="nav-link text-[#0A2540]">RESOURCES</a>
                    <a href="/careers" class="nav-link text-[#0A2540]">CAREERS</a>
                    <a href="/contact" class="nav-link text-[#0A2540]">CONTACT US</a>
                </nav>
                
                <!-- CTA Button -->
                <div id="openModalBtn"
                    class="hidden md:block rounded-lg bg-[#D4AF37] px-3 py-2 text-white font-semibold text-sm cursor-pointer hover:bg-[#C4A137] transition-colors">
                    GET A QUOTE
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="text-[#0A2540] focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- MODAL BACKDROP -->
            <div id="quoteModal"
                class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center hidden z-50 transition-opacity">
                <!-- MODAL CONTAINER -->
                <div class="bg-white rounded-2xl shadow-2xl w-11/12 sm:w-[400px] p-8 relative animate-fadeIn">
                    <!-- CLOSE BUTTON -->
                    <button id="closeModalBtn"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition">
                        ✕
                    </button>
                    <!-- MODAL CONTENT -->
                    <h2 class="text-2xl font-bold mb-4 text-gray-900">Request a Quote</h2>
                    <p class="text-gray-500 text-sm mb-6">Fill in your details and we'll get back to you shortly.</p>
                    <form class="space-y-4">
                        <input type="text" placeholder="Your Name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 outline-none">
                        <input type="email" placeholder="Your Email"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 outline-none">
                        <textarea placeholder="Your Message"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 h-24 focus:ring-2 focus:ring-yellow-400 outline-none"></textarea>
                        <button type="submit"
                            class="w-full bg-[#D4AF37] text-white py-2 rounded-lg font-semibold hover:bg-[#C4A137] transition">
                            Submit Request
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4 text-center">
                    <a href="/" class="nav-link text-[#0A2540]">HOME</a>
                    <a href="/about" class="nav-link text-[#0A2540]">ABOUT US</a>
                    <a href="/products" class="nav-link text-[#0A2540]">PRODUCTS</a>
                    <a href="/services" class="nav-link text-[#0A2540]">SERVICES</a>
                    <a href="/resources" class="nav-link text-[#0A2540]">RESOURCES</a>
                    <a href="/careers" class="nav-link text-[#0A2540]">CAREERS</a>
                    <a href="/contact" class="nav-link text-[#0A2540]">CONTACT US</a>
                    <div class="rounded-lg bg-[#D4AF37] px-3 py-2 text-white font-semibold text-center cursor-pointer" id="mobile-quote-btn">
                        GET A QUOTE
                    </div>
                </div>
            </div>
        </div>
    </header>

   

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Modal functionality
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const quoteModal = document.getElementById('quoteModal');
        const mobileQuoteBtn = document.getElementById('mobile-quote-btn');

        openModalBtn.addEventListener('click', () => {
            quoteModal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            quoteModal.classList.add('hidden');
        });

        mobileQuoteBtn.addEventListener('click', () => {
            quoteModal.classList.remove('hidden');
            // Also close mobile menu when quote button is clicked
            document.getElementById('mobile-menu').classList.add('hidden');
        });

        // Close when clicking outside modal content
        quoteModal.addEventListener('click', (e) => {
            if (e.target === quoteModal) {
                quoteModal.classList.add('hidden');
            }
        });

        // Header scroll effect
        window.addEventListener('scroll', function () {
            const header = document.querySelector('.header-main');
            if (window.scrollY > 100) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });
    </script>
