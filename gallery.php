<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAKAR GPR WORKS | Gallery - Artistic Excellence</title>
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/aakar-logo.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

        /* Hero Section */
        .gallery-hero {
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
            ), url('images/bggallary.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--primary-light);
            text-align: center;
        }

        .gallery-hero::before {
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

        .hero-cta {
            opacity: 0;
            animation: fadeInUp 1s ease 0.8s forwards;
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

        /* Gallery Section */
        .gallery-section {
            padding: 6rem 0;
            background: var(--gray-light);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            color: var(--primary-dark);
            margin-bottom: 1rem;
            position: relative;
        }

        .section-title::after {
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

        /* Filter Tabs */
        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 0.8rem 2rem;
            background: transparent;
            color: var(--gray-medium);
            border: 2px solid var(--gray-medium);
            border-radius: 50px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        .filter-tab:hover,
        .filter-tab.active {
            background: var(--accent-gold);
            color: var(--primary-dark);
            border-color: var(--accent-gold);
            transform: translateY(-2px);
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .gallery-card {
            background: var(--primary-light);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            cursor: pointer;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
        }

        .gallery-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
        }

        .gallery-image {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-card:hover .gallery-image {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
            color: white;
            padding: 2rem;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .gallery-card:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-overlay h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--accent-gold);
        }

        .gallery-overlay p {
            font-size: 0.95rem;
            opacity: 0.9;
            line-height: 1.5;
        }

        /* Fullscreen Modal */
        .fullscreen-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.95);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .fullscreen-modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-image {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.8);
        }

        .modal-nav {
            position: absolute;
            background: rgba(212, 175, 55, 0.9);
            color: white;
            border: none;
            padding: 1rem;
            font-size: 1.5rem;
            cursor: pointer;
            border-radius: 50%;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .modal-nav:hover {
            background: var(--accent-gold);
            transform: scale(1.1);
        }

        .modal-prev {
            left: 2rem;
            top: 50%;
            transform: translateY(-50%);
        }

        .modal-next {
            right: 2rem;
            top: 50%;
            transform: translateY(-50%);
        }

        .modal-close {
            position: absolute;
            top: 2rem;
            right: 2rem;
            font-size: 2.5rem;
            color: var(--accent-gold);
            cursor: pointer;
            transition: var(--transition);
        }

        .modal-close:hover {
            color: white;
            transform: scale(1.1);
        }

        /* Stats Section */
        .stats-section {
            padding: 5rem 0;
            background: var(--primary-dark);
            color: var(--primary-light);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-item {
            padding: 2rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--accent-gold);
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .stat-label {
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--accent-gold) 0%, #B8860B 100%);
            text-align: center;
            color: var(--primary-dark);
        }

        .cta-content h2 {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            margin-bottom: 1.5rem;
        }

        .cta-content p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }

        .btn-secondary {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: var(--primary-dark);
            color: var(--primary-light);
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 50px;
            transition: var(--transition);
            text-transform: uppercase;
            font-size: 0.9rem;
            border: 2px solid var(--primary-dark);
        }

        .btn-secondary:hover {
            background: transparent;
            color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(26, 26, 26, 0.3);
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

            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .filter-tabs {
                gap: 0.5rem;
            }

            .filter-tab {
                padding: 0.6rem 1.5rem;
                font-size: 0.8rem;
            }

            .modal-nav {
                padding: 0.8rem;
                font-size: 1.2rem;
            }

            .modal-prev {
                left: 1rem;
            }

            .modal-next {
                right: 1rem;
            }

            .modal-close {
                top: 1rem;
                right: 1rem;
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Loading Animation */
        .loading {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Staggered Animation */
        .gallery-card:nth-child(1) { transition-delay: 0.1s; }
        .gallery-card:nth-child(2) { transition-delay: 0.2s; }
        .gallery-card:nth-child(3) { transition-delay: 0.3s; }
        .gallery-card:nth-child(4) { transition-delay: 0.4s; }
        .gallery-card:nth-child(5) { transition-delay: 0.5s; }
        .gallery-card:nth-child(6) { transition-delay: 0.6s; }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="gallery-hero">
        <div class="hero-content">
            <h1 style="color: #d4af37;">Gallery of Excellence</h1>
            <p class="hero-description">Discover our stunning collection of sculptures, 3D models, and artistic masterpieces that showcase our commitment to creative excellence and craftsmanship.</p>
            <div class="hero-cta">
                <a href="#gallery" class="btn-primary">Explore Gallery</a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Creative Works</h2>
                <p class="section-subtitle">Each piece tells a story of dedication, skill, and artistic vision. From educational models to complex sculptures, explore the breadth of our creative capabilities.</p>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">All Works</button>
                <button class="filter-tab" data-filter="services">Services</button>
                <button class="filter-tab" data-filter="3d-models">3D Models</button>
                <button class="filter-tab" data-filter="sculptures">Sculptures</button>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid" id="galleryGrid">
                <!-- Service Images -->
                <div class="gallery-card" data-category="services" onclick="openModal(0)">
                    <img src="images/service_1.jpeg" alt="Educational Art Program" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Educational Outreach</h3>
                        <p>Engaging students in creative art activities through our comprehensive educational programs</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(1)">
                    <img src="images/service_2.jpeg" alt="Children's Art Workshop" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Children's Workshop</h3>
                        <p>Nurturing young creativity through hands-on art experiences and guided learning</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(2)">
                    <img src="images/service_3.jpeg" alt="Art Education Program" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Art Education</h3>
                        <p>Comprehensive art education programs designed to inspire and develop artistic skills</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(3)">
                    <img src="images/service_4.jpeg" alt="Community Art Initiative" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Community Initiative</h3>
                        <p>Building stronger communities through collaborative art projects and cultural engagement</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(4)">
                    <img src="images/service_5.jpeg" alt="Professional Art Services" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Professional Services</h3>
                        <p>Expert art services tailored to meet diverse client needs and creative visions</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(5)">
                    <img src="images/service-6.jpeg" alt="Art Consultation" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Art Consultation</h3>
                        <p>Professional consultation services to guide your artistic projects from concept to completion</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(6)">
                    <img src="images/service-7.jpeg" alt="Creative Workshops" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Creative Workshops</h3>
                        <p>Interactive workshops designed to unlock creativity and develop artistic techniques</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(7)">
                    <img src="images/service-8.jpeg" alt="Art Installation" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Art Installation</h3>
                        <p>Professional installation services ensuring your artwork is displayed with precision and care</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(8)">
                    <img src="images/service-9.jpeg" alt="Custom Art Solutions" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Custom Solutions</h3>
                        <p>Bespoke art solutions crafted to meet your unique requirements and aesthetic preferences</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="services" onclick="openModal(9)">
                    <img src="images/service-10.jpeg" alt="Art Restoration" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Art Restoration</h3>
                        <p>Expert restoration services to preserve and revitalize precious artworks for future generations</p>
                    </div>
                </div>

                <!-- 3D Models -->
                <div class="gallery-card" data-category="3d-models" onclick="openModal(10)">
                    <img src="images/3dmini-1.jpg" alt="Educational 3D Model" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Educational Model</h3>
                        <p>Detailed 3D educational model designed to enhance learning through visual representation</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="3d-models" onclick="openModal(11)">
                    <img src="images/3dmini-2.jpg" alt="Architectural Miniature" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Architectural Miniature</h3>
                        <p>Precision-crafted architectural model showcasing complex design and attention to detail</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="3d-models" onclick="openModal(12)">
                    <img src="images/3dmini-3.jpg" alt="Scientific Model" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Scientific Model</h3>
                        <p>Accurate scientific model created for educational purposes and research applications</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="3d-models" onclick="openModal(13)">
                    <img src="images/3dmini-4.jpg" alt="Industrial Design Model" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Industrial Design</h3>
                        <p>Professional industrial design model demonstrating form, function, and aesthetic appeal</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="3d-models" onclick="openModal(14)">
                    <img src="images/3dmini-5.jpg" alt="Prototype Model" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Prototype Model</h3>
                        <p>Innovative prototype model showcasing cutting-edge design and engineering excellence</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="3d-models" onclick="openModal(15)">
                    <img src="images/3dmini-6.jpg" alt="Conceptual Model" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Conceptual Model</h3>
                        <p>Creative conceptual model bringing abstract ideas to life through tangible representation</p>
                    </div>
                </div>

                <!-- Sculptures (using about images as placeholders) -->
                <div class="gallery-card" data-category="sculptures" onclick="openModal(16)">
                    <img src="images/about1.webp" alt="Traditional Sculpture" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Traditional Sculpture</h3>
                        <p>Masterfully crafted traditional sculpture embodying cultural heritage and artistic excellence</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="sculptures" onclick="openModal(17)">
                    <img src="images/about3.png" alt="Contemporary Art" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Contemporary Art</h3>
                        <p>Modern artistic expression combining traditional techniques with contemporary vision</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="sculptures" onclick="openModal(18)">
                    <img src="images/3dmini.jpg" alt="Artistic Creation" class="gallery-image" loading="lazy">
                    <div class="gallery-overlay">
                        <h3>Artistic Creation</h3>
                        <p>Unique artistic creation showcasing innovative design and exceptional craftsmanship</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">640+</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">136+</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
                <!-- <div class="stat-item">
                    <div class="stat-number">10+</div>
                    <div class="stat-label">Years Experience</div>
                </div> -->
                <div class="stat-item">
                    <div class="stat-number">1387+</div>
                    <div class="stat-label">Artworks Created</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Create Something Amazing?</h2>
                <p>Let's collaborate to bring your artistic vision to life. From concept to completion, we're here to make your creative dreams a reality.</p>
                <a href="contact.php" class="btn-secondary">Start Your Project</a>
            </div>
        </div>
    </section>
</main>

<!-- Fullscreen Modal -->
<div class="fullscreen-modal" id="fullscreenModal">
    <button class="modal-nav modal-prev" onclick="navigateImage(-1)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <img class="modal-image" id="modalImage" alt="Gallery Image">
    <button class="modal-nav modal-next" onclick="navigateImage(1)">
        <i class="fas fa-chevron-right"></i>
    </button>
    <div class="modal-close" onclick="closeModal()">
        <i class="fas fa-times"></i>
    </div>
</div>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/918618792686" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Contact us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery images array with actual available images
    const galleryImages = [
        { src: 'images/service_1.jpeg', alt: 'Educational Art Program' },
        { src: 'images/service_2.jpeg', alt: 'Children\'s Art Workshop' },
        { src: 'images/service_3.jpeg', alt: 'Art Education Program' },
        { src: 'images/service_4.jpeg', alt: 'Community Art Initiative' },
        { src: 'images/service_5.jpeg', alt: 'Professional Art Services' },
        { src: 'images/service-6.jpeg', alt: 'Art Consultation' },
        { src: 'images/service-7.jpeg', alt: 'Creative Workshops' },
        { src: 'images/service-8.jpeg', alt: 'Art Installation' },
        { src: 'images/service-9.jpeg', alt: 'Custom Art Solutions' },
        { src: 'images/service-10.jpeg', alt: 'Art Restoration' },
        { src: 'images/3dmini-1.jpg', alt: 'Educational 3D Model' },
        { src: 'images/3dmini-2.jpg', alt: 'Architectural Miniature' },
        { src: 'images/3dmini-3.jpg', alt: 'Scientific Model' },
        { src: 'images/3dmini-4.jpg', alt: 'Industrial Design Model' },
        { src: 'images/3dmini-5.jpg', alt: 'Prototype Model' },
        { src: 'images/3dmini-6.jpg', alt: 'Conceptual Model' },
        { src: 'images/about1.webp', alt: 'Traditional Sculpture' },
        { src: 'images/about3.png', alt: 'Contemporary Art' },
        { src: 'images/3dmini.jpg', alt: 'Artistic Creation' }
    ];

    let currentImageIndex = 0;

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

    // Observe all gallery cards
    document.querySelectorAll('.gallery-card').forEach(card => {
        observer.observe(card);
    });

    // Filter functionality
    const filterTabs = document.querySelectorAll('.filter-tab');
    const galleryCards = document.querySelectorAll('.gallery-card');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active tab
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Filter gallery items
            galleryCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Modal functionality
    window.openModal = function(index) {
        currentImageIndex = index;
        const modal = document.getElementById('fullscreenModal');
        const modalImage = document.getElementById('modalImage');
        
        modal.classList.add('active');
        modalImage.src = galleryImages[index].src;
        modalImage.alt = galleryImages[index].alt;
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    };

    window.closeModal = function() {
        const modal = document.getElementById('fullscreenModal');
        modal.classList.remove('active');
        
        // Restore body scroll
        document.body.style.overflow = 'auto';
    };

    window.navigateImage = function(direction) {
        currentImageIndex += direction;
        
        if (currentImageIndex >= galleryImages.length) {
            currentImageIndex = 0;
        } else if (currentImageIndex < 0) {
            currentImageIndex = galleryImages.length - 1;
        }
        
        const modalImage = document.getElementById('modalImage');
        modalImage.style.opacity = '0';
        
        setTimeout(() => {
            modalImage.src = galleryImages[currentImageIndex].src;
            modalImage.alt = galleryImages[currentImageIndex].alt;
            modalImage.style.opacity = '1';
        }, 150);
    };

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('fullscreenModal');
        
        if (modal.classList.contains('active')) {
            switch(e.key) {
                case 'Escape':
                    closeModal();
                    break;
                case 'ArrowLeft':
                    navigateImage(-1);
                    break;
                case 'ArrowRight':
                    navigateImage(1);
                    break;
            }
        }
    });

    // Close modal when clicking outside image
    document.getElementById('fullscreenModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
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

    document.querySelectorAll('.gallery-image').forEach(img => {
        imageObserver.observe(img);
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

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
});
</script>

<?php include 'includes/footer.php'; ?>

</body>
</html>