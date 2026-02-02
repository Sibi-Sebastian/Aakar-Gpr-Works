<!DOCTYPE html>
<html lang="en">
<head>

<title>AAKAR GPR WORKS | Sculptures & Artistic Creations</title>

<meta name="description" content="AAKAR GPR Works creates high-quality sculptures, statues, and artistic installations across Karnataka. Custom sculpting with traditional craftsmanship.">

<meta name="robots" content="index, follow">

<meta property="og:title" content="AAKAR GPR WORKS | Where Art Meets Excellence">
<meta property="og:description" content="Professional sculptures, statues, and artistic creations that transform spaces.">
<meta property="og:image" content="https://aaramu.com/images/og-preview.jpg">
<meta property="og:url" content="https://aaramu.com">
<meta property="og:type" content="website">

<!-- Favicon -->
<link rel="icon" type="image/webp" href="images/aakar-logo.webp">

<!-- Preload critical assets -->
<link rel="preload" href="images/aakar-logo.webp" as="image">
<link rel="preload" href="images/aaramu-projects-carousal-video.mp4" as="video" type="video/mp4">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Global Styles -->
    <link rel="stylesheet" href="global-max-width.css">
    <style>
        :root {
            --primary-dark: #1A1A1A;
            --primary-light: #FFFFFF;
            --accent-gold: #D4AF37;
            --accent-light-gold: #F4E4B6;
            --gray-dark: #333333;
            --gray-medium: #666666;
            --gray-light: #F8F9FA;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            --shadow-light: 0 4px 20px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.12);
            --shadow-heavy: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: var(--gray-dark);
            background-color: var(--primary-light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.2;
        }
        
        /* Global Container System */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            width: 100%;
        }
        
        /* Section Spacing */
        section {
            width: 100%;
            max-width: 100vw;
            overflow-x: hidden;
        }
        
        /* Selection styles */
        ::selection {
            background: rgba(212, 175, 55, 0.2);
            color: var(--primary-dark);
        }
        
        ::-moz-selection {
            background: rgba(212, 175, 55, 0.2);
            color: var(--primary-dark);
        }
        
        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--gray-light);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--accent-gold);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #b8860b;
        }

        /* Animation Keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Utility Classes */
        .btn-primary {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: var(--accent-gold);
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 50px;
            transition: var(--transition);
            text-transform: uppercase;
            font-size: 0.9rem;
            border: 2px solid var(--accent-gold);
        }

        .btn-primary:hover {
            background: transparent;
            color: var(--accent-gold);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(212, 175, 55, 0.3);
        }

        .btn-secondary {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: transparent;
            color: var(--primary-light);
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 50px;
            transition: var(--transition);
            text-transform: uppercase;
            font-size: 0.9rem;
            border: 2px solid var(--primary-light);
        }

        .btn-secondary:hover {
            background: var(--primary-light);
            color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 255, 255, 0.3);
        }

        /* WhatsApp Float */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: var(--shadow-medium);
            z-index: 1000;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            background-color: #1EBE5D;
            color: #fff;
            transform: scale(1.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }
        }

        @media (max-width: 768px) {
            .google {height: 525px !important;
            }}
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<main>
    <?php include 'sections/hero-section.php'; ?>
        <?php include 'sections/meet-the-artist.php'; ?>

    <?php include 'sections/creative-journey.php'; ?>
    <?php include 'sections/wall-arts.php'; ?>
    <?php include 'sections/rising-from-ruins.php'; ?>
<section class="google" style="height:443px; overflow:hidden">
    <script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-b4a907b2-07d8-433f-a5f4-00f70151716d" data-elfsight-app-lazy></div>
</main>
    </section>
<!-- WhatsApp Float Button -->
<a href="https://wa.me/918618792686" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Contact us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<?php include 'includes/footer.php'; ?>

<script>
// Global JavaScript for Homepage
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('[data-animate]').forEach(element => {
        observer.observe(element);
    });

    // Smooth scrolling for all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Parallax effect for hero elements
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        
        parallaxElements.forEach(element => {
            const speed = element.dataset.parallax || 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Performance monitoring
    if ('performance' in window) {
        window.addEventListener('load', function() {
            const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
            console.log('Page load time:', loadTime + 'ms');
        });
    }

    // Lazy loading for images
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.classList.remove('loading');
                }
                observer.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
});
</script>

</body>
</html>