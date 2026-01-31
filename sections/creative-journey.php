<!-- Professional Services Showcase Section -->
<section class="services-showcase">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-animate="fadeInUp">
            <h2 class="section-title">Our Creative Excellence</h2>
            <p class="section-subtitle">From concept to creation, we bring your artistic vision to life through masterful craftsmanship and innovative design.</p>
        </div>

        <!-- Featured Service Hero -->
        <div class="featured-service" data-animate="fadeInUp">
            <div class="featured-image">
                <img src="images/customsculpture1.jpg" alt="Custom Sculptures" loading="lazy">
                <div class="featured-overlay">
                    <div class="featured-content">
                        <h3>Custom Sculptures</h3>
                        <p>Realistic, abstract, or conceptual creations, made just for you.</p>
                        <a href="services.php" class="btn-primary">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Video Showcase -->
            <div class="service-card video-card" data-animate="fadeInLeft">
                <div class="card-media">
                    <iframe src="https://www.youtube.com/embed/Qu7logfqgh4?autoplay=1&mute=1&loop=1&playlist=Qu7logfqgh4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Service Cards -->
            <div class="service-card" data-animate="fadeInUp">
                <div class="card-media">
                    <img src="images/handcrafted.jpg" alt="Durable Materials" loading="lazy">
                </div>
                <div class="card-content">
                    <h4>Premium Materials</h4>
                    <p>Our specialty is resin craftsmanship, with custom creations available in bronze, wood, and clay to suit customer needs.</p>
                </div>
            </div>

            <div class="service-card" data-animate="fadeInUp">
                <div class="card-media">
                    <img src="images/versatile.jpeg" alt="Versatile Applications" loading="lazy">
                </div>
                <div class="card-content">
                    <h4>Versatile Applications</h4>
                    <p>Designed for homes, offices, public spaces, or gardens - our creations enhance any environment.</p>
                </div>
            </div>

            <div class="service-card" data-animate="fadeInRight">
                <div class="card-media">
                    <img src="images/creative.jpeg" alt="Creative Collaboration" loading="lazy">
                </div>
                <div class="card-content">
                    <h4>Creative Collaboration</h4>
                    <p>We shape your ideas with craftsmanship and care, ensuring every detail reflects your vision.</p>
                </div>
            </div>

            <div class="service-card" data-animate="fadeInRight">
                <div class="card-media">
                    <img src="https://i.pinimg.com/1200x/20/b4/d0/20b4d0dd92f2eace96b0632860487198.jpg" alt="Stage Property Design" loading="lazy">
                </div>
                <div class="card-content">
                    <h4>Stage Property Design</h4>
                    <p>Creative stage property designs and setups enhancing events with elegance and artistic flair.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Professional Services Showcase */
.services-showcase {
    padding: 6rem 0;
    background: var(--gray-light);
    position: relative;
    overflow: hidden;
}

.services-showcase::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 20% 80%, rgba(212, 175, 55, 0.03) 0%, transparent 50%);
    pointer-events: none;
}

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 4rem;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.section-title {
    font-size: clamp(2.5rem, 4vw, 3.5rem);
    color: var(--primary-dark);
    margin-bottom: 1.5rem;
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
    font-size: 1.2rem;
    color: var(--gray-medium);
    line-height: 1.6;
    font-weight: 300;
}

/* Featured Service Hero */
.featured-service {
    margin-bottom: 4rem;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-medium);
    position: relative;
    height: 400px;
}

.featured-image {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.featured-service:hover .featured-image img {
    transform: scale(1.05);
}

.featured-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(26, 26, 26, 0.7) 0%,
        rgba(26, 26, 26, 0.4) 50%,
        rgba(26, 26, 26, 0.7) 100%
    );
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-light);
    text-align: center;
}

.featured-content h3 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.featured-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    max-width: 600px;
    font-weight: 300;
    line-height: 1.6;
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.service-card {
    background: var(--primary-light);
    border-radius: 15px;
    overflow: hidden;
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

/* Video Card Specific */
.video-card {
    grid-row: span 2;
    min-height: 500px;
}

.video-card .card-media {
    height: 100%;
    position: relative;
}

.video-card iframe {
    width: 100%;
    height: 100%;
    border: none;
}

.video-card .video-link {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
    color: inherit;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    transition: var(--transition);
}

.video-card .video-link:hover {
    transform: scale(1.02);
}

.youtube-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255, 0, 0, 0.9);
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    opacity: 0;
    transition: var(--transition);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.video-card:hover .youtube-icon {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1.1);
}

.video-link {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
    color: inherit;
}

.video-link:hover {
    text-decoration: none;
}

/* Wide Card */
.wide-card {
    grid-column: span 2;
}

/* Card Media */
.card-media {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.card-media img,
.card-media video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.service-card:hover .card-media img {
    transform: scale(1.1);
}

/* Media Overlay */
.media-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(0, 0, 0, 0.8) 0%,
        rgba(0, 0, 0, 0.2) 50%,
        transparent 100%
    );
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 2rem;
    color: var(--primary-light);
    opacity: 0;
    transition: var(--transition);
}

.service-card:hover .media-overlay {
    opacity: 1;
}

.media-overlay h4 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.media-overlay p {
    font-size: 1rem;
    font-weight: 300;
}

/* Card Content */
.card-content {
    padding: 2rem;
}

.card-content h4 {
    font-size: 1.4rem;
    color: var(--primary-dark);
    margin-bottom: 1rem;
    font-weight: 600;
}

.card-content p {
    color: var(--gray-medium);
    line-height: 1.6;
    font-size: 1rem;
}

/* Animation Delays */
.service-card:nth-child(1) { transition-delay: 0.1s; }
.service-card:nth-child(2) { transition-delay: 0.2s; }
.service-card:nth-child(3) { transition-delay: 0.3s; }
.service-card:nth-child(4) { transition-delay: 0.4s; }
.service-card:nth-child(5) { transition-delay: 0.5s; }

/* Responsive Design */
@media (max-width: 1200px) {
    .services-grid {
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }
    
    .wide-card {
        grid-column: span 1;
    }
}

@media (max-width: 768px) {
    .services-showcase {
        padding: 4rem 0;
    }
    
    .featured-service {
        height: 300px;
        margin-bottom: 3rem;
    }
    
    .featured-content h3 {
        font-size: 2rem;
    }
    
    .featured-content p {
        font-size: 1.1rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .video-card {
        grid-row: span 1;
        min-height: 300px;
    }
    
    .card-media {
        height: 200px;
    }
    
    .card-content {
        padding: 1.5rem;
    }
}

@media (max-width: 480px) {
    .section-header {
        margin-bottom: 3rem;
    }
    
    .featured-content {
        padding: 0 1rem;
    }
    
    .card-content {
        padding: 1.2rem;
    }
    
    .media-overlay {
        padding: 1.5rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Video handling for service showcase
    const serviceVideos = document.querySelectorAll('.video-card video');
    
    serviceVideos.forEach(video => {
        video.addEventListener('loadeddata', function() {
            this.play().catch(console.log);
        });
        
        // Pause video when not in view for performance
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    video.play().catch(console.log);
                } else {
                    video.pause();
                }
            });
        }, { threshold: 0.3 });
        
        observer.observe(video);
    });
    
    // Service card click handlers
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('click', function() {
            // Add navigation logic here
            console.log('Service card clicked');
        });
    });
});
</script>