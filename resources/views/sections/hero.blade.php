<style>
.hero-bg {
    background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920');
    background-size: cover;
    background-position: center;
}

.scroll-indicator {
    width: 30px;
    height: 50px;
    border: 2px solid white;
    border-radius: 15px;
    position: relative;
}

.scroll-indicator::before {
    content: '';
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 8px;
    background: white;
    border-radius: 2px;
    animation: scroll 2s infinite;
}

@keyframes scroll {
    0% { transform: translateX(-50%) translateY(0); opacity: 1; }
    100% { transform: translateX(-50%) translateY(20px); opacity: 0; }
}
</style>

<section class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden py-10 md:py-0">
    <!-- Background -->
    <div class="absolute inset-0 z-0 hero-bg">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0A2540]/95 to-[#1E3A5F]/85"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 sm:px-6 md:px-16 z-10 flex flex-col md:flex-row items-center justify-between gap-12">

        <!-- LEFT CONTENT -->
        <div class="w-full max-w-xl text-center md:text-left">
            <div class="inline-block mb-4">
                <span class="bg-[#D4AF37] text-white px-4 py-2 rounded-full text-xs sm:text-sm font-semibold">
                    Building Excellence since inception
                </span>
            </div>

            <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold text-white mb-4 leading-tight">
                Engineer Excellence,<br>
                <span class="text-[#D4AF37]">From Foundation to Finish</span>
            </h1>

            <p class="text-base sm:text-lg text-gray-200 mb-6 leading-relaxed mx-auto md:mx-0">
Over 13+ years of experience in delivering world-class construction projects with in-house technology and manufacturing excellence.            </p>

            <div class="flex flex-col sm:flex-row items-center sm:justify-start justify-center gap-4">
                <a href="{{ route('services') }}" class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-6 py-3 font-semibold rounded-lg shadow-lg transition-all duration-300 w-full sm:w-auto text-center">
                    VIEW OUR SERVICES
                    <i class="ml-2 fas fa-arrow-right"></i>
                </a>

                <a href="{{ route('contact') }}" class="border border-white text-white hover:bg-white hover:text-[#0A2540] px-6 py-3 font-semibold rounded-lg transition-all duration-300 w-full sm:w-auto text-center">
                    GET A QUOTE
                </a>
            </div>
        </div>

        <!-- RIGHT FORM (Responsive) -->
        <div class="w-full md:w-96 max-w-sm mx-auto md:mx-0">
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 sm:p-8 border border-white/20 shadow-lg">
                <h2 class="text-xl sm:text-2xl font-bold text-white mb-4 text-center md:text-left">Request a Quote</h2>

                <form class="space-y-4">
                    <div>
                        <label class="block text-gray-200 text-sm mb-1">Full Name</label>
                        <input type="text" placeholder="Enter your name" 
                            class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50" />
                    </div>
                    <div>
                        <label class="block text-gray-200 text-sm mb-1">Email</label>
                        <input type="email" placeholder="Enter your email" 
                            class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50" />
                    </div>
                    <div>
                        <label class="block text-gray-200 text-sm mb-1">Message</label>
                        <textarea rows="3" placeholder="Write your message..." 
                            class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-white/20 hover:bg-white/30 text-white font-semibold py-3 rounded-lg transition-all duration-300">
                        SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-10 hidden sm:block">
        <div class="scroll-indicator"></div>
    </div>

    <!-- Lottie Animation -->
    <div class="absolute bottom-5 right-5 w-24 h-24 sm:w-40 sm:h-40 hidden sm:block" id="lottie-hero"></div>
</section>
