

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - The Smile Spot</title>
    <link rel="icon" type="image/png" href="images/Logo.png">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php include_once "navbar.php"; ?>

    <div class="container">

        <div class="tekstnavbar animate scroll-fade">
            <h2>Services</h2>
        </div>
    </div>



    <div class="services-wrapper animate scroll-up">
        <div class="services-right">
            <div class="service-item">
                <div class="service-text">
                    <h4>Prosthodontics</h4>
                    <p>We restore missing or damaged teeth using modern crowns, bridges, and dentures.</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-text">
                    <h4>Cosmetic Dentistry</h4>
                    <p>We enhance your smile’s appearance through whitening, veneers, and advanced aesthetic treatments.
                    </p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-text">
                    <h4>Cleaning & Prevention</h4>
                    <p>We provide professional cleanings and preventive care to keep your teeth healthy long-term.</p>
                </div>
            </div>
        </div>

        <div class="services-center">
            <img src="images/tooth.png" alt="Tooth image">

        </div>

        <div class="services-left">
            <div class="service-item">
                <div class="service-text">
                    <h4>Dental Implants</h4>
                    <p>We replace missing teeth with strong, natural-looking dental implants.</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-text">
                    <h4>Restoring Teeth</h4>
                    <p>We repair decayed or broken teeth using fillings, crowns, and other restorative solutions.</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-text">
                    <h4>Invisalign / Orthodontics</h4>
                    <p>We straighten misaligned teeth with clear aligners or traditional orthodontic treatment.</p>
                </div>
            </div>
        </div>

    </div>

    <section class="additional-services animate scroll-left">
        <h2>Additional Services</h2>
        <div class="additional-container">
            <div class="additional-item">
                <div class="service-name">Tooth Extraction</div>
            </div>
            <div class="additional-item">
                <div class="service-name">Root Canal Therapy</div>
            </div>
            <div class="additional-item">
                <div class="service-name">Children Dentistry</div>
            </div>
            <div class="additional-item">
                <div class="service-name">3D X-Ray Diagnostics</div>
            </div>
        </div>
    </section>

    <section class="price-wrap animate scroll-right">
        <h2 class="price-title">PRICE LIST</h2>

        <div class="price-item">
            <span>Tooth Extraction</span>
            <span>20 €</span>
        </div>
        <div class="price-item">
            <span>Root Canal Therapy</span>
            <span>80 €</span>
        </div>
        <div class="price-item">
            <span>3D X-Ray Diagnostics</span>
            <span>100 €</span>
        </div>
        <div class="price-item">
            <span>Prosthodontics</span>
            <span>300 €</span>
        </div>
        <div class="price-item">
            <span>Cleaning & Prevention</span>
            <span>50 €</span>
        </div>
        <div class="price-item">
            <span>Dental Implants</span>
            <span>500 €</span>
        </div>
        <div class="price-item">
            <span>Restoring Teeth</span>
            <span>2000 €</span>
        </div>
        <div class="price-item">
            <span>Invisalign</span>
            <span>400 €</span>
        </div>
        <div class="price-item">
            <span>Gum Disease Treatment</span>
            <span>120 €</span>
        </div>
        <div class="price-item">
            <span>Dental Examination</span>
            <span>120 €</span>
        </div>
        <button class="butoni1"><a href="appointments.html" style="text-decoration: none; color: #2F3E3C;"><b>Book
                    Appointment</b></a></button>
    </section>

     <?php include_once 'footer.php'; ?>
     <button id="toTopBtn" class="to-top"><img src="images/up-arrow.png" alt="arrow" class="to-top-icon"></button>
     <script src="javascript/services.js"></script>
</body>

</html>