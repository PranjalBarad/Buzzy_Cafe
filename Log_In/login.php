
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Log_In\Login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buzzy Cafe - Login</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="login-bg"></div>
    <div class="login-container">
        <div class="login-box-flex">
            <div class="login-box">
                <img src="../../Buzzy_Cafe/Image/Logo.png" alt="Login" class="login-img">
                <h2>Log in</h2>
                <form method="post" action="process_login.php">
                    <input type="text" name="email" placeholder="Email or Phone Number" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="login-btn">Log in</button>
                </form>
                <div class="register-link">
                    Don't have an account? <a href="../../Buzzy_Cafe/Log_In/Register.php">Register Now</a>
                </div>
            </div>
            <div class="login-side-img">
                <img src="../../Buzzy_Cafe/Image/Log_In.jpg" alt="Side" />
            </div>
        </div>
    </div>
</body>
</html>