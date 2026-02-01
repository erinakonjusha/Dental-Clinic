

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - The Smile Spot</title>
    <link rel="icon" type="image/png" href="images/Logo.png">
    <link rel="stylesheet" href="appointments.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php include_once "navbar.php"; ?>

    <div class="container">

        <div class="tekstnavbar animate scroll-fade">
            <h2>Book Appointment</h2>
        </div>
    </div>

    <div class="appointment-container animate scroll-up">
        <div class="appointment-form">
            <form id="appointmentForm">

                <div class="rreshti1">
                    <div class="inputlabel">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" placeholder="Full Name">
                        <span class="error" id="nameError"></span>
                    </div>

                    <div class="inputlabel">
                        <label for="number">Phone Number</label>
                        <input type="text" id="number" placeholder="(383) 44123456">
                        <span class="error" id="numberError"></span>
                    </div>
                </div>

                <div class="inputlabel">
                    <label for="reasonforvisit">Reason for Visit</label>
                    <select id="reasonforvisit">
                        <option value="" disabled selected>Zgjedh një shërbim</option>
                        <option value="Routine Checkup">Routine Checkup</option>
                        <option value="Tooth Extraction">Tooth Extraction</option>
                        <option value="3D X-Ray Diagnostics">3D X-Ray Diagnostics</option>
                        <option value="Prosthodontics">Prosthodontics</option>
                        <option value="Cleaning & Prevention">Cleaning & Prevention</option>
                        <option value="Dental Implants">Dental Implants</option>
                        <option value="Restoring Teeth">Restoring Teeth</option>
                        <option value="Invisalign">Invisalign</option>
                        <option value="Gum Disease Treatment">Gum Disease Treatment</option>
                        <option value="Dental Examination">Dental Examination</option>
                    </select>
                    <span class="error" id="reasonError"></span>
                </div>

                <div class="rreshti3">
                    <div class="inputlabel">
                        <label for="date">Preferred Date</label>
                        <input type="date" id="date">
                        <span class="error" id="dateError"></span>
                    </div>

                    <div class="inputlabel">
                        <label for="time">Preferred Time</label>
                        <select id="time">
                            <option value="" disabled selected>Zgjedh orën</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                        </select>
                        <span class="error" id="timeError"></span>
                    </div>
                </div>

                <button class="submit-btn" type="submit"><b>Submit</b></button>

            </form>
        </div>

        <div class="rightside">
            <div class="box">
                <div class="circle-info"></div>
                <h2>Working Hours</h2>
                <h4>Monday - Friday</h4>
                <p style="text-align: center;">09:00 - 17:00</p>
            </div>
        </div>
    </div>

   <?php include_once 'footer.php'; ?>

    <div id="successPopup" class="popup-overlay">
        <div class="popup-box">
            <h2>Appointment Booked!</h2>
            <p>Your appointment has been successfully submitted.</p>
            <button id="closePopup" class="popup-btn">OK</button>
        </div>
    </div>
    <button id="toTopBtn" class="to-top"><img src="images/up-arrow.png" alt="arrow" class="to-top-icon"></button>
    <script src="javascript/appointment.js"></script>
</body>

</html>