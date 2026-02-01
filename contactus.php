

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - The Smile Spot</title>
    <link rel="icon" type="image/png" href="images/Logo.png">
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>

    <div class="container">
   <?php include_once "navbar.php"; ?>

        <div class="tekstnavbar animate scroll-fade">
            <h2>Contact Us</h2>
        </div>
    </div>

    <section class="contact-container animate scroll-up">
        <form class="contact-form">

            <div class="row">
                <input type="text" placeholder="Full Name">
                <span class="error" id="nameError"></span>

                <input type="text" placeholder="Phone Number">
                <span class="error" id="phoneError"></span>

                <input type="text" placeholder="Email">
                <span class="error" id="emailError"></span>

                <input type="text" placeholder="Message">
                <span class="error" id="messageError"></span>
            </div>

            <button class="submit-btn">Submit</button>

        </form>
    </section>

    <section class="find-us animate scroll-left">
        <h2>Find Us Here</h2>

        <div class="info-boxes">
            <div class="box">
                <h3>Phone</h3>
                <p>+383 44 123 456</p>
            </div>

            <div class="box">
                <h3>Email</h3>
                <p>thesmilespot@gmail.com</p>
            </div>

            <div class="box">
                <h3>Location</h3>
                <p>Prishtina, Kosovo</p>
            </div>
        </div>

        <div class="map animate scroll-right">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.21158541644!2d21.117527710855626!3d42.6663727182268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1763678836588!5m2!1sen!2s"
                allowfullscreen="" loading="lazy"></iframe>
        </div>

    </section>
    <?php include_once 'footer.php'; ?>

    <div id="successPopup" class="popup-overlay">
        <div class="popup-box">
            <h2>Message sent!</h2>
            <p>Your message has been successfully sent.</p>
            <button id="closePopup" class="popup-btn">OK</button>
        </div>
    </div>
    <button id="toTopBtn" class="to-top"><img src="images/up-arrow.png" alt="arrow" class="to-top-icon"></button>
    <script src="javascript/contactus.js"></script>
</body>

</html>