<footer class="bg-[#0A2540] text-white pt-16 pb-8">
    <div class="container mx-auto px-4 md:px-10">
        <div class="grid md:grid-cols-5 gap-8 mb-12">

            <!-- Company Info -->
            <div>
                <h3 class="text-2xl font-bold mb-4">
                    DC INDO GLOBAL<br>Pvt. Ltd.
                </h3>
                <p class="text-gray-300">
                    Engineering India's Future — One Landmark at a Time.
                </p>

                <!-- Social Media -->
                <div class="flex gap-3 mt-4">
                    {{-- LinkedIn --}}
                    <div class="relative group">
                        <a href="https://www.linkedin.com/company/dc-indo-global/?viewAsMember=true"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#D4AF37] transition-colors">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <span
                            class="absolute left-1/2 -translate-x-1/2 -bottom-9 bg-[#D4AF37] text-white text-xs font-semibold rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-all">
                            LinkedIn
                        </span>
                    </div>

                    {{-- Instagram --}}
                    <div class="relative group">
                        <a href="https://www.instagram.com/dcindoglobal"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#D4AF37] transition-colors">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <span
                            class="absolute left-1/2 -translate-x-1/2 -bottom-9 bg-[#D4AF37] text-white text-xs font-semibold rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-all">
                            Instagram
                        </span>
                    </div>

                    {{-- YouTube --}}
                    <div class="relative group">
                        <a href="https://www.youtube.com/@DCINDOGLOBAL"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#D4AF37] transition-colors">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                        <span
                            class="absolute left-1/2 -translate-x-1/2 -bottom-9 bg-[#D4AF37] text-white text-xs font-semibold rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-all">
                            YouTube
                        </span>
                    </div>

                    {{-- Commented out others --}}
                    {{-- 
                    @foreach(['facebook', 'twitter'] as $social)
                    <div class="relative group">
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#D4AF37] transition-colors">
                            <i class="fab fa-{{ $social }} text-white"></i>
                        </a>
                        <span
                            class="absolute left-1/2 -translate-x-1/2 -bottom-9 bg-[#D4AF37] text-white text-xs font-semibold rounded-md px-2 py-1 opacity-0 group-hover:opacity-100 transition-all">
                            {{ ucfirst($social) }}
                        </span>
                    </div>
                    @endforeach
                    --}}
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="text-gray-300 hover:text-white">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="text-gray-300 hover:text-white">About Us</a></li>
                    <li><a href="{{ url('/products') }}" class="text-gray-300 hover:text-white">Products</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-white">Services</a></li>
                </ul>
            </div>

            <!-- Our Products -->
            <div>
                <h4 class="text-lg font-bold mb-4">Our Products</h4>
                <ul class="space-y-2">
                    @foreach([
                        'Structural Materials',
                        'Modular Furnishings',
                        'Green Building Products',
                        'Paver & Kerb Stone'
                    ] as $product)
                    <li>
                        <a href="{{ url('/products') }}"
                           class="text-gray-300 hover:text-white">
                            {{ $product }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Our Services -->
            <div>
                <h4 class="text-lg font-bold mb-4">Our Services</h4>
                <ul class="space-y-2">
                    @foreach([
                        'Residential Construction',
                        'Commercial Projects',
                        'Industrial Buildings',
                        'Infrastructure Development'
                    ] as $service)
                    <li>
                        <a href="{{ url('/services') }}"
                           class="text-gray-300 hover:text-white">
                            {{ $service }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-lg font-bold mb-4">Contact Us</h4>
                <address class="text-gray-300 not-italic">
                 48, First Floor, DLF Market, Sector 11D, Faridabad, Haryana-121006<br>
                    <a href="tel:+919919910405" class="hover:text-white">
                        +91 99199 10405
                    </a><br>
                    <a href="mailto:info@dcindoglobal.com" class="hover:text-white">
                        info@dcindoglobal.com
                    </a>
                </address>
            </div>

        </div>

        <!-- Bottom Section -->
        <div class="pt-8 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">
                © 2026 DC Indo Global Pvt. Ltd. All rights reserved.
            </p>
           
        </div>
    </div>
</footer>
