<?php 
session_start();
if (!(isset($_SESSION['role']) || $_SESSION['role'] == 1)) {
  echo "<script>alert('Login with user account to make order!');</script>";
  echo "<script>window.location.href='login.php'</script>";
} ?>
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
    <?php
    include 'Components/navbar.php';
    require_once('./Php/FoodCrudModel.php');
    $foodModel = new FoodCrudModel();
    $menu = $foodModel->getAll();

    require_once('./Php/OrderCrudModel.php');
    $orderModel = new OrderCrudModel();
    if (isset($_POST['submit'])) {
        $orderModel->setName($_POST['name']);
        $orderModel->setPhoneNumber($_POST['phone']);
        $orderModel->setFood($_POST['menu']);
        $orderModel->setQuantity($_POST['quantity']);
        $orderModel->setAddress($_POST['address']);
        
        $price = $foodModel->getFoodPrice($_POST['menu'])['price'];
        $orderModel->setTotalPrice($price * $_POST['quantity']);
        $orderModel->setOrderedBy($_SESSION['currentUser']);
        $orderModel->insert();
    }
    ?>
    <main>
        <a class="yourOrders" href="yourOrders.php">
            <h4>View your orders</h4>
        </a>
        <h1>Order now<span class="point">.</span></h1>
        <section class="order">
            <form method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
                <label for="menu">Select your Menu</label>
                <select id="menu" name="menu">
                    <?php
                    foreach ($menu as $food) {
                        $title = $food['name'];
                        echo "<option value='$title'>$title</option>";
                    } ?>
                </select>
                <label for="quantity">Quantity</label>
                <input type="number" onChange="showTotal()" id="quantity" name="quantity" min="1" max="20" placeholder="Enter quantity" required>

                <label for="address">Delivery Address</label>
                <textarea id="address" name="address" placeholder="Enter your delivery address"></textarea>

                <input type="submit" id="submit" name="submit" value="Place Order">
            </form>
        </section>

    </main>
    <?php include 'Components/footer.php' ?>
    <script src=".Js/order.js"></script>
</body>

</html>