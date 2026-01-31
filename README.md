# Vigor Manpower Solutions Website

A professional multi-page recruitment and HR solutions website built with PHP, HTML, CSS (Tailwind), and JavaScript.

## Features

✅ **Multi-Page Navigation** - Separate pages for Home, Services, Jobs, About, Contact, and Apply
✅ **Banner with Job Carousel** - Animated job titles carousel in the background
✅ **Dropdown Services Menu** - Easy navigation to specific services
✅ **Service Icons Bar** - Quick access icons below hero section
✅ **Responsive Design** - Works on all devices
✅ **Modern UI/UX** - Clean, professional design matching your reference image
✅ **Job Listings** - Dynamic job postings with filters
✅ **Application Form** - Comprehensive job application with file upload
✅ **Contact Form** - Easy way for clients to get in touch

## File Structure

```
vigor-website/
├── index.php                 # Homepage
├── services.php              # Services page with all offerings
├── jobs.php                  # Job listings page
├── about.php                 # About us page
├── contact.php               # Contact form page
├── apply.php                 # Job application form
├── includes/
│   ├── header.php           # Header with navigation (includes dropdown)
│   └── footer.php           # Footer section
├── assets/
│   ├── css/
│   │   └── style.css        # Custom styles including carousel
│   ├── js/
│   │   └── main.js          # JavaScript functionality
│   └── images/              # Place your images here
└── README.md                # This file
```

## Installation

1. **Extract Files**
   - Extract all files to your web server directory (e.g., `htdocs`, `public_html`, or `www`)

2. **Server Requirements**
   - PHP 7.0 or higher
   - Apache/Nginx web server
   - No database required (unless you want to add functionality)

3. **Configuration**
   - No special configuration needed
   - All styling uses Tailwind CDN
   - Google Fonts loaded via CDN

## Key Features

### 1. Hero Section with Job Carousel
- Animated carousel of job titles in the background
- Professional gradient blue theme
- Service icons bar below hero

### 2. Services Dropdown Menu
The navigation includes a dropdown under "Services" with links to:
- Recruitment & Selection
- HR Consulting
- Visa & Work Permits
- Pre-Departure Training
- HR Outsourcing
- Job Portal Access

### 3. Multi-Page Structure
Each section is now its own page:
- **index.php** - Home page with overview
- **services.php** - Detailed services information
- **jobs.php** - Job listings with filters
- **about.php** - Company information
- **contact.php** - Contact form and information
- **apply.php** - Job application form

### 4. Responsive Design
- Mobile-friendly navigation
- Responsive grid layouts
- Touch-friendly interactions

## Customization

### Colors
Edit `assets/css/style.css` to change colors:
```css
:root {
    --primary-blue: #1e40af;
    --deep-blue: #1e3a8a;
    --accent-blue: #3b82f6;
    --orange: #f97316;
}
```

### Adding Images
Place images in `assets/images/` and reference them:
```html
<img src="assets/images/your-image.jpg" alt="Description">
```

### Modifying Job Listings
Edit the `$jobs` array in `jobs.php` to add/remove jobs.

### Form Handling
Currently, forms show success messages. To add email functionality:
1. Configure PHP mail() or use PHPMailer
2. Add email sending code in contact.php and apply.php
3. Or integrate with your CRM/ATS system

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Contact Information

The website includes contact details:
- **Address**: Even Business Park Wing A, 2nd Floor, Suite 2A1, North Airport Road, Nairobi
- **Phone**: +254 202 400 254, +254 794 174 097
- **Email**: info@vigormanpower.com

## License

© 2025 Vigor Manpower Solutions Ltd. All rights reserved.

## Support

For technical support or questions about customization, contact your web developer.

---

**Note**: Remember to:
1. Add your actual company logo
2. Replace placeholder images with real photos
3. Update job listings regularly
4. Set up proper form handling for submissions
5. Add Google Analytics or similar tracking
6. Set up SSL certificate for https
