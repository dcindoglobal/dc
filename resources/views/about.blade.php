<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DC Indo Global</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
    <!-- Framer Motion (via CDN) -->
    <script src="https://unpkg.com/framer-motion@10.16.4/dist/framer-motion.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <style>
        /* Custom styles for animations */
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

        .fade-in-x {
            opacity: 0;
            transition: opacity 0.5s, transform 0.5s;
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

        /* header */
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
        /* Floating WhatsApp Button Styling */
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #25D366; /* WhatsApp green */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.2s ease;
            z-index: 1000;
        }
        .whatsapp-btn:hover {
            transform: scale(1.1);
        }
        .whatsapp-icon {
            width: 35px;
            height: 35px;
            fill: white;
        }
    </style>
</head>

<body class="bg-white">

   @extends('layouts.app')

@section('title', 'Home - DC Indo Global')

@section('content')
   

    <!-- Page Header -->
    <section class="h-80 md:h-[32rem] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('{{ asset('images/about-header.jpeg') }}')">
        <div class="bg-black/60 w-full h-full flex items-center justify-center">
            <h1 id="page-title" class="text-5xl font-bold fade-in-up">About Us</h1>
        </div>
    </section>

    <!-- Company Intro -->
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-left">
                    <img src="{{asset('images/about.jpeg') }}"
                        alt="Construction" class="rounded-2xl shadow-2xl w-full floating-animation" />
                </div>
                <div class="fade-in-right">
                    <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">OUR STORY</h2>
                    <h3 class="text-4xl font-bold text-[#0A2540] mb-6">Over 13 Years of Building Excellence</h3>
                    <p class="text-lg text-gray-600 mb-4">
                       Since 2012, DC Indo Global has been shaping spaces and setting new standards in the Indian construction industry. What started as a small vision has grown into a trusted legacy—built on innovation, reliability, and a genuine commitment to doing things the right way. Whether it’s a modern commercial hub or a technically demanding industrial facility, we take pride in turning ambitious plans into structures that stand strong for decades.
                    </p>
                     <h3 class="text-4xl font-bold text-[#0A2540] mb-6">We don’t just build</h3>
                    <p class="text-lg text-gray-600">
                        We create, manufacture, and execute with a complete sense of responsibility. With our own manufacturing units and a team of 13+ experts, we maintain full control over quality and timelines. Every project benefits from our in-house capabilities, ensuring precision, consistency, and a seamless workflow from the first blueprint to the final finish.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="card p-8 text-center bg-white">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#0A2540] rounded-full mb-4">
                        <i data-lucide="target" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-[#0A2540] mb-4">Our Mission</h3>
                    <p class="text-gray-600">
                       To deliver high-quality, cost-effective projects on time by empowering motivated, agile, and focused teams. We believe in relationships built on trust and transparency, and stay committed to fairness in every interaction—with employees, clients, vendors, and partners.
                    </p>
                </div>
                <div class="card p-8 text-center bg-white">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#D4AF37] rounded-full mb-4">
                        <i data-lucide="eye" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-[#0A2540] mb-4">We Aim</h3>
                    <p class="text-gray-600">
                        To be the benchmark for superior construction services by continually elevating quality, embracing innovation, and delivering with integrity and purpose. Our goal is simple: create lasting value and uphold a reputation that makes our name synonymous with excellence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <!-- <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">OUR JOURNEY</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540]">Milestones of Our Growth</h3>
            </div>
            <div class="relative">
                <div class="absolute left-1/2 h-full w-0.5 bg-gray-200"></div>
                
                <div id="timeline-container"></div>
            </div>
        </div>
    </section> -->


    <!-- Values Section -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">OUR VALUES</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540]">What We Stand For</h3>
            </div>
            <div class="">
                <!-- Values will be inserted here by JavaScript -->
                <div id="values-container" class="grid md:grid-cols-3 gap-8"></div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-24 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">OUR JOURNEY</h2>
      <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540]">Milestones That Define Us</h3>
    </div>

    <div class="relative">
      <!-- Central Horizontal Line -->
      <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-300 transform -translate-y-1/2 z-0"></div>

      <!-- Timeline Container -->
      <div id="timeline-container" class="flex justify-between items-center relative flex-wrap md:flex-nowrap z-10"></div>
    </div>
  </div>
</section>

@endsection
   


   

    <!-- <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Timeline data
        const timelineEvents = [
            { year: 1989, event: "Company Founded", description: "DC Indo Global was established with a vision to redefine the construction industry." },
            { year: 2000, event: "First Major Project", description: "Completed our first large-scale commercial complex, setting a new benchmark for quality." },
            { year: 2010, event: "ISO Certification", description: "Achieved ISO 9001 certification, a testament to our commitment to quality management." },
            { year: 2018, event: "In-House Manufacturing", description: "Launched our own manufacturing units for pre-cast concrete and steel fabrication." },
            { year: 2024, event: "35+ Years of Excellence", description: "Celebrating over three decades of building trust, quality, and innovation across India." },
        ];

        // Values data
        const values = [
            { icon: "shield-check", title: "Integrity", description: "We uphold the highest standards of integrity in all of our actions." },
            { icon: "award", title: "Quality", description: "We provide outstanding products and unsurpassed service that deliver premium value." },
            { icon: "users", title: "Teamwork", description: "We work together, across boundaries, to meet the needs of our customers." },
        ];

        // Render timeline
        function renderTimeline() {
            const container = document.getElementById('timeline-container');

            timelineEvents.forEach((item, index) => {
                const timelineItem = document.createElement('div');
                timelineItem.className = `flex items-center w-full mb-8 ${index % 2 === 0 ? 'justify-start' : 'justify-end'}`;

                timelineItem.innerHTML = `
                    <div class="w-1/2 ${index % 2 === 0 ? 'pr-8 text-right' : 'pl-8 text-left'}">
                        <div class="fade-in-x ${index % 2 === 0 ? 'fade-in-right' : 'fade-in-left'}">
                            <div class="card p-6">
                                <p class="text-[#D4AF37] font-bold text-xl mb-1">${item.year}</p>
                                <h4 class="text-[#0A2540] font-bold text-lg mb-2">${item.event}</h4>
                                <p class="text-gray-600 text-sm">${item.description}</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-1/2 -ml-3 z-10 w-6 h-6 bg-[#0A2540] rounded-full border-4 border-white"></div>
                `;

                container.appendChild(timelineItem);
            });
        }

        // Render values
        function renderValues() {
            const container = document.getElementById('values-container');

            values.forEach(value => {
                const valueCard = document.createElement('div');
                valueCard.className = 'text-center fade-in-up border p-6 bg-white card';

                valueCard.innerHTML = `
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#0A2540] rounded-full mb-4">
                        <i data-lucide="${value.icon}" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0A2540] mb-4">${value.title}</h3>
                    <p class="text-gray-600">${value.description}</p>
                `;

                container.appendChild(valueCard);
            });

            // Re-initialize icons for newly added elements
            lucide.createIcons();
        }

        // Intersection Observer for animations
        function setupIntersectionObserver() {
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
            document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .fade-in-x').forEach(el => {
                observer.observe(el);
            });
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function () {
            renderTimeline();
            renderValues();
            setupIntersectionObserver();

            // Animate page title immediately
            document.getElementById('page-title').classList.add('visible');
        });
    </script> -->


<script>
  const timelineEvents = [
    { year: 2012, event: "Company Founded", description: "DC Indo Global begins with a mission to reshape the construction landscape." },
    { year: 2014, event: "First Major Project", description: "We deliver our first large-scale commercial complex, establishing a new benchmark for quality and execution." },
    { year: 2025, event: "In-House Manufacturing", description: "We launch our own manufacturing units for modular furniture." },
    // { year: 2018, event: "In-House Manufacturing", description: "Launched our own manufacturing units for pre-cast concrete and steel fabrication." },
    // { year: 2024, event: "35+ Years of Excellence", description: "Celebrating over three decades of building trust, quality, and innovation across India." },
  ];

  // Values data (for another section)
    const values = [
        { icon: "shield-check", title: "Integrity", description: "Doing what’s right even when no one is watching. That’s the foundation of our culture." },
        { icon: "award", title: "Quality", description: "Outstanding products, dependable delivery, and service that genuinely adds value." },
        { icon: "users", title: "Teamwork", description: "Collaboration that crosses roles, departments, and challenges—so our clients always receive our best." },
    ];

    // Render timeline with up-down alternating layout
  function renderTimeline() {
    const container = document.getElementById("timeline-container");

    timelineEvents.forEach((item, index) => {
      const isEven = index % 2 === 0;

      const timelineItem = document.createElement("div");
      timelineItem.className = `
        relative flex flex-col items-center md:w-1/5 w-full text-center mb-16 md:mb-0
      `;

      timelineItem.innerHTML = `
        <!-- Top Card -->
        ${
          isEven
            ? `
            
            <div class="hidden md:block mb-12 p-6 bg-white shadow-lg rounded-2xl border border-gray-100 w-64">
                <p class="text-[#D4AF37] font-bold text-xl mb-1">${item.year}</p>
                <h4 class="text-[#0A2540] font-bold text-lg mb-2">${item.event}</h4>
                <p class="text-gray-600 text-sm">${item.description}</p>
              </div>
              <!-- Connector -->
              <div class="hidden md:block w-0.5 h-24 bg-gray-300"></div>`
            : `<div class="hidden md:block h-20"></div>`
        }

        <!-- Dot -->
        <div class="w-6 h-6 bg-[#0A2540] rounded-full border-2 border-white shadow-md relative z-10"></div>

        <!-- Connector -->
        ${
          !isEven
            ? `<div class="hidden md:block w-0.5 h-20 bg-gray-300"></div>
                <div class="hidden md:block mt-12 p-6 bg-white shadow-lg rounded-2xl border border-gray-100 w-64">
                  <p class="text-[#D4AF37] font-bold text-xl mb-1">${item.year}</p>
                  <h4 class="text-[#0A2540] font-bold text-lg mb-2">${item.event}</h4>
                  <p class="text-gray-600 text-sm">${item.description}</p>
                </div>`
            : `<div class="hidden md:block h-20"></div>`
        }

        <!-- Mobile Layout -->
        <div class="md:hidden mt-6 p-6 bg-white shadow-lg rounded-2xl border border-gray-100 w-full">
          <p class="text-[#D4AF37] font-bold text-xl mb-1">${item.year}</p>
          <h4 class="text-[#0A2540] font-bold text-lg mb-2">${item.event}</h4>
          <p class="text-gray-600 text-sm">${item.description}</p>
        </div>
      `;

      container.appendChild(timelineItem);
    });
  }


  // Render values
    function renderValues() {
        const container = document.getElementById('values-container');

        values.forEach(value => {
            const valueCard = document.createElement('div');
            valueCard.className = 'text-center fade-in-up border p-6 bg-white card';

            valueCard.innerHTML = `
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#0A2540] rounded-full mb-4">
                    <i data-lucide="${value.icon}" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-[#0A2540] mb-4">${value.title}</h3>
                <p class="text-gray-600">${value.description}</p>
            `;

            container.appendChild(valueCard);
        });

        lucide.createIcons(); // Re-init icons
    }

    // Intersection Observer animation
    function setupIntersectionObserver() {
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

        document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .fade-in-x').forEach(el => {
            observer.observe(el);
        });
    }



    // Initialize everything
    document.addEventListener('DOMContentLoaded', function () {
        renderTimeline();
        renderValues();
        setupIntersectionObserver();

        const pageTitle = document.getElementById('page-title');
        if (pageTitle) pageTitle.classList.add('visible');
    });

    
//   document.addEventListener("DOMContentLoaded", renderTimeline);
</script>


</body>

</html>