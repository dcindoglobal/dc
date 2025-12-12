<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - DC Indo Global</title>
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

        /* Custom CSS for animations and additional styling */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .accordion-item.active .accordion-content {
            max-height: 1000px;
        }
        
        .accordion-item.active .accordion-chevron {
            transform: rotate(180deg);
        }
        
        .accordion-chevron {
            transition: transform 0.3s ease;
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
    <section class="h-80 bg-cover bg-center flex items-center justify-center text-white" 
             style="background-image: url('https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1920')">
        <div class="bg-black/60 w-full h-full flex items-center justify-center">
            <h1 class="text-5xl font-bold fade-in-up">Careers</h1>
        </div>
    </section>
    
    <!-- Intro Section -->
    <section class="py-24 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">JOIN OUR TEAM</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540] mb-6 max-w-3xl mx-auto">
                Build Your Future with DC Indo Global
            </h3>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We are always looking for passionate, skilled, and dedicated individuals to join our growing team. Explore our open positions and find your place in a company that's building the future.
            </p>
        </div>
    </section>

    <!-- Job Listings -->
    <section class="pb-24">
        <div class="container mx-auto px-4 max-w-4xl">
            <h3 class="text-3xl font-bold text-[#0A2540] mb-8 text-center">Current Openings</h3>
            
            <div id="job-listings" class="space-y-4">
                <!-- Job listings will be populated by JavaScript -->
            </div>
            
            <div id="no-jobs-message" class="hidden text-center text-gray-600">
                <p>There are no open positions at this time. Please check back later.</p>
            </div>
            
            <div id="loading-spinner" class="flex justify-center items-center h-64">
                <i class="fas fa-spinner fa-spin text-4xl text-[#D4AF37]"></i>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-24 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-[#0A2540] mb-4">Don't See a Fit?</h3>
            <p class="text-lg text-gray-600 mb-8 max-w-xl mx-auto">
                We're always open to connecting with talented professionals. If you believe you have what it takes to contribute to our team, send us your resume.
            </p>
            <a href="contact.html">
                <button class="bg-[#D4AF37] hover:bg-[#C4A137] text-white px-8 py-4 text-lg font-semibold rounded-lg">
                    CONTACT US
                </button>
            </a>
        </div>
    </section>
    
   



    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Mock data for job listings (in a real app, this would come from an API)
            const jobListings = [
                {
                    id: 1,
                    job_title: "Senior Civil Engineer",
                    department: "Engineering",
                    location: "New Delhi",
                    employment_type: "Full-time",
                    job_description: "We are seeking an experienced Senior Civil Engineer to lead major construction projects. The ideal candidate will have extensive experience in project planning, structural design, and team management.",
                    qualifications: "B.Tech in Civil Engineering, PMP certification preferred. Strong knowledge of construction codes and standards, Experience with AutoCAD and project management software",
                    experience_required: "8-12 years"
                },
                {
                    id: 2,
                    job_title: "Project Manager - Commercial Construction",
                    department: "Management",
                    location: "Bangalore",
                    employment_type: "Full-time",
                    job_description: "We are looking for a skilled Project Manager to oversee commercial construction projects from conception to completion. The ideal candidate will have a proven track record in managing budgets, timelines, and teams.",
                    qualifications: "Bachelor's degree in Construction Management or related field, PMP certification preferred. Strong leadership and communication skills.",
                    experience_required: "5-10 years"
                }
            ];
            
            // DOM elements
            const jobListingsContainer = document.getElementById('job-listings');
            const noJobsMessage = document.getElementById('no-jobs-message');
            const loadingSpinner = document.getElementById('loading-spinner');
            
            // Function to render job listings
            function renderJobListings() {
                // Hide loading spinner
                loadingSpinner.classList.add('hidden');
                
                if (jobListings.length === 0) {
                    noJobsMessage.classList.remove('hidden');
                    return;
                }
                
                jobListings.forEach(job => {
                    const jobElement = document.createElement('div');
                    jobElement.className = 'bg-gray-50 rounded-lg accordion-item';
                    jobElement.innerHTML = `
                        <div class="p-6 flex justify-between items-center cursor-pointer accordion-trigger">
                            <div class="flex-grow">
                                <h4 class="text-xl font-bold text-[#0A2540]">${job.job_title}</h4>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-600 mt-2">
                                    <span class="flex items-center"><i class="fas fa-briefcase w-4 h-4 mr-1.5"></i> ${job.department}</span>
                                    <span class="flex items-center"><i class="fas fa-map-marker-alt w-4 h-4 mr-1.5"></i> ${job.location}</span>
                                    <span class="flex items-center"><i class="fas fa-clock w-4 h-4 mr-1.5"></i> ${job.employment_type}</span>
                                </div>
                            </div>
                            <i class="fas fa-chevron-down accordion-chevron text-gray-500"></i>
                        </div>
                        <div class="accordion-content">
                            <div class="p-6 pt-0 prose max-w-none text-gray-700">
                                <h5 class="font-bold">Job Description</h5>
                                <p>${job.job_description}</p>
                                <h5 class="font-bold mt-4">Qualifications</h5>
                                <p>${job.qualifications}</p>
                                <h5 class="font-bold mt-4">Experience Required</h5>
                                <p>${job.experience_required}</p>
                            </div>
                        </div>
                    `;
                    
                    jobListingsContainer.appendChild(jobElement);
                    
                    // Add click event to toggle accordion
                    const trigger = jobElement.querySelector('.accordion-trigger');
                    trigger.addEventListener('click', () => {
                        jobElement.classList.toggle('active');
                    });
                });
            }
            
            // Simulate loading delay
            setTimeout(renderJobListings, 1000);
        });
    </script>

@endsection

</body>
</html>