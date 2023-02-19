<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1115d48a11.js" crossorigin="anonymous"></script>
    <title>Contact</title>
    <link rel="stylesheet" href="./Css/contact.css">

</head>

<body>
    <?php include 'Components/navbar.php' ?>
    <main>
        <h1>Contact Us<span class="point">.</span></h1>
    </main>
    <br>
    <hr color="black">
    <section class="section-con">
        <div class="contact-section">
            <div class="contact-info">
                <h2>Contact info</h2>
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                    </svg>Av. Fernando Amaral, 695 - Centro, Tramandaí - RS, 95590-000, Brazil</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>pavin.res@reservation.com</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg>+55 5136 842971</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                    </svg>Mon - Sat 8:00 AM to 5:00 PM</div>
            </div>
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form action="mailto:albionpaqarizi1@gmail.com" method="post" enctype="text/plain" />
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required> </textarea>
                <input type="submit" name="submit" class="send-btn" value="submit" onclick="submitForm()">
                </form>
            </div>
        </div>
    </section>
    <hr color="black">
    <br>

    <!-- footeri -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Pages</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="menu.php">menu</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Log-in/ Register</h4>
                    <ul>
                        <li><a href="login.php">Log-in</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Sponsors</h4>
                    <ul>
                        <li><a href="https://www.chipotle.com/">Chipotle</a></li>
                        <li><a href="https://www.properpizza.com/">Propper Pizaa</a></li>
                        <li><a href="https://www.rickstein.com/restaurants/the-seafood-restaurant/">Seafood richstein</a></li>
                        <li><a href="https://www.foodpanda.ph/chain/cd8cr/super-sogbu">Super ogbu</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">

                        <a href="https://www.facebook.com/opavinrestaurant/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.trip.com/travel-guide/foods/padova-1616-restaurant/pavin-caffe-34168618/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/pavin_restaurantes/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/pavin-restaurante"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <h4>Location</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.672425429465!2d-50.13462738530982!3d-29.988842781902537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95187324b6b5f787%3A0x866c5bb0c7a538b3!2sPavin%20Restaurantes!5e0!3m2!1ssq!2s!4v1670771089155!5m2!1ssq!2s" width="250" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>

    <script>

    </script>
</body>

</html>