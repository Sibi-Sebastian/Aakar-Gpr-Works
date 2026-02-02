<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AAKAR GPR WORKS | Contact Us - Get In Touch</title>

    <!-- SEO -->
    <meta name="description" content="Contact AAKAR GPR Works for custom sculptures, statues, 3D models, and artistic installations. Get in touch with our team today.">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="AAKAR GPR WORKS | Contact Us">
    <meta property="og:description" content="Get in touch with AAKAR GPR Works for custom sculpting and artistic services.">
    <meta property="og:image" content="https://aaramu.com/images/og-preview.jpg">
    <meta property="og:url" content="https://aaramu.com/contact.html">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/aakar-logo.webp">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Global CSS -->
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

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.2;
        }

        /* Hero Section */
        .contact-hero {
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
            ), url('images/background-image.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--primary-light);
            text-align: center;
        }

        .contact-hero::before {
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

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Contact Section */
        .contact-section {
            padding: 6rem 0;
            background: var(--gray-light);
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

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 4rem;
        }

        /* Contact Cards */
        .contact-card {
            background: var(--primary-light);
            border-radius: 15px;
            padding: 3rem;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            border-top: 4px solid var(--accent-gold);
            opacity: 0;
            transform: translateY(30px);
        }

        .contact-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
        }

        .card-title {
            font-size: 1.8rem;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 15px;
        }

        .card-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--accent-gold);
            border-radius: 2px;
        }

        /* Contact Methods */
        .contact-methods {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-method {
            display: flex;
            align-items: flex-start;
            padding: 2rem;
            border-radius: 12px;
            background: rgba(248, 249, 250, 0.8);
            transition: var(--transition);
            border-left: 4px solid var(--accent-gold);
        }

        .contact-method:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow-light);
            background: var(--primary-light);
        }

        .method-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent-gold), #b8860b);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-light);
            font-size: 1.5rem;
            margin-right: 1.5rem;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .contact-method:hover .method-icon {
            transform: scale(1.1);
        }

        .method-details h3 {
            font-size: 1.3rem;
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .method-details p {
            color: var(--gray-medium);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .method-contact {
            color: var(--accent-gold);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            display: block;
        }

        .method-action {
            display: inline-block;
            background: var(--accent-gold);
            color: var(--primary-dark);
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: 2px solid var(--accent-gold);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .method-action:hover {
            background: transparent;
            color: var(--accent-gold);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        /* Contact Form */
        .form-group {
            margin-bottom: 2rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 1rem;
        }

        .form-input, .form-select, .form-textarea {
            width: 100%;
            padding: 1rem 1.2rem;
            border: 2px solid #e0e6ef;
            border-radius: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
            background: var(--primary-light);
        }

        .form-input:focus, .form-select:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--accent-gold);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
        }

        .form-textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--accent-gold), #b8860b);
            color: var(--primary-dark);
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 2px solid var(--accent-gold);
        }

        .submit-btn:hover {
            background: transparent;
            color: var(--accent-gold);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        }

        /* Location & Hours Section */
        .location-hours-section {
            padding: 6rem 0;
            background: var(--primary-light);
        }

        .location-hours-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        /* Location Card */
        .location-card {
            background: var(--primary-light);
            border-radius: 15px;
            padding: 3rem;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            border-top: 4px solid var(--primary-dark);
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .map-container {
            height: 300px;
            border-radius: 12px;
            overflow: hidden;
            margin-top: 2rem;
            border: 2px solid var(--accent-gold);
            position: relative;
            box-shadow: var(--shadow-light);
        }

        .map-frame {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Hours Card */
        .hours-card {
            background: var(--primary-light);
            border-radius: 15px;
            padding: 3rem;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            border-top: 4px solid var(--accent-gold);
        }

        .hours-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .hours-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }

        .hour-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            background: rgba(248, 249, 250, 0.8);
            border-radius: 10px;
            border-left: 4px solid var(--accent-gold);
            transition: var(--transition);
        }

        .hour-item:hover {
            background: var(--primary-light);
            transform: translateX(5px);
            box-shadow: var(--shadow-light);
        }

        .day {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .time {
            color: var(--accent-gold);
            font-weight: 500;
        }

        /* Success Message */
        .success-message {
            background: rgba(46, 204, 113, 0.1);
            color: #27ae60;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            display: none;
            border-left: 5px solid #27ae60;
            border: 2px solid rgba(46, 204, 113, 0.2);
        }

        .success-message.show {
            display: block;
            animation: fadeIn 0.5s;
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
        @media (max-width: 1200px) {
            .container {
                padding: 0 1.5rem;
            }
            
            .contact-grid,
            .location-hours-grid {
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .contact-grid,
            .location-hours-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-card,
            .location-card,
            .hours-card {
                padding: 2rem;
            }
            
            .contact-method {
                flex-direction: column;
                align-items: flex-start;
                text-align: center;
            }
            
            .method-icon {
                margin-bottom: 1rem;
                margin-right: 0;
            }
            
            .map-container {
                height: 250px;
            }
            
            .hero-content {
                padding: 0 1rem;
            }
        }

        @media (max-width: 576px) {
            .contact-card,
            .location-card,
            .hours-card {
                padding: 1.5rem;
            }
            
            .map-container {
                height: 200px;
            }
            
            .hour-item {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
        }

        /* Staggered Animation */
        .contact-card:nth-child(1) { transition-delay: 0.1s; }
        .contact-card:nth-child(2) { transition-delay: 0.2s; }
        .location-card { transition-delay: 0.3s; }
        .hours-card { transition-delay: 0.4s; }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1 style="color: #d4af37;">Get In Touch</h1>
            <p class="hero-description">Ready to bring your vision to life? Let's discuss your next project and create something extraordinary together.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Let's Connect</h2>
                <p class="section-subtitle">We're here to help you transform your creative ideas into stunning reality. Reach out to us through any of the channels below.</p>
            </div>

            <div class="contact-grid">
                <!-- Get In Touch Card -->
                <div class="contact-card">
                    <h3 class="card-title" style="color: #d4af37;">Get In Touch</h3>
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="method-details">
                                <h4>Phone Contact</h4>
                                <p>Speak directly with our creative experts for immediate assistance and consultations.</p>
                                <span class="method-contact">+91 8618792686</span>
                                <a href="tel:+918618792686" class="method-action">Call Now</a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-details">
                                <h4>Email Contact</h4>
                                <p>Send us your project details and requirements for a detailed response.</p>
                                <span class="method-contact">aakar.ramu@gmail.com</span>
                                <a href="mailto:aakar.ramu@gmail.com" class="method-action">Send Email</a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="method-details">
                                <h4>Visit Our Studio</h4>
                                <p>Visit our creative studio for personalized consultations and project discussions.</p>
                                <span class="method-contact">Harihara, Karnataka</span>
                                <a href="#location" class="method-action">Get Directions</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Send Message Card -->
                <div class="contact-card">
                    <h3 class="card-title">Send a Message</h3>
                    
                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i> Thank you! Your message has been sent successfully.
                    </div>
                    
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" id="name" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" id="email" class="form-input" placeholder="Enter your email address" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" class="form-input" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="form-group">
                            <label for="service" class="form-label">Service Required</label>
                            <select id="service" class="form-select">
                                <option value="">Select a service</option>
                                <option value="2d-murals">2D Murals</option>
                                <option value="3d-sculpting">3D Sculpting Arts</option>
                                <option value="hand-crafted">Hand-Crafted Sculptures</option>
                                <option value="miniature-arts">Miniature Arts</option>
                                <option value="bulk-manufacturing">Bulk Art Manufacturing</option>
                                <option value="consultation">Consultation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Your Message *</label>
                            <textarea id="message" class="form-textarea" placeholder="Please describe your project requirements..." required></textarea>
                        </div>
                        
                        <a href="https://wa.me/918618792686" target="_blank" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Hours Section -->
    <section class="location-hours-section">
        <div class="container">
            <div class="location-hours-grid">
                <!-- Location Card -->
                <div class="location-card" id="location">
                    <h3 class="card-title">Our Location</h3>
                    <p>Visit our creative studio in Harihara for consultations and project discussions. We're conveniently located and ready to welcome you.</p>
                    
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.3281580723315!2d75.80581567510463!3d14.523212485954001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bba295fbd2487d9%3A0x5ec787c4e068d28b!2sAakar%20GPR%20Works!5e0!3m2!1sen!2sin!4v1769578740416!5m2!1sen!2sin" 
                            class="map-frame"
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Hours Card -->
                <div class="hours-card">
                    <h3 class="card-title">Business Hours</h3>
                    <p>Our regular business hours for consultations, project discussions, and creative collaborations.</p>
                    
                    <div class="hours-grid">
                        <div class="hour-item">
                            <div class="day">Monday - Friday</div>
                            <div class="time">8:30 AM - 6:30 PM</div>
                        </div>
                        <div class="hour-item">
                            <div class="day">Saturday</div>
                            <div class="time">8:30 AM - 4:00 PM</div>
                        </div>
                        <div class="hour-item">
                            <div class="day">Sunday</div>
                            <div class="time">By Appointment</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/918618792686" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Contact us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

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

    // Observe all contact cards
    document.querySelectorAll('.contact-card, .location-card, .hours-card').forEach(card => {
        observer.observe(card);
    });

    // Form submission (WhatsApp redirect)
    const contactForm = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');
    
    // Enhanced hover effects for contact methods
    const contactMethods = document.querySelectorAll('.contact-method');
    contactMethods.forEach(method => {
        method.addEventListener('mouseenter', function() {
            this.style.transition = 'transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.6s ease';
        });
        
        method.addEventListener('mouseleave', function() {
            this.style.transition = 'var(--transition)';
        });
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
});
</script>

<?php include 'includes/footer.php'; ?>

</body>
</html>