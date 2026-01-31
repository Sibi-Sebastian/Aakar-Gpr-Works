<?php
// Google Arts & Culture Style Navbar
?>

<nav class="aakar-primary-navigation">
    <div class="aakar-nav-wrapper">
        <div class="aakar-nav-left-section">
            <div class="aakar-brand-logo-container">
                <img src="images/aakar-logo.webp" alt="Aakar GPR Works Logo" class="aakar-brand-logo-img">
            </div>
            <div class="aakar-brand-title-wrapper">
                <!-- <span class="aakar-brand-title-text">AAKAR GPR WORKS</span> -->
            </div>
            <div class="aakar-mobile-menu-trigger">
                <span class="aakar-hamburger-line"></span>
                <span class="aakar-hamburger-line"></span>
                <span class="aakar-hamburger-line"></span>
            </div>
        </div>
        
        <div class="aakar-nav-center-section">
    <div class="aakar-navigation-menu">

        <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

        <a href="index.php" class="aakar-nav-link <?= $currentPage == 'index.php' ? 'aakar-nav-active' : '' ?>">Home</a>
        <a href="about.php" class="aakar-nav-link <?= $currentPage == 'about.php' ? 'aakar-nav-active' : '' ?>">About</a>
        <a href="services.php" class="aakar-nav-link <?= $currentPage == 'services.php' ? 'aakar-nav-active' : '' ?>">Services</a>
        <a href="model.php" class="aakar-nav-link <?= $currentPage == 'model.php' ? 'aakar-nav-active' : '' ?>">3D Models</a>
        <a href="gallery.php" class="aakar-nav-link <?= $currentPage == 'gallery.php' ? 'aakar-nav-active' : '' ?>">Gallery</a>
        <a href="contact.php" class="aakar-nav-link <?= $currentPage == 'contact.php' ? 'aakar-nav-active' : '' ?>">Contact Us</a>

    </div>
</div>

        
        <div class="aakar-nav-right-section">
            <div class="aakar-contact-cta-wrapper">
                <a href="tel:+918618792686" class="aakar-contact-cta-btn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    Call Now
                </a>
            </div>
        </div>
        
    </div>
</nav>

<style>
/* Google Arts & Culture Style Navbar */
.aakar-primary-navigation {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: transparent;
    z-index: 1000;
    /* padding: 0.8rem 0; */
    transition: all 0.3s ease;
}

.aakar-primary-navigation.aakar-nav-scrolled {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.aakar-nav-wrapper {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 40px;
}

.aakar-nav-left-section {
    display: flex;
    align-items: center;
    gap: 13rem;
}

.aakar-nav-center-section {
    display: flex;
    justify-content: center;
    flex: 2;
}

.aakar-brand-logo-container {
    display: flex;
    align-items: center;
}

.aakar-brand-logo-img {
    height: 100px;
    width: auto;
    padding-left: 30px;
    object-fit: contain;
    filter: brightness(1.6);
    transition: filter 0.3s ease;
}

.aakar-primary-navigation.aakar-nav-scrolled .aakar-brand-logo-img {
    filter: brightness(1.6);
}

.aakar-brand-title-wrapper {
    display: flex;
    align-items: center;
}

.aakar-brand-title-text {
    color: white;
    font-size: 1.5rem;
    font-weight: 500;
    letter-spacing: 0.5px;
    font-family: 'Playfair Display', 'Georgia', serif;
    transition: color 0.3s ease;
}

.aakar-primary-navigation.aakar-nav-scrolled .aakar-brand-title-text {
    color: #333;
}

.aakar-nav-right-section {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex: 1;
}

.aakar-contact-cta-wrapper {
    display: flex;
    align-items: center;
}

.aakar-contact-cta-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: linear-gradient(135deg, #be0000, hsla(0, 100%, 50%, 1.00));
    color: white;
    text-decoration: none;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
}

.aakar-contact-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
    background: linear-gradient(135deg, #ee5a24, #ff6b6b);
}

.aakar-contact-cta-btn svg {
    transition: transform 0.3s ease;
}

.aakar-contact-cta-btn:hover svg {
    transform: scale(1.1);
}

.aakar-navigation-menu {
    display: flex;
    gap: 2rem;
    align-items: center;
}

.aakar-nav-link {
    color: white !important;
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: 500;
    letter-spacing: 0.3px;
    font-family: 'Playfair Display', 'Georgia', serif;
    transition: all 0.3s ease;
    position: relative;
    padding: 0.5rem 0;
}

/* Navbar after scroll */
.aakar-primary-navigation.aakar-nav-scrolled .aakar-nav-link {
    color: #333 !important;
}

/* Hover effect (keep simple) */
.aakar-nav-link:hover {
    opacity: 0.8;
}

/* ACTIVE underline */
.aakar-nav-link.aakar-nav-active::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background-color: currentColor; /* matches text color */
}

/* Optional: slightly stronger active state */
.aakar-nav-link.aakar-nav-active {
    opacity: 1;
}

/* Mobile menu specific styles */
.aakar-nav-center-section.aakar-mobile-nav-active .aakar-nav-link {
    color: #333 !important;
}


.aakar-mobile-menu-trigger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    gap: 6px;
}

.aakar-hamburger-line {
    width: 28px;
    height: 3px;
    background: white;
    transition: all 0.3s ease;
}

.aakar-primary-navigation.aakar-nav-scrolled .aakar-hamburger-line {
    background: #333;
}

/* Mobile Styles */
@media (max-width: 1024px) {
    .aakar-navigation-menu {
        gap: 1.5rem;
    }
    
    .aakar-contact-cta-btn {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }
}

@media (max-width: 768px) {
    .aakar-nav-wrapper {
        padding: 0 1rem;
    }
   .aakar-nav-left-section{
    justify-content:space-between;
    gap:1rem !important;
        flex: 10;

   } 
    .aakar-nav-center-section {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        display: none;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
    
    .aakar-nav-center-section.aakar-mobile-nav-active {
        display: flex;
    }
    
    .aakar-navigation-menu {
        display: flex;
        width: 100%;
        flex-direction: column;
        padding: 2rem 1rem;
        gap: 1.5rem;
        align-items: center;
    }
    
    .aakar-navigation-menu .aakar-nav-link {
        color: #333 !important;
        font-size: 1.2rem;
        padding: 0.8rem 1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        width: 100%;
        text-align: center;
        max-width: 200px;
    }
    
    .aakar-navigation-menu .aakar-nav-link:hover {
        background: rgba(0, 0, 0, 0.05);
        opacity: 1;
    }
    
    .aakar-navigation-menu .aakar-nav-link.aakar-nav-active {
        background: rgba(190, 0, 0, 0.1);
        color: #be0000 !important;
    }
    
    .aakar-mobile-menu-trigger {
        display: flex;
    }
    
    .aakar-mobile-menu-trigger.aakar-hamburger-active .aakar-hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }
    
    .aakar-mobile-menu-trigger.aakar-hamburger-active .aakar-hamburger-line:nth-child(2) {
        opacity: 0;
    }
    
    .aakar-mobile-menu-trigger.aakar-hamburger-active .aakar-hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }
    
    .aakar-contact-cta-btn {
        display:none;
    }
}

@media (max-width: 480px) {
    .aakar-brand-title-text {
        font-size: 1rem;
        letter-spacing: 0.3px;
    }
    
    .aakar-brand-logo-img {
        height: 105px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.aakar-primary-navigation');
    const mobileToggle = document.querySelector('.aakar-mobile-menu-trigger');
    const navbarCenter = document.querySelector('.aakar-nav-center-section');
    
    // Scroll effect for navbar background
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('aakar-nav-scrolled');
        } else {
            navbar.classList.remove('aakar-nav-scrolled');
        }
    });
    
    // Mobile menu toggle
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            mobileToggle.classList.toggle('aakar-hamburger-active');
            navbarCenter.classList.toggle('aakar-mobile-nav-active');
        });
    }
    
    // Close mobile menu when clicking on links
    document.querySelectorAll('.aakar-nav-link').forEach(item => {
        item.addEventListener('click', function() {
            if (mobileToggle) {
                mobileToggle.classList.remove('aakar-hamburger-active');
                navbarCenter.classList.remove('aakar-mobile-nav-active');
            }
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!navbar.contains(e.target) && navbarCenter.classList.contains('aakar-mobile-nav-active')) {
            mobileToggle.classList.remove('aakar-hamburger-active');
            navbarCenter.classList.remove('aakar-mobile-nav-active');
        }
    });
});
</script>