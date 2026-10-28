
<?php
// Example: Fetch user orders from database
// $orders = ... (fetch from DB based on logged-in user)
$orders = []; // Simulate no orders for first time

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Orders - Buzzy Cafe</title>
    <link rel="stylesheet" href="../../Buzzy_Cafe/Orders/Order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
  <div class="Header">
         <?php
            include_once('../../Buzzy_Cafe/Header/header.php');
         ?> 
    </div>
    <div class="orders-container">
        <?php if (empty($orders)): ?>
            <div class="no-orders">
                <i class="fas fa-shopping-basket fa-3x" style="color:#a9744f;"></i>
                <h2>No Orders Yet</h2>
                <p>Looks like you haven't ordered anything yet.<br>
                Start exploring our menu and enjoy your first order!</p>
                <a href="../Menu_Page/menu.php" class="continue-btn">Continue Shopping</a>
            </div>
        <?php else: ?>
            <!-- Show order history here -->
        <?php endif; ?>
    </div>
    <div class="Footer">
         <?php
            include_once('../../Buzzy_Cafe/Footer/footer.php');
         ?> 
    </div>
</body>
</html>