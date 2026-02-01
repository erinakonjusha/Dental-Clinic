<?php

session_start();

include_once "db.php";
include_once "user.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $db = new Database();
    $conn = $db->getConnection();

    $user = new User($conn);

    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($user->login($email, $password)) {

        header("Location: index.php");
        exit;

    } else {

        echo "Wrong email or password!";
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
        <div class="login-container">
            <div class="login-leftside">
                <img src="images/Logo.png" alt="logo" class="logo-login">
                <div class="login-leftside-text">
                    <h2>Welcome Back!</h2>
                </div>
                <div class="back-home">
                    <a href="index.php" class="back-link"><img src="images/back.png" alt="Back" class="back-icon">Back
                        Home</a>
                </div>
            </div>
            <div class="login-rightside">
                <h2>Login</h2>
                <hr>
                <form id="loginForm"  action="login.php" method="POST">
                    <input id="email" name="email" placeholder="email">
                    <span class="error" id="emailError"></span>
                    <input type="password" id="password" name="password" placeholder="password">
                    <span class="error" id="passError"></span>
                    <button type="submit">Login</button>
                </form>
                <div class="go-to-signup">
                    <p>Don't have an account?</p>
                    <a href="signup.php">Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <script src="javascript/login.js"></script>
</body>

</html>