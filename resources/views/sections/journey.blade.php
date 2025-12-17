@section('styles')
<link rel="stylesheet" href="{{ asset('css/journey.css') }}">
@endsection

<section class="journey-section py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4 text-center">

        <!-- Heading -->
        <h2 class="text-3xl sm:text-4xl font-bold text-[#0A2540] mb-4">
            Our Journey
        </h2>

        <p class="text-gray-600 max-w-2xl mx-auto mb-10 sm:mb-12 text-sm sm:text-base leading-relaxed">
            Over the years, we have grown, innovated, and delivered excellence through dedication and expertise.  </p>

        <!-- Stats Grid (Fully Responsive) -->
        <div class="">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                    @foreach([
                        ['count' => 13, 'label' => 'Years of Experience', 'icon' => 'clock'],
                        ['count' => 70, 'label' => 'Projects Completed', 'icon' => 'building'],
                        ['count' => 40, 'label' => 'Strategic Clients', 'icon' => 'users']
                        // ['count' => 50, 'label' => 'Awards & Recognitions', 'icon' => 'award']
                    ] as $stat)

                    <div class="p-6 sm:p-8 text-center bg-white rounded-xl shadow-lg 
                                hover:shadow-2xl transition-all duration-300 
                                opacity-0 scale-90 stat-card">

                        <div class="inline-flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 
                                    bg-gradient-to-br from-[#0A2540] to-[#1E3A5F] rounded-2xl mb-4">
                            <i class="fas fa-{{ $stat['icon'] }} text-white text-xl sm:text-2xl"></i>
                        </div>

                        <h3 class="text-3xl sm:text-4xl font-bold text-[#0A2540] mb-1 counter" data-count="{{ $stat['count'] }}">
                            0
                        </h3>

                        <p class="text-gray-600 font-medium text-sm sm:text-base">
                            {{ $stat['label'] }}
                        </p>

                    </div>

                    @endforeach

                </div>

        </div>
      
    </div>
</section>

<script>
// Counter Animation
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");

    const startCounter = (counter) => {
        const target = +counter.dataset.count;
        let current = 0;
        const duration = 1500;
        const step = target / (duration / 16);

        const interval = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(interval);
            }
            counter.textContent = Math.floor(current) + "+";
        }, 16);
    };

    // Trigger counter when stat cards come into view
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const counter = entry.target.querySelector(".counter");
                    startCounter(counter);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.3 }
    );

    document.querySelectorAll(".stat-card").forEach((card) => {
        observer.observe(card);
    });

    // GSAP Entry Animation
    gsap.utils.toArray(".stat-card").forEach((card, i) => {
        gsap.to(card, {
            opacity: 1,
            scale: 1,
            duration: 0.8,
            delay: i * 0.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: card,
                start: "top 85%",
            },
        });
    });
});
</script>
