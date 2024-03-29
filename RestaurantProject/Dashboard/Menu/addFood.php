<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../Css/form.css'>
    <title>Add food</title>
</head>

<body>
    <h1>Add Food</h1>
    <?php

    require_once("../../Php/FoodCrudModel.php");
    if (isset($_POST['addFood'])) {
        $foodModel = new FoodCrudModel();
        $foodModel->setName($_POST['name']);
        $foodModel->setDescription($_POST['description']);
        $foodModel->setPrice($_POST['price']);
        $foodModel->setCreatedBy($_SESSION['adminEmail']);


        $foodModel->setImage($image);
        $foodModel->insertByAdmin();
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" required>
        <label for="price">Price</label>
        <input type="number" step="0.1" name="price" id="price" placeholder="Price" required>
        <label for="image">Upload Image</label>
        <input type="file" name="image" id="image" accept=".png, .gif, .jpg, .jpeg" required value="">
        <input type="submit" name="addFood" value="Add Food">
    </form>


</body>

</html>