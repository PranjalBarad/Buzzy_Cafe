<?php
include_once __DIR__ . '../../db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $is_special = isset($_POST['is_special']) ? 1 : 0;

    // Handle image upload
    $imgPath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imgName = uniqid() . '_' . basename($_FILES['image']['name']);
        $targetDir = __DIR__ . '/uploads/';
        if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);
        $targetFile = $targetDir . $imgName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imgPath = 'uploads/' . $imgName;
        }
    }

    $stmt = $pdo->prepare("INSERT INTO menu (product_name, price, description, image, category_id, is_special) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$product_name, $price, $description, $imgPath, $category_id, $is_special]);

    header("Location: Menu.php?success=1");
    exit;
}
header("Location: Menu.php?error=1");
exit;
?>