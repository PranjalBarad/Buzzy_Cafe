
<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'Pranjal' && $password === '123') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: ../Dashboard/Dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
    <div class="login-bg">
        <div class="login-container">
            <div class="login-left">
                <img src="../../Image/logo.png" alt="Logo">
            </div>
            <div class="login-right">
                <h2>Admin Login</h2>
                <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
                <form method="post" action="">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>