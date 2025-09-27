# offthegridgh - Video Editor Portfolio Website

A professional portfolio website for video editors built with Laravel, featuring a modern red, white, and black theme with video backgrounds and responsive design.

## 🎬 Features

### ✨ **Design & User Experience**
- **Modern Theme**: Red, white, and black color scheme
- **Video Backgrounds**: Hero section with video background
- **Loading Animation**: Branded loading page with logo animation
- **Responsive Design**: Mobile-first responsive layout
- **Smooth Animations**: CSS animations and transitions

### 📱 **Responsive Sections**
- **Hero Section**: Video background with call-to-action
- **About Me**: Professional photo and detailed information
- **Services**: Video editing services showcase with responsive text sizing
- **Portfolio**: Dynamic project grid with video previews
- **Contact**: SMTP-powered contact form
- **Footer**: Social links and branding

### 🎥 **Portfolio Features**
- **Dynamic Grid**: 2x2 layout with varying item sizes
- **Video Previews**: Each project includes video background
- **Modal Views**: Full-screen project viewing
- **Project Management**: Easy-to-update project array
- **Video Modals**: Full-screen video playback with blur background

### 📧 **Contact System**
- **SMTP Integration**: Professional email delivery
- **Form Validation**: Client and server-side validation
- **AJAX Submission**: No page reload required
- **Email Templates**: Professional HTML email design
- **Success/Error Handling**: User-friendly feedback

## 🚀 **Installation & Setup**

### **Prerequisites**
- PHP 8.0 or higher
- Composer
- MySQL/MariaDB
- Node.js (for asset compilation)

### **1. Clone and Install**
```bash
git clone <repository-url>
cd video-editor-portfolio
composer install
npm install
```

### **2. Environment Configuration**
```bash
cp .env.example .env
php artisan key:generate
```

### **3. Database Setup**
```bash
# Create database
mysql -u root -p
CREATE DATABASE video_editor_portfolio;

# Run migrations
php artisan migrate
```

### **4. SMTP Configuration**
Add these settings to your `.env` file:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="offthegridgh"
```

### **5. Asset Compilation**
```bash
npm run dev
# or for production
npm run build
```

### **6. Start Development Server**
```bash
php artisan serve
```

Visit: `http://localhost:8000`

## 📁 **Project Structure**

```
video-editor-portfolio/
├── app/
│   └── Http/Controllers/
│       └── ContactController.php      # Contact form handling
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php          # Main layout with CSS/JS
│       ├── emails/
│       │   └── contact.blade.php       # Email template
│       ├── home.blade.php              # Homepage
│       └── about.blade.php             # About page
├── public/
│   ├── logo/
│   │   └── Red-on-black1.jpg          # Logo image
│   ├── videos/
│   │   ├── hero-video.mp4              # Hero background video
│   │   └── portfolio/                  # Portfolio project videos
│   └── about-photo.jpg                 # Professional photo
└── routes/
    └── web.php                        # Application routes
```

## 🎨 **Customization**

### **Adding New Projects**
Edit the `$allProjects` array in `resources/views/home.blade.php`:

```php
$allProjects = [
    [
        'title' => 'Project Title',
        'category' => 'Corporate Video',
        'description' => 'Project description',
        'video' => 'portfolio/project-video.mp4',
        'size' => 'large' // or 'tall', 'wide', 'normal'
    ],
    // Add more projects...
];
```

### **Adding New Testimonials**
Edit the `$testimonials` array in `resources/views/home.blade.php`:

```php
$testimonials = [
    [
        'id' => 1,
        'name' => 'Client Name',
        'company' => 'Company Name',
        'role' => 'Job Title',
        'video' => 'videos/testimonials/testimonial-video.mp4',
        'fallback' => 'linear-gradient(135deg, #1a1a1a 0%, #333333 50%, #666666 100%)',
        'quote' => 'Client testimonial text here...',
        'rating' => 5
    ],
    // Add more testimonials...
];
```

**Testimonial Requirements:**
- **Video**: Place testimonial videos in `public/videos/testimonials/`
- **Fallback**: Use gradient colors for video fallback
- **Rating**: Use 1-5 stars (integer value)
- **Quote**: Keep testimonials concise and impactful

### **Adding New Services**
Edit the `$services` array in `resources/views/home.blade.php`:

```php
$services = [
    [
        'id' => 1,
        'title' => 'SERVICE NAME',
        'video' => '/videos/services/service-video.mp4',
        'fallback' => 'linear-gradient(135deg, #1a1a1a 0%, #333333 50%, #666666 100%)',
        'border' => 'border-bottom: 2px solid rgba(255, 0, 0, 0.3);'
    ],
    // Add more services...
];
```

**Service Requirements:**
- **Video**: Place service videos in `public/videos/services/`
- **Title**: Use uppercase text for consistency
- **Fallback**: Use gradient colors for video fallback
- **Border**: Add border-bottom for all services except the last one

### **Updating Brand Information**
- **Logo**: Replace `public/logo/Red-on-black1.jpg`
- **Brand Name**: Update in `resources/views/layouts/app.blade.php`
- **Colors**: Modify CSS variables in the layout file

### **Video Backgrounds**
- **Hero Video**: Place in `public/videos/hero-video.mp4`
- **Portfolio Videos**: Add to `public/videos/portfolio/`
- **Service Videos**: Add to `public/videos/services/`
- **Testimonial Videos**: Add to `public/videos/testimonials/`
- **Fallback**: Gradient backgrounds for missing videos

### **Content Management Best Practices**

#### **File Organization**
```
public/videos/
├── hero-video.mp4              # Main hero background
├── portfolio/                  # Project showcase videos
│   ├── project-1.mp4
│   └── project-2.mp4
├── services/                   # Service showcase videos
│   ├── commercials.mp4
│   └── testimonials.mp4
└── testimonials/               # Client testimonial videos
    ├── client-1.mp4
    └── client-2.mp4
```

#### **Video Optimization**
- **Format**: Use MP4 format for maximum compatibility
- **Compression**: Optimize videos for web (keep file sizes reasonable)
- **Resolution**: 1920x1080 or lower for better loading
- **Duration**: Keep service videos short (10-30 seconds)
- **Fallback**: Always provide gradient fallback colors

#### **Content Guidelines**
- **Testimonials**: Keep quotes under 100 words for readability
- **Services**: Use clear, descriptive titles
- **Projects**: Include relevant categories and descriptions
- **Images**: Use high-quality, professional photos

## 📧 **SMTP Setup**

### **Gmail Configuration**
1. Enable 2-Factor Authentication
2. Generate App Password
3. Use app password in `MAIL_PASSWORD`

### **Alternative Providers**
- **Outlook**: `smtp-mail.outlook.com:587`
- **Yahoo**: `smtp.mail.yahoo.com:587`
- **Custom SMTP**: Update host, port, and encryption

## 🎯 **Key Features Explained**

### **Loading Page**
- Shows for 2 seconds on first visit
- Branded animation with logo
- Full-screen overlay
- Responsive design

### **Portfolio Grid**
- Dynamic 2x2 layout
- Varying item sizes (large, tall, wide, normal)
- Video backgrounds for each project
- Modal popup for "View All Projects"

### **Contact Form**
- AJAX submission
- SMTP email delivery
- Professional email template
- Form validation
- Success/error feedback

### **Responsive Design**
- Mobile-first approach
- Breakpoints: 1024px, 768px, 480px, 360px
- Touch-friendly navigation
- Optimized video loading
- Responsive text sizing for services section

## 🔧 **Technical Details**

### **Technologies Used**
- **Backend**: Laravel 10
- **Frontend**: HTML5, CSS3, JavaScript
- **Email**: Laravel Mail with SMTP
- **Database**: MySQL
- **Assets**: Laravel Mix

### **Performance Optimizations**
- Video compression for web
- Responsive images
- CSS/JS minification
- Lazy loading for videos

## 📱 **Browser Support**
- Chrome 80+
- Firefox 75+
- Safari 13+
- Edge 80+
- Mobile browsers

## 🚀 **Deployment**

### **Production Checklist**
1. Set `APP_ENV=production` in `.env`
2. Run `php artisan config:cache`
3. Compile assets with `npm run build`
4. Set up SSL certificate
5. Configure production SMTP
6. Optimize images and videos

### **Server Requirements**
- PHP 8.0+
- MySQL 5.7+
- Apache/Nginx
- SSL certificate
- SMTP access

## 📞 **Support**

For technical support or customization requests, contact the development team.

---

**© 2024 offthegridgh. All rights reserved.**