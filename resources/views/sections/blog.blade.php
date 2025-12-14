@section('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

<section class="blog-section py-16 mb-10 px-6 md:px-12 lg:px-20 bg-gradient-to-br from-[#0A2540] to-[#1E3A5F]">
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-white">
            Our <span class="text-yellow-500">Blogs</span>
        </h2>
        <div class="w-24 h-1 bg-yellow-500 mx-auto mt-3"></div>
    </div>
    
    <!-- Blog Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach([
            [
                'image' => 'https://images.pexels.com/photos/1115804/pexels-photo-1115804.jpeg?auto=compress&cs=tinysrgb&w=900',
                'title' => 'Tips for First-Time Home Builders in Gurgaon',
                'date' => 'September 16, 2025',
                'link' => 'blog-page'
            ],
            [
                'image' => 'https://images.pexels.com/photos/7944231/pexels-photo-7944231.jpeg?auto=compress&cs=tinysrgb&w=900',
                'title' => 'Offering Special Discounts for Home Renovation During Navratri',
                'date' => 'September 16, 2025',
                'link' => 'blog-page'
            ],
            [
                'image' => 'https://images.pexels.com/photos/87223/pexels-photo-87223.jpeg?auto=compress&cs=tinysrgb&w=900',
                'title' => 'Building Renovation vs Rebuilding: Which is More Cost-Effective?',
                'date' => 'September 16, 2025',
                'link' => 'blog-page'
            ]
        ] as $blog)
        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-card">
            <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-lg font-bold mb-2 uppercase leading-snug">{{ $blog['title'] }}</h3>
                <p class="text-sm text-gray-500 mb-4">Posted: {{ $blog['date'] }}</p>
                <a href="{{ $blog['link'] }}" class="text-yellow-500 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const blogCards = document.querySelectorAll('.blog-card');
    
    blogCards.forEach((card, index) => {
        gsap.to(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse"
            },
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: index * 0.2,
            ease: "power2.out"
        });
    });
});
</script>
