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
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Admin_Panel\Menu\Menu.php -->
<?php include('../Side_Bar/Side_Bar.php'); ?>
<link rel="stylesheet" href="../Side_Bar/Side_Bar.css">
<link rel="stylesheet" href="Menu.css">
<script src="Menu.js"></script>
<div class="main-content">
    <h1>Menu</h1>
    <button id="addMenuBtn">Add To Menu</button>
    <form id="addMenuForm" style="display:none;" enctype="multipart/form-data" method="post" action="../../Buzzy_Cafe/Admin_Panel/Menu/add_menu_item.php">
        <input type="file" name="image" accept="image/*" required>
        <input type="text" name="product_name" placeholder="Name" required>
        <input type="number" name="price" placeholder="Price" required>
        <input type="text" name="description" placeholder="Description" required>
        <select name="category_id" required>
            <option value="">Select Category</option>
            <option value="Hot Coffee">Hot Coffee</option>
            <option value="Ice Coffee">Ice Coffee</option>
            <option value="Cake">Cake</option>
            <option value="Icecream">Icecream</option>
            <option value="Pastry">Pastry</option>
        </select>
        <label>
            <input type="checkbox" name="is_special" value="1"> Special Item
        </label>
        <button type="submit">Submit</button>
    </form>

    <div class="category-edit">
        <h2>Edit Categories</h2>
        <form id="addCategoryForm">
            <input type="text" id="newCategory" placeholder="Add Category">
            <button type="submit">Add</button>
        </form>
        <ul id="categoryList">
            <li>Coffee <button class="removeCatBtn">Remove</button></li>
            <li>Snacks <button class="removeCatBtn">Remove</button></li>
            <li>Desserts <button class="removeCatBtn">Remove</button></li>
        </ul>
    </div>

    <h2>Menu Items</h2>
    <table class="menu-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Special Item</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="menuTableBody">
            <tr>
                <td><img src="../assets/cappuccino.png" alt="Cappuccino" class="menu-img"></td>
                <td>Cappuccino</td>
                <td>₹120</td>
                <td>Rich espresso with steamed milk</td>
                <td>Coffee</td>
                <td><span class="best-seller">★</span></td>
                <td>
                    <button class="editBtn">Edit</button>
                    <button class="removeBtn">Remove</button>
                </td>
            </tr>
            <tr>
                <td><img src="../assets/sandwich.png" alt="Veg Sandwich" class="menu-img"></td>
                <td>Veg Sandwich</td>
                <td>₹80</td>
                <td>Fresh veggies with cheese</td>
                <td>Snacks</td>
                <td></td>
                <td>
                    <button class="editBtn">Edit</button>
                    <button class="removeBtn">Remove</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
document.getElementById('addMenuForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = e.target;
    var formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        alert('Menu item added!');
        form.reset();
        location.reload(); // Reload to show new item
    })
    .catch(() => alert('Failed to add menu item.'));
});
</script>