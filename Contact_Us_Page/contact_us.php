<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Contact_Us_Page\contact_us.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="contact_us.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&family=Orbitron:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Header">
         <?php include_once('../Header/header.php'); ?> 
    </div>

    <section class="contact-darkW">
        <div class="contact-heroW">
            <h1>Contact Us</h1>
            <p class="contact-descW">We’re here to help! Reach out for support, feedback, or just to say hello.</p>
        </div>
        <div class="contact-mainW">
            <div class="contact-infoW">
                <h2 class="contact-titleW">Chat With Us</h2>
                <div class="contact-itemsW">
                    <div class="contact-itemW">
                        <img src="../../Buzzy_Cafe/Image/location.png" alt="Location" />
                        <div>
                            <span class="contact-labelW">Location</span>
                            <p>123 Coffee Street,<br>Cityville, 56789</p>
                        </div>
                    </div>
                    <div class="contact-itemW">
                        <img src="../../Buzzy_Cafe/Image/phone.png" alt="Phone" />
                        <div>
                            <span class="contact-labelW">Phone</span>
                            <p>+91 98765 43210</p>
                        </div>
                    </div>
                    <div class="contact-itemW">
                        <img src="../../Buzzy_Cafe/Image/email.png" alt="Email" />
                        <div>
                            <span class="contact-labelW">Email</span>
                            <p>contact@buzzycafe.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-formW">
                <h2 class="contact-titleW">Send a Message</h2>
                <form>
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <div class="Footer">
         <?php include_once('../Footer/footer.php'); ?> 
    </div>
</body>
</html>