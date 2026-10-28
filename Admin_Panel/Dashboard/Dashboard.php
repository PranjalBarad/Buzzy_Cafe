<!-- <?php
session_set_cookie_params(0);
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../Login/Login.php");
    exit();
}
?> 
<?php
include_once __DIR__ . '/../db_connect.php'; // adjust path as needed
// Now use $pdo for queries
?>-->
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Admin_Panel\Dashboard\Dashboard.php -->
<?php include('../Side_Bar/Side_Bar.php'); ?>
<link rel="stylesheet" href="../Side_Bar/Side_Bar.css">
<link rel="stylesheet" href="Dashboard.css">
<div class="main-content">
    <h1>Dashboard</h1>
    <div class="stats-row">
        <div class="stat-card">
            <h2>Total Orders</h2>
            <p>120</p>
        </div>
        <div class="stat-card">
            <h2>Active Users</h2>
            <p>45</p>
        </div>
        <div class="stat-card">
            <h2>Menu Items</h2>
            <p>18</p>
        </div>
    </div>
    <h2>Product Items</h2>
    <table class="product-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="../assets/cappuccino.png" alt="Cappuccino" class="product-img"></td>
                <td>Cappuccino</td>
                <td>Rich espresso with steamed milk</td>
                <td>₹120</td>
                <td>Coffee</td>
            </tr>
            <tr>
                <td><img src="../assets/sandwich.png" alt="Veg Sandwich" class="product-img"></td>
                <td>Veg Sandwich</td>
                <td>Fresh veggies with cheese</td>
                <td>₹80</td>
                <td>Snacks</td>
            </tr>
        </tbody>
    </table>
</div>