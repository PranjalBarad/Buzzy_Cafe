
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Admin_Panel\Side_Bar\Side_Bar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buzzy Cafe Admin Sidebar</title>
    <link rel="stylesheet" href="Side_Bar.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <!-- Replace with your actual logo path -->
            <img src="../../Buzzy_Cafe/Admin_Panel/Image/Logo.png" alt="Buzzy Cafe Logo">
            <h2>Buzzy Cafe</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="../Dashboard/Dashboard.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'Dashboard.php'){echo 'active';} ?>">Dashboard</a></li>
            <li><a href="../Menu/Menu.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'Menu.php'){echo 'active';} ?>">Menu</a></li>
            <li><a href="../Orders/Order.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'Order.php'){echo 'active';} ?>">Orders</a></li>
            <li><a href="../User/User.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'User.php'){echo 'active';} ?>">Users</a></li>
            <li><a href="../Contact/Contact.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'Contact.php'){echo 'active';} ?>">Contact</a></li>
            <li><a href="../Log_Out/Log_Out.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>