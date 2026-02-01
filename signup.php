<?php
include_once 'db.php';
include_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Register the user
    if ($user->register($name, $email, $password)) {
        header("Location: login.php"); // Redirect to login page
        exit;
    } else {
        echo "Error registering user!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - The Smile Spot</title>
    <link rel="icon" type="image/png" href="images/Logo.png">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="background">
        <svg class="bg-shape" viewBox="0 0 800 600" preserveAspectRatio="none">
            <path d="M0,150 C200,300 600,0 800,150 L800,600 L0,600 Z" fill="rgba(255,255,255,0.1)" />
            <path d="M0,200 C300,100 500,400 800,250 L800,600 L0,600 Z" fill="rgba(255,255,255,0.1)" />
        </svg>
        <div class="signup-container animate scroll-left">
            <div class="signup-leftside">
                <h2>Sign Up</h2>
                <hr>
                <form id="signupForm" method="POST" action="">

                    <div class="input-group">
                        <input type="text" id="name" name="name" placeholder="Name">
                        <span id="nameError" class="error"></span>
                    </div>

                    <div class="input-group">
                        <input type="text" id="email"  name="email" placeholder="Email">
                        <span id="emailError" class="error"></span>
                    </div>

                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Password">
                        <span id="passError" class="error"></span>
                    </div>

                    <button type="submit">Sign up</button>

                </form>

                <div class="go-to-login">
                    <p>Already have an account?</p>
                    <a href="login.php">Login</a>
                </div>
            </div>
            <div class="signup-rightside">
                <img src="images/Logo.png" alt="logo" class="logo-signup">
                <div class="signup-leftside-text">
                    <h2>Welcome!</h2>
                </div>
                <div class="back-home">
                    <a href="index.php" class="back-link"><img src="images/back.png" alt="Back" class="back-icon">Back
                        Home</a>
                </div>
            </div>
        </div>
    </div>
    <script src="javascript/signup.js"></script>
</body>

</html>