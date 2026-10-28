<?php
session_start();
session_unset();
session_destroy();
header("Location: ../Login/Login.php"); // Correct path for your structure
exit();
?>
<a href="../Log_Out/Log_Out.php">Logout</a>