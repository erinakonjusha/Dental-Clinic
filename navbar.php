<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once "db.php";
include_once "user.php";

$db = new Database();
$conn = $db->getConnection();
$user = new User($conn);
?>

<div class="navbar">
    <div class="logo">
        <img src="images/Logo.png" alt="logo">
    </div>

    <!-- HAMBURGER MENU (MOS E HEK) -->
    <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <ul class="nav" style="list-style:none;">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutUs.php">About us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contactUs.php">Contact us</a></li>

        <?php if ($user->isLoggedIn()): ?>
            <li>
                <form action="logout.php" method="POST" style="display:inline;">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>

        <!-- BOOK APPOINTMENT KURRË S’HUP -->
        <button class="butoni">
            <a href="appointments.php"><b>Book Appointment</b></a>
        </button>
    </ul>
</div>
