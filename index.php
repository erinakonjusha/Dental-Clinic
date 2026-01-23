<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Smile Spot</title>
    <link rel="icon" type="image/png" href="images/Logo.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/Logo.png" alt="logo">
            </div>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul style="list-style: none;" class="nav">
                <li><a href="aboutUs.html">About us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contactUs.html">Contact us</a></li>
                <li><a href="login.html">Login</a></li>
                <button class="butoni"><a href="appointments.html"><b>Book Appointment</b></a></button>
            </ul>
        </div>
        <div class="fotobackground animate scroll-fade">
            <img src="images/fotobg.png" alt="navbar-background" class="fotobgg">
            <div class="tekst-te-foto">
                <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;"> Welcome to <span
                        style="color: #1ebeb6;"><b>The Smile Spot</b></span> – your trusted dental clinic!
                </h1><br>
                <p>Welcome to a clinic where your comfort, confidence, and oral health come first. Our experienced team
                    is committed to delivering gentle, modern, and reliable dental care tailored to your needs. <br>
                    Whether you’re here for preventive services, smile improvements, or emergency treatment, we aim to
                    make
                    every visit smooth, friendly, and reassuring.We provide top-notch dental care for all ages, ensuring
                    your smile stays bright and healthy.</p>
            </div>
        </div>
    </div>

    <section class="carosuel-container">
        <div class="carosuel-text animate scroll-right">
            <h2>About Us</h2>
            <br>
            <p>We offer a curated approach to oral health—precise, personalized, and rooted in excellence.
                <br>From preventive care to high-end cosmetic treatments, each service is delivered with meticulous
                attention to
                detail and comfort. Our team of experienced clinicians prioritizes transparency and clarity, ensuring
                you always feel informed and confident in your treatment journey.
                Here, your time and well-being matter. <br> That’s why we focus on streamlined appointments, modern
                digital
                solutions, and a soothing atmosphere that redefines what a dental visit can be.
                <br><b>Contemporary comfort. A smile experience designed around you.</b>
            </p>
            <button><a href="aboutUs.html" style="text-decoration: none; color: #E8F0F1;" class="tekstbuton"><b>Learn
                        more</b></a></button>
        </div>
        <div class="carosuel-wrapper animate scroll-right">
            <div class="carosuel">
                <img src="images/slider1.jpg" alt="slider1" id="slider1">
                <img src="images/slider2.jpg" alt="slider2" id="slider2">
                <img src="images/slider3.jpg" alt="slider3" id="slider3">
                <img src="images/slider4.jpg" alt="slider4" id="slider4">
            </div>
            <div class="carosuel-navigation">
                <a
                    onclick="document.getElementById('slider1').scrollIntoView({ behavior: 'smooth', block: 'nearest' }); return false;"></a>
                <a
                    onclick="document.getElementById('slider2').scrollIntoView({ behavior: 'smooth', block: 'nearest' }); return false;"></a>
                <a
                    onclick="document.getElementById('slider3').scrollIntoView({ behavior: 'smooth', block: 'nearest' }); return false;"></a>
                <a
                    onclick="document.getElementById('slider4').scrollIntoView({ behavior: 'smooth', block: 'nearest' }); return false;"></a>
            </div>
        </div>
    </section>

    <div class="services animate scroll-up">
        <h2>Our Services</h2>
        <div class="box-container">
            <div class="box">
                <img src="images/teeth1.jpg" alt="Service">
                <h3>Teeth Whitening</h3>
                <p>Simple whitening treatment for brighter teeth</p>
            </div>

            <div class="box">
                <img src="images/teeth2.jpg" alt="Service">
                <h3>Dental Care</h3>
                <p>Regular checkups and cleanings.</p>
            </div>

            <div class="box">
                <img src="images/teeth3.jpg" alt="Service">
                <h3>Tooth Extraction</h3>
                <p>Painless and safe removal.</p>
            </div>


            <div class="box">
                <img src="images/teeth4.PNG" alt="Service">
                <h3>Denture Prosthetics</h3>
                <p>Natural look and full comfort.</p>
            </div>


            <div class="box">
                <img src="images/teeth5.PNG" alt="Service">
                <h3>Dental Braces</h3>
                <p>Straighten teeth safely and effectively.</p>
            </div>


            <div class="box">
                <img src="images/teeth6.jpg" alt="Service">
                <h3>Teeth Cleaning</h3>
                <p>Prevents plaque and keeps gums healthy.</p>
            </div>

        </div>
        <div class="price">
            <button><a href="services.html" class="tekstbuton"><b>See More</b></a></button>
        </div>
    </div>

    <div class="photo wow zoomIn animate scroll-fade" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;"></div>

    <div class="testimonials animate scroll-left">
        <h2>What Clients Say</h2>

        <div class="testimonials-boxes">

            <div class="testimonialbox">
                <div class="profile-img">
                    <img src="images/profile1.jpg" alt="profile1">
                </div>
                <h3>Emily Johnson</h3>
                <p>"I’ve always been nervous about going to the dentist, but the team at The Smile Spot made me feel
                    completely at ease. <br>The staff is so caring. I actually look forward to my appointments now!"</p>
            </div>

            <div class="testimonialbox">
                <div class="profile-img">
                    <img src="images/profile2.jpg" alt="profile2">
                </div>
                <h3>Michael Davis</h3>
                <p>"I’ve been a patient at The Smile Spot for years, and I can’t recommend them enough. <br>Their
                    attention to
                    detail, state-of-the-art technology, and compassionate care set them apart."</p>
            </div>

            <div class="testimonialbox">
                <div class="profile-img">
                    <img src="images/profile3.jpg" alt="profile3">
                </div>
                <h3>Sarah Thompson</h3>
                <p>"Our whole family goes to The Smile Spot, and we love it! From kids’ check-ups to adult cleanings,
                    the
                    staff makes everyone feel welcome and comfortable. <br>They truly care about your health and
                    well-being."</p>
            </div>

        </div>
    </div>


    <footer>
        <div class="footer animate scroll-fade">
            <div class="footer-top">
                <div class="footer-col brand">
                    <div class="circle"></div>
                    <h2>The Smile Spot</h2>
                    <p>#45, dental wellness center,<br>
                        Prishtina, +38344123456</p>
                    <div class="social">
                        <img src="images/instagram.png" alt="icon">
                        <img src="images/facebook.png" alt="icon">
                        <img src="images/twitter.png" alt="icon">
                    </div>
                </div>
                <div class="newsletter">
                    <h2>Subscribe our newsletter</h2>
                    <p>Stay up to date</p>
                    <div class="inputarea">
                        <input type="text" id="email" class="inputsubscribe" placeholder="Enter Your Email">
                        <button class="subscribe"><a href="#"><b>Subscribe</b></a></button>
                    </div>
                </div>
            </div>

            <hr>
            <div class="footer-bottom">
                <p>© 2025 The Smile Spot</p>
            </div>
        </div>
    </footer>
    <button id="toTopBtn" class="to-top"><img src="images/up-arrow.png" alt="arrow" class="to-top-icon"></button>
    <script src="javascript/script.js"></script>
</body>

</html>