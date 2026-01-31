<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AAKAR GPR Works</title>
<style>

        /* ---------- GENERAL ---------- */
        body {
            background: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1400px;
            margin: auto;
            padding: 0 20px;
        }
        /* ---------- INTRODUCTION SECTION ---------- */
        .introduction-section {
            padding: 70px 0;
            background: #ffffff;
        }
        .intro-content {
            display: grid;
            grid-template-columns: 40% 60%;
            gap: 40px;
            align-items: center;
        }
        .intro-image {
            height: 520px;
            border-radius: 20px;
            overflow: hidden;
        }
        .intro-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .intro-text h2 {
            font-size: 36px;
            margin-bottom: 20px;
            position: relative;
        }
        .intro-text h2::after {
            content: '';
            width: 80px;
            height: 4px;
            background: #c9a14a;
            position: absolute;
            bottom: -10px;
            left: 0;
        }
        .intro-text p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 25px;
        }
        /* Mission and Vision Styles */
        .mission-vision {
            margin-top: 20px;
        }
        .mission-vision h3 {
            font-size: 24px;
            color: #c9a14a;
            margin-bottom: 10px;
        }
        .mission-vision p {
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        /* ---------- SERVICES SECTION ---------- */
        .services-section {
            padding: 80px 6%;
            background: #111;
        }
        .services-header {
            text-align: center;
            margin-bottom: 50px;
        }
        .services-header h2 {
            color: #fff;
            font-size: 32px;
        }
        .services-header span {
            display: block;
            width: 80px;
            height: 4px;
            background: #c9a14a;
            margin: 12px auto 0;
        }
        /* GRID */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }
        /* CARD */
        .service-box {
            position: relative;
            height: 260px;
            overflow: hidden;
            border: 1px solid #333;
            cursor: pointer;
        }
        /* IMAGE */
        .service-bg {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }
        /* OVERLAY */
        .service-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.85));
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }
        .service-overlay h3 {
            color: #fff;
            font-size: 18px;
            letter-spacing: 1px;
        }
        /* HOVER BORDER */
        .service-box:hover {
            border-color: #c9a14a;
        }
        /* ---------- RESPONSIVE ---------- */
        @media (max-width: 900px) {
            .intro-content {
                grid-template-columns: 1fr;
            }
            .intro-image {
                height: 400px;
            }
        }
        @media (max-width: 600px) {
            .intro-text h2 {
                font-size: 28px;
            }
            .services-header h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- INTRODUCTION SECTION -->
    <section class="introduction-section">
        <div class="container">
            <div class="intro-content">
                <div class="intro-image">
                    <img src="images/aboutus.png" alt="Master craftsman">
                </div>
                <div class="intro-text">
                    <h2>Welcome to AAKAR GPR Works</h2>
                    <p>
                        Are you looking to bring your ideas to life in three dimensions? Whether it's a timeless masterpiece,
                        a modern installation, or a personalized sculpture, our talented sculptors are here to make it happen.
                    </p>
                    <div class="mission-vision">
                        <h3>Mission</h3>
                        <p>To inspire and transform spaces through exceptional craftsmanship, turning unique visions into enduring works of art that connect people with beauty and creativity.</p>
                        <h3>Vision</h3>
                        <p>To become the global leader in custom sculpture artistry, fostering innovation and excellence while preserving traditional techniques for future generations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION -->
    <section class="services-section">
        <div class="services-header">
            <h2>OUR SERVICES – VISUAL CRAFTSMANSHIP</h2>
            <span></span>
        </div>
        <div class="services-grid">
            <div class="service-box">
                <div class="service-bg" style="background-image:url('images/2dmural.jpg');"></div>
                <div class="service-overlay"><h3>2D MURALS</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('images/3dmural.jpg');"></div>
                <div class="service-overlay"><h3>3D SCULPTING ARTS</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('images/handcrafted.jpg');"></div>
                <div class="service-overlay"><h3>HAND-CRAFTED SCULPTURES</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('images/giftart.jpg');"></div>
                <div class="service-overlay"><h3>CUSTOM MINIATURE ARTS</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('images/statuecraftsman.jpg');"></div>
                <div class="service-overlay"><h3>STATUE CRAFTSMAN</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('images/bulkart.JPG');"></div>
                <div class="service-overlay"><h3>BULK ART MANUFACTURE</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('https://www.whiteclouds.com/wp-content/uploads/2024/11/Theatrical-Stage-Props-Forest.jpg');"></div>
                <div class="service-overlay"><h3>STAGE PROPERTY SETUPS</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('https://m.media-amazon.com/images/I/71wS66JtXIL.jpg');"></div>
                <div class="service-overlay"><h3>CUSTOM SCULPTURE MOULD</h3></div>
            </div>
            <div class="service-box">
                <div class="service-bg" style="background-image:url('images/walldecoration.jpg');"></div>
                <div class="service-overlay"><h3>High-quality Wall Decorations</h3></div>
            </div>
        </div>
    </section>