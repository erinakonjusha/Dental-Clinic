<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - The Smile Spot</title>
    <link rel="icon" type="image/png" href="images/Logo.png">
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php include_once "navbar.php"; ?>

    <div class="container">

        <div class="tekstnavbar animate scroll-fade">
            <h2>About Us</h2>
        </div>
        <div class="fotot animate scroll-fade">
            <img style="margin-left: 5rem;" src="images/aboutus1.jpg" alt="aboutus1">
            <img src="images/aboutus2.jpg" alt="aboutus2">
            <img src="images/slider1.jpg" alt="aboutus3">
            <img src="images/aboutus4.jpg" alt="aboutus4">
        </div>
    </div>

    <div class="aboutustxt animate scroll-left">
        <h2>We believe every smile tells a story — and we’re here to keep yours bright, healthy, and confident.</h2>
        <div class="aboutusparagraphs animate scroll-right">
            <p>Our team is composed of dedicated dental professionals who bring years of experience and a deep passion
                for
                oral health. Each member — from front-desk staff to hygienists and dentists — is committed not only to
                delivering excellent treatment, but also to understanding each patient’s unique needs and concerns. We
                take
                time to listen, explain procedures clearly, and ensure that you always feel in control of your dental
                journey.</p>
            <p>We offer a wide range of services including preventive dentistry, restorative treatments, cosmetic
                enhancements, orthodontic solutions, and implant dentistry. <br>Whether it’s a simple cleaning or a
                complex
                smile transformation, we approach every case with precision, care, and attention to detail. Your comfort
                is
                our priority, and gentle techniques are at the core of everything we do.</p>
        </div>
    </div>

    <div class="staff-container animate scroll-up">
        <div class="staff-img">
            <img src="images/fotobg.png" alt="staff">
            <div class="staff-name">Dr. Aria Collins</div>
        </div>
        <div class="staff-description">
            <h2>Our Dentist</h2>
            <p>Dr. Aria Collins is a compassionate and highly skilled dentist dedicated to providing exceptional dental
                care
                with a gentle, patient-centered approach. With extensive experience in preventive, restorative, and
                cosmetic dentistry, combines advanced clinical skills with modern technology to deliver
                treatment that is both precise and comfortable.</p>
            <p>Known for a warm personality and the ability to make patients feel at ease, takes the time to
                listen, explain every step of treatment, and ensure that each patient feels confident and fully
                informed. From routine check-ups to complex smile transformations, is committed to helping
                every individual achieve a healthy, beautiful smile.</p>
        </div>
    </div>
    <?php include_once 'footer.php'; ?>
    <button id="toTopBtn" class="to-top"><img src="images/up-arrow.png" alt="arrow" class="to-top-icon"></button>
    <script src="javascript/aboutus.js"></script>
</body>
</html>