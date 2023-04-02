<?php

require "config.php";
// <!-- ======login All Process start  here =====  -->

$message="";
$admin_login_email = '';
$admin_login_password = '';

if (isset($_POST['admin_login_submit'])) {

    $admin_login_email = $_POST['admin_login_email'];
    $admin_login_password = $_POST['admin_login_password'];

    $sql = "select * from admin where admin_login_email='$admin_login_email' and admin_login_password='$admin_login_password'";

    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = 'Yes';
        $_SESSION['ADMIN_USERNAME'] = '$login_email';
        header('location:course.php');
        die();
    } else {
        echo " Please Enter Correct Details";
    }
}


?>

<!-- ======login All Process end  here =====  -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Css Stylesheet  -->
<link rel="stylesheet" href="assets\css\Login.css">
</head>
<body>

    <!-- Login Page  -->
    <div id="container">
        
        <h2>Welcome Back</h2>
        <h5>Log Back Into Your Account</h5>
        <form action="" method="POST" autocomplete="off" id="login">
            <input type="email" name="admin_login_email" id="email" placeholder="Email" required ></br>
            <input type="password" name="admin_login_password" id="password" placeholder="Password" required></br>
            <input type="submit" name="admin_login_submit" id="login" value="login"></br>
            <?php  echo $message;?> 
        </form>
    </div>
</body>
</html>