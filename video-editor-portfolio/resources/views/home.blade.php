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
            <a href="#work" class="btn-primary">View My Work</a>
            <a href="#contact" class="btn-outline">Get In Touch</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">
            About <span class="text-red">Me</span>
        </h2>
        <div class="about-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1.5rem; color: #FF0000;">Professional Video Editor</h3>
                <p style="font-size: 1.1rem; margin-bottom: 1.5rem; opacity: 0.9;">
                    With over 5 years of experience in video production and editing, I specialize in creating 
                    compelling visual stories that captivate audiences. From corporate videos to creative projects, 
                    I bring technical expertise and artistic vision to every project.
                </p>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">
                    My work spans across various industries including advertising, entertainment, education, 
                    and social media content creation. I'm passionate about transforming raw footage into 
                    polished, professional videos that exceed expectations.
                </p>
                <div style="display: flex; gap: 2rem; flex-wrap: wrap; margin-bottom: 2rem;">
                    <div>
                        <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">5+ Years</h4>
                        <p style="opacity: 0.8;">Experience</p>
                    </div>
                    <div>
                        <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">200+</h4>
                        <p style="opacity: 0.8;">Projects Completed</p>
                    </div>
                    <div>
                        <h4 style="color: #FF0000; font-weight: 600; margin-bottom: 0.5rem;">100%</h4>
                        <p style="opacity: 0.8;">Client Satisfaction</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn-primary">Read More About Me</a>
            </div>
            <div style="text-align: center;">
                <div class="about-image" style="width: 300px; height: 400px; border-radius: 10px; margin: 0 auto; overflow: hidden; border: 2px solid rgba(255, 0, 0, 0.3);">
                    <img src="{{ asset('about-photo.jpg') }}" alt="Professional Photo" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section" style="background: rgba(255, 0, 0, 0.05);">
    <div class="container">
        <h2 class="section-title">
            My <span class="text-red">Services</span>
        </h2>
        <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2);">
                <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Video Editing</h3>
                <p style="opacity: 0.9; margin-bottom: 1.5rem;">
                    Professional video editing services including color correction, audio mixing, 
                    transitions, and effects to create polished final products.
                </p>
                <ul style="list-style: none; opacity: 0.8;">
                    <li style="margin-bottom: 0.5rem;">• Color Grading & Correction</li>
                    <li style="margin-bottom: 0.5rem;">• Audio Mixing & Mastering</li>
                    <li style="margin-bottom: 0.5rem;">• Motion Graphics & Effects</li>
                    <li style="margin-bottom: 0.5rem;">• Multi-camera Editing</li>
                </ul>
            </div>
            <div style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2);">
                <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Post-Production</h3>
                <p style="opacity: 0.9; margin-bottom: 1.5rem;">
                    Complete post-production services from raw footage to final delivery, 
                    ensuring your content meets professional standards.
                </p>
                <ul style="list-style: none; opacity: 0.8;">
                    <li style="margin-bottom: 0.5rem;">• Raw Footage Processing</li>
                    <li style="margin-bottom: 0.5rem;">• Advanced Compositing</li>
                    <li style="margin-bottom: 0.5rem;">• Title & Graphics Design</li>
                    <li style="margin-bottom: 0.5rem;">• Final Export & Delivery</li>
                </ul>
            </div>
            <div style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2);">
                <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Creative Direction</h3>
                <p style="opacity: 0.9; margin-bottom: 1.5rem;">
                    Strategic creative direction and storytelling to ensure your video 
                    content effectively communicates your message and engages your audience.
                </p>
                <ul style="list-style: none; opacity: 0.8;">
                    <li style="margin-bottom: 0.5rem;">• Story Development</li>
                    <li style="margin-bottom: 0.5rem;">• Visual Style Guide</li>
                    <li style="margin-bottom: 0.5rem;">• Brand Integration</li>
                    <li style="margin-bottom: 0.5rem;">• Content Strategy</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Work Portfolio Section -->
<section id="work" class="section" style="padding: 0;">
    <div style="width: 100%; max-width: 100vw; margin: 0; padding: 0;">
        <div style="text-align: center; padding: 4rem 2rem 2rem;">
            <h2 class="section-title" style="margin-bottom: 3rem;">
                My <span class="text-red">Work</span>
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
                 onmouseover="this.style.transform='scale(1.02)'; this.style.borderColor='#FF0000';" 
                 onmouseout="this.style.transform='scale(1)'; this.style.borderColor='rgba(255, 0, 0, 0.3)';">
                
                <!-- Video Background -->
                <video class="portfolio-video" 
                       autoplay muted loop 
                       style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
                    <source src="{{ asset($project['video']) }}" type="video/mp4">
                </video>
                
                <!-- Fallback Background -->
                <div class="portfolio-fallback" 
                     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: {{ $project['fallback'] }}; z-index: 1;"></div>
                
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
                        <div style="background: rgba(0, 0, 0, 0.8); padding: 12px 20px; border-radius: 25px; margin-bottom: 1rem;">
                            <h3 style="color: #FFFFFF; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.5rem;">{{ $project['client'] }}</h3>
                            <p style="color: #FF0000; font-size: 0.9rem; font-weight: 600; margin: 0;">{{ $project['category'] }}</p>
                        </div>
                        
                        <!-- Icon -->
                        <div style="font-size: 3rem; margin-bottom: 1rem; text-align: center;">{{ $project['icon'] }}</div>
                        
                        <!-- View Button -->
                        <div style="text-align: center;">
                            <button onclick="openVideoModal('{{ $project['title'] }}', '{{ $project['client'] }}', '{{ $project['category'] }}', '{{ asset($project['video']) }}')" style="background: rgba(255, 0, 0, 0.9); color: #FFFFFF; border: none; padding: 10px 20px; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;" 
                                    onmouseover="this.style.background='#FFFFFF'; this.style.color='#FF0000';" 
                                    onmouseout="this.style.background='rgba(255, 0, 0, 0.9)'; this.style.color='#FFFFFF';">
                                View Project
                            </button>
                        </div>
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
                    Ready to bring your vision to life? I'd love to hear about your project and discuss 
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
                <form class="contact-form" style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2);">
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Name</label>
                        <input type="text" style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem;" placeholder="Your Name">
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Email</label>
                        <input type="email" style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem;" placeholder="your@email.com">
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Project Type</label>
                        <select style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem;">
                            <option value="">Select Project Type</option>
                            <option value="corporate">Corporate Video</option>
                            <option value="music">Music Video</option>
                            <option value="social">Social Media</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 2rem;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #FFFFFF;">Message</label>
                        <textarea rows="4" style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 0, 0, 0.3); border-radius: 5px; color: #FFFFFF; font-size: 1rem; resize: vertical;" placeholder="Tell me about your project..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width: 100%;">Send Message</button>
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
            <div class="modal-portfolio-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.4s ease; border: 2px solid rgba(255, 0, 0, 0.3); height: 300px;" onmouseover="this.style.transform='scale(1.02)'; this.style.borderColor='#FF0000';" onmouseout="this.style.transform='scale(1)'; this.style.borderColor='rgba(255, 0, 0, 0.3)';">
                
                <!-- Video Background -->
                <video class="modal-portfolio-video" 
                       autoplay muted loop 
                       style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
                    <source src="{{ asset($project['video']) }}" type="video/mp4">
                </video>
                
                <!-- Fallback Background -->
                <div class="modal-portfolio-fallback" 
                     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: {{ $project['fallback'] }}; z-index: 1;"></div>
                
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
                        <div style="background: rgba(0, 0, 0, 0.8); padding: 8px 16px; border-radius: 20px; margin-bottom: 1rem;">
                            <h3 style="color: #FFFFFF; font-size: 1rem; font-weight: 700; margin-bottom: 0.3rem;">{{ $project['client'] }}</h3>
                            <p style="color: #FF0000; font-size: 0.8rem; font-weight: 600; margin: 0;">{{ $project['category'] }}</p>
                        </div>
                        
                        <!-- Icon -->
                        <div style="font-size: 2rem; margin-bottom: 0.5rem; text-align: center;">{{ $project['icon'] }}</div>
                        
                        <!-- View Button -->
                        <div style="text-align: center;">
                            <button onclick="openVideoModal('{{ $project['title'] }}', '{{ $project['client'] }}', '{{ $project['category'] }}', '{{ asset($project['video']) }}')" style="background: rgba(255, 0, 0, 0.9); color: #FFFFFF; border: none; padding: 8px 16px; border-radius: 20px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-size: 0.8rem;" 
                                    onmouseover="this.style.background='#FFFFFF'; this.style.color='#FF0000';" 
                                    onmouseout="this.style.background='rgba(255, 0, 0, 0.9)'; this.style.color='#FFFFFF';">
                                View Project
                            </button>
                        </div>
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
@endsection
