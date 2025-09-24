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
            height: 40px;
            width: auto;
            margin-right: 10px;
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
                height: 25px;
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

            .about-profile-image {
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
                height: 20px;
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
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('logo/Red-on-black1.jpg') }}" alt="Video Editor Logo" class="navbar-logo">
                VIDEO EDITOR
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
        });
    </script>
</body>
</html>
