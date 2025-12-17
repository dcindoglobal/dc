<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Stories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style>
        /* Custom Styles */
        .testimonial-section {
            background-color: #f9fafb;
            padding: 4rem 0;
        }
        .testimonial-title {
            color: #D4AF37;
            font-size: 0.875rem;
            font-weight: bold;
            letter-spacing: 0.1em;
            margin-bottom: 0.75rem;
        }
        .testimonial-heading {
            color: #0A2540;
            font-size: 2.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        @media (min-width: 768px) {
            .testimonial-heading {
                font-size: 3rem;
            }
        }
        .testimonial-description {
            color: #6b7280;
            margin: 0 auto 2rem;
        }
        .video-testimonial-container {
            position: relative;
            width: 230px;
            height: 410px;
            margin: 0 auto;
            background: black;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        @media (min-width: 768px) {
            .video-testimonial-container {
                width: 260px;
                height: 460px;
            }
        }
        .testimonial-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .video-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            padding: 1rem;
            color: white;
        }
        .client-name {
            font-weight: bold;
            font-size: 1.125rem;
            margin-bottom: 0.25rem;
        }
        .client-position {
            font-size: 0.875rem;
            color: #e5e7eb;
        }
        /* Owl Carousel Customizations */
        #testimonial-carousel .owl-stage {
            display: flex;
            align-items: center;
            padding: 1rem 0;
        }
        #testimonial-carousel .owl-item {
            display: flex;
            justify-content: center;
        }
        #testimonial-carousel .owl-nav {
            margin-top: 1.5rem;
            text-align: center;
        }
        #testimonial-carousel .owl-nav button {
            background: #D4AF37 !important;
            color: white !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 0.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem !important;
        }
        #testimonial-carousel .owl-nav button:hover {
            background: #b8941f !important;
        }
        #testimonial-carousel .owl-dots {
            text-align: center;
            margin-top: 1rem;
        }
        #testimonial-carousel .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 4px;
            background: #d1d5db !important;
        }
        #testimonial-carousel .owl-dot.active span {
            background: #D4AF37 !important;
        }
    </style>
</head>
<body>
    <!-- Testimonial Section -->
    <section class="testimonial-section mt-0 md:mt-[100px] ">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <!-- Section Title -->
            <div class="text-center">
                <h2 class="testimonial-title">CLIENT STORIES</h2>
                <h3 class="testimonial-heading">Real Feedback. Real Results.</h3>
                <p class="testimonial-description">
                    Real clients. Real stories. Watch their experiences working with us.
                </p>
            </div>

            <!-- Owl Carousel Container -->
            <div id="testimonial-carousel" class="owl-carousel owl-theme">
                <!-- Video 1 -->
                <div class="item">
                    <div class="video-testimonial-container">
                        <video class="testimonial-video" muted playsinline loop>
                            <source src="{{ asset('videos/ugc1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <p class="client-name">Rajeeh Kumar</p>
                            <p class="client-position">CEO, Green Valley Developers</p>
                        </div>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="item">
                    <div class="video-testimonial-container">
                        <video class="testimonial-video" muted playsinline loop>
                            <source src="{{ asset('videos/ugc2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <p class="client-name">Priya Sharma</p>
                            <p class="client-position">Project Manager, Tech Solutions Ltd</p>
                        </div>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="item">
                    <div class="video-testimonial-container">
                        <video class="testimonial-video" muted playsinline loop>
                            <source src="{{ asset('videos/ugc3.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <p class="client-name">Amit Patel</p>
                            <p class="client-position">Director, AutoParts Inc</p>
                        </div>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="item">
                    <div class="video-testimonial-container">
                        <video class="testimonial-video" muted playsinline loop>
                            <source src="{{ asset('videos/ugc4.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <p class="client-name">Ritika Verma</p>
                            <p class="client-position">Marketing Head, Urban Interiors</p>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            // Initialize Owl Carousel
            $("#testimonial-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        stagePadding: 50
                    },
                    640: {
                        items: 2,
                        stagePadding: 50
                    },
                    1024: {
                        items: 4,
                        stagePadding: 50
                    }
                },
                onInitialized: function () {
                    // Play the first video when carousel initializes
                    playActiveVideo();
                },
                onTranslate: function () {
                    // Pause all videos when carousel starts moving
                    pauseAllVideos();
                },
                onTranslated: function () {
                    // Play the active video after carousel finishes moving
                    playActiveVideo();
                }
            });

            // Function to play the active video
            function playActiveVideo() {
                var activeItem = $(".owl-item.active.center .testimonial-video");
                if (activeItem.length) {
                    activeItem[0].play();
                } else {
                    // Fallback if center class is not available
                    var activeIndex = $("#testimonial-carousel").find(".owl-item.active").index();
                    $("#testimonial-carousel").find(".testimonial-video").eq(activeIndex)[0].play();
                }
            }

            // Function to pause all videos
            function pauseAllVideos() {
                $("#testimonial-carousel .testimonial-video").each(function () {
                    this.pause();
                });
            }

            // Pause video when hovering over it
            $(".testimonial-video").hover(
                function () {
                    this.pause();
                },
                function () {
                    // Only play if this is the active video
                    if ($(this).closest(".owl-item").hasClass("active")) {
                        this.play();
                    }
                }
            );
        });
    </script>
</body>
</html>