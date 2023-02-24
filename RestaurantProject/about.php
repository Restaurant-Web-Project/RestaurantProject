<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1115d48a11.js" crossorigin="anonymous"></script>
    <title>About Us</title>
    <link rel="stylesheet" href="./Css/about.css">

</head>

<body>
    <?php include 'Components/navbar.php' ?>
    <main>
        <h1>About Us<span class="point">.</span></h1>
    </main>

    <section class="aboutUs">
        <div class="title">
            <img class="meat" src="./Images/meat.png">
            <h2> About Us</h2>
        </div>

        <div class="row">
            <div>
                In life, except for some, I will eat chocolate, I will eat it for the weekend. Vivamus rutrum dui
                fermentum eros hendrerit, id lobortis leo volutpat. Stpat salad Vivamus rutrum dui fermentum eros
                hendrerit, id lobortis leo volutpat. Maecenas is concerned about the free price.
            </div>
            <div>
                Except for some, chocolate leo a, weekend salad. Vivamus rutrum dui fermentum eros hendrerit, id
                lobortis leo volutpat. Stpat salad Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo
                volutpat. Maecenas is concerned about the free price.
                </h3>
            </div>
    </section>

    <section class="chefs" style="background-image: url(./Images/chefs.webp);">
        <div class="container-chefs">
            <div class="text">
                <img src="./Images/chef.png">
                <h1> Our Chefs</h1>
            </div>


            <div class="chefs-row">
                <?php
                require_once("Php/StafCrudModel.php");
                $stafModel = new StafCrudModel();
                $data = $stafModel->getAll();
                foreach ($data as $row) {
                    $date = date('d/m/Y', strtotime($row['dateStarted']));
                    $name = $row['name'];
                    $description = $row['description'];
                    echo "<div class='colon-chefs'><img src='./Images/1chef.jpg'><h4>$name</h4><p>Works in our restaurant since: $date.     About: $description</p></div>";
                }
                ?>
               
            </div>
        </div>
    </section>

    <section class="sli">
        <div class="slider">
            <div class="slide-track">
                <!-- slider -->
                <div class="slide">
                    <img src="./Images/part1.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part2.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part3.jpg">
                </div>
                <div class="slide">
                    <img src="./Images/part4.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part5.png">
                </div>
                <div class="slide">
                    <img src="./Images/part6.png">
                </div>
                <div class="slide">
                    <img src="./Images/part1.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part2.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part5.png">
                </div>


                <!-- same slider -->
                <div class="slide">
                    <img src="./Images/part1.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part2.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part3.jpg">
                </div>
                <div class="slide">
                    <img src="./Images/part4.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part5.png">
                </div>
                <div class="slide">
                    <img src="./Images/part6.png">
                </div>
                <div class="slide">
                    <img src="./Images/part1.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part2.webp">
                </div>
                <div class="slide">
                    <img src="./Images/part5.png">
                </div>
            </div>
        </div>
    </section>

    <!-- footeri -->

    <footer class="footer">
        <div class="container1">
            <div class="row1">
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

</body>

</html>