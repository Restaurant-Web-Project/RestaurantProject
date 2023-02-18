<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1115d48a11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Css/order.css">
    <title>Restaurant</title>
</head>

<body>
    <nav>
        <div class="nav__logo">
            <a href="index.php">
                <h2>
                    Pavin<span class="point">.</span>
                </h2>
            </a>
        </div>
        <div class="nav__ul">
            <ul>
                <a href="index.php">
                    <li class="home__link">Home</li>
                </a>
                <a href="about.php">
                    <li class="about__link">About</li>
                </a>
                <a href="menu.php">
                    <li class="menu__link">Menu</li>
                </a>
                <a href="contact.php">
                    <li class="contact__link">Contact</li>
                </a>
                <?php
                // if (){
                echo "<a href='contact.php'>
                 <li class='contact__link'>Contact</li>
                  </a>";
                // }
                ?>
            </ul>
        </div>
        <div class="nav__login">
            <a href="login.php">Login</a>
        </div>
    </nav>
    <main>
        <h1>Order now<span class="point">.</span></h1>
        <section class="order">
            <form>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                <label for="menu">Select your Menu</label>
                <select id="menu" name="menu">
                    <option value="burger">Burger</option>
                    <option value="pizza">Pizza</option>
                    <option value="pasta">Pasta</option>
                    <option value="sandwich">Sandwich</option>
                </select>
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="20" placeholder="Enter quantity" required>

                <label for="address">Delivery Address</label>
                <textarea id="address" name="address" placeholder="Enter your delivery address"></textarea>

                <input type="submit" value="Place Order">
            </form>
        </section>

    </main>
    <footer>
        <ul class="footer">
            <li>
                Pavin Restaurant
            </li>
            <li>
            </li>
            <li>
                Copyright ©2022 All rights reserved
            </li>
            <li>
                By Jeton and Albion
            </li>
        </ul>
    </footer>
    <script src="Js/app.js"></script>
</body>

</html>