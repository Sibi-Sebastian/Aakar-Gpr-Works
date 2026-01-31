<?php
// Simple 3D Showcase Section - AAKAR GPR WORKS
?>

<section class="simple-showcase">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-animate="fadeInUp">
            <h2 class="section-title">3D Models That Inspire</h2>
            <p class="section-description">Experience creativity with our stunning 3D models and artistic excellence.</p>
        </div>
        
        <!-- Content Layout -->
        <div class="content-layout">
            <!-- Video Section - Left -->
            <div class="video-section" data-animate="fadeInLeft">
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/mtTv06DGlb4?autoplay=1&mute=1&loop=1&playlist=mtTv06DGlb4&controls=0&showinfo=0&rel=0&modestbranding=1" 
                        class="main-video"
                        frameborder="0" 
                        allow="autoplay; encrypted-media" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            
            <!-- Images Section - Right -->
            <div class="images-section">
                <!-- Creative Excellence -->
                <div class="image-card" data-animate="fadeInRight">
                    <div class="image-container">
                        <img src="images/creative.webp" alt="Creative Excellence" loading="lazy">
                    </div>
                    <div class="image-text">
                        <h4>Creative Excellence</h4>
                        <p>Crafted with precision and designed to transform your ideas into stunning reality.</p>
                    </div>
                </div>
                
                <!-- Modern Techniques -->
                <div class="image-card" data-animate="fadeInRight">
                    <div class="image-container">
                        <img src="images/modern.webp" alt="Modern Techniques" loading="lazy">
                    </div>
                    <div class="image-text">
                        <h4>Modern Techniques</h4>
                        <p>Advanced 3D modeling techniques for precision, depth, and lasting impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Simple 3D Showcase Section */
.simple-showcase {
    padding: 6rem 0;
    background: var(--gray-light);
}

/* Section Header */
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

.section-description {
    font-size: 1.2rem;
    color: var(--gray-medium);
    font-weight: 300;
    max-width: 600px;
    margin: 2rem auto 0;
}

/* Content Layout */
.content-layout {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 4rem;
    align-items: start;
}

/* Video Section - Left (Bigger Width) */
.video-section {
    opacity: 0;
    transform: translateX(-30px);
}

.video-section.visible {
    opacity: 1;
    transform: translateX(0);
}

.video-container {
    position: relative;
    height: 400px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: var(--shadow-medium);
}

.main-video {
    width: 100%;
    height: 100%;
    border: none;
}

/* Images Section - Right (Two Images Side by Side) */
.images-section {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
}

.image-card {
    opacity: 0;
    transform: translateX(30px);
    transition: var(--transition);
}

.image-card.visible {
    opacity: 1;
    transform: translateX(0);
}

.image-container {
    position: relative;
    height: 180px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-light);
    margin-bottom: 1rem;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.image-card:hover .image-container img {
    transform: scale(1.05);
}

.image-text h4 {
    font-size: 1.2rem;
    color: var(--primary-dark);
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.image-text p {
    font-size: 0.95rem;
    color: var(--gray-medium);
    line-height: 1.5;
    font-weight: 300;
}

/* Animation Delays */
.image-card:nth-child(1) { transition-delay: 0.1s; }
.image-card:nth-child(2) { transition-delay: 0.2s; }

/* Responsive Design */
@media (max-width: 1024px) {
    .content-layout {
        grid-template-columns: 1fr;
        gap: 3rem;
    }
    
    .images-section {
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }
}

@media (max-width: 768px) {
    .simple-showcase {
        padding: 4rem 0;
    }
    
    .section-header {
        margin-bottom: 3rem;
    }
    
    .content-layout {
        gap: 2rem;
    }
    
    .video-container {
        height: 300px;
    }
    
    .images-section {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .image-container {
        height: 150px;
    }
}

@media (max-width: 480px) {
    .image-container {
        height: 420px;
    }
    
    .image-text h4 {
        font-size: 1.1rem;
    }
    
    .image-text p {
        font-size: 0.9rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simple hover effects for image cards
    const imageCards = document.querySelectorAll('.image-card');
    imageCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>