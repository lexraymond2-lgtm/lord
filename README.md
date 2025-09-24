# Video Editor Portfolio Website

A modern portfolio website for video editors built with Laravel, featuring a red, white, and black theme with video background.

## Project Overview

This portfolio website is designed specifically for video editors to showcase their work. The design features:
- **Theme**: Red and white text on black background
- **Background**: Video background on the homepage
- **Framework**: Laravel (PHP)
- **Responsive**: Mobile-friendly design

## Setup Instructions

### 1. Install Laravel
Run this command to create a new Laravel project:
```bash
composer create-project laravel/laravel video-editor-portfolio
cd video-editor-portfolio
```

### 2. Database Setup
Create a database named `video_editor_portfolio` in your MySQL/PostgreSQL system.

### 3. Environment Configuration
Copy the environment file and configure your database:
```bash
cp .env.example .env
php artisan key:generate
```

Update your `.env` file with database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=video_editor_portfolio
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Run Migrations
```bash
php artisan migrate
```

### 5. Start Development Server
```bash
php artisan serve
```

## Project Structure

- `resources/views/` - Blade templates
- `public/css/` - Custom CSS files
- `public/js/` - JavaScript files
- `public/videos/` - Video files for background
- `app/Http/Controllers/` - Controllers for handling requests

## Features Implemented

1. **Homepage with Video Background**
   - Full-screen video background
   - Overlay with portfolio information
   - Call-to-action buttons

2. **Portfolio Sections**
   - About section
   - Work showcase
   - Contact form
   - Services offered

3. **Responsive Design**
   - Mobile-first approach
   - Tablet and desktop optimization
   - Touch-friendly navigation

4. **Theme Implementation**
   - Red (#FF0000) and white (#FFFFFF) text
   - Black (#000000) background
   - Consistent typography
   - Modern UI components

## Development Progress

- [x] Project setup and README creation
- [x] Laravel installation and configuration
- [x] Database setup
- [x] Main layout and theme implementation
- [x] Video background integration
- [x] Portfolio sections creation
- [x] Responsive design implementation
- [ ] Testing and optimization

## Next Steps

1. ✅ Laravel installation completed
2. ✅ Database setup completed
3. ✅ Environment configuration completed
4. ✅ Design and functionality implemented

## How to Run the Website

1. Navigate to the project directory:
   ```bash
   cd video-editor-portfolio
   ```

2. Start the development server:
   ```bash
   php artisan serve
   ```

3. Open your browser and go to: `http://localhost:8000`

## Adding Your Video

1. Place your video file in `public/videos/hero-video.mp4`
2. The video should be MP4 format, optimized for web
3. If no video is provided, a gradient background will be shown as fallback

## Notes

- All video files should be optimized for web (MP4 format recommended)
- Images should be compressed for faster loading
- Consider using a CDN for video delivery
- Implement lazy loading for better performance
