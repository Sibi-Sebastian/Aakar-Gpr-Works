<!-- Professional Portfolio Gallery Section -->
<section class="portfolio-gallery">
    <div class="container">
        <div class="gallery-header" data-animate="fadeInUp">
            <h2 class="gallery-title">Transforming Spaces with Art</h2>
            <p class="gallery-subtitle">Over 350+ successful projects delivered with excellence and creativity</p>
        </div>
        
        <div class="gallery-showcase" data-animate="fadeInUp">
            <!-- Navigation Buttons -->
            <button class="gallery-nav gallery-nav-prev" id="prevBtn">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="gallery-nav gallery-nav-next" id="nextBtn">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <div class="gallery-scroll" id="galleryScroll">
                <div class="gallery-item" data-animate="fadeInLeft">
                    <div class="item-image">
                        <img src="images/residential.jpg" alt="Elegant Living Room Art Installation" loading="lazy">
                        <div class="item-overlay">
                            <div class="overlay-content">
                                <h4>Residential Art</h4>
                                <p>Elegant living spaces enhanced with custom wall art</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-animate="fadeInLeft">
                    <div class="item-image">
                        <img src="images/abstractart.JPG" alt="Modern Abstract Wall Art" loading="lazy">
                        <div class="item-overlay">
                            <div class="overlay-content">
                                <h4>Abstract Creations</h4>
                                <p>Contemporary designs that make bold statements</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-animate="fadeInLeft">
                    <div class="item-image">
                        <img src="images/nature.jpg" alt="Floral Wall Art Design" loading="lazy">
                        <div class="item-overlay">
                            <div class="overlay-content">
                                <h4>Nature Inspired</h4>
                                <p>Bringing the beauty of nature indoors</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-animate="fadeInLeft">
                    <div class="item-image">
                        <img src="images/private.jpg" alt="Colorful Bedroom Art" loading="lazy">
                        <div class="item-overlay">
                            <div class="overlay-content">
                                <h4>Personal Spaces</h4>
                                <p>Creating intimate and inspiring environments</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-animate="fadeInLeft">
                    <div class="item-image">
                        <img src="images/comercial.jpg" alt="Commercial Art Installation" loading="lazy">
                        <div class="item-overlay">
                            <div class="overlay-content">
                                <h4>Commercial Projects</h4>
                                <p>Professional installations for business spaces</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-animate="fadeInLeft">
                    <div class="item-image">
                        <img src="images/3dwallart.jpeg" alt="Artistic Wall Sculpture" loading="lazy">
                        <div class="item-overlay">
                            <div class="overlay-content">
                                <h4>3D Wall Art</h4>
                                <p>Dimensional pieces that create depth and interest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Indicators -->
            <div class="gallery-indicators">
                <span class="indicator active" data-slide="0"></span>
                <span class="indicator" data-slide="1"></span>
                <span class="indicator" data-slide="2"></span>
                <span class="indicator" data-slide="3"></span>

            </div>
        </div>

    </div>
</section>

<style>
/* Professional Portfolio Gallery */
.portfolio-gallery {
    padding: 20PX 0;
    background: linear-gradient(135deg, var(--primary-dark) 0%, #2d2d2d 50%, var(--primary-dark) 100%);
    color: var(--primary-light);
    position: relative;
    overflow: hidden;
}

.portfolio-gallery::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 30% 50%, rgba(212, 175, 55, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

/* Gallery Header */
.gallery-header {
    text-align: center;
    margin-bottom: 4rem;
    position: relative;
    z-index: 2;
}

.gallery-title {
    font-size: clamp(2.5rem, 4vw, 3.5rem);
    color: var(--primary-light);
    margin-bottom: 1rem;
    font-weight: 600;
}

.gallery-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 2rem;
    font-weight: 300;
    line-height: 1.6;
}

.view-all-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    padding: 1rem 2rem;
    background: transparent;
    color: var(--accent-gold);
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 1px;
    border: 2px solid var(--accent-gold);
    border-radius: 50px;
    transition: var(--transition);
    text-transform: uppercase;
    font-size: 0.9rem;
}

.view-all-btn:hover {
    background: var(--accent-gold);
    color: var(--primary-dark);
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.3);
}

.view-all-btn i {
    transition: var(--transition);
}

.view-all-btn:hover i {
    transform: translateX(5px);
}

/* Gallery Showcase */
.gallery-showcase {
    position: relative;
    margin-bottom: 2rem;
}

/* Navigation Buttons */
.gallery-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    background: rgba(212, 175, 55, 0.9);
    border: none;
    border-radius: 50%;
    color: var(--primary-dark);
    font-size: 1.2rem;
    cursor: pointer;
    transition: var(--transition);
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.gallery-nav:hover {
    background: var(--accent-gold);
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
}

.gallery-nav:disabled {
    background: rgba(255, 255, 255, 0.2);
    color: rgba(255, 255, 255, 0.4);
    cursor: not-allowed;
    transform: translateY(-50%) scale(0.9);
}

.gallery-nav-prev {
    left: -25px;
}

.gallery-nav-next {
    right: -25px;
}

.gallery-scroll {
    display: flex;
    gap: 2rem;
    overflow-x: auto;
    overflow-y: hidden;
    scroll-behavior: smooth;
    padding: 1rem 0;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.gallery-scroll::-webkit-scrollbar {
    display: none;
}

/* Carousel Indicators */
.gallery-indicators {
    display: flex;
    justify-content: center;
    gap: 0.8rem;
    margin-top: 2rem;
}

.indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    transition: var(--transition);
}

.indicator.active {
    background: var(--accent-gold);
    transform: scale(1.2);
}

.indicator:hover {
    background: rgba(212, 175, 55, 0.7);
}

/* Gallery Items */
.gallery-item {
    flex: 0 0 auto;
    width: 350px;
    height: 450px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: var(--shadow-medium);
    transition: var(--transition);
    opacity: 0;
    transform: translateX(30px);
}

.gallery-item.visible {
    opacity: 1;
    transform: translateX(0);
}

.gallery-item:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-heavy);
}

.item-image {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.gallery-item:hover .item-image img {
    transform: scale(1.1);
}

/* Item Overlay */
.item-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(0, 0, 0, 0.8) 0%,
        rgba(0, 0, 0, 0.3) 50%,
        transparent 100%
    );
    display: flex;
    align-items: flex-end;
    padding: 2rem;
    opacity: 0;
    transition: var(--transition);
}

.gallery-item:hover .item-overlay {
    opacity: 1;
}

.overlay-content h4 {
    font-size: 1.3rem;
    color: var(--accent-gold);
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.overlay-content p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.95rem;
    line-height: 1.5;
    font-weight: 300;
}

/* Animation Delays */
.gallery-item:nth-child(1) { transition-delay: 0.1s; }
.gallery-item:nth-child(2) { transition-delay: 0.2s; }
.gallery-item:nth-child(3) { transition-delay: 0.3s; }
.gallery-item:nth-child(4) { transition-delay: 0.4s; }
.gallery-item:nth-child(5) { transition-delay: 0.5s; }
.gallery-item:nth-child(6) { transition-delay: 0.6s; }

/* Responsive Design */
@media (max-width: 1200px) {
    .gallery-item {
        width: 300px;
        height: 400px;
    }
    
    .gallery-nav {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
    
    .gallery-nav-prev {
        left: -22px;
    }
    
    .gallery-nav-next {
        right: -22px;
    }
}

@media (max-width: 768px) {
    .portfolio-gallery {
        padding: 4rem 0;
    }
    
    .gallery-header {
        margin-bottom: 3rem;
    }
    
    .gallery-item {
        width: 280px;
        height: 350px;
    }
    
    .gallery-scroll {
        gap: 1.5rem;
    }
    
    .gallery-nav {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .gallery-nav-prev {
        left: -20px;
    }
    
    .gallery-nav-next {
        right: -20px;
    }
    
    .gallery-indicators {
        gap: 0.6rem;
        margin-top: 1.5rem;
    }
    
    .indicator {
        width: 10px;
        height: 10px;
    }
}

@media (max-width: 480px) {
    .gallery-item {
        width: 380px;
        height: 320px;
    }
    
    .gallery-scroll {
        gap: 1rem;
    }
    
    .gallery-nav {
        width: 35px;
        height: 35px;
        font-size: 0.9rem;
    }
    
    .gallery-nav-prev {
        left: -17px;
    }
    
    .gallery-nav-next {
        right: -17px;
    }
    
    .item-overlay {
        padding: 1.5rem;
    }
    
    .overlay-content h4 {
        font-size: 1.1rem;
    }
    
    .overlay-content p {
        font-size: 0.9rem;
    }
}

/* Touch Scroll Indicators */
@media (hover: none) {
    .gallery-scroll {
        scroll-snap-type: x mandatory;
    }
    
    .gallery-item {
        scroll-snap-align: start;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryScroll = document.querySelector('#galleryScroll');
    const prevBtn = document.querySelector('#prevBtn');
    const nextBtn = document.querySelector('#nextBtn');
    const indicators = document.querySelectorAll('.indicator');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    let currentSlide = 0;
    let isDown = false;
    let startX;
    let scrollLeft;

    // Calculate item width including gap
    const getItemWidth = () => {
        const item = galleryItems[0];
        const itemWidth = item.offsetWidth;
        const gap = 32; // 2rem = 32px
        return itemWidth + gap;
    };

    // Update button states
    const updateButtonStates = () => {
        const maxScroll = galleryScroll.scrollWidth - galleryScroll.clientWidth;
        const currentScroll = galleryScroll.scrollLeft;
        
        prevBtn.disabled = currentScroll <= 0;
        nextBtn.disabled = currentScroll >= maxScroll - 1;
    };

    // Update indicators
    const updateIndicators = () => {
        const itemWidth = getItemWidth();
        const scrollPosition = galleryScroll.scrollLeft;
        const newSlide = Math.round(scrollPosition / itemWidth);
        
        if (newSlide !== currentSlide) {
            indicators[currentSlide]?.classList.remove('active');
            currentSlide = Math.max(0, Math.min(newSlide, indicators.length - 1));
            indicators[currentSlide]?.classList.add('active');
        }
    };

    // Smooth scroll to specific slide
    const scrollToSlide = (slideIndex) => {
        const itemWidth = getItemWidth();
        const scrollPosition = slideIndex * itemWidth;
        galleryScroll.scrollTo({
            left: scrollPosition,
            behavior: 'smooth'
        });
    };

    // Navigation button events
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            const newSlide = Math.max(0, currentSlide - 1);
            scrollToSlide(newSlide);
        });

        nextBtn.addEventListener('click', () => {
            const newSlide = Math.min(galleryItems.length - 1, currentSlide + 1);
            scrollToSlide(newSlide);
        });
    }

    // Indicator click events
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            scrollToSlide(index);
        });
    });

    // Scroll event listener
    if (galleryScroll) {
        galleryScroll.addEventListener('scroll', () => {
            updateButtonStates();
            updateIndicators();
        });

        // Mouse drag events for desktop
        galleryScroll.addEventListener('mousedown', (e) => {
            isDown = true;
            galleryScroll.style.cursor = 'grabbing';
            startX = e.pageX - galleryScroll.offsetLeft;
            scrollLeft = galleryScroll.scrollLeft;
        });

        galleryScroll.addEventListener('mouseleave', () => {
            isDown = false;
            galleryScroll.style.cursor = 'grab';
        });

        galleryScroll.addEventListener('mouseup', () => {
            isDown = false;
            galleryScroll.style.cursor = 'grab';
        });

        galleryScroll.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - galleryScroll.offsetLeft;
            const walk = (x - startX) * 2;
            galleryScroll.scrollLeft = scrollLeft - walk;
        });

        // Touch events for mobile
        let touchStartX = 0;
        let touchScrollLeft = 0;

        galleryScroll.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
            touchScrollLeft = galleryScroll.scrollLeft;
        });

        galleryScroll.addEventListener('touchmove', (e) => {
            if (!touchStartX) return;
            const touchX = e.touches[0].clientX;
            const walk = (touchStartX - touchX) * 1.5;
            galleryScroll.scrollLeft = touchScrollLeft + walk;
        });

        galleryScroll.addEventListener('touchend', () => {
            touchStartX = 0;
        });

        // Initialize button states
        updateButtonStates();
        
        // Handle window resize
        window.addEventListener('resize', () => {
            setTimeout(() => {
                updateButtonStates();
                updateIndicators();
            }, 100);
        });
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft' && !prevBtn.disabled) {
            prevBtn.click();
        } else if (e.key === 'ArrowRight' && !nextBtn.disabled) {
            nextBtn.click();
        }
    });
});
</script>