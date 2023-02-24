<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1115d48a11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Css/menu.css">
    <title>Restaurant</title>
</head>

<body>
    <?php include 'Components/navbar.php' ?>
    <main>
        <h1>The Menu<span class="point">.</span></h1>
    </main>
    <section class="menu">
        <i class="fa-solid fa-utensils fa-4x service__icon"></i>
        <h1>Our Menu</h1>
        <div class="buttons">
            <button class="breakfast__button">
                <i class="fa-solid fa-mug-saucer fa-2x food"></i>
                <p>Breakfast</p>
            </button>
            <button class="lunch__button">
                <i class="fa-solid fa-burger fa-2x food"></i>
                <p>Lunch</p>
            </button>
            <button class="dinner__button">
                <i class="fa-solid fa-plate-wheat fa-2x food"></i>
                <p>Dinner</p>
            </button>
        </div>
        <div class="menu__breakfast our__menu">
            <h3>Breakfast</h3>
            <div class="parts">
                <ul>
                    <li>
                        <h4>Scrambled Eggs with ham</h4>
                        with wild mushrooms and asparagus.................................................. 5€
                    </li>
                    <li>
                        <h4>Buttermilk or Buckwheat Pancakes</h4>
                        with bacon or mauple saussage.......................................................... 4€
                    </li>
                    <li>
                        <h4>Waffle</h4>
                        with seasonal fruit and whipped cream............................................... 3€
                    </li>
                    <li>
                        <h4>Omelet</h4>
                        with sausage, spinach, mushrooms, cheddar, and potatoes............... 4.5€
                    </li>
                    <li>
                        <h4>Pancake Combo</h4>
                        with bacon sausage and two eggs...................................................... 3€
                    </li>
                </ul>
                <ul>
                    <li>
                        <h4>Classic Combo</h4>
                        with bacon, ham and two eggs.......................................................5€
                    </li>
                    <li>
                        <h4>Hot Cakes</h4>
                        with melty butter and maple syrup................................................. 3€
                    </li>
                    <li>
                        <h4>French Toast</h4>
                        with powdered sugar, butter, and maple syrup............................... 3€
                    </li>
                    <li>
                        <h4>Breakfast Quesadilla</h4>
                        with cheese, eggs and salsa..........................................................4.5€
                    </li>
                    <li>
                        <h4>Scrambled eggs</h4>
                        with cheese and toast.................................................................... 4€
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu__lunch our__menu">
            <h3>Lunch</h3>
            <div class="parts">
                <ul>
                    <li>
                        <h4>Lumberjack Omelet</h4>
                        with ham, sausage, spinach, mushrooms........................................ 5€
                    </li>
                    <li>
                        <h4>The junior</h4>
                        with tomato, white meat and sausage.............................................. 4€
                    </li>
                    <li>
                        <h4>Chicken meat</h4>
                        with chicken meat.............................................................................
                        3€
                    </li>
                    <li>
                        <h4>Beef meat</h4>
                        with beef
                        meat................................................................................... 4.5€
                    </li>
                    <li>
                        <h4>Trofta Fish</h4>
                        with trofta
                        fish......................................................,.............................. 3€
                    </li>
                </ul>
                <ul>
                    <li>
                        <h4>Cheese Pizza</h4>
                        with eggs, cheese, tomatoes............................................................ 5€
                    </li>
                    <li>
                        <h4>Veggie Pizza</h4>
                        with vegetables, cheese, tomatoes................................................... 3€
                    </li>
                    <li>
                        <h4>Pepperoni Pizza</h4>
                        with powdered pepper, butter, and maple syrup............................... 3.5€
                    </li>
                    <li>
                        <h4>Meat Pizza</h4>
                        with meat, cheese, eggs and salsa................................................... 4.5€
                    </li>
                    <li>
                        <h4>BBQ chicken Pizza</h4>
                        with bbq chicken meat....................................................................... 4€
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu__dinner our__menu">
            <h3>Dinner</h3>
            <div class="parts">
                <ul>
                    <li>
                        <h4>Cheese Pizza</h4>
                        with eggs, cheese, tomatoes............................................................ 5€
                    </li>
                    <li>
                        <h4>Veggie Pizza</h4>
                        with vegetables, cheese, tomatoes................................................... 3€
                    </li>
                    <li>
                        <h4>Pepperoni Pizza</h4>
                        with powdered pepper, butter, and maple syrup............................... 3.5€
                    </li>
                    <li>
                        <h4>Meat Pizza</h4>
                        with meat, cheese, eggs and salsa................................................... 4.5€
                    </li>
                    <li>
                        <h4>BBQ chicken Pizza</h4>
                        with bbq chicken meat....................................................................... 4€
                    </li>
                </ul>
                <ul>
                    <li>
                        <h4>Lumberjack Omelet</h4>
                        with ham, sausage, spinach, mushrooms........................................ 5€
                    </li>
                    <li>
                        <h4>The junior</h4>
                        with tomato, white meat and sausage.............................................. 4€
                    </li>
                    <li>
                        <h4>Chicken meat</h4>
                        with chicken meat.............................................................................
                        3€
                    </li>
                    <li>
                        <h4>Beef meat</h4>
                        with beef
                        meat................................................................................... 4.5€
                    </li>
                    <li>
                        <h4>Trofta Fish</h4>
                        with trofta
                        fish.....................................................,.............................. 3€
                    </li>
                </ul>
            </div>
        </div>
        <a href="<?php if (isset($_SESSION['role'])) {
                        echo "order.php";
                    } else {
                        echo "login.php";
                    } ?>">
            <button type="submit" name="orderNow" class="orderNow" <?php if (!isset($_SESSION['role'])) {
                                                                        echo "onclick=\"alert('You can\'t make order without being logged in')\"";
                                                                    } ?>>Order now</button>
        </a>
    </section>
    <section class="drinks">
        <img src="./Images/picture6.jpg" width="100%">
        <div class="text">
            <i class="fa-solid fa-utensils fa-4x service__icon" style="color:white"></i>
            <h1>Drinks Menu</h1>
            <div class="parts">
                <ul>
                    <li>
                        <h4>Coca Cola</h4>
                        .............................................................. 2€
                    </li>
                    <li>
                        <h4>Irish Coffee</h4>
                        .............................................................. 1.5€
                    </li>
                    <li>
                        <h4>American Coffee</h4>
                        .............................................................. 2.5€
                    </li>
                    <li>
                        <h4>Turkish Coffee</h4>
                        .............................................................. 1.5€
                    </li>
                    <li>
                        <h4>Fanta</h4>
                        .............................................................. 2€
                    </li>
                </ul>
                <ul>
                    <li>
                        <h4>Golden Eagle</h4>
                        ................................................................2€
                    </li>
                    <li>
                        <h4>Espresso</h4>
                        ............................................................... 3€
                    </li>
                    <li>
                        <h4>Makiato</h4>
                        ............................................................... 3€
                    </li>
                    <li>
                        <h4>Cappucino</h4>
                        ............................................................... 3€
                    </li>
                    <li>
                        <h4>Juice</h4>
                        ............................................................... 4€
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="weeks__dish">
        <img src="./Images/picture1.jpg" width="100%">
        <div class="text">
            <h1>This week's dish</h1>

            <h3>Pepperoni Pizza</h3>
            <p>
                Pepperoni pizza is an American pizza variety which includes one of the country's most beloved
                toppings.
                Pepperoni is actually a corrupted form of peperoni (one “p”), which denotes a large pepper in
                Italian, but
                nowadays it denotes a spicy salami, usually made with a mixture of beef, and spices.
                The preparation in our restaurant is done carefully and with love. These combined with the best
                receipt and the result is the tastiest Pizza in the country. Only in Pavin restaurant.
            </p>
        </div>
    </section>
    <?php include 'Components/footer.php' ?>
    <script src="Js/menu.js"></script>
</body>

</html>