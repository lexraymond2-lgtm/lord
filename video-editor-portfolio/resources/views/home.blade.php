@extends('layouts.app')

@section('content')
<!-- Hero Section with Video Background -->
<section class="hero-section">
    <video class="video-background" autoplay muted loop>
        <source src="{{ asset('videos/hero-video.mp4') }}" type="video/mp4">
        <!-- Fallback for browsers that don't support video -->
    </video>
    <!-- Fallback content when video fails to load -->
    <div class="video-fallback" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, #000000 0%, #FF0000 50%, #000000 100%); z-index: -3; display: none;"></div>
    <div class="video-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">
            <span class="text-white">CREATIVE</span><br>
            <span class="text-red">VIDEO EDITOR</span>
        </h1>
        <p class="hero-subtitle">
            Bringing your vision to life through professional video editing and storytelling
        </p>
        <div class="hero-buttons">
            <a href="#work" class="btn-primary">View Our Work</a>
            <a href="#contact" class="btn-outline">Get In Touch</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section" style="background: rgba(0, 0, 0, 0.8);">
    <div class="container">
        <h2 class="section-title">
            Client <span class="text-red">Testimonials</span>
        </h2>
        <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-top: 3rem;">
            @php
            $testimonials = [
                [
                    'id' => 1,
                    'name' => 'Sarah Johnson',
                    'company' => 'Tech Solutions Inc.',
                    'role' => 'Marketing Director',
                    'video' => 'videos/testimonials/em-testimonial.mp4',
                    'fallback' => 'linear-gradient(135deg, #1a1a1a 0%, #333333 50%, #666666 100%)',
                    'quote' => 'offthegridgh transformed our brand story into a compelling visual narrative. Their attention to detail and creative vision exceeded our expectations.',
                    'rating' => 5
                ],
                [
                    'id' => 2,
                    'name' => 'Michael Chen',
                    'company' => 'Restaurant Group',
                    'role' => 'Owner',
                    'video' => 'videos/testimonials/emi-testimonial.mp4',
                    'fallback' => 'linear-gradient(135deg, #8B0000 0%, #DC143C 50%, #FF6347 100%)',
                    'quote' => 'The video they created for our restaurant launch was absolutely stunning. It perfectly captured our brand essence and increased our bookings by 40%.',
                    'rating' => 5
                ],
                [
                    'id' => 3,
                    'name' => 'Emily Rodriguez',
                    'company' => 'Fashion Brand',
                    'role' => 'Creative Director',
                    'video' => 'videos/testimonials/emil-testimonial.mp4',
                    'fallback' => 'linear-gradient(135deg, #4B0082 0%, #8A2BE2 50%, #DA70D6 100%)',
                    'quote' => 'Working with offthegridgh was a game-changer. They understood our vision and brought it to life in ways we never imagined possible.',
                    'rating' => 5
                ],
                [
                    'id' => 4,
                    'name' => 'David Thompson',
                    'company' => 'Real Estate Agency',
                    'role' => 'CEO',
                    'video' => 'videos/testimonials/emily-testimonial.mp4',
                    'fallback' => 'linear-gradient(135deg, #2F4F4F 0%, #556B2F 50%, #8FBC8F 100%)',
                    'quote' => 'Their real estate videos helped us close 60% more deals. The quality and professionalism of their work speaks for itself.',
                    'rating' => 5
                ]
            ];
            @endphp

            @foreach($testimonials as $testimonial)
            <div class="testimonial-card" style="background: rgba(255, 255, 255, 0.05); border-radius: 15px; overflow: hidden; border: 1px solid rgba(255, 0, 0, 0.2); position: relative; height: 400px; cursor: pointer;" onclick="openTestimonialModal({{ $testimonial['id'] }})">
                <!-- Video Background -->
                <div class="testimonial-video" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
                    <video 
                        style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;" 
                        autoplay 
                        muted 
                        loop 
                        playsinline
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';"
                    >
                        <source src="{{ asset($testimonial['video']) }}" type="video/mp4">
                    </video>
                    <div class="video-fallback" style="display: none; width: 100%; height: 100%; background: {{ $testimonial['fallback'] }};"></div>
                </div>
                
                <!-- Content Overlay -->
                <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                    <!-- Quote -->
                    <div>
                        <div style="font-size: 3rem; color: #FF0000; margin-bottom: 1rem; opacity: 0.8;">"</div>
                        <p style="font-size: 1.1rem; line-height: 1.6; color: #FFFFFF; font-style: italic; margin-bottom: 1.5rem;">
                            {{ $testimonial['quote'] }}
                        </p>
                    </div>
                    
                    <!-- Client Info -->
                    <div>
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                                <span style="color: #FFD700; font-size: 1.2rem; margin-right: 0.2rem;">★</span>
                            @endfor
                        </div>
                        <h4 style="color: #FF0000; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.3rem;">{{ $testimonial['name'] }}</h4>
                        <p style="color: #FFFFFF; opacity: 0.8; font-size: 0.9rem; margin-bottom: 0.2rem;">{{ $testimonial['role'] }}</p>
                        <p style="color: #FFFFFF; opacity: 0.6; font-size: 0.8rem;">{{ $testimonial['company'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">
            About <span class="text-red">offthegridgh</span>
        </h2>
        <div class="about-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1.5rem; color: #FF0000;">Creative Video Production Studio</h3>
                <p style="font-size: 1.1rem; margin-bottom: 1.5rem; opacity: 0.9;">
                    We're a dynamic video production startup that specializes in creating compelling visual stories 
                    for modern brands. Our team combines creative vision with cutting-edge technology to deliver 
                    exceptional video content that drives engagement and achieves business objectives.
                </p>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">
                    From corporate communications to music videos and social media content, we bring fresh perspectives 
                    and innovative techniques to every project. Our collaborative approach ensures that your vision 
                    becomes a compelling visual reality.
                </p>
                <div style="display: flex; gap: 2rem; flex-wrap: wrap; margin-bottom: 2rem;">
                    <div>
                        <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">3+ Years</h4>
                        <p style="opacity: 0.8;">Company Experience</p>
                    </div>
                    <div>
                        <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">150+</h4>
                        <p style="opacity: 0.8;">Projects Delivered</p>
                    </div>
                    <div>
                        <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">100%</h4>
                        <p style="opacity: 0.8;">Client Satisfaction</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn-primary">Learn More About Us</a>
            </div>
            <div style="text-align: center;">
                <div class="about-image" style="width: 300px; height: 400px; border-radius: 10px; margin: 0 auto; overflow: hidden; border: 2px solid rgba(255, 0, 0, 0.3);">
                    <img src="{{ asset('about-photo.jpg') }}" alt="Team Photo" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section" style="background: rgba(255, 0, 0, 0.05); padding: 0;">
    <div style="width: 100vw; max-width: 100vw; margin: 0; padding: 0;">
        <div style="text-align: center; padding: 4rem 2rem 2rem;">
            <h2 class="section-title" style="margin-bottom: 3rem;">
                Our <span class="text-red">Services</span>
            </h2>
        </div>
        
        @php
        $services = [
            [
                'id' => 1,
                'title' => 'COMMERCIALS',
                'video' => '/videos/services/commercials.mp4',
                'fallback' => 'linear-gradient(135deg, #1a1a1a 0%, #333333 50%, #666666 100%)',
                'border' => 'border-bottom: 2px solid rgba(255, 0, 0, 0.3);'
            ],
            [
                'id' => 2,
                'title' => 'TESTIMONIALS',
                'video' => '/videos/services/testimonials.mp4',
                'fallback' => 'linear-gradient(135deg, #8B0000 0%, #DC143C 50%, #FF6347 100%)',
                'border' => 'border-bottom: 2px solid rgba(255, 0, 0, 0.3);'
            ],
            [
                'id' => 3,
                'title' => 'PRODUCT VIDEOS',
                'video' => '/videos/services/product-videos.mp4',
                'fallback' => 'linear-gradient(135deg, #2F4F4F 0%, #556B2F 50%, #8FBC8F 100%)',
                'border' => 'border-bottom: 2px solid rgba(255, 0, 0, 0.3);'
            ],
            [
                'id' => 4,
                'title' => 'DOCUMENTARY',
                'video' => '/videos/services/documentary.mp4',
                'fallback' => 'linear-gradient(135deg, #4B0082 0%, #8A2BE2 50%, #DA70D6 100%)',
                'border' => 'border-bottom: 2px solid rgba(255, 0, 0, 0.3);'
            ],
            [
                'id' => 5,
                'title' => 'BRAND FILMS',
                'video' => '/videos/services/brand-films.mp4',
                'fallback' => 'linear-gradient(135deg, #228B22 0%, #32CD32 50%, #90EE90 100%)',
                'border' => ''
            ]
        ];
        @endphp

        <div class="services-grid" style="display: grid; grid-template-columns: 1fr; gap: 0;">
            @foreach($services as $service)
            <div class="service-item" style="width: 100vw; height: 100vh; position: relative; overflow: hidden; {{ $service['border'] }}"
                 onmouseenter="this.querySelector('video').play()" onmouseleave="this.querySelector('video').pause()">
                <!-- Video Background -->
                <video class="service-video" 
                       muted loop preload="metadata"
                       style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;"
                       onerror="console.log('Video error:', this.src); this.style.display='none'; this.nextElementSibling.style.display='block';"
                       onload="console.log('Video loaded successfully:', this.src);"
                       onloadstart="console.log('Video loading started:', this.src);"
                       oncanplay="console.log('Video can play:', this.src);">
                    <source src="{{ $service['video'] }}" type="video/mp4">
                </video>
                
                <!-- Fallback Background -->
                <div class="service-fallback" 
                     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: {{ $service['fallback'] }}; z-index: 1; display: none;"></div>
                
                <!-- Overlay -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.4) 100%); z-index: 2;"></div>
                
                <!-- Content -->
                <div style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 2rem; text-align: center;">
                    <h3 style="color: #FF0000; font-size: 4rem; font-weight: 800; margin-bottom: 2rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">{{ $service['title'] }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Work Portfolio Section -->
<section id="work" class="section" style="padding: 0;">
    <div style="width: 100%; max-width: 100vw; margin: 0; padding: 0;">
        <div style="text-align: center; padding: 4rem 2rem 2rem;">
            <h2 class="section-title" style="margin-bottom: 3rem;">
                Our <span class="text-red">Work</span>
            </h2>
        </div>
        
        <div class="portfolio-grid" style="display: grid; grid-template-columns: 2fr 1fr; grid-template-rows: 1fr 1fr; gap: 0.5rem; height: 80vh; max-height: 800px;">
            @php
                $allProjects = [
                    [
                        'id' => 1,
                        'title' => 'WINE & DINE',
                        'client' => 'Sixty Vines',
                        'category' => 'Restaurant & Hospitality',
                        'video' => 'videos/portfolio/wine-dine.mp4',
                        'fallback' => 'linear-gradient(135deg, #8B4513 0%, #D2691E 50%, #CD853F 100%)',
                        'icon' => '🍷',
                        'size' => 'large',
                        'gridArea' => '1 / 1 / 3 / 2'
                    ],
                    [
                        'id' => 2,
                        'title' => 'CABIN OVERVIEW',
                        'client' => 'The Timberline',
                        'category' => 'Real Estate',
                        'video' => 'videos/portfolio/cabin.mp4',
                        'fallback' => 'linear-gradient(135deg, #2F4F4F 0%, #556B2F 50%, #8FBC8F 100%)',
                        'icon' => '🏡',
                        'size' => 'medium',
                        'gridArea' => '1 / 2 / 2 / 3'
                    ],
                    [
                        'id' => 3,
                        'title' => 'RACE TRACK',
                        'client' => 'Speed Circuit',
                        'category' => 'Automotive',
                        'video' => 'videos/portfolio/racing.mp4',
                        'fallback' => 'linear-gradient(135deg, #4682B4 0%, #87CEEB 50%, #B0C4DE 100%)',
                        'icon' => '🏎️',
                        'size' => 'medium',
                        'gridArea' => '2 / 2 / 3 / 3'
                    ],
                    [
                        'id' => 4,
                        'title' => 'IN MOTION',
                        'client' => 'Action Sports',
                        'category' => 'Dynamic Action',
                        'video' => 'videos/portfolio/motion.mp4',
                        'fallback' => 'linear-gradient(135deg, #228B22 0%, #32CD32 50%, #90EE90 100%)',
                        'icon' => '🏃',
                        'size' => 'large',
                        'gridArea' => '1 / 3 / 3 / 4'
                    ],
                    [
                        'id' => 5,
                        'title' => 'CORPORATE',
                        'client' => 'Tech Solutions',
                        'category' => 'Business',
                        'video' => 'videos/portfolio/corporate.mp4',
                        'fallback' => 'linear-gradient(135deg, #1a1a1a 0%, #333333 50%, #666666 100%)',
                        'icon' => '💼',
                        'size' => 'medium',
                        'gridArea' => '3 / 1 / 4 / 2'
                    ],
                    [
                        'id' => 6,
                        'title' => 'MUSIC VIDEO',
                        'client' => 'Artist Name',
                        'category' => 'Entertainment',
                        'video' => 'videos/portfolio/music.mp4',
                        'fallback' => 'linear-gradient(135deg, #FF1493 0%, #FF69B4 50%, #FFB6C1 100%)',
                        'icon' => '🎵',
                        'size' => 'medium',
                        'gridArea' => '3 / 2 / 4 / 3'
                    ],

                    [
                        'id' => 8,
                        'title' => 'MUSIC VIDEO',
                        'client' => 'Artist Name',
                        'category' => 'Entertainment',
                        'video' => 'videos/portfolio/music.mp4',
                        'fallback' => 'linear-gradient(135deg, #FF1493 0%, #FF69B4 50%, #FFB6C1 100%)',
                        'icon' => '🎵',
                        'size' => 'medium',
                        'gridArea' => '3 / 2 / 4 / 3'
                    ]
                ];
                
                // Show only first 4 projects on homepage
                $projects = array_slice($allProjects, 0, 4);
            @endphp

            @foreach($projects as $project)
            <div class="portfolio-item" 
                 style="grid-area: {{ $project['gridArea'] }}; position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.4s ease; border: 2px solid rgba(255, 0, 0, 0.3);" 
                 onmouseover="this.style.transform='scale(1.02)'; this.style.borderColor='#FF0000'; this.querySelector('video').play();" 
                 onmouseout="this.style.transform='scale(1)'; this.style.borderColor='rgba(255, 0, 0, 0.3)'; this.querySelector('video').pause();"
                 onclick="openVideoModal('{{ $project['title'] }}', '{{ $project['client'] }}', '{{ $project['category'] }}', '{{ asset($project['video']) }}')">
                
                <!-- Video Background -->
                <video class="portfolio-video" 
                       muted loop preload="metadata"
                       style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
                    <source src="{{ asset($project['video']) }}" type="video/mp4">
                </video>
                
                <!-- Fallback Background -->
                <div class="portfolio-fallback" 
                     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: {{ $project['fallback'] }}; z-index: 1; display: none;"></div>
                
                <!-- Overlay -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.7) 100%); z-index: 2;"></div>
                
                <!-- Content -->
                <div class="portfolio-content" style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: space-between; padding: 2rem;">
                    <!-- Top Badge -->
                    <div style="align-self: flex-start;">
                        <div style="background: rgba(255, 0, 0, 0.9); padding: 8px 16px; border-radius: 25px; display: inline-block;">
                            <span style="color: #FFFFFF; font-weight: 700; font-size: 0.8rem; letter-spacing: 1px;">{{ $project['title'] }}</span>
                        </div>
                    </div>
                    
                    <!-- Bottom Content -->
                    <div style="align-self: flex-end; text-align: right;">
                        <!-- Empty space for clean look -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View All Projects Button -->
        <div style="text-align: center; padding: 3rem 2rem;">
            <button onclick="openProjectsModal()" class="btn-primary" style="font-size: 1.1rem; padding: 15px 40px; border: none; cursor: pointer;">View All Projects</button>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section" style="background: rgba(255, 0, 0, 0.05);">
    <div class="container">
        <h2 class="section-title">
            Get In <span class="text-red">Touch</span>
        </h2>
        <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
            <div>
                <h3 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 1.5rem; color: #FFFFFF;">Let's Create Something Amazing</h3>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">
                    Ready to bring your vision to life? We'd love to hear about your project and discuss 
                    how we can work together to create something extraordinary.
                </p>
                <div style="margin-bottom: 2rem;">
                    <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">Email</h4>
                    <p style="opacity: 0.8;">contact@videoeditor.com</p>
                </div>
                <div style="margin-bottom: 2rem;">
                    <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">Phone</h4>
                    <p style="opacity: 0.8;">+1 (555) 123-4567</p>
                </div>
                <div>
                    <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">Social Media</h4>
                    <div style="display: flex; gap: 1rem;">
                        <a href="#" style="color: #FFFFFF; text-decoration: none; opacity: 0.8;">Instagram</a>
                        <a href="#" style="color: #FFFFFF; text-decoration: none; opacity: 0.8;">YouTube</a>
                        <a href="#" style="color: #FFFFFF; text-decoration: none; opacity: 0.8;">LinkedIn</a>
                    </div>
                </div>
            </div>
            <div>
                <form id="contactForm" class="contact-form" style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2);">
                    @csrf
                    <div id="formMessage" style="display: none; padding: 10px; margin-bottom: 1rem; border-radius: 5px; text-align: center;"></div>
                    
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Name *</label>
                        <input type="text" name="name" required style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem;" placeholder="Your Name">
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Email *</label>
                        <input type="email" name="email" required style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem;" placeholder="your@email.com">
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Project Type *</label>
                        <select name="project_type" required style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem;">
                            <option value="">Select Project Type</option>
                            <option value="Corporate Video">Corporate Video</option>
                            <option value="Music Video">Music Video</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 2rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Message *</label>
                        <textarea name="message" rows="4" required style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem; resize: vertical;" placeholder="Tell me about your project..."></textarea>
                    </div>
                    <button type="submit" id="submitBtn" class="btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer style="background: #000000; padding: 2rem 0; border-top: 1px solid rgba(255, 0, 0, 0.2);">
    <div class="container" style="text-align: center;">
        <p style="opacity: 0.8; margin-bottom: 1rem;">© 2024 offthegridgh. All rights reserved.</p>
    </div>
</footer>

<!-- Projects Modal -->
<div id="projectsModal" class="modal-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.95); z-index: 10000; overflow-y: auto;">
    <div class="modal-content" style="position: relative; max-width: 1400px; margin: 2rem auto; padding: 2rem; background: #000000; border-radius: 15px; border: 2px solid rgba(255, 0, 0, 0.3);">
        <!-- Modal Header -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: #FFFFFF;">
                All <span class="text-red">Projects</span>
            </h2>
            <button onclick="closeProjectsModal()" style="background: #FF0000; color: #FFFFFF; border: none; padding: 10px 15px; border-radius: 50%; font-size: 1.5rem; cursor: pointer; transition: all 0.3s ease;" onmouseover="this.style.background='#FFFFFF'; this.style.color='#FF0000';" onmouseout="this.style.background='#FF0000'; this.style.color='#FFFFFF';">×</button>
        </div>
        
        <!-- All Projects Grid -->
        <div class="modal-projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @foreach($allProjects as $project)
            <div class="modal-portfolio-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.4s ease; border: 2px solid rgba(255, 0, 0, 0.3); height: 300px;" 
                 onmouseover="this.style.transform='scale(1.02)'; this.style.borderColor='#FF0000'; this.querySelector('video').play();" 
                 onmouseout="this.style.transform='scale(1)'; this.style.borderColor='rgba(255, 0, 0, 0.3)'; this.querySelector('video').pause();"
                 onclick="openVideoModal('{{ $project['title'] }}', '{{ $project['client'] }}', '{{ $project['category'] }}', '{{ asset($project['video']) }}')">
                
                <!-- Video Background -->
                <video class="modal-portfolio-video" 
                       muted loop preload="metadata"
                       style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
                    <source src="{{ asset($project['video']) }}" type="video/mp4">
                </video>
                
                <!-- Fallback Background -->
                <div class="modal-portfolio-fallback" 
                     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: {{ $project['fallback'] }}; z-index: 1; display: none;"></div>
                
                <!-- Overlay -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.7) 100%); z-index: 2;"></div>
                
                <!-- Content -->
                <div style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: space-between; padding: 1.5rem;">
                    <!-- Top Badge -->
                    <div style="align-self: flex-start;">
                        <div style="background: rgba(255, 0, 0, 0.9); padding: 6px 12px; border-radius: 20px; display: inline-block;">
                            <span style="color: #FFFFFF; font-weight: 700; font-size: 0.7rem; letter-spacing: 1px;">{{ $project['title'] }}</span>
                        </div>
                    </div>
                    
                    <!-- Bottom Content -->
                    <div style="align-self: flex-end; text-align: right;">
                        <!-- Empty space for clean look -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Video Modal -->
<div id="videoModal" class="video-modal-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.95); z-index: 10001; backdrop-filter: blur(10px);">
    <div class="video-modal-content" style="position: relative; width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 2rem;">
        <!-- Close Button -->
        <button onclick="closeVideoModal()" style="position: absolute; top: 2rem; right: 2rem; background: rgba(255, 0, 0, 0.9); color: #FFFFFF; border: none; padding: 12px 18px; border-radius: 50%; font-size: 1.5rem; cursor: pointer; transition: all 0.3s ease; z-index: 10002;" onmouseover="this.style.background='#FFFFFF'; this.style.color='#FF0000';" onmouseout="this.style.background='rgba(255, 0, 0, 0.9)'; this.style.color='#FFFFFF';">×</button>
        
        <!-- Video Container -->
        <div class="video-container" style="position: relative; width: 90%; max-width: 1200px; height: 70vh; max-height: 600px; background: #000000; border-radius: 15px; overflow: hidden; border: 2px solid rgba(255, 0, 0, 0.3);">
            <!-- Video Element -->
            <video id="modalVideo" controls autoplay style="width: 100%; height: 100%; object-fit: cover;">
                <source id="modalVideoSource" src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <!-- Video Info Overlay -->
            <div class="video-info" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0, 0, 0, 0.8)); padding: 2rem; color: #FFFFFF;">
                <h3 id="modalVideoTitle" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; color: #FF0000;"></h3>
                <p id="modalVideoClient" style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.3rem;"></p>
                <p id="modalVideoCategory" style="font-size: 1rem; opacity: 0.8;"></p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Modal -->
<div id="testimonialModal" class="modal-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.9); backdrop-filter: blur(10px); z-index: 10000; justify-content: center; align-items: center;">
    <div class="modal-content" style="background: rgba(255, 255, 255, 0.05); border-radius: 20px; border: 1px solid rgba(255, 0, 0, 0.3); max-width: 800px; width: 90%; max-height: 80vh; overflow-y: auto; position: relative; animation: modalSlideIn 0.3s ease;">
        <!-- Close Button -->
        <button onclick="closeTestimonialModal()" style="position: absolute; top: 20px; right: 20px; background: rgba(255, 0, 0, 0.8); color: #FFFFFF; border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 1.2rem; cursor: pointer; z-index: 10001; display: flex; align-items: center; justify-content: center;">×</button>
        
        <!-- Modal Content -->
        <div style="padding: 3rem;">
            <!-- Video Section -->
            <div style="position: relative; height: 400px; border-radius: 15px; overflow: hidden; margin-bottom: 2rem; background: #000000;">
                <video id="modalTestimonialVideo" style="width: 100%; height: 100%; object-fit: cover;" controls preload="metadata" playsinline>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div id="modalTestimonialFallback" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, #1a1a1a 0%, #333333 50%, #666666 100%); display: flex; align-items: center; justify-content: center; color: #FFFFFF; font-size: 1.2rem;">
                    <div style="text-align: center; padding: 2rem;">
                        <div style="font-size: 4rem; margin-bottom: 1rem; color: #FF0000;">🎬</div>
                        <h3 style="color: #FF0000; font-size: 1.5rem; margin-bottom: 1rem;">Testimonial Video</h3>
                        <p style="opacity: 0.8; margin-bottom: 1rem;">Video content will be available soon</p>
                        <p style="opacity: 0.6; font-size: 0.9rem;">Check back later for the full testimonial experience</p>
                    </div>
                </div>
            </div>
            
            <!-- Content Section -->
            <div style="text-align: center;">
                <div style="font-size: 4rem; color: #FF0000; margin-bottom: 1.5rem; opacity: 0.8;">"</div>
                <p id="modalTestimonialQuote" style="font-size: 1.3rem; line-height: 1.8; color: #FFFFFF; font-style: italic; margin-bottom: 2rem;"></p>
                
                <!-- Rating -->
                <div id="modalTestimonialRating" style="display: flex; justify-content: center; margin-bottom: 2rem;"></div>
                
                <!-- Client Info -->
                <div>
                    <h3 id="modalTestimonialName" style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;"></h3>
                    <p id="modalTestimonialRole" style="color: #FFFFFF; opacity: 0.8; font-size: 1.1rem; margin-bottom: 0.3rem;"></p>
                    <p id="modalTestimonialCompany" style="color: #FFFFFF; opacity: 0.6; font-size: 1rem;"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
