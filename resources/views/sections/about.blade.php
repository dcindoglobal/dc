@section('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

<section class="about-section pt-18 pb-20">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <img src="https://images.pexels.com/photos/443378/pexels-photo-443378.jpeg?w=800" alt="Construction" class="rounded-2xl shadow-2xl w-full floating-animation" />
               <div class="absolute -bottom-6 -right-2 md:-bottom-6 md:-right-6 bg-[#D4AF37] text-white p-4 md:p-8 rounded-lg md:rounded-2xl shadow-xl">
                    <p class="text-xl md:text-5xl font-bold">13+</p>
                    <p class="font-semibold">Years</p>
                </div>

            </div>
            <div>
                <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">WHO WE ARE</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540] mb-6 leading-tight">
                    Building Tomorrow's Infrastructure Today
                </h3>
                <p class="text-base text-gray-600 mb-2 leading-relaxed">
                    DC Indo Global Pvt. Ltd. is a technology-driven building materials and infrastructure solutions company offering a wide range of products across the entire construction lifecycle. Backed by a strong pan-India manufacturing and supply network, we serve contractors, developers, and retailers with excellence. </p>
                <p class="text-base text-gray-600 mb-8 leading-relaxed">
                    Our diverse range includes concrete, steel, AAC blocks, tiles, bath fittings, electricals, modular kitchens, and more combining quality, innovation, and sustainability to power India’s infrastructure growth.</p>
                <div class="space-y-4 mb-8">
                    @foreach([
                        'Comprehensive range of construction and lifestyle materials',
                        'Pan-India manufacturing and supply network',
                        'Serving contractors, developers, and retailers nationwide',
                        'Driven by innovation, technology, and sustainable solutions'
                    ] as $point)
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-[#D4AF37] rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                        <p class="text-gray-700">{{ $point }}</p>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('about') }}" class="bg-[#0A2540] hover:bg-[#1E3A5F] text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-colors duration-300">
                    LEARN MORE ABOUT US
                    <i class="ml-2 fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endsection