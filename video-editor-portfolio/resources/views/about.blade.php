@extends('layouts.app')

@section('content')
<!-- About Hero Section -->
<section class="hero-section" style="height: 60vh; background: linear-gradient(135deg, #000000 0%, #FF0000 50%, #000000 100%);">
    <div class="hero-content">
        <h1 class="hero-title" style="font-size: 3rem;">
            About <span class="text-red">Me</span>
        </h1>
        <p class="hero-subtitle">
            My journey in video editing and creative storytelling
        </p>
    </div>
</section>

<!-- Detailed About Section -->
<section class="section">
    <div class="container">
        <div class="about-story-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start; margin-bottom: 4rem;">
            <div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 2rem; color: #FFFFFF;">
                    My <span class="text-red">Story</span>
                </h2>
                <p style="font-size: 1.1rem; margin-bottom: 1.5rem; opacity: 0.9; line-height: 1.8;">
                    My passion for video editing began over 5 years ago when I first discovered the power of visual storytelling. 
                    What started as a hobby quickly evolved into a professional career dedicated to bringing creative visions to life.
                </p>
                <p style="font-size: 1.1rem; margin-bottom: 1.5rem; opacity: 0.9; line-height: 1.8;">
                    I specialize in transforming raw footage into compelling narratives that resonate with audiences. 
                    From corporate presentations to creative music videos, I approach each project with meticulous attention to detail 
                    and a deep understanding of visual communication.
                </p>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9; line-height: 1.8;">
                    My work philosophy centers around collaboration, creativity, and technical excellence. I believe that 
                    the best videos are born from a perfect blend of artistic vision and technical precision.
                </p>
            </div>
            <div style="text-align: center;">
                <div class="about-profile-image" style="width: 100%; height: 400px; border-radius: 10px; overflow: hidden; position: relative; margin-bottom: 2rem; border: 2px solid rgba(255, 0, 0, 0.3);">
                    <img src="{{ asset('about-photo.jpg') }}" alt="Professional Photo" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="display: flex; gap: 2rem; justify-content: center; flex-wrap: wrap;">
                    <div style="text-align: center;">
                        <h3 style="color: #FF0000; font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">5+</h3>
                        <p style="opacity: 0.8;">Years Experience</p>
                    </div>
                    <div style="text-align: center;">
                        <h3 style="color: #FF0000; font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">200+</h3>
                        <p style="opacity: 0.8;">Projects</p>
                    </div>
                    <div style="text-align: center;">
                        <h3 style="color: #FF0000; font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">100%</h3>
                        <p style="opacity: 0.8;">Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div style="margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 3rem; color: #FFFFFF; text-align: center;">
                My <span class="text-red">Skills</span>
            </h2>
            <div class="skills-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2); text-align: center;">
                    <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Video Editing</h3>
                    <div style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 4px; margin-bottom: 1rem;">
                        <div style="background: #FF0000; height: 100%; width: 95%; border-radius: 4px;"></div>
                    </div>
                    <p style="opacity: 0.8;">Adobe Premiere Pro, Final Cut Pro, DaVinci Resolve</p>
                </div>
                <div style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2); text-align: center;">
                    <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Motion Graphics</h3>
                    <div style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 4px; margin-bottom: 1rem;">
                        <div style="background: #FF0000; height: 100%; width: 90%; border-radius: 4px;"></div>
                    </div>
                    <p style="opacity: 0.8;">After Effects, Cinema 4D, Blender</p>
                </div>
                <div style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2); text-align: center;">
                    <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Color Grading</h3>
                    <div style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 4px; margin-bottom: 1rem;">
                        <div style="background: #FF0000; height: 100%; width: 88%; border-radius: 4px;"></div>
                    </div>
                    <p style="opacity: 0.8;">DaVinci Resolve, Adobe SpeedGrade</p>
                </div>
                <div style="background: rgba(255, 255, 255, 0.05); padding: 2rem; border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2); text-align: center;">
                    <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Audio Production</h3>
                    <div style="background: rgba(255, 255, 255, 0.1); height: 8px; border-radius: 4px; margin-bottom: 1rem;">
                        <div style="background: #FF0000; height: 100%; width: 85%; border-radius: 4px;"></div>
                    </div>
                    <p style="opacity: 0.8;">Pro Tools, Audacity, Adobe Audition</p>
                </div>
            </div>
        </div>

        <!-- Experience Timeline -->
        <div>
            <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 3rem; color: #FFFFFF; text-align: center;">
                My <span class="text-red">Journey</span>
            </h2>
            <div class="timeline-container" style="max-width: 800px; margin: 0 auto;">
                <div class="timeline-item" style="display: flex; margin-bottom: 3rem; align-items: start;">
                    <div class="timeline-dot" style="background: #FF0000; width: 20px; height: 20px; border-radius: 50%; margin-right: 2rem; margin-top: 0.5rem; flex-shrink: 0;"></div>
                    <div>
                        <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">2024 - Present</h3>
                        <h4 style="color: #FFFFFF; font-size: 1.2rem; font-weight: 600; margin-bottom: 1rem;">Senior Video Editor</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">Leading video production for major corporate clients, specializing in brand storytelling and creative direction. Managing a team of editors and overseeing complex multi-camera projects.</p>
                    </div>
                </div>
                <div class="timeline-item" style="display: flex; margin-bottom: 3rem; align-items: start;">
                    <div class="timeline-dot" style="background: #FF0000; width: 20px; height: 20px; border-radius: 50%; margin-right: 2rem; margin-top: 0.5rem; flex-shrink: 0;"></div>
                    <div>
                        <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">2022 - 2024</h3>
                        <h4 style="color: #FFFFFF; font-size: 1.2rem; font-weight: 600; margin-bottom: 1rem;">Freelance Video Editor</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">Worked with diverse clients across entertainment, education, and corporate sectors. Developed expertise in motion graphics and advanced color grading techniques.</p>
                    </div>
                </div>
                <div class="timeline-item" style="display: flex; margin-bottom: 3rem; align-items: start;">
                    <div class="timeline-dot" style="background: #FF0000; width: 20px; height: 20px; border-radius: 50%; margin-right: 2rem; margin-top: 0.5rem; flex-shrink: 0;"></div>
                    <div>
                        <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">2020 - 2022</h3>
                        <h4 style="color: #FFFFFF; font-size: 1.2rem; font-weight: 600; margin-bottom: 1rem;">Junior Video Editor</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">Started professional career in video production, learning industry-standard software and developing foundational skills in storytelling and technical editing.</p>
                    </div>
                </div>
                <div style="display: flex; align-items: start;">
                    <div style="background: #FF0000; width: 20px; height: 20px; border-radius: 50%; margin-right: 2rem; margin-top: 0.5rem; flex-shrink: 0;"></div>
                    <div>
                        <h3 style="color: #FF0000; font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">2019 - 2020</h3>
                        <h4 style="color: #FFFFFF; font-size: 1.2rem; font-weight: 600; margin-bottom: 1rem;">Video Editing Student</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">Completed comprehensive training in video editing, motion graphics, and post-production techniques. Built a strong foundation in visual storytelling and creative expression.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div style="text-align: center; margin-top: 4rem; padding: 3rem; background: rgba(255, 0, 0, 0.1); border-radius: 10px; border: 1px solid rgba(255, 0, 0, 0.2);">
            <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem; color: #FFFFFF;">Ready to Work Together?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">Let's create something amazing together. I'd love to hear about your project.</p>
            <div class="cta-buttons" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="#contact" class="btn-primary">Get In Touch</a>
                <a href="{{ route('home') }}#work" class="btn-outline">View My Work</a>
            </div>
        </div>
    </div>
</section>
@endsection
