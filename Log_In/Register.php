
<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Log_In\Register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buzzy Cafe - Register</title>
    <link rel="stylesheet" href="../../Buzzy_Cafe/Log_In/Register.css">
</head>
<body>
    <div class="login-bg"></div>
    <div class="login-container">
        <div class="login-box-flex">
            <div class="login-box">
                <img src="../../Buzzy_Cafe/Image/Logo.png" alt="Register" class="login-img">
                <h2>Register</h2>
                <form method="post" action="process_register.php">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email ID" required>
                    <input type="text" name="phone" placeholder="Phone Number" required>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="login-btn">Register</button>
                </form>
                <div class="register-link">
                    Already have an account? <a href="Login.php">Log in</a>
                </div>
            </div>
            <div class="login-side-img">
                <img src="../../Buzzy_Cafe/Image/Log_In.jpg" alt="Side" />
            </div>
        </div>
    </div>
</body>
</html>