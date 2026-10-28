<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about_style.css">
    <!-- <link rel="stylesheet" href="../header.css"> -->
    <link rel="stylesheet" href="../Footer/footer.css">
</head>
<body>
    <div class="Header">
         <?php
            include_once('../../Buzzy_Cafe/Header/header.php');
         ?> 
    </div>
    <section class="about-section">
            <h2>About Us</h2>
            <h3>Serving Since 2025</h3>
            <div class="divider"></div>

            <div class="about-content">
                <div class="about-box">
                    <h4>Our Story</h4><br>
                    <p>Buzzy Cafe began as just a dream — a quiet wish in a busy world.</p>
                    <p>No grand opening yet — just a love for coffee, cozy corners, and a vision still brewing.<br>
                    Made for those who believe every big thing starts small.</p>

                    <ul>
                        <li>☕ Passion poured in every thought</li>
                        <li>✨ Built with imagination</li>
                        <li>🕊️ Fueled by quiet courage</li>
                    </ul>
                </div>

                <div class="about-image">
                    <img src="../Image/about_us.png" alt="Coffee Splash">
                </div>

                <div class="about-box">
                    <h4>Our Vision</h4><br>
                    <p>To turn dreams into aromas.<br>
                    To create a space that feels like a warm hug.<br>
                    To make coffee not just a drink, but a feeling.</p>

                    <ul>
                        <li>❤️ Crafted from heart, not just habit</li>
                        <li>📖 Every sip tells a story</li>
                        <li>🚀 For the dreamers who don’t give up</li>
                    </ul>
                </div>
            </div>

            <div class="divider"></div>
    </section>
    <div class="Footer">
         <?php
            include_once('../Footer/footer.php');
         ?> 
    </div>
</body>
</html>