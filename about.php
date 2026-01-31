<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAKAR GPR WORKS | About Us - Artistic Excellence</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/aakar-logo.webp">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="global-max-width.css">
        
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/aakar-logo.webp">
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
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--gray-dark);
            background-color: var(--primary-light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.2;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .about-hero {
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(
                135deg,
                rgba(26, 26, 26, 0.8) 0%,
                rgba(26, 26, 26, 0.6) 50%,
                rgba(26, 26, 26, 0.8) 100%
            ), url('images/about1.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--primary-light);
            text-align: center;
        }

        .about-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at center, transparent 0%, rgba(0, 0, 0, 0.3) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
            padding: 0 2rem;
            animation: fadeInUp 1.2s ease-out;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--accent-gold);
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.2s forwards;
        }

        .hero-content h1 {
            font-size: clamp(3rem, 6vw, 5rem);
            margin-bottom: 1.5rem;
            color: var(--primary-light);
            font-weight: 700;
            opacity: 0;
            animation: fadeInUp 1s ease 0.4s forwards;
        }

        .hero-description {
            font-size: clamp(1.1rem, 2vw, 1.4rem) !important;
            margin-bottom: 2.5rem;
            font-weight: 300;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            animation: fadeInUp 1s ease 0.6s forwards;
        }

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

        /* Introduction Section */
        .introduction-section {
            padding: 4rem 0;
            background: var(--primary-light);
        }

        .intro-content {
            display: grid;
            grid-template-columns: 40% 60%;
            gap: 2rem;
            align-items: flex-start;
        }

        .intro-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-medium);
            transition: var(--transition);
            width: 100%;
            height: 550px;
        }

        .intro-image:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
        }

        .intro-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .intro-image:hover img {
            transform: scale(1.05);
        }

        .intro-text h2 {
            font-size: 2.8rem;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            position: relative;
        }

        .intro-text h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-gold);
        }

        .intro-text p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: var(--gray-medium);
        }


        .offering-paragraph {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--gray-medium);
            margin-bottom: 1.8rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(212, 175, 55, 0.1);
            transition: var(--transition);
        }

        .offering-paragraph:last-of-type {
            border-bottom: none;
            margin-bottom: 2rem;
        }

        .offering-paragraph strong {
            color: var(--accent-gold);
            font-weight: 600;
            font-size: 1.15rem;
        }

        .offering-paragraph:hover {
            color: var(--gray-dark);
            padding-left: 1rem;
            border-left: 3px solid var(--accent-gold);
        }

        .closing-statement {
            text-align: center;
            padding: 2.5rem 2rem;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0.03) 100%);
            border-radius: 15px;
            border: 1px solid rgba(212, 175, 55, 0.2);
            margin-top: 2rem;
        }

        .intro-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: rgba(212, 175, 55, 0.05);
            border-radius: 15px;
            transition: var(--transition);
        }

        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(212, 175, 55, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-gold);
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--gray-medium);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Services Overview Section */
        .services-overview {
            padding: 2rem 0;
            background: var(--gray-light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            color: var(--primary-dark);
            margin-bottom: 1rem;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 3px;
            background: var(--accent-gold);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-subtitle {
            color: var(--gray-medium);
            max-width: 700px;
            margin: 2rem auto 0;
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .service-card {
            background: var(--primary-light);
            border-radius: 15px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
        }

        .service-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: var(--accent-gold);
            font-size: 2rem;
            transition: var(--transition);
        }

        .service-card:hover .service-icon {
            background: var(--accent-gold);
            color: var(--primary-light);
            transform: scale(1.1);
        }

        .service-card h3 {
            font-size: 1.5rem;
            color: var(--primary-dark);
            margin-bottom: 1rem;
        }

        .service-card p {
            color: var(--gray-medium);
            line-height: 1.7;
        }

        /* Team Section */
        .team-section {
            padding: 3rem 0;
            background: var(--primary-light);
        }

        .team-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .team-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-medium);
        }

        .team-image img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .team-text h2 {
            font-size: 2.8rem;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            position: relative;
        }

        .team-text h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-gold);
        }

        .team-text p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: var(--gray-medium);
            margin-bottom: 2rem;
        }

        .team-features {
            display: grid;
            gap: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            padding: 1.5rem;
            background: rgba(212, 175, 55, 0.05);
            border-radius: 12px;
            border-left: 4px solid var(--accent-gold);
            transition: var(--transition);
        }

        .feature-item:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateX(5px);
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-gold);
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .feature-content h4 {
            font-size: 1.1rem;
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
        }

        .feature-content p {
            color: var(--gray-medium);
            font-size: 1rem;
            line-height: 1.6;
            margin: 0;
        }

        /* Values Section */
        .values-section {
            padding: 3rem 0;
            background: var(--gray-light);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2.5rem;
        }

        .value-card {
            background: var(--primary-light);
            padding: 3rem 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
            min-width: 0; /* Allows cards to shrink properly */
        }

        .value-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
        }

        .value-icon {
            width: 100px;
            height: 100px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            color: var(--accent-gold);
            font-size: 2.5rem;
            transition: var(--transition);
        }

        .value-card:hover .value-icon {
            background: var(--accent-gold);
            color: var(--primary-light);
            transform: scale(1.1);
        }

        .value-card h3 {
            font-size: 1.8rem;
            color: var(--primary-dark);
            margin-bottom: 1rem;
        }

        .value-card p {
            color: var(--gray-medium);
            line-height: 1.7;
            font-size: 1.1rem;
        }

        /* CTA Section */
        .cta-section {
            padding: 8rem 0;
            background: linear-gradient(135deg, var(--primary-dark) 0%, #2c3e50 100%);
            text-align: center;
            color: var(--primary-light);
        }

        .cta-content h2 {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            margin-bottom: 1.5rem;
            color: var(--accent-gold);
        }

        .cta-content p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }

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

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }

            .intro-content,
            .team-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .intro-stats {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .intro-image {
                max-width: 100%;
                height:400px;
            }

            .intro-image img {
                height: 400px;
            }

            .offering-paragraph {
                font-size: 1rem;
                padding: 1rem 0;
                margin-bottom: 1.5rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .values-grid {
                display:block;
                gap: 1.5rem;
            }

            .value-card {
                padding: 2rem 1rem;
            }

            .value-icon {
                width: 60px;
                height: 60px;
                font-size: 1.8rem;
                margin-bottom: 1rem;
            }

            .value-card h3 {
                font-size: 1.4rem;
                margin-bottom: 0.8rem;
            }

            .value-card p {
                font-size: 0.95rem;
                line-height: 1.5;
            }

            .team-image img {
                height: 400px;
            }

            
            .values-section,
            .cta-section {
                padding: 5rem 0;
            }
        }

        /* Extra small screens - maintain 4 cards but with minimal spacing */
        @media (max-width: 480px) {
            .values-grid {
                gap: 1rem;
            }

            .value-card {
                padding: 1.5rem 0.8rem;
            }

            .value-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
                margin-bottom: 0.8rem;
            }

            .value-card h3 {
                font-size: 1.2rem;
                margin-bottom: 0.6rem;
            }

            .value-card p {
                font-size: 0.85rem;
                line-height: 1.4;
            }
        }
           
            .cta-section {
                padding: 5rem 0;
            }

        /* Extra small screens */
        @media (max-width: 480px) {
            .values-grid {
                gap: 0.5rem;
            }

            .value-card {
                padding: 1.5rem 0.8rem;
            }

            .value-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }

            .value-card h3 {
                font-size: 1.1rem;
            }

            .value-card p {
                font-size: 0.85rem;
            }
        }

        /* Staggered Animation */
        .service-card:nth-child(1) { transition-delay: 0.1s; }
        .service-card:nth-child(2) { transition-delay: 0.2s; }
        .service-card:nth-child(3) { transition-delay: 0.3s; }
        .service-card:nth-child(4) { transition-delay: 0.4s; }
        .service-card:nth-child(5) { transition-delay: 0.5s; }
        .service-card:nth-child(6) { transition-delay: 0.6s; }

        .value-card:nth-child(1) { transition-delay: 0.1s; }
        .value-card:nth-child(2) { transition-delay: 0.2s; }
        .value-card:nth-child(3) { transition-delay: 0.3s; }
        .value-card:nth-child(4) { transition-delay: 0.4s; }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="hero-content">
            <h1 style="color: #d4af37;">Crafting Art, Creating Legacy</h1>
            <p class="hero-description">Where traditional craftsmanship meets contemporary vision, we transform raw materials into timeless masterpieces that inspire and endure.</p>
        </div>
    </section>

       <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="team-content">
                <div class="team-text">
                    <h2>Meet the Artist</h2>
                    <p>
                        Behind every masterpiece is a passionate artist dedicated to excellence. Our team combines decades of experience with an steady commitment to quality and innovation.
                    </p>
                    <p>
                        We believe that art is not just about creating beautiful objects, but about connecting with people, preserving culture, and inspiring future generations of artists and art lovers.
                    </p>
                    
                    <div class="team-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Master Craftsmanship</h4>
                                <p>Years of training in traditional techniques combined with modern artistic vision.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Passionate Dedication</h4>
                                <p>Every project receives our full attention and commitment to artistic excellence.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Collaborative Approach</h4>
                                <p>We work closely with clients to ensure their vision is perfectly realized.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-image">
                    <img src="images/meet-the-artist.png" alt="Artist at work in the studio" loading="lazy">
                </div>
            </div>
        </div>
    </section>

        <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Values</h2>
                <p class="section-subtitle">The principles that guide our work and define our commitment to artistic excellence.</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Quality Excellence</h3>
                    <p>We never compromise on quality, using only the finest materials and maintaining the highest standards of craftsmanship in every piece we create.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Creative Innovation</h3>
                    <p>While respecting traditional techniques, we continuously explore new methods and materials to push the boundaries of artistic expression.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainable Practices</h3>
                    <p>We are committed to environmentally responsible practices, using sustainable materials and methods whenever possible.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Client Partnership</h3>
                    <p>We believe in building lasting relationships with our clients, working together to create art that exceeds expectations and stands the test of time.</p>
                </div>
            </div>
        </div>
    </section>  

    <!-- Services Overview Section -->
    <section class="services-overview">
        <div class="container">
            <div class="section-title">
                <h2>What We Create</h2>
                <p class="section-subtitle">Our diverse range of artistic services brings your vision to life through expert craftsmanship and creative excellence.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Custom Sculptures</h3>
                    <p>custom made sculptures crafted from premium materials including bronze, marble, clay, and wood, tailored to your unique vision and space.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3>3D Models & Miniatures</h3>
                    <p>Detailed educational models and decorative miniatures that bring learning to life and add artistic charm to any environment.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Wall Art & Murals</h3>
                    <p>Transform blank walls into attractive visual narratives with our custom-designed murals and three-dimensional wall installations.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Art Restoration</h3>
                    <p>Expert restoration services to preserve and restore precious artworks, ensuring they continue to inspire future generations.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Educational Programs</h3>
                    <p>Hands-on workshops and educational initiatives that nurture creativity and teach traditional artistic techniques to new generations.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Consultation Services</h3>
                    <p>Professional guidance for art projects, from concept development to installation, ensuring your artistic vision is realized perfectly.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
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
    document.querySelectorAll('.service-card, .value-card').forEach(card => {
        observer.observe(card);
    });

    // Smooth scrolling for anchor links
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

    // Counter animation for stats
    const animateCounters = () => {
        const counters = document.querySelectorAll('.stat-number');
        
        counters.forEach(counter => {
            const target = parseInt(counter.textContent.replace(/\D/g, ''));
            const increment = target / 100;
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current) + (counter.textContent.includes('+') ? '+' : '');
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + (counter.textContent.includes('+') ? '+' : '');
                }
            };
            
            updateCounter();
        });
    };

    // Trigger counter animation when stats section is visible
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsSection = document.querySelector('.intro-stats');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
});
</script>

<?php include 'includes/footer.php'; ?>

</body>
</html>