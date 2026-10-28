<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <link rel="stylesheet" href="../../Buzzy_Cafe/Review_Page/review.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="review-bg">
        <div class="review-content">
            <h2>What Our Customers Say</h2>
            <div class="review-anim-wrapper">
                <div class="review-boxR anim-left">
                    <img src="https://via.placeholder.com/40" alt="User">
                    <p>Best coffee I ever had! ☕</p>
                </div>
                <div class="review-boxR anim-center">
                    <img src="https://via.placeholder.com/40" alt="User">
                    <p>Lovely place and great service ❤️</p>
                </div>
                <div class="review-boxR anim-right">
                    <img src="https://via.placeholder.com/40" alt="User">
                    <p>Rich taste, highly recommend 👍</p>
                </div>
            </div>
            <div class="buttonsR">
                <button class="btnR">Order Now</button>
                <button class="btnR">View More</button>
            </div>
        </div>
    </div>
    <script>
    // Animation: Swap reviews every 3 seconds
    const reviews = [
        [
            {text: "Best coffee I ever had! ☕", img: "https://via.placeholder.com/40"},
            {text: "Lovely place and great service ❤️", img: "https://via.placeholder.com/40"},
            {text: "Rich taste, highly recommend 👍", img: "https://via.placeholder.com/40"}
        ],
        [
            {text: "Cozy ambiance and delicious snacks!", img: "https://via.placeholder.com/40"},
            {text: "Quick service and friendly staff.", img: "https://via.placeholder.com/40"},
            {text: "Perfect spot for my morning routine.", img: "https://via.placeholder.com/40"}
        ]
    ];
    let current = 0;
    setInterval(() => {
        current = (current + 1) % reviews.length;
        document.querySelectorAll('.review-boxR').forEach((box, i) => {
            box.classList.add('fade-out');
            setTimeout(() => {
                box.querySelector('p').textContent = reviews[current][i].text;
                box.querySelector('img').src = reviews[current][i].img;
                box.classList.remove('fade-out');
                box.classList.add('fade-in');
                setTimeout(() => box.classList.remove('fade-in'), 600);
            }, 600);
        });
    }, 5000);
    </script>
</body>
</html>