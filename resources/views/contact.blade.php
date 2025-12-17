<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - DC Indo Global Construction</title>
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

        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.375rem;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            transition: all 0.2s;
            cursor: pointer;
        }
        
        .btn-primary {
            background-color: #D4AF37;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #C4A137;
        }
        
        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }
        
        .input, .textarea, .select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 1rem;
            transition: border-color 0.2s;
        }
        
        .input:focus, .textarea:focus, .select:focus {
            outline: none;
            border-color: #D4AF37;
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
        }
        
        .textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .select-wrapper {
            position: relative;
        }
        
        .select-wrapper::after {
            content: "▼";
            font-size: 0.75rem;
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6b7280;
        }
        
        .select {
            appearance: none;
            background-color: white;
        }
        
        .toast {
            position: fixed;
            top: 1rem;
            right: 1rem;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            z-index: 50;
            display: flex;
            align-items: center;
            max-width: 24rem;
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .toast.show {
            transform: translateX(0);
        }
        
        .toast-success {
            background-color: #10b981;
            color: white;
        }
        
        .toast-error {
            background-color: #ef4444;
            color: white;
        }
        
        .animate-spin {
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }
        
        @keyframes fadeInUp {
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

        /* Responsive Google Maps */
        .map-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 aspect ratio (adjust if needed, e.g., 75% for original 600x450) */
            height: 0;
            overflow: hidden;
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>
<body class="bg-white">

    @extends('layouts.app')

    @section('title', 'Home - DC Indo Global')

    @section('content')

    <!-- Page Header -->
    <section 
        class="h-[50vh] md:h-[60vh] lg:h-80 bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('https://images.unsplash.com/photo-1596524430615-b46475ddff6e?w=1920')"
    >
        <div class="bg-black/60 w-full h-full flex items-center justify-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold fade-in-up">
                Contact Us
            </h1>
        </div>
    </section>

    <!-- Contact Form and Info -->
    <section class="py-12 md:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-[#0A2540] mb-2">Get in Touch</h2>
                <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>
                <form id="contactForm" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Your Name" 
                            class="input" 
                            required
                        />
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Your Email" 
                            class="input" 
                            required
                        />
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <input 
                            type="tel" 
                            name="phone" 
                            placeholder="Your Phone" 
                            class="input" 
                            required
                        />
                        <input 
                            type="text" 
                            name="company" 
                            placeholder="Your Company (Optional)" 
                            class="input" 
                        />
                    </div>
                    <div class="select-wrapper">
                        <select name="inquiry_type" class="select">
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Project Quote">Project Quote</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Career">Career</option>
                            <option value="Support">Support</option>
                        </select>
                    </div>
                    <textarea 
                        name="message" 
                        placeholder="Your Message" 
                        rows="5" 
                        class="textarea" 
                        required
                    ></textarea>
                    <button type="submit" class="btn btn-primary w-full py-3 text-lg">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Info & Map -->
            <div class="space-y-8 lg:space-y-12">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0A2540] mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-map-marker-alt text-[#D4AF37] text-xl mt-1 flex-shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-lg text-[#0A2540]">Our Address</h4>
                                <p class="text-gray-600">BOOTH NO 48,FIRST FLOOR DLF MARKET, SECTOR 11D Faridabad Sector 7 Faridabad ,<br />Haryana India, 121006</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fas fa-envelope text-[#D4AF37] text-xl mt-1 flex-shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-lg text-[#0A2540]">Email Us</h4>
                                <a href="mailto:info@dcindoglobal.com" class="text-gray-600 hover:text-[#D4AF37]">info@dcindoglobal.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fas fa-phone text-[#D4AF37] text-xl mt-1 flex-shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-lg text-[#0A2540]">Call Us</h4>
                                <a href="tel:+919919910405" class="text-gray-600 hover:text-[#D4AF37]">+91 99199 10405</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Map -->
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3510.541573254789!2d77.31707237527901!3d28.372706175807604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1765955438838!5m2!1sen!2sin" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Toast Notification -->
    <div id="toast" class="toast">
        <div id="toast-icon" class="mr-3 text-xl"></div>
        <div>
            <h3 id="toast-title" class="font-bold"></h3>
            <p id="toast-description" class="text-sm"></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const toast = document.getElementById('toast');
            const toastTitle = document.getElementById('toast-title');
            const toastDescription = document.getElementById('toast-description');
            const toastIcon = document.getElementById('toast-icon');
            const submitButton = contactForm.querySelector('button[type="submit"]');
            
            // Show toast notification
            function showToast(title, description, type) {
                toastTitle.textContent = title;
                toastDescription.textContent = description;
                
                if (type === 'success') {
                    toast.className = 'toast toast-success';
                    toastIcon.className = 'fas fa-check-circle';
                } else {
                    toast.className = 'toast toast-error';
                    toastIcon.className = 'fas fa-exclamation-circle';
                }
                
                toast.classList.add('show');
                
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 5000);
            }
            
            // Form submission handler
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(contactForm);
                const data = Object.fromEntries(formData);
                
                // Show loading state
                const originalText = submitButton.innerHTML;
                submitButton.innerHTML = '<i class="fas fa-spinner animate-spin mr-2"></i>Sending...';
                submitButton.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    // Reset form on success
                    contactForm.reset();
                    
                    // Show success message
                    showToast(
                        'Inquiry Sent!', 
                        'Thank you for reaching out. We will get back to you shortly.', 
                        'success'
                    );
                    
                    // Reset button
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                    
                    // In a real application, you would send the data to your server here
                    console.log('Form data:', data);
                }, 1500);
            });
        });
    </script>

    @endsection

</body>
</html>