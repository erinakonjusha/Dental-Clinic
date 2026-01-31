<?php
session_start();
include_once 'db.php';
include_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Attempt to log in
    if ($user->login($email, $password)) {
        header("Location: index.php"); // Redirect to home page
        exit;
    } else {
        echo "Invalid login credentials!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - The Smile Spot</title>
    <link rel="icon" type="image/png" href="images/Logo.png">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="background">
        <svg class="bg-shape" viewBox="0 0 800 600" preserveAspectRatio="none">
            <path d="M0,150 C200,300 600,0 800,150 L800,600 L0,600 Z" fill="rgba(255,255,255,0.1)" />
            <path d="M0,200 C300,100 500,400 800,250 L800,600 L0,600 Z" fill="rgba(255,255,255,0.1)" />
        </svg>
        <div class="login-container animate scroll-right">
            <div class="login-leftside">
                <img src="images/Logo.png" alt="logo" class="logo-login">
                <div class="login-leftside-text">
                    <h2>Welcome Back!</h2>
                </div>
                <div class="back-home">
                    <a href="index.html" class="back-link"><img src="images/back.png" alt="Back" class="back-icon">Back
                        Home</a>
                </div>
            </div>
            <div class="login-rightside">
                <h2>Login</h2>
                <hr>
                <form id="loginForm"  action="login.php" method="POST">
                    Email: <input id="email" type="email" placeholder="Email" name="email" required><br>
                    <span class="error" id="emailError"></span>
                    <input id="password" type="password" placeholder="Password" name="password" required>
                    <span class="error" id="passError"></span>
                    <button type="submit">Login</button>
                </form>
                <div class="go-to-signup">
                    <p>Don't have an account?</p>
                    <a href="signup.html">Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <script src="javascript/login.js"></script>
</body>

</html>