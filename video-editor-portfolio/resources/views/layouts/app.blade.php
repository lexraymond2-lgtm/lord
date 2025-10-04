<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #000000;
            color: #FFFFFF;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .text-red {
            color: #FF0000;
        }

        .text-white {
            color: #FFFFFF;
        }

        .bg-black {
            background-color: #000000;
        }

        .bg-red {
            background-color: #FF0000;
        }

        .btn-primary {
            background-color: #FF0000;
            color: #FFFFFF;
            border: 2px solid #FF0000;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background-color: transparent;
            color: #FF0000;
            border-color: #FF0000;
        }

        .btn-outline {
            background-color: transparent;
            color: #FFFFFF;
            border: 2px solid #FFFFFF;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-outline:hover {
            background-color: #FFFFFF;
            color: #000000;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 3rem;
            color: #FFFFFF;
        }

        .section-title .text-red {
            color: #FF0000;
        }

        .hero-section {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #000000 0%, #FF0000 50%, #000000 100%);
            z-index: -3;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        .hero-content {
            z-index: 1;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            padding: 1rem 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: #FF0000;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .navbar-logo {
            height: 50px;
            width: auto;
            margin-right: 15px;
        }

        .navbar-nav {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .navbar-nav a {
            color: #FFFFFF;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav a:hover {
            color: #FF0000;
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #FFFFFF;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 1024px) {
            .container {
                padding: 0 15px;
            }
            
            .hero-title {
                font-size: 3rem;
            }
            
            .section-title {
                font-size: 2.5rem;
            }

            /* About Page Tablet */
            .about-story-grid {
                gap: 3rem;
            }

            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0.5rem 0;
            }

            .navbar-nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(0, 0, 0, 0.95);
                backdrop-filter: blur(10px);
                flex-direction: column;
                padding: 1rem;
                gap: 1rem;
            }

            .navbar-nav.active {
                display: flex;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .navbar-logo {
                height: 35px;
            }

            .navbar-brand {
                font-size: 1rem;
            }

            .hero-title {
                font-size: 2.2rem;
                line-height: 1.2;
            }

            .hero-subtitle {
                font-size: 1.1rem;
                padding: 0 1rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }

            .btn-primary, .btn-outline {
                width: 200px;
                text-align: center;
            }

            .section-title {
                font-size: 1.8rem;
                margin-bottom: 2rem;
            }

            .section {
                padding: 3rem 0;
            }

            /* About Section Mobile */
            .about-grid {
                grid-template-columns: 1fr !important;
                gap: 2rem !important;
            }

            .about-image {
                width: 250px !important;
                height: 300px !important;
            }

            /* Services Section Mobile */
            .services-grid {
                grid-template-columns: 1fr !important;
                gap: 1.5rem !important;
            }

            /* Portfolio Grid Mobile */
            .portfolio-grid {
                grid-template-columns: 1fr !important;
                grid-template-rows: repeat(6, 1fr) !important;
                gap: 1rem !important;
                height: auto !important;
                max-height: none !important;
            }
            
            .portfolio-item {
                height: 250px !important;
                grid-area: unset !important;
            }

            .portfolio-item .portfolio-content {
                padding: 1rem !important;
            }

            .portfolio-item h3 {
                font-size: 1rem !important;
            }

            .portfolio-item p {
                font-size: 0.8rem !important;
            }

            /* Contact Section Mobile */
            .contact-grid {
                grid-template-columns: 1fr !important;
                gap: 2rem !important;
            }

            .contact-form {
                padding: 1.5rem !important;
            }

            /* Footer Mobile */
            .footer-links {
                flex-direction: column !important;
                gap: 1rem !important;
            }

            /* About Page Mobile */
            .about-story-grid {
                grid-template-columns: 1fr !important;
                gap: 2rem !important;
            }

            .about-profile-image,
            .about-profile-video {
                width: 100% !important;
                max-width: 300px !important;
                height: 300px !important;
                margin: 0 auto 2rem !important;
            }

            .skills-grid {
                grid-template-columns: 1fr !important;
                gap: 1.5rem !important;
            }

            .timeline-container .timeline-item {
                flex-direction: column !important;
                text-align: center !important;
            }

            .timeline-container .timeline-dot {
                margin: 0 auto 1rem !important;
            }

            .cta-buttons {
                flex-direction: column !important;
                align-items: center !important;
            }

            .cta-buttons .btn-primary,
            .cta-buttons .btn-outline {
                width: 200px !important;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 10px;
            }

            .hero-title {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .navbar-brand {
                font-size: 0.9rem;
            }

            .navbar-logo {
                height: 30px;
            }

            .portfolio-item {
                height: 200px !important;
            }

            .btn-primary, .btn-outline {
                width: 180px;
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            /* About Page Small Mobile */
            .about-story-grid h2 {
                font-size: 1.8rem !important;
            }

            .about-profile-image {
                height: 250px !important;
            }

            .skills-grid h3 {
                font-size: 1.2rem !important;
            }

            .timeline-container h3 {
                font-size: 1.2rem !important;
            }

            .timeline-container h4 {
                font-size: 1rem !important;
            }

            .cta-buttons .btn-primary,
            .cta-buttons .btn-outline {
                width: 160px !important;
                font-size: 0.9rem !important;
            }

        /* Touch-friendly improvements */
        .portfolio-item {
            touch-action: manipulation;
        }

        .btn-primary, .btn-outline {
            touch-action: manipulation;
            min-height: 44px;
        }

        /* Improve text readability on mobile */
        .hero-subtitle {
            line-height: 1.4;
        }

        /* Better spacing for mobile */
        .section {
            padding: 2rem 0;
        }

        .container {
            padding: 0 15px;
        }

        /* Testimonials Section Styles */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        /* Testimonial Modal Video Styles */
        #modalTestimonialVideo {
            border-radius: 15px;
        }

        #modalTestimonialVideo::-webkit-media-controls-panel {
            background: rgba(0, 0, 0, 0.8);
        }

        #modalTestimonialVideo::-webkit-media-controls-play-button,
        #modalTestimonialVideo::-webkit-media-controls-pause-button {
            background: #FF0000;
            border-radius: 50%;
        }

        .testimonial-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 0, 0, 0.2);
        }

        /* Responsive Testimonials */
        @media (max-width: 768px) {
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .testimonial-card {
                height: 350px;
            }
        }

        @media (max-width: 480px) {
            .testimonials-grid {
                gap: 1rem;
            }
            
            .testimonial-card {
                height: 300px;
            }
        }



        /* Modal Styles */
        .modal-overlay {
            backdrop-filter: blur(10px);
            animation: modalFadeIn 0.3s ease;
        }

        .modal-content {
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes modalSlideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Modal Responsive */
        @media (max-width: 768px) {
            .modal-content {
                margin: 1rem;
                padding: 1.5rem;
            }

            .modal-projects-grid {
                grid-template-columns: 1fr !important;
                gap: 1.5rem !important;
            }

            .modal-portfolio-item {
                height: 250px !important;
            }

            /* Testimonial Modal Mobile */
            #testimonialModal .modal-content {
                max-width: 95%;
                padding: 2rem 1.5rem;
            }

            #testimonialModal .modal-content > div:first-child {
                height: 300px;
            }
        }

        @media (max-width: 480px) {
            .modal-content {
                margin: 0.5rem;
                padding: 1rem;
            }

            /* Testimonial Modal Small Mobile */
            #testimonialModal .modal-content {
                padding: 1.5rem 1rem;
            }

            #testimonialModal .modal-content > div:first-child {
                height: 200px;
            }
        }

            .modal-portfolio-item {
                height: 200px !important;
            }
        }

        /* Video Modal Styles */
        .video-modal-overlay {
            animation: videoModalFadeIn 0.3s ease;
        }

        .video-modal-content {
            animation: videoModalSlideIn 0.3s ease;
        }

        @keyframes videoModalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes videoModalSlideIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        /* Video Modal Responsive */
        @media (max-width: 768px) {
            .video-container {
                width: 95% !important;
                height: 60vh !important;
                max-height: 400px !important;
            }

            .video-info {
                padding: 1.5rem !important;
            }

            .video-info h3 {
                font-size: 1.2rem !important;
            }

            .video-info p {
                font-size: 1rem !important;
            }

            .video-info p:last-child {
                font-size: 0.9rem !important;
            }
        }

        @media (max-width: 480px) {
            .video-container {
                width: 98% !important;
                height: 50vh !important;
                max-height: 300px !important;
            }

            .video-info {
                padding: 1rem !important;
            }

            .video-info h3 {
                font-size: 1rem !important;
            }

            .video-info p {
                font-size: 0.9rem !important;
            }

            .video-info p:last-child {
                font-size: 0.8rem !important;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('logo/Red-on-black1.jpg') }}" alt="Off The Grid GH Logo" class="navbar-logo">
                OffTheGrid GH
            </a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('home') }}#work">Work</a></li>
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
            </ul>
            <button class="mobile-menu-toggle">☰</button>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            const nav = document.querySelector('.navbar-nav');
            nav.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.navbar-nav a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.navbar-nav').classList.remove('active');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });


        // Video fallback handling
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.querySelector('.video-background');
            const fallback = document.querySelector('.video-fallback');
            
            if (video) {
                video.addEventListener('error', function() {
                    if (fallback) {
                        fallback.style.display = 'block';
                    }
                });
                
                // Check if video loads successfully
                video.addEventListener('loadeddata', function() {
                    if (fallback) {
                        fallback.style.display = 'none';
                    }
                });
            }

            // Portfolio video fallback handling
            const portfolioVideos = document.querySelectorAll('.portfolio-video');
            portfolioVideos.forEach(video => {
                const fallback = video.nextElementSibling;
                
                video.addEventListener('error', function() {
                    if (fallback) {
                        fallback.style.display = 'block';
                    }
                });
                
                video.addEventListener('loadeddata', function() {
                    if (fallback) {
                        fallback.style.display = 'none';
                    }
                });
            });

            // Modal portfolio video fallback handling
            const modalPortfolioVideos = document.querySelectorAll('.modal-portfolio-video');
            modalPortfolioVideos.forEach(video => {
                const fallback = video.nextElementSibling;
                
                video.addEventListener('error', function() {
                    if (fallback) {
                        fallback.style.display = 'block';
                    }
                });
                
                video.addEventListener('loadeddata', function() {
                    if (fallback) {
                        fallback.style.display = 'none';
                    }
                });
            });
        });

        // Modal Functions
        function openProjectsModal() {
            const modal = document.getElementById('projectsModal');
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeProjectsModal() {
            const modal = document.getElementById('projectsModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('projectsModal');
            if (event.target === modal) {
                closeProjectsModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeProjectsModal();
                closeVideoModal();
                closeTeamModal();
            }
        });

        // Video Blur Functions
        function blurVideo(video) {
            video.style.filter = 'blur(5px)';
        }

        function unblurVideo(video) {
            video.style.filter = 'blur(0px)';
        }

        // Service Video Functions
        function playServiceVideo(element) {
            const video = element.querySelector('video');
            if (video) {
                video.play();
                unblurVideo(video);
            }
        }

        function pauseServiceVideo(element) {
            const video = element.querySelector('video');
            if (video) {
                video.pause();
                blurVideo(video);
            }
        }

        // Portfolio Video Functions
        function playPortfolioVideo(element) {
            element.style.transform = 'scale(1.02)';
            element.style.borderColor = '#FF0000';
            const video = element.querySelector('video');
            if (video) {
                video.play();
                unblurVideo(video);
            }
        }

        function pausePortfolioVideo(element) {
            element.style.transform = 'scale(1)';
            element.style.borderColor = 'rgba(255, 0, 0, 0.3)';
            const video = element.querySelector('video');
            if (video) {
                video.pause();
                blurVideo(video);
            }
        }

        // Video Modal Functions
        function openVideoModal(title, client, category, videoSrc) {
            const videoModal = document.getElementById('videoModal');
            const modalVideo = document.getElementById('modalVideo');
            const modalVideoSource = document.getElementById('modalVideoSource');
            const modalVideoTitle = document.getElementById('modalVideoTitle');
            const modalVideoClient = document.getElementById('modalVideoClient');
            const modalVideoCategory = document.getElementById('modalVideoCategory');

            // Set video source
            modalVideoSource.src = videoSrc;
            modalVideo.load();

            // Set video info
            modalVideoTitle.textContent = title;
            modalVideoClient.textContent = client;
            modalVideoCategory.textContent = category;

            // Show modal
            videoModal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling

            // Play video when modal opens
            modalVideo.play().catch(function(error) {
                console.log('Video autoplay failed:', error);
            });
        }

        function closeVideoModal() {
            const videoModal = document.getElementById('videoModal');
            const modalVideo = document.getElementById('modalVideo');

            // Pause and reset video
            if (modalVideo && !modalVideo.paused) {
                modalVideo.pause();
                modalVideo.currentTime = 0;
            }

            // Hide modal
            videoModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Close video modal when clicking outside
        document.addEventListener('click', function(event) {
            const videoModal = document.getElementById('videoModal');
            if (event.target === videoModal) {
                closeVideoModal();
            }
        });

        // Team Modal Functions
        function openTeamModal() {
            const teamModal = document.getElementById('teamModal');
            if (teamModal) {
                teamModal.style.display = 'flex';
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            }
        }

        function closeTeamModal() {
            const teamModal = document.getElementById('teamModal');
            if (teamModal) {
                teamModal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restore scrolling
            }
        }

        // Close team modal when clicking outside
        document.addEventListener('click', function(event) {
            const teamModal = document.getElementById('teamModal');
            if (event.target === teamModal) {
                closeTeamModal();
            }
        });

        // Testimonial modal functions
        function openTestimonialModal(testimonialId) {
            const modal = document.getElementById('testimonialModal');
            const testimonials = [
                {
                    id: 1,
                    name: 'Sarah Johnson',
                    company: 'Tech Solutions Inc.',
                    role: 'Marketing Director',
                    video: '{{ asset("videos/testimonials/em-testimonial.mp4") }}',
                    fallback: 'linear-gradient(135deg, #1a1a1a 0%, #333333 50%, #666666 100%)',
                    quote: 'OffTheGrid GH transformed our brand story into a compelling visual narrative. Their attention to detail and creative vision exceeded our expectations.',
                    rating: 5
                },
                {
                    id: 2,
                    name: 'Michael Chen',
                    company: 'Restaurant Group',
                    role: 'Owner',
                    video: '{{ asset("videos/testimonials/emi-testimonial.mp4") }}',
                    fallback: 'linear-gradient(135deg, #8B0000 0%, #DC143C 50%, #FF6347 100%)',
                    quote: 'The video they created for our restaurant launch was absolutely stunning. It perfectly captured our brand essence and increased our bookings by 40%.',
                    rating: 5
                },
                {
                    id: 3,
                    name: 'Emily Rodriguez',
                    company: 'Fashion Brand',
                    role: 'Creative Director',
                    video: '{{ asset("videos/testimonials/emil-testimonial.mp4") }}',
                    fallback: 'linear-gradient(135deg, #4B0082 0%, #8A2BE2 50%, #DA70D6 100%)',
                    quote: 'Working with OffTheGrid GH was a game-changer. They understood our vision and brought it to life in ways we never imagined possible.',
                    rating: 5
                },
                {
                    id: 4,
                    name: 'David Thompson',
                    company: 'Real Estate Agency',
                    role: 'CEO',
                    video: '{{ asset("videos/testimonials/emily-testimonial.mp4") }}',
                    fallback: 'linear-gradient(135deg, #2F4F4F 0%, #556B2F 50%, #8FBC8F 100%)',
                    quote: 'Their real estate videos helped us close 60% more deals. The quality and professionalism of their work speaks for itself.',
                    rating: 5
                }
            ];

            const testimonial = testimonials.find(t => t.id === testimonialId);
            if (!testimonial) return;

            // Update modal content
            document.getElementById('modalTestimonialQuote').textContent = testimonial.quote;
            document.getElementById('modalTestimonialName').textContent = testimonial.name;
            document.getElementById('modalTestimonialRole').textContent = testimonial.role;
            document.getElementById('modalTestimonialCompany').textContent = testimonial.company;

            // Update video
            const video = document.getElementById('modalTestimonialVideo');
            const fallback = document.getElementById('modalTestimonialFallback');
            
            // Reset video
            video.style.display = 'block';
            fallback.style.display = 'none';
            
            // Set video source
            video.src = testimonial.video;
            fallback.style.background = testimonial.fallback;

            // Handle video error
            video.onerror = function() {
                video.style.display = 'none';
                fallback.style.display = 'flex';
            };

            // Handle video load
            video.onloadeddata = function() {
                video.style.display = 'block';
                fallback.style.display = 'none';
            };

            // Set a timeout to show fallback if video doesn't load
            setTimeout(function() {
                if (video.readyState === 0) {
                    video.style.display = 'none';
                    fallback.style.display = 'flex';
                }
            }, 2000);

            // Update rating
            const ratingContainer = document.getElementById('modalTestimonialRating');
            ratingContainer.innerHTML = '';
            for (let i = 0; i < testimonial.rating; i++) {
                const star = document.createElement('span');
                star.style.color = '#FFD700';
                star.style.fontSize = '1.5rem';
                star.style.marginRight = '0.3rem';
                star.textContent = '★';
                ratingContainer.appendChild(star);
            }

            // Show modal
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function closeTestimonialModal() {
            const modal = document.getElementById('testimonialModal');
            const video = document.getElementById('modalTestimonialVideo');
            
            // Pause and reset the video
            if (video && !video.paused) {
                video.pause();
                video.currentTime = 0; // Reset to beginning
            }
            
            modal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Close testimonial modal when clicking outside
        document.addEventListener('click', function(event) {
            const testimonialModal = document.getElementById('testimonialModal');
            if (event.target === testimonialModal) {
                closeTestimonialModal();
            }
        });

        // Contact form submission
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const formMessage = document.getElementById('formMessage');

            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Disable submit button
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Sending...';
                    
                    // Get form data
                    const formData = new FormData(contactForm);
                    
                    // Send AJAX request
                    fetch('/contact', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            formMessage.style.display = 'block';
                            formMessage.style.background = 'rgba(0, 255, 0, 0.1)';
                            formMessage.style.border = '1px solid #00FF00';
                            formMessage.style.color = '#00FF00';
                            formMessage.textContent = data.message;
                            contactForm.reset();
                        } else {
                            formMessage.style.display = 'block';
                            formMessage.style.background = 'rgba(255, 0, 0, 0.1)';
                            formMessage.style.border = '1px solid #FF0000';
                            formMessage.style.color = '#FF0000';
                            formMessage.textContent = data.message;
                        }
                    })
                    .catch(error => {
                        formMessage.style.display = 'block';
                        formMessage.style.background = 'rgba(255, 0, 0, 0.1)';
                        formMessage.style.border = '1px solid #FF0000';
                        formMessage.style.color = '#FF0000';
                        formMessage.textContent = 'Sorry, there was an error sending your message. Please try again.';
                    })
                    .finally(() => {
                        // Re-enable submit button
                        submitBtn.disabled = false;
                        submitBtn.textContent = 'Send Message';
                    });
                });
            }
        });
    </script>
</body>
</html>
