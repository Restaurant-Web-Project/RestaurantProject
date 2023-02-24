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
                    <?php
                    require_once('Php/FoodCrudModel.php');
                    $foodModel = new FoodCrudModel();
                    $data = $foodModel->getAll();
                    $firstPart = array_slice($data, 0, 5);
                    foreach ($firstPart as $row) {
                        $date = date('d-m-Y', strtotime($row['dateCreated']));
                        $image = $row['image'];
                        $createdBy = $row['createdBy'];
                        $title = $row['name'];
                        $desc = $row['description'] . "................";
                        $price = $row['price'];
                        echo "<li title='CreatedBy: $createdBy on: $date '>
                        <img class='foodImage' src='./Images/$image' width='120px' alt='food'>
                        <h4>$title</h4>$desc $price €</li>";
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $secondPart = array_slice($data, 5, 10);
                    foreach ($secondPart as $row) {
                        $date = date('d-m-Y', strtotime($row['dateCreated']));
                        $image = $row['image'];
                        $createdBy = $row['createdBy'];
                        $title = $row['name'];
                        $desc = $row['description'] . "................";
                        $price = $row['price'];
                        echo "<li title='CreatedBy: $createdBy on: $date '>
                        <img class='foodImage' src='./Images/$image' width='120px' alt='food'>
                        <h4>$title</h4>$desc $price €</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="menu__lunch our__menu">
            <h3>Lunch</h3>
            <div class="parts">
            <ul>
                    <?php
                    $firstPart = array_slice($data, 0, 5);
                    foreach ($firstPart as $row) {
                        $date = date('d-m-Y', strtotime($row['dateCreated']));
                        $image = $row['image'];
                        $createdBy = $row['createdBy'];
                        $title = $row['name'];
                        $desc = $row['description'] . "................";
                        $price = $row['price'];
                        echo "<li title='CreatedBy: $createdBy on: $date '>
                        <img class='foodImage' src='./Images/$image' width='120px' alt='food'>
                        <h4>$title</h4>$desc $price €</li>";
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $secondPart = array_slice($data, 5, 10);
                    foreach ($secondPart as $row) {
                        $date = date('d-m-Y', strtotime($row['dateCreated']));
                        $image = $row['image'];
                        $createdBy = $row['createdBy'];
                        $title = $row['name'];
                        $desc = $row['description'] . "................";
                        $price = $row['price'];
                        echo "<li title='CreatedBy: $createdBy on: $date '>
                        <img class='foodImage' src='./Images/$image' width='120px' alt='food'>
                        <h4>$title</h4>$desc $price €</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="menu__dinner our__menu">
            <h3>Dinner</h3>
            <div class="parts">
                <ul>
                    <?php
                    $firstPart = array_slice($data, 0, 5);
                    foreach ($firstPart as $row) {
                        $date = date('d-m-Y', strtotime($row['dateCreated']));
                        $image = $row['image'];
                        $createdBy = $row['createdBy'];
                        $title = $row['name'];
                        $desc = $row['description'] . "................";
                        $price = $row['price'];
                        echo "<li title='CreatedBy: $createdBy on: $date '>
                        <img class='foodImage' src='./Images/$image' width='120px' alt='food'>
                        <h4>$title</h4>$desc $price €</li>";
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $secondPart = array_slice($data, 5, 5);
                    foreach ($secondPart as $row) {
                        $date = date('d-m-Y', strtotime($row['dateCreated']));
                        $image = $row['image'];
                        $createdBy = $row['createdBy'];
                        $title = $row['name'];
                        $desc = $row['description'] . "................";
                        $price = $row['price'];
                        echo "<li title='CreatedBy: $createdBy on: $date '>
                        <img class='foodImage' src='./Images/$image' width='120px' alt='food'>
                        <h4>$title</h4>$desc $price €</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <a href="<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
                        echo "order.php";
                    } else {
                        echo "login.php";
                    } ?>">
            <button type="submit" name="orderNow" class="orderNow" <?php if (!(isset($_SESSION['role'])&& $_SESSION['role'] == 0)) {
                                                                        echo "onclick=\"alert('You can\'t make order without being logged in as a user!')\"";
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
                    <?php
                    require_once('./Php/DrinksCrudModel.php');
                    $drinksModel = new DrinksCrudModel();
                    $drinks = $drinksModel->getAll();
                    $firstPartDrinks = array_slice($drinks, 0, 5);
                    foreach ($firstPartDrinks as $row) {
                        $title = $row['name'];
                        $desc = ".....................................";
                        $price = $row['price'];
                        echo "<li><h4>$title</h4>$desc $price €</li>";
                    }
                    ?>

                </ul>
                <ul>
                    <?php
                    $secondPartDrinks = array_slice($drinks, 5, 5);
                    foreach ($secondPartDrinks as $row) {
                        $title = $row['name'];
                        $desc = ".....................................";
                        $price = $row['price'];
                        echo "<li><h4>$title</h4>$desc $price €</li>";
                    } ?>
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
