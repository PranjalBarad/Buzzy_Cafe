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
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Admin_Panel\Contact\Contact.php -->
<?php include('../Side_Bar/Side_Bar.php'); ?>
<link rel="stylesheet" href="../Side_Bar/Side_Bar.css">
<link rel="stylesheet" href="Contact.css">
<script src="Contact.js"></script>
<div class="main-content">
    <h1>Contact Messages</h1>
    <table class="contact-table">
        <thead>
            <tr>
                <th>Name</th>
                <!-- <th>User ID</th> --> <!-- Removed -->
                <th>Message</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rahul Sharma</td>
                <!-- <td>U001</td> --> <!-- Removed -->
                <td>Great service, loved the coffee!</td>
                <td>2025-10-02</td>
                <td>
                    <div class="action-btns">
                        <button class="readBtn">Mark as Read</button>
                        <button class="removeBtn">Remove</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Priya Singh</td>
                <!-- <td>U002</td> --> <!-- Removed -->
                <td>Can you add more dessert options?</td>
                <td>2025-10-01</td>
                <td>
                    <div class="action-btns">
                        <button class="readBtn">Mark as Read</button>
                        <button class="removeBtn">Remove</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>