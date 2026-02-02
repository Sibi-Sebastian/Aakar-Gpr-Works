<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AAKAR GPR WORKS | ART-MASTER | 3D Models & Miniatures</title>

    <!-- SEO -->
    <meta name="description" content="AAKAR GPR Works specializes in detailed 3D models and miniature sculptures for temples, architecture, exhibitions, and custom artistic projects.">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="AAKAR GPR WORKS | 3D Models & Miniatures">
    <meta property="og:description" content="Precision-crafted 3D models and miniature sculptures created with artistic mastery and attention to detail.">
    <meta property="og:image" content="https://aaramu.com/images/og-preview.jpg">
    <meta property="og:url" content="https://aaramu.com/3d-models.html">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="images/aakar-logo.webp">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fonts -->
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
            background:
                linear-gradient(
                    rgba(10, 10, 10, 0.75),
                    rgba(10, 10, 10, 0.9)
                ),
                url('images/3d1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: var(--primary-light);
            text-align: center;
        }

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

        /* ===== INTRODUCTION SECTION ===== */
        .introduction-section {
            padding: 80px 0;
            background: var(--primary-light);
        }

        .showcase-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .showcase-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s ease;
        }

        .showcase-image:hover {
            transform: translateY(-10px);
        }

        .showcase-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .showcase-image:hover img {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(26, 26, 26, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .showcase-image:hover .image-overlay {
            opacity: 1;
        }

        .showcase-text {
            padding: 2rem 0;
        }

        .showcase-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            line-height: 1.2;
            position: relative;
        }

        .showcase-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-gold), #b8860b);
            border-radius: 2px;
        }

        .showcase-description {
            font-size: 1.2rem;
            line-height: 1.7;
            color: var(--gray-medium);
            margin-bottom: 2.5rem;
            font-weight: 300;
        }

        .showcase-features h3 {
            font-size: 1.5rem;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .feature-list {
            margin-bottom: 2rem;
        }

        .feature-list .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.2rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 12px;
            border-left: 4px solid var(--accent-gold);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .feature-list .feature-item:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.1);
        }

        .feature-list .feature-icon {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(212, 175, 55, 0.05));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-gold);
            margin-right: 1rem;
            flex-shrink: 0;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .feature-list .feature-item:hover .feature-icon {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1));
            transform: scale(1.1);
        }

        .feature-content {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--gray-medium);
        }

        .feature-content strong {
            color: var(--primary-dark);
            font-weight: 600;
        }

        .showcase-cta {
            font-size: 1.3rem;
            line-height: 1.6;
            color: var(--primary-dark);
            font-style: italic;
            font-weight: 400;
            padding: 1.5rem;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.05), rgba(212, 175, 55, 0.02));
            border-radius: 12px;
            border-left: 4px solid var(--accent-gold);
            position: relative;
        }

        /* ===== SCHOOL BENEFITS SECTION ===== */
        .school-benefits {
            padding: 80px 0;
            background: var(--gray-light);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            padding: 25px;
            background: var(--primary-light);
            border-radius: 12px;
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
            border-left: 4px solid var(--accent-gold);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .benefit-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .benefit-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: var(--accent-gold);
            font-size: 1.5rem;
            transition: var(--transition);
            border: 2px solid rgba(212, 175, 55, 0.2);
            flex-shrink: 0;
        }

        .benefit-item:hover .benefit-icon {
            background-color: var(--accent-gold);
            color: var(--primary-light);
            transform: scale(1.1);
        }

        .benefit-content p {
            color: var(--gray-medium);
            font-size: 1.05rem;
            line-height: 1.7;
            margin: 0;
        }

        /* ===== GIFT MODELS SECTION ===== */
        .gift-models {
            padding: 80px 0;
            background: var(--primary-light);
        }

        .gift-features {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .gift-feature-item {
            display: flex;
            align-items: flex-start;
            padding: 25px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            border-left: 4px solid var(--accent-gold);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .gift-feature-item:hover {
            background: rgba(255, 255, 255, 0.95);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.1);
        }

        .gift-feature-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            color: var(--accent-gold);
            font-size: 1.8rem;
            transition: var(--transition);
            border: 2px solid rgba(212, 175, 55, 0.2);
            flex-shrink: 0;
        }

        .gift-feature-item:hover .gift-feature-icon {
            background-color: var(--accent-gold);
            color: var(--primary-light);
            transform: scale(1.1);
        }

        .gift-feature-content h3 {
            font-size: 1.4rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .gift-feature-content p {
            color: var(--gray-medium);
            font-size: 1.05rem;
            line-height: 1.7;
            margin: 0;
        }

        .video-container {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .video-container iframe {
            width: 560px;
            height: 315px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border: 2px solid rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
        }

        .video-container iframe:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border-color: var(--accent-gold);
        }

        /* ===== MODELS GRID SECTION ===== */
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

        .models-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 35px;
        }

        .model-card {
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

        .model-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .model-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-top: 4px solid var(--accent-gold);
        }

        .model-img {
            height: 320px;
            overflow: hidden;
            position: relative;
        }

        .model-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
            filter: brightness(0.95);
        }

        .model-card:hover .model-img img {
            transform: scale(1.15);
            filter: brightness(1);
        }

        .model-img::after {
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

        .model-card:hover .model-img::after {
            opacity: 1;
        }

        .model-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .model-content h3 {
            font-size: 1.6rem;
            margin-bottom: 15px;
            color: var(--primary-dark);
            line-height: 1.3;
        }

        .model-content p {
            color: var(--gray-medium);
            font-size: 1.05rem;
            line-height: 1.7;
            margin-bottom: 10px;
            flex-grow: 1;
        }

        .model-tag {
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
            background: linear-gradient(rgba(26, 26, 26, 0.9), rgba(26, 26, 26, 0.9)), url('images/3dmini.jpg');
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
            background: linear-gradient(rgba(26, 26, 26, 0.85), rgba(26, 26, 26, 0.9)), url('images/3dmini-6.jpg');
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

        /* ===== RESPONSIVE STYLES ===== */
        @media (max-width: 1200px) {
            .models-grid {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            }
            
            .model-img {
                height: 300px;
            }
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3.5rem;
            }
            
            .models-grid {
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 30px;
            }
            
            .model-img {
                height: 280px;
            }
            
            .model-content h3 {
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
            
            .showcase-content {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }
            
            .showcase-image img {
                height: 350px;
            }
            
            .showcase-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .models-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .model-img {
                height: 320px;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
                gap: 20px;
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
            
            .video-container iframe {
                width: 100%;
                height: 250px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .showcase-image img {
                height: 300px;
            }
            
            .model-img {
                height: 280px;
            }
            
            .model-content {
                padding: 25px;
            }
            
            .model-content h3 {
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
            
            .video-container iframe {
                height: 200px;
            }
            
            .benefit-item {
                padding: 20px;
            }
            
            .benefit-icon {
                width: 50px;
                height: 50px;
                font-size: 1.3rem;
                margin-right: 15px;
            }
            
            .gift-feature-item {
                padding: 20px;
            }
            
            .gift-feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
                margin-right: 20px;
            }
        }
    </style>
</head>
<body>

<body>
    <?php include 'includes/navbar.php'; ?>

    <!-- ===== HERO SECTION ===== -->
    <section class="hero">
        <div class="hero-content">
            <h1>3D Models & Miniatures</h1>
            <p>Bringing imagination to life through detailed 3D models, educational miniatures, and artistic creations that inspire learning and creativity.</p>
            <a href="contact.php" class="btn">Explore Our Models</a>
        </div>
    </section>

    <!-- ===== INTRODUCTION SECTION ===== -->
    <section class="introduction-section">
        <div class="container">
            <div class="showcase-content">
                <div class="showcase-image">
                    <img src="images/3dmini.jpg" alt="3D Miniature Models Collection" loading="lazy">
                    <div class="image-overlay"></div>
                </div>
                <div class="showcase-text">
                    <h2 class="showcase-title">Welcome to Aakar GPR Works</h2>
                    <p class="showcase-description">
                        3D miniature models are small-scale, three-dimensional representations of objects, characters, 
                        or structures. They are used for presentation purposes, especially in schools and colleges.
                    </p>
                    
                    <div class="showcase-features">
                        <h3>We Offer:</h3>
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="feature-content">
                                    <strong>Use of 3D Models:</strong> Historical models of leaders, thinkers, and revolutionaries help bring education to life.
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-gem"></i>
                                </div>
                                <div class="feature-content">
                                    <strong>Quality Materials:</strong> We use durable materials that make our models last long and look stunning.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="showcase-cta">
                        <p>We make 3D miniature models to inspire students and ignite creativity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MODELS GRID SECTION ===== -->
    <section id="models" class="models">
        <div class="container">
            <div class="section-title">
                <h2>Our 3D Model Collection</h2>
                <p>From educational tools to decorative masterpieces, we create detailed 3D models that serve various purposes and inspire creativity.</p>
            </div>
            
            <div class="models-grid">
                <!-- Model 1 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/3dmini-1.jpg" alt="Educational 3D Models">
                    </div>
                    <div class="model-content">
                        <h3>Educational 3D Models</h3>
                        <p>Historical models of leaders, thinkers, and revolutionaries that bring education to life, helping students connect with their idols and understand history better.</p>
                        <span class="model-tag">Educational</span>
                    </div>
                </div>
                
                <!-- Model 2 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/temple1.jpg" alt="Miniature Temple Models">
                    </div>
                    <div class="model-content">
                        <h3>Temple Miniatures</h3>
                        <p>Beautifully detailed mini replicas of Indian temples, perfect for home decor, spiritual spaces, or as meaningful gifts that showcase traditional architecture.</p>
                        <span class="model-tag">Religious</span>
                    </div>
                </div>
                
                <!-- Model 3 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/3dmini-3.jpg" alt="Historical Memorials">
                    </div>
                    <div class="model-content">
                        <h3>Historical memorials</h3>
                        <p>Precise replicas of famous memorials and architectural wonders, crafted to preserve cultural heritage and serve as educational tools for students.</p>
                        <span class="model-tag">Heritage</span>
                    </div>
                </div>
                
                <!-- Model 4 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/3dmini-4.jpg" alt="Scientific Models">
                    </div>
                    <div class="model-content">
                        <h3>Scientific Models</h3>
                        <p>Detailed anatomical, molecular, and scientific models that make complex concepts appreciable and easier to understand for students and researchers.</p>
                        <span class="model-tag">Science</span>
                    </div>
                </div>
                
                <!-- Model 5 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/3dmini-5.jpg" alt="Architectural Models">
                    </div>
                    <div class="model-content">
                        <h3>Architectural Models</h3>
                        <p>Scale models of buildings, urban planning projects, and architectural designs that help visualize and present construction projects effectively.</p>
                        <span class="model-tag">Architecture</span>
                    </div>
                </div>
                
                <!-- Model 6 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/3dmini-6.jpg" alt="Custom Miniatures">
                    </div>
                    <div class="model-content">
                        <h3>Custom Miniatures</h3>
                        <p>Personalized miniature models created according to your specifications, perfect for special occasions, corporate gifts, or unique collectibles.</p>
                        <span class="model-tag">Custom</span>
                    </div>
                </div>
                
                <!-- Model 7 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/giftart.jpg" alt="Gift-Size Models">
                    </div>
                    <div class="model-content">
                        <h3>Gift-Size Models</h3>
                        <p>Compact, beautifully crafted models perfect for gifting, featuring intricate details in palm-sized designs that capture the essence of larger structures.</p>
                        <span class="model-tag">Gifts</span>
                    </div>
                </div>
                
                <!-- Model 8 -->
                <div class="model-card">
                    <div class="model-img">
                        <img src="images/display.JPG" alt="Display Models">
                    </div>
                    <div class="model-content">
                        <h3>Display & Exhibition Models</h3>
                        <p>Professional-grade models designed for museums, exhibitions, and educational institutions, built to withstand frequent handling and viewing.</p>
                        <span class="model-tag">Exhibition</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== VISUAL BREAK SECTION ===== -->
    <section class="visual-break">
        <div class="quote">
            <i class="fas fa-quote-left"></i>
            <p>"Every model tells a story, every miniature holds a world. We craft experiences that inspire learning and ignite imagination."</p>
            <span>— AAKAR GPR WORKS Philosophy</span>
        </div>
    </section>

    <!-- ===== WHY 3D MODELS IN SCHOOLS SECTION ===== -->
    <section class="school-benefits">
        <div class="container">
            <div class="section-title">
                <h2>Why Having 3D Models in Schools is Important</h2>
                <p>Discover how 3D models transform education and inspire the next generation of learners.</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="benefit-content">
                        <p>They inspire students to connect with their idols.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="benefit-content">
                        <p>They unlock the creative side of a student.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="benefit-content">
                        <p>Encourage students to try building their own models.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="benefit-content">
                        <p>Helps improve critical thinking and problem-solving skills.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="benefit-content">
                        <p>Make abstract concepts easier to understand, especially in subjects like science, history, and geography.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-play-circle"></i>
                    </div>
                    <div class="benefit-content">
                        <p>Create immersive learning experiences that keep students engaged.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="benefit-content">
                        <p>Help visual and natural learners better grasp difficult concepts.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="benefit-content">
                        <p>Promote collaboration and teamwork through group model-making projects.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="benefit-content">
                        <p>Boost confidence as students showcase their creativity in exhibitions or competitions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US SECTION ===== -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Our 3D Models</h2>
                <p>Our commitment to quality, education, and artistic excellence makes our models perfect for learning and inspiration.</p>
            </div>
            
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Educational Excellence</h3>
                    <p>Designed specifically to enhance learning experiences, making abstract concepts tangible and engaging for students of all ages.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Artistic Craftsmanship</h3>
                    <p>Each model is carefully crafted by skilled artisans who pay attention to every detail, ensuring accuracy and aesthetic appeal.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Durable Materials</h3>
                    <p>Built using high-quality, long-lasting materials that ensure our models maintain their beauty and functionality over time.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Custom Solutions</h3>
                    <p>We create custom made models tailored to your specific requirements, whether for education, decoration, or professional presentation.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Inspire Creativity</h3>
                    <p>Our models spark imagination and encourage hands-on learning, helping students develop critical thinking and problem-solving skills.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaborative Learning</h3>
                    <p>Perfect for group projects and team-building activities, promoting collaboration and shared learning experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== GIFT SIZE MODELS SECTION ===== -->
    <section class="gift-models">
        <div class="container">
            <div class="section-title">
                <h2>Gift Size 3D Models</h2>
                <p>Perfect miniature creations for gifting and decoration.</p>
            </div>
            
            <div class="showcase-content">
                <div class="showcase-text">
                    <div class="gift-features">
                        <div class="gift-feature-item">
                            <div class="gift-feature-icon">
                                <i class="fas fa-place-of-worship"></i>
                            </div>
                            <div class="gift-feature-content">
                                <h3>3D Gift-Size Temple Models</h3>
                                <p>Beautifully detailed mini replicas of Indian temples, perfect for decor or spiritual gifting.</p>
                            </div>
                        </div>
                        
                        <div class="gift-feature-item">
                            <div class="gift-feature-icon">
                                <i class="fas fa-hands"></i>
                            </div>
                            <div class="gift-feature-content">
                                <h3>Handcrafted Temple Miniatures</h3>
                                <p>Ideal for housewarming gifts, cultural events, or showcasing traditional architecture.</p>
                            </div>
                        </div>
                        
                        <div class="gift-feature-item">
                            <div class="gift-feature-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <div class="gift-feature-content">
                                <h3>Compact and Artistic</h3>
                                <p>Each model reflects intricate carvings and sacred symbolism in a palm-sized design.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/bGdthfpftnk?si=KDTl7i56MjoVjQxa" 
                        title="3D Gift Size Temple Models - Aakar GPR Works" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CALL-TO-ACTION SECTION ===== -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Bring Learning to Life</h2>
            <p>Ready to enhance education and inspire creativity with our detailed 3D models? Let's create something extraordinary together.</p>
            <a href="contact.php" class="btn">Get Started Today</a>
        </div>
    </section>

    <script>
        // Simple scroll animation for elements
        document.addEventListener('DOMContentLoaded', function() {
            // Function to check if element is in viewport
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }
            
            // Function to handle scroll animations
            function handleScrollAnimations() {
                const modelCards = document.querySelectorAll('.model-card');
                const featureItems = document.querySelectorAll('.feature-item');
                const benefitItems = document.querySelectorAll('.benefit-item');
                
                // Animate model cards
                modelCards.forEach(card => {
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
                
                // Animate benefit items
                benefitItems.forEach(item => {
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
            
            // Enhanced hover effects for model cards
            const modelCards = document.querySelectorAll('.model-card');
            modelCards.forEach(card => {
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