<?php
// Professional Hero Section - AAKAR GPR WORKS
?>

<section class="hero-section">
    <div class="hero-background">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="images/aaramu-projects-carousal-video.mov" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
    </div>
    
    <div class="hero-content">
        <div class="container">
            <div class="hero-text" data-animate="fadeInUp">
                <div class="hero-subtitle">Where Art Meets Excellence</div>
                <h1 class="hero-title">
                    <span class="title-line">AAKAR</span>
                    <span class="title-line emphasized">GPR WORKS</span>
                </h1>
                <p class="hero-description">
                    Transforming imagination into reality through extremely beautiful sculptures, detailed 3D models, and artistic creations that inspire and captivate.
                </p>
                <div class="hero-actions">
                    <a href="gallery.php" class="btn-primary">Explore Our Gallery</a>
                    <a href="contact.php" class="btn-secondary">Start Your Project</a>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator" data-animate="fadeInUp">
            <div class="scroll-text">Discover More</div>
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>
</section>

<style>
/* Professional Hero Section */
.hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 700px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-light);
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.hero-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    filter: brightness(0.7) contrast(1.1);
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        135deg,
        rgba(26, 26, 26, 0.8) 0%,
        rgba(26, 26, 26, 0.6) 50%,
        rgba(26, 26, 26, 0.8) 100%
    );
    z-index: 2;
}

.hero-content {
    position: relative;
    z-index: 3;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero-text {
    max-width: 900px;
    margin: 0 auto;
    opacity: 0;
    animation: fadeInUp 1.2s ease 0.3s forwards;
}

.hero-subtitle {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--accent-gold);
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 1.5rem;
    opacity: 0;
    animation: fadeInUp 1s ease 0.5s forwards;
}

.hero-title {
    font-size: clamp(3.5rem, 8vw, 6rem);
    font-weight: 700;
    line-height: 0.9;
    margin-bottom: 2rem;
    opacity: 0;
    animation: fadeInUp 1s ease 0.7s forwards;
}

.title-line {
    display: block;
    position: relative;
}

.title-line.emphasized {
    color: var(--accent-gold);
    font-style: italic;
    font-weight: 600;
}

.hero-description {
    font-size: clamp(1.1rem, 2vw, 1.4rem) !important;
    font-weight: 300;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
    max-width: 700px;
    margin: 0 auto 3rem;
    opacity: 0;
    animation: fadeInUp 1s ease 0.9s forwards;
}

.hero-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
    opacity: 0;
    animation: fadeInUp 1s ease 1.1s forwards;
}

.scroll-indicator {
    position: absolute !important;
    bottom: 2rem !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 0.5rem !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    opacity: 1 !important;
    width: auto !important;
    text-align: center !important;
    z-index: 10 !important;
}

.scroll-indicator.visible {
    opacity: 1 !important;
    transform: translateX(-50%) translateY(0) !important;
}

.scroll-indicator:hover {
    transform: translateX(-50%) translateY(-5px) !important;
}

.scroll-text {
    font-size: 0.9rem !important;
    font-weight: 300 !important;
    letter-spacing: 2px !important;
    color: rgba(255, 255, 255, 0.8) !important;
    text-transform: uppercase !important;
    text-align: center !important;
    white-space: nowrap !important;
    margin: 0 !important;
    padding: 0 !important;
}

.scroll-arrow {
    color: var(--accent-gold) !important;
    font-size: 1.2rem !important;
    animation: bounce 2s infinite !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    margin: 0 !important;
    padding: 0 !important;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Animation Classes */
[data-animate="fadeInUp"] {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

[data-animate="fadeInUp"].visible {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-primary,
    .btn-secondary {
        width: 250px;
        text-align: center;
    }
    
    .scroll-indicator {
        bottom: 1rem !important;
    }
}

@media (max-width: 480px) {
    .hero-description {
        margin-bottom: 2rem;
    }
    
    .hero-actions {
        gap: 1rem;
    }
}

/* Video Loading States */
.hero-video {
    opacity: 0;
    transition: opacity 0.5s ease;
}

.hero-video.loaded {
    opacity: 1;
}

/* Fallback Background */
.hero-section.video-error {
    background: linear-gradient(135deg, var(--primary-dark) 0%, #2d2d2d 50%, var(--primary-dark) 100%);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const heroVideo = document.querySelector('.hero-video');
    const heroSection = document.querySelector('.hero-section');
    
    // Video handling
    if (heroVideo) {
        heroVideo.addEventListener('loadeddata', function() {
            this.classList.add('loaded');
            this.play().catch(function(error) {
                console.log('Video autoplay failed:', error);
            });
        });
        
        heroVideo.addEventListener('error', function() {
            console.log('Video failed to load');
            if (heroSection) {
                heroSection.classList.add('video-error');
            }
        });
        
        // Performance optimization - pause video when not visible
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    heroVideo.play().catch(console.log);
                } else {
                    heroVideo.pause();
                }
            });
        }, { threshold: 0.3 });
        
        observer.observe(heroVideo);
    }
    
    // Scroll indicator functionality
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        // Ensure visibility
        setTimeout(function() {
            scrollIndicator.classList.add('visible');
        }, 100);
        
        scrollIndicator.addEventListener('click', function() {
            const nextSection = document.querySelector('.hero-section').nextElementSibling;
            if (nextSection) {
                nextSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
    
    // Parallax effect for hero content
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const heroContent = document.querySelector('.hero-content');
        
        if (heroContent && scrolled < window.innerHeight) {
            heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    });
});
</script>