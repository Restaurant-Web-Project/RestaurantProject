<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1115d48a11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Css/index.css">
    <title>Restaurant</title>
</head>

<body>
    <?php include 'Components/navbar.php' ?>
    <main>
        <h1>Food and more<span class="point">.</span></h1>
    </main>
    <p class="slider__dots">
        <span class="first">.</span>
        <span class="second">.</span>
        <span class="third">.</span>
    </p>
    <section class="welcome">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="black" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
        </svg>
        <h1>Welcome</h1>
        <div class="welcome__text">
            <div>
                <h3>Why Us</h3>
                With 100+ years tradition, Pavin Restaurant has become the place of Tasty Food and enjoying athmosphere.
            </div>
            <div>
                <h3>Made With Love</h3>

                Cooking with love has become a part of the Pavin Restaurant chefs and this can be easily seen in the way
                we serve.
            </div>
            <div>
                <h3>Byu Online</h3>
                With the super good looking website, Pavin Restaurant makes it possible to buy the Tasty Food which we
                offer, even ONLINE.
            </div>
        </div>
        <img src="./Images/signature.png" alt="signature" width="170px">
    </section>
    <section class="testimonials">
        <img src="./Images/picture5.jpg" width="100%">
        <div class="text">
            <h1>Testimonials</h1>
            <p class="thonjza">"</p>
            <div class="review">When I first entered the restaurant, I was fascinated with its buildings' beauty. But
                that was only the beginning, what comes next is the Tastiest Special Dish I've ever eaten served by
                waiters in the best manner. Since then, I can't stop eating and enjoying the food that Pavin Restaurant
                makes. Not even if time is 2am, when with just some clicks I order the food online and the delivery is
                super fast.</div>
            <p class="customer">Albion Paqarizi</p>
        </div>
    </section>
    <section class="service">
        <i class="fa-solid fa-utensils fa-4x service__icon"></i>
        <h1>Our Services</h1>
        <div class="service__text">
            <div>
                <i class="fa-solid fa-mug-saucer fa-2x food"></i>
                <h3>Breakfast</h3>
                Choose any of our breakfast choices easily and don't worry, whatever you choose is the most Delicious
                breakfast.
            </div>
            <div>
                <i class="fa-solid fa-burger fa-2x food"></i>
                <h3>Lunch</h3>
                Choose any of our Lunch choices easily and don't worry, whatever you choose is the most Delicious Lunch.
            </div>
            <div>
                <i class="fa-solid fa-plate-wheat fa-2x food"></i>
                <h3>Dinner</h3>
                Choose any of our Dinner choices easily and don't worry, whatever you choose is the most Delicious
                Dinner.
            </div>
        </div>
    </section>

    <section class="menu">
        <img src="./Images/picture2.jpg">
        <div class="text">
            <i class="fa-solid fa-utensils fa-4x service__icon" style="color:white"></i>
            <h1>Our Menu</h1>
            <div class="menu__text">
                <div>
                    <i class="fa-solid fa-mug-saucer fa-2x food"></i>
                    <h3>Breakfast</h3>
                    <ul>
                        <?php
                        require_once('./Php/FoodCrudModel.php');
                        $foodModel = new FoodCrudModel();
                        $menu = $foodModel->getAll();
                        $firstPart = array_slice($menu, 0, 3);
                        foreach ($firstPart as $food) {
                            $name = $food['name'];
                            echo "<li>$name</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div>
                    <i class="fa-solid fa-burger fa-2x food"></i>
                    <h3>Lunch</h3>
                    <ul>
                        <?php
                        $secondPart = array_slice($menu, 3, 3);
                        foreach ($secondPart as $food) {
                            $name = $food['name'];
                            echo "<li>$name</li>";
                        } ?>
                    </ul>
                </div>
                <div>
                    <i class="fa-solid fa-plate-wheat fa-2x food"></i>
                    <h3>Dinner</h3>
                    <ul>
                        <?php
                        $thirdPart = array_slice($menu, 6, 3);
                        foreach ($thirdPart as $food) {
                            $name = $food['name'];
                            echo "<li>$name</li>";
                        } ?>
                    </ul>
                </div>
            </div>
            <a href="menu.php"><button type="button">See More</button></a>
        </div>
    </section>
    <?php include 'Components/footer.php' ?>
    <script src="Js/app.js"></script>
</body>

</html>