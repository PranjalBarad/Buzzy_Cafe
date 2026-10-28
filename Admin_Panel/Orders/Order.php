<?php
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
?>
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Admin_Panel\Orders\Order.php -->
<?php include('../Side_Bar/Side_Bar.php'); ?>
<link rel="stylesheet" href="../Side_Bar/Side_Bar.css">
<link rel="stylesheet" href="Order.css">
<script src="Order.js"></script>
<div class="main-content">
    <h1>Orders</h1>
    <table class="order-table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Items</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Date & Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#1001</td>
                <td><button class="user-popup-btn" data-user="1">U001</button></td>
                <td>Cappuccino, Veg Sandwich</td>
                <td>₹200</td>
                <td><span class="status pending">Pending</span></td>
                <td>2025-10-02 10:30</td>
                <td>
                    <button class="removeBtn">Remove</button>
                </td>
            </tr>
            <tr>
                <td>#1002</td>
                <td><button class="user-popup-btn" data-user="2">U002</button></td>
                <td>Brownie</td>
                <td>₹90</td>
                <td><span class="status completed">Completed</span></td>
                <td>2025-10-02 11:00</td>
                <td>
                    <button class="removeBtn">Remove</button>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- User Details Popup -->
    <div id="userPopup" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>User Details</h2>
            <div id="userDetails">
                <!-- User details will be loaded here -->
            </div>
        </div>
    </div>
</div>