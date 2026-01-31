<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAKAR GPR WORKS | ART-MASTER | Our Services</title>
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/aakar-logo.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Source+Serif+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #1A1A1A;
            --primary-light: #FFFFFF;
            --accent-gold: #D4AF37;
            --accent-light-gold: #F4E4B6;
            --gray-dark: #333333;
            --gray-medium: #666666;
            --gray-light: #F5F5F5;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: var(--gray-dark);
            background-color: var(--primary-light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Source Serif Pro', serif;
            font-weight: 600;
            line-height: 1.2;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            background-color: var(--accent-gold);
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 2px;
            transition: var(--transition);
            border: 2px solid var(--accent-gold);
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
        }

        .btn:hover {
            background-color: transparent;
            color: var(--accent-gold);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.15);
        }

        /* ===== HERO SECTION ===== */
.hero {
    height: 100vh;
    min-height: 700px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;

    /* Background image + cinematic overlay */
    background:
        linear-gradient(
            rgba(10, 10, 10, 0.75),
            rgba(10, 10, 10, 0.9)
        ),
        url('https://thevirtualinstructor.com/blog/wp-content/uploads/2013/08/understanding-abstract-art.jpg');

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    color: var(--primary-light);
    text-align: center;
}

/* Optional subtle zoom animation for premium feel */
.hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: inherit;
    z-index: 0;
    animation: slowZoom 18s ease-in-out infinite alternate;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 820px;
    margin: 0 auto;
    padding: 0 24px;
}

.hero h1 {
    font-size: clamp(2.8rem, 5vw, 4rem);
    margin-bottom: 20px;
    color: var(--accent-gold);
    letter-spacing: 1px;
    opacity: 0;
    animation: fadeInUp 1s ease 0.3s forwards;
}

.hero p {
    font-size: clamp(1.1rem, 2vw, 1.3rem);
    margin-bottom: 40px;
    font-weight: 300;
    line-height: 1.6;
    color: var(--primary-light);
    opacity: 0;
    animation: fadeInUp 1s ease 0.6s forwards;
}

.hero .btn {
    opacity: 0;
    animation: fadeInUp 1s ease 0.9s forwards;
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slowZoom {
    from {
        transform: scale(1);
    }
    to {
        transform: scale(1.08);
    }
}


        /* ===== SERVICES GRID SECTION ===== */
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: var(--primary-dark);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 2px;
            background-color: var(--accent-gold);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title p {
            color: var(--gray-medium);
            max-width: 600px;
            margin: 20px auto 0;
            font-size: 1.1rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 35px;
        }

        .service-card {
            background: var(--primary-light);
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
            border-top: 4px solid transparent;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .service-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-top: 4px solid var(--accent-gold);
        }

        .service-img {
            height: 320px;
            overflow: hidden;
            position: relative;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
            filter: brightness(0.95);
        }

        .service-card:hover .service-img img {
            transform: scale(1.15);
            filter: brightness(1);
        }

        .service-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 60%, rgba(26, 26, 26, 0.2));
            opacity: 0;
            transition: var(--transition);
        }

        .service-card:hover .service-img::after {
            opacity: 1;
        }

        .service-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .service-content h3 {
            font-size: 1.6rem;
            margin-bottom: 15px;
            color: var(--primary-dark);
            line-height: 1.3;
        }

        .service-content p {
            color: var(--gray-medium);
            font-size: 1.05rem;
            line-height: 1.7;
            margin-bottom: 10px;
            flex-grow: 1;
        }

        .service-tag {
            display: inline-block;
            background-color: rgba(212, 175, 55, 0.1);
            color: var(--accent-gold);
            font-size: 0.85rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            margin-top: 15px;
            align-self: flex-start;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ===== VISUAL BREAK SECTION ===== */
        .visual-break {
            background: linear-gradient(rgba(26, 26, 26, 0.9), rgba(26, 26, 26, 0.9)), url('https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-attachment: fixed;
            color: var(--primary-light);
            text-align: center;
            padding: 120px 0;
        }

        .quote {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .quote i {
            font-size: 3.5rem;
            color: var(--accent-gold);
            margin-bottom: 35px;
            display: block;
        }

        .quote p {
            font-size: 2rem;
            font-style: italic;
            line-height: 1.4;
            margin-bottom: 25px;
            font-family: 'Source Serif Pro', serif;
        }

        .quote span {
            font-size: 1.2rem;
            color: var(--accent-light-gold);
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        /* ===== WHY CHOOSE US SECTION ===== */
        .features {
            background-color: var(--gray-light);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .feature-item {
            text-align: center;
            padding: 35px 25px;
            border-radius: 6px;
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
            background-color: var(--primary-light);
        }

        .feature-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .feature-item:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transform: translateY(-8px);
        }

        .feature-icon {
            width: 90px;
            height: 90px;
            background-color: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            color: var(--accent-gold);
            font-size: 2.3rem;
            transition: var(--transition);
            border: 2px solid rgba(212, 175, 55, 0.2);
        }

        .feature-item:hover .feature-icon {
            background-color: var(--accent-gold);
            color: var(--primary-light);
            transform: scale(1.15) rotate(5deg);
        }

        .feature-item h3 {
            font-size: 1.5rem;
            margin-bottom: 18px;
            color: var(--primary-dark);
        }

        .feature-item p {
            color: var(--gray-medium);
            font-size: 1.05rem;
            line-height: 1.7;
        }

        /* ===== CALL-TO-ACTION SECTION ===== */
        .cta-section {
            background: linear-gradient(rgba(26, 26, 26, 0.85), rgba(26, 26, 26, 0.9)), url('https://images.unsplash.com/photo-1578301978693-85fa9c0320b9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            color: var(--primary-light);
            text-align: center;
            padding: 140px 0;
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .cta-content h2 {
            font-size: 3.5rem;
            margin-bottom: 30px;
            color: var(--accent-gold);
        }

        .cta-content p {
            font-size: 1.4rem;
            margin-bottom: 50px;
            font-weight: 300;
            line-height: 1.6;
        }

        .cta-content .btn {
            background-color: var(--accent-gold);
            border-color: var(--accent-gold);
            color: var(--primary-dark);
            font-size: 1.2rem;
            padding: 18px 45px;
            font-weight: 700;
        }

        .cta-content .btn:hover {
            background-color: transparent;
            color: var(--accent-gold);
            border-color: var(--accent-gold);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.2);
        }

        /* ===== ANIMATIONS ===== */
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

        /* ===== RESPONSIVE STYLES ===== */
        @media (max-width: 1200px) {
            .services-grid {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            }
            
            .service-img {
                height: 300px;
            }
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3.5rem;
            }
            
            .services-grid {
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 30px;
            }
            
            .service-img {
                height: 280px;
            }
            
            .service-content h3 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 70px 0;
            }
            
            .hero {
                min-height: 600px;
            }
            
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .service-img {
                height: 320px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .cta-section {
                padding: 100px 0;
            }
            
            .cta-content h2 {
                font-size: 2.8rem;
            }
            
            .cta-content p {
                font-size: 1.3rem;
            }
            
            .quote p {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .service-img {
                height: 280px;
            }
            
            .service-content {
                padding: 25px;
            }
            
            .service-content h3 {
                font-size: 1.4rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
            
            .cta-content h2 {
                font-size: 2.3rem;
            }
            
            .cta-content p {
                font-size: 1.2rem;
            }
            
            .quote p {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <!-- ===== HERO SECTION ===== -->
<section class="hero">
    <div class="hero-content">
        <h1>Where Art Becomes Experience</h1>
        <p>Transforming spaces with breathtaking sculptures, immersive murals, and custom artistic creations that blend craftsmanship with visionary design.</p>
        <a href="contact.php" class="btn">Explore Our Creations</a>
    </div>
</section>


    <!-- ===== SERVICES GRID SECTION ===== -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Artistic Services</h2>
                <p>We specialize in transforming creative visions into appreciable art experiences through a diverse range of services.</p>
            </div>
            
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/2dmurals.jpg" alt="2D Mural Art">
                    </div>
                    <div class="service-content">
                        <h3>2D Murals</h3>
                        <p>Transform blank walls into captivating visual narratives with our custom-designed murals that tell your unique story through color, texture, and artistic expression.</p>
                        <span class="service-tag">Wall Art</span>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/3dsculptures.jpg" alt="3D Sculpting">
                    </div>
                    <div class="service-content">
                        <h3>3D Sculpting Arts</h3>
                        <p>Dynamic three-dimensional creations that add depth, movement, and interactive elements to any environment, transforming spaces into immersive artistic experiences.</p>
                        <span class="service-tag">Sculpture</span>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/handcrafted.jpg" alt="Hand-Crafted Sculptures">
                    </div>
                    <div class="service-content">
                        <h3>Hand-Crafted Sculptures</h3>
                        <p>Each piece precisely shaped by our skilled artisans, ensuring unique character and exceptional quality that reflects both traditional techniques and contemporary vision.</p>
                        <span class="service-tag">Artisan</span>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/miniatureart.jpg" alt="Miniature Arts">
                    </div>
                    <div class="service-content">
                        <h3>Customized Miniature Arts</h3>
                        <p>Exquisite small-scale creations perfect for personal collections, corporate gifts, or detailed architectural models that capture magnificence in miniature form.</p>
                        <span class="service-tag">Miniature</span>
                    </div>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/bulkart.JPG" alt="Bulk Art Manufacturing">
                    </div>
                    <div class="service-content">
                        <h3>Bulk Art Manufacture</h3>
                        <p>Large-scale production of artistic pieces for commercial projects, hospitality spaces, and retail environments while maintaining individual artistic integrity.</p>
                        <span class="service-tag">Production</span>
                    </div>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/statue1.jpg" alt="Statue Crafting">
                    </div>
                    <div class="service-content">
                        <h3>Statue Craftsman</h3>
                        <p>Traditional and modern statue creation using time-honored techniques combined with modern innovation to create timeless artistic centerpieces.</p>
                        <span class="service-tag">Statue</span>
                    </div>
                </div>
                
                <!-- Service 7 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://sothebysinstitute.com/wp-content/uploads/2026/01/IMG_8413-1024x683.jpg" alt="Art Dealership">
                    </div>
                    <div class="service-content">
                        <h3>Art-Related Dealership</h3>
                        <p>Partnering with artists and galleries to provide exclusive art pieces for collectors and interior design projects, bridging creativity with curation.</p>
                        <span class="service-tag">Partnership</span>
                    </div>
                </div>
                
                <!-- Service 8 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://m.media-amazon.com/images/I/71wS66JtXIL.jpg" alt="Sculpture Mould">
                    </div>
                    <div class="service-content">
                        <h3>Custom Sculpture Mould</h3>
                        <p>Precision mold-making services for reproducing complex sculptures with consistent quality and detail, allowing for both reproduction and original creation.</p>
                        <span class="service-tag">Mould Making</span>
                    </div>
                </div>
                
                <!-- Service 9 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://www.treeganesha.com/awards/wp-content/uploads/2017/04/Visarjan-06.jpg" alt="Eco-Friendly Sculpture">
                    </div>
                    <div class="service-content">
                        <h3>Eco-Friendly Sculpture</h3>
                        <p>Sustainable art pieces created from recycled and environmentally conscious materials without compromising beauty, form, or artistic expression.</p>
                        <span class="service-tag">Sustainable</span>
                    </div>
                </div>
                
                <!-- Service 10 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/workshop.jpg" alt="Art Workshops">
                    </div>
                    <div class="service-content">
                        <h3>Creative Art Workshops</h3>
                        <p>Hands-on sessions where participants learn sculpture techniques and unleash their creative potential under the guidance of master artisans.</p>
                        <span class="service-tag">Education</span>
                    </div>
                </div>
                
                <!-- Service 11 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://www.whiteclouds.com/wp-content/uploads/2024/11/Theatrical-Stage-Props-Forest.jpg" alt="Stage Properties">
                    </div>
                    <div class="service-content">
                        <h3>Stage Property Setups</h3>
                        <p>Custom theatrical props and stage designs that bring productions to life with artistic authenticity, enhancing narrative through physical artistry.</p>
                        <span class="service-tag">Theatrical</span>
                    </div>
                </div>
                
                <!-- Service 12 -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/walldecoration.jpg" alt="Wall Decorations">
                    </div>
                    <div class="service-content">
                        <h3>High-quality Wall Decorations</h3>
                        <p>Elevate interior spaces with premium wall art that complements architecture and enhances ambiance through thoughtful design and execution.</p>
                        <span class="service-tag">Interior</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== VISUAL BREAK SECTION ===== -->
    <section class="visual-break">
        <div class="quote">
            <i class="fas fa-quote-left"></i>
            <p>"Art is not what you see, but what you make others see. We craft experiences that transform perception and elevate spaces."</p>
            <span>— AAKAR GPR WORKS Philosophy</span>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US SECTION ===== -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose AAKAR</h2>
                <p>Our commitment to artistic excellence and client satisfaction sets us apart in the creative industry.</p>
            </div>
            
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h3>Skilled Artisans</h3>
                    <p>Master craftsmen with decades of experience in traditional and modern artistic techniques, preserving heritage while innovating.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3>Custom Design Approach</h3>
                    <p>Every project begins with your vision, transformed into unique designs that reflect your identity, values, and aesthetic preferences.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Premium Materials</h3>
                    <p>We source only the finest materials, ensuring durability and aesthetic appeal in every creation, from bronze to marble to sustainable alternatives.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Bulk Production Capability</h3>
                    <p>From single pieces to large-scale installations, we deliver consistent quality across all volumes while maintaining artistic integrity.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Eco-Conscious Methods</h3>
                    <p>Sustainable practices and materials that minimize environmental impact without compromising artistry, beauty, or durability.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>End-to-End Execution</h3>
                    <p>complete service from concept understanding to installation, ensuring a seamless creative journey from idea to reality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CALL-TO-ACTION SECTION ===== -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Let's Create Something Extraordinary</h2>
            <p>Ready to transform your space with exceptional art? Share your vision with us, and let's bring it to life through craftsmanship, creativity, and collaboration.</p>
            <a href="contact.php" class="btn">Get in Touch</a>
        </div>
    </section>

    <script>
        // Simple scroll animation for elements
        document.addEventListener('DOMContentLoaded', function() {
            // Function to check if element is in viewport
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
                    rect.bottom >= 0
                );
            }
            
            // Function to handle scroll animations
            function handleScrollAnimations() {
                const serviceCards = document.querySelectorAll('.service-card');
                const featureItems = document.querySelectorAll('.feature-item');
                
                // Animate service cards
                serviceCards.forEach(card => {
                    if (isElementInViewport(card)) {
                        card.classList.add('visible');
                    }
                });
                
                // Animate feature items
                featureItems.forEach(item => {
                    if (isElementInViewport(item)) {
                        item.classList.add('visible');
                    }
                });
            }
            
            // Initial check on page load
            handleScrollAnimations();
            
            // Check on scroll
            window.addEventListener('scroll', handleScrollAnimations);
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    if (this.getAttribute('href') === '#') return;
                    
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 50,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Enhanced hover effects for service cards
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.6s ease';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transition = 'var(--transition)';
                });
            });
        });
    </script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>