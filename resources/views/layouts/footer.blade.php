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
                    @foreach(['facebook', 'twitter', 'linkedin', 'instagram'] as $social)
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
                        'Industrial Tapes'
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
                 48, DLF MARKET, Sector 11D, Faridabad, Haryana-121006<br>
                    <a href="tel:+919919910405" class="hover:text-white">
                        +91 99199 10405
                    </a><br>
                    <a href="mailto:info@dcinological.com" class="hover:text-white">
                        info@dcinological.com
                    </a>
                </address>
            </div>

        </div>

        <!-- Bottom Section -->
        <div class="pt-8 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">
                © 2024 DC Indo Global Pvt. Ltd. All rights reserved.
            </p>
            {{-- <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
            </div> --}}
        </div>
    </div>
</footer>
