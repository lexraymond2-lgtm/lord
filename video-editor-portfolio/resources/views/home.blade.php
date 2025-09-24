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
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
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
                <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
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
            </div>
            <div style="text-align: center;">
                <div style="width: 300px; height: 400px; background: linear-gradient(135deg, #FF0000, #000000); border-radius: 10px; margin: 0 auto; display: flex; align-items: center; justify-content: center; color: #FFFFFF; font-size: 1.2rem; font-weight: 600;">
                    Profile Image Placeholder
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
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
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
<section id="work" class="section">
    <div class="container">
        <h2 class="section-title">
            My <span class="text-red">Work</span>
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
            <div style="background: #111111; border-radius: 10px; overflow: hidden; border: 1px solid rgba(255, 0, 0, 0.2);">
                <div style="height: 200px; background: linear-gradient(45deg, #FF0000, #000000); display: flex; align-items: center; justify-content: center; color: #FFFFFF; font-weight: 600;">
                    Video Thumbnail 1
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: #FF0000; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.5rem;">Corporate Video</h3>
                    <p style="opacity: 0.8; margin-bottom: 1rem;">Professional corporate video showcasing company culture and values.</p>
                    <a href="#" style="color: #FF0000; text-decoration: none; font-weight: 600;">View Project →</a>
                </div>
            </div>
            <div style="background: #111111; border-radius: 10px; overflow: hidden; border: 1px solid rgba(255, 0, 0, 0.2);">
                <div style="height: 200px; background: linear-gradient(45deg, #000000, #FF0000); display: flex; align-items: center; justify-content: center; color: #FFFFFF; font-weight: 600;">
                    Video Thumbnail 2
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: #FF0000; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.5rem;">Music Video</h3>
                    <p style="opacity: 0.8; margin-bottom: 1rem;">Creative music video with dynamic editing and visual effects.</p>
                    <a href="#" style="color: #FF0000; text-decoration: none; font-weight: 600;">View Project →</a>
                </div>
            </div>
            <div style="background: #111111; border-radius: 10px; overflow: hidden; border: 1px solid rgba(255, 0, 0, 0.2);">
                <div style="height: 200px; background: linear-gradient(45deg, #FF0000, #000000); display: flex; align-items: center; justify-content: center; color: #FFFFFF; font-weight: 600;">
                    Video Thumbnail 3
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: #FF0000; font-size: 1.3rem; font-weight: 700; margin-bottom: 0.5rem;">Social Media Content</h3>
                    <p style="opacity: 0.8; margin-bottom: 1rem;">Engaging social media videos optimized for various platforms.</p>
                    <a href="#" style="color: #FF0000; text-decoration: none; font-weight: 600;">View Project →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section" style="background: rgba(255, 0, 0, 0.05);">
    <div class="container">
        <h2 class="section-title">
            Get In <span class="text-red">Touch</span>
        </h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
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
                <form style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2);">
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
        <p style="opacity: 0.8; margin-bottom: 1rem;">© 2024 Video Editor Portfolio. All rights reserved.</p>
        <div style="display: flex; justify-content: center; gap: 2rem;">
            <a href="#" style="color: #FF0000; text-decoration: none;">Privacy Policy</a>
            <a href="#" style="color: #FF0000; text-decoration: none;">Terms of Service</a>
        </div>
    </div>
</footer>
@endsection
