@section('styles')
<link rel="stylesheet" href="{{ asset('css/cta.css') }}">
@endsection

<section class="cta-section py-24 bg-gradient-to-r from-[#0A2540] to-[#1E3A5F] relative overflow-hidden parallax-bg mb-10" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920')">
    <div class="absolute inset-0 bg-gradient-to-r from-[#0A2540]/95 to-[#1E3A5F]/95"></div>
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-[#D4AF37] rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#F7941D] rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Start you business with us today</h2>
            <p class="text-xl text-gray-200 mb-8">
                Let's build something extraordinary together. Contact us for a free consultation.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="/contact" class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-6 py-3 font-semibold rounded-lg shadow-2xl inline-flex items-center transition-colors duration-300">
                    GET STARTED TODAY
                    <i class="ml-2 fas fa-arrow-right"></i>
                </a>
                <a href="tel:+919919910405" class="border border-white text-white hover:bg-white hover:text-[#0A2540] px-6 py-3 font-semibold rounded-lg inline-flex items-center transition-all duration-300">
                    CALL US NOW
                </a>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script src="{{ asset('js/cta.js') }}"></script>
@endsection