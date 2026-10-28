
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Why Choose Us | Buzzy Cafe</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Buzzy_Cafe/Why_Choose_US/Why_Choose_Us.css">
</head>
<body>
    <div class="heroW">
        <div class="hero-contentW">
            <h1>Why Choose Us?</h1>
            <p>Discover what makes Buzzy Cafe special</p>
        </div>
    </div>
    <div class="containerW">
        <div class="featureW">
            <img src="https://img.icons8.com/ios-filled/100/4E342E/coffee.png" alt="Coffee" class="feature-imgW">
            <div class="feature-titleW">Premium Coffee</div>
            <div class="feature-descW">
                We source the finest beans and brew every cup with passion. Taste the difference in every sip!
            </div>
        </div>
        <div class="featureW">
            <img src="https://img.icons8.com/ios-filled/100/4E342E/cake.png" alt="Cake" class="feature-imgW">
            <div class="feature-titleW">Delicious Treats</div>
            <div class="feature-descW">
                Enjoy our freshly baked pastries and desserts, made daily with love and the best ingredients.
            </div>
        </div>
        <div class="featureW">
            <img src="https://img.icons8.com/ios-filled/100/4E342E/sofa.png" alt="Ambience" class="feature-imgW">
            <div class="feature-titleW">Cozy Ambience</div>
            <div class="feature-descW">
                Relax in our stylish, welcoming space—perfect for work, friends, or a quiet moment alone.
            </div>
        </div>
    </div>
    <script>
        // Animation triggers when features scroll into view
        function revealFeaturesOnScroll() {
            const features = document.querySelectorAll('.featureW');
            features.forEach((el, i) => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 50) {
                    setTimeout(() => el.classList.add('visibleW'), i * 250);
                }
            });
        }
        window.addEventListener('scroll', revealFeaturesOnScroll);
        window.addEventListener('DOMContentLoaded', revealFeaturesOnScroll);
    </script>
</body>
</html>