<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzzy Cafe</title>
     <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../index/style.css">
    <link rel="stylesheet" href="../Best_Saller/Best_Saller.css">
    <link rel="stylesheet" href="../About_Us_Page/about_style.css">
    <link rel="stylesheet" href="../Review/review.css">
    <link rel="stylesheet" href="../Footer/footer.css">
        <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            /* height: 100%; */
            font-family: Arial, sans-serif;
        }

        /* Slideshow container */
        .slideshow {
            position: relative;
            width: 100%;
            height: 93vh;
            overflow: hidden;
        }

        /* Each slide */
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Active slide visible */
        .slide.active {
            opacity: 1;
        }



        /* Buttons (centered below text) */
        .btn {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            text-align: center;
        }

        .btn button {
            background: #3e2723;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 20px;
            font-size: 1rem;
            transition: 0.3s;
        }

        .btn button:hover {
            background: #5d4037;
        }
    </style>
</head>
<body>
    <div class="Header">
        <?php include_once('../Header/header.php'); ?> 
    </div>

    <div class="main">
        <!-- Background Slideshow -->
        <div class="slideshow">
            <div class="slide active" style="background-image: url('../Image/p1.jpg');"></div>
            <div class="slide" style="background-image: url('../Image/p2.jpg');"></div>
            <div class="slide" style="background-image: url('../Image/p3.jpg');"></div>
            <div class="slide" style="background-image: url('../Image/p4.jpg');"></div>
        </div>

               <!-- Centered Text -->
        <div class="text">
            <div class="t1">
                <p>The best blend for<br>every bite & sip</p>
            </div>
            <div class="t2">
                <p>From <b>Buzzy Cafe</b></p>
            </div>
            <div class="t3">
                <p>☕ Coffee<br>🍨 Ice Cream | 🍰 Pastry<br>Enjoy Buzzy</p>
            </div>
        </div>

        <!-- Centered Buttons -->
        <div class="btn">
            <a href="../Menu_Page/menu.php"><button class="menu_btn">View Menu</button></a>
            <a href="../Order_Now_Page/order_now.php"><button>Order Now</button></a>
        </div>
    </div>

        <div class="btn">
            <a href="../Menu_Page/menu.php"><button class="menu_btn">Menu</button></a>
            <a href="../Order_Now_Page/order_now.php"><button>Order Now</button></a>
        </div>
    </div>

    <div class="best_saller">
        <?php include_once('../Best_Saller/Best_Saller.php'); ?> 
    </div>

    <div class="About_Us">
        <?php include_once('../About_Us/about_us.php'); ?> 
    </div>

    <div class="Footer">
        <?php include_once('../Footer/footer.php'); ?> 
    </div>

    <script>
        let slides = document.querySelectorAll(".slide");
        let currentIndex = 0;

        function showNextSlide() {
            slides[currentIndex].classList.remove("active");
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add("active");
        }

        // Change slide every 4 seconds
        setInterval(showNextSlide, 4000);
    </script>
</body>
</html>
