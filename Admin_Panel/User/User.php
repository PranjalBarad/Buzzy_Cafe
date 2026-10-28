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
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Admin_Panel\User\User.php -->
<?php include('../Side_Bar/Side_Bar.php'); ?>
<link rel="stylesheet" href="../Side_Bar/Side_Bar.css">
<link rel="stylesheet" href="User.css">
<script src="User.js"></script>
<div class="main-content">
    <h1>Users</h1>
    <table class="user-table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>U001</td>
                <td>Rahul Sharma</td>
                <td>rahul@example.com</td>
                <td>9876543210</td>
                <td>12, MG Road, Delhi</td>
                <td>••••••••</td>
                <td>
                    <div class="action-btns">
                        <button class="removeBtn">Remove</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>U002</td>
                <td>Priya Singh</td>
                <td>priya@example.com</td>
                <td>9123456780</td>
                <td>45, Park Street, Mumbai</td>
                <td>••••••••</td>
                <td>
                    <div class="action-btns">
                        <button class="removeBtn">Remove</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>