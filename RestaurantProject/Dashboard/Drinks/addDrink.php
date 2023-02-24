<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../Css/form.css'>
    <title>Add drink</title>
</head>

<body>
    <h1>Add Drink</h1>
    <?php

    require_once("../../Php/DrinksCrudModel.php");
    if (isset($_POST['addDrink'])) {
        $drinksModel = new DrinksCrudModel();
        $drinksModel->setName($_POST['name']);
        $drinksModel->setDescription($_POST['description']);
        $drinksModel->setPrice($_POST['price']);
        $drinksModel->setCreatedBy($_SESSION['adminEmail']);
        $drinksModel->setImage($_POST['image']);
        $drinksModel->insertByAdmin();
        echo "<script>window.location.href = 'DrinksDashboard.php';</script>";
    }
    ?>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" required>
        <label for="price">Price</label>
        <input type="number" step="0.1" name="price" id="price" placeholder="Price" required>
        <input type="submit" name="addDrink" value="Add Drink">
    </form>


</body>

</html>