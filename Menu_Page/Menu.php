<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Menu_Page\Menu.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu | Buzzy Cafe</title>
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <link rel="stylesheet" href="../../Buzzy_Cafe/Menu_Page/Menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Header">
         <?php
            include_once('../Header/header.php');
         ?>
    <section class="menu-iconsW">
        <div class="iconW" data-target="hot-coffeeW"><img src="https://img.icons8.com/ios-filled/48/4E342E/coffee.png"/><span>Hot Coffee</span></div>
        <div class="iconW" data-target="iced-coffeeW"><img src="https://img.icons8.com/ios-filled/48/4E342E/iced-coffee.png"/><span>Iced Coffee</span></div>
        <div class="iconW" data-target="cakeW"><img src="https://img.icons8.com/ios-filled/48/4E342E/cake.png"/><span>Cake</span></div>
        <div class="iconW" data-target="pastryW"><img src="https://img.icons8.com/ios-filled/48/4E342E/cupcake.png"/><span>Pastry</span></div>
        <div class="iconW" data-target="ice-creamW"><img src="https://img.icons8.com/ios-filled/48/4E342E/ice-cream.png"/><span>Ice Cream</span></div>
    </section>

    <main class="menu-mainW">
        <section id="hot-coffeeW" class="menu-sectionW">
            <h2 class="section-titleW">Hot Coffee</h2>
            <div class="cards-containerW">
                <!-- Hot Coffee cards here -->
            </div>
        </section>
        <section id="iced-coffeeW" class="menu-sectionW">
            <h2 class="section-titleW">Iced Coffee</h2>
            <div class="cards-containerW">
                <!-- Iced Coffee cards here -->
            </div>
        </section>
        <section id="cakeW" class="menu-sectionW">
            <h2 class="section-titleW">Cake</h2>
            <div class="cards-containerW">
                <!-- Cake cards here -->
            </div>
        </section>
        <section id="pastryW" class="menu-sectionW">
            <h2 class="section-titleW">Pastry</h2>
            <div class="cards-containerW">
                <!-- Pastry cards here -->
            </div>
        </section>
        <section id="ice-creamW" class="menu-sectionW">
            <h2 class="section-titleW">Ice Cream</h2>
            <div class="cards-containerW">
                <!-- Ice Cream cards here -->
            </div>
        </section>
    </main>

    <a href="#" class="scroll-to-top" title="Back to Top">
        <img src="../../Buzzy_Cafe/Image/Arrow.png" alt="Up Arrow" height="40px" width="40px" />
    </a>
    <div class="Footer">
         <?php
            include_once('../Footer/footer.php');
         ?> 
    </div>
    <script src="../../Buzzy_Cafe/Menu_Page/Menu.js"></script>
</body>
</html>