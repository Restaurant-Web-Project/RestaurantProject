<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../Css/form.css'>
    <title>Edit drink</title>
</head>

<body>
    <h1>Edit Drink</h1>
    <?php
    include '../../Php/DrinksCrudModel.php';
    $drinksModel = new DrinksCrudModel();
    $id = $_REQUEST['id'];
    $row = $drinksModel->get($id);


    if (isset($_POST["updateDrink"])) {
        $data['id'] = $row['id'];
        $data['name'] = $_POST['name'];
        $p = $_POST['price'];
        $data['price'] = $_POST['price'];
        if ($drinksModel->update($data)) {
            echo "<script>alert('Drink is updated successfully!')</script>";
            echo "<script>window.location.href = 'DrinksDashboard.php';</script>";
        } else {
            echo "<script>alert('Drink failed to update!')</script>";
            echo "<script>window.location.href = 'editDrink.php';</script>";
        };
    }
    ?>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $row['name'] ?>" required>
        <label for="price">Price</label>
        <input type="number" step="0.1" name="price" id="price" placeholder="price" value="<?php echo $row['price'] ?>" required>

        <input type="submit" name="updateDrink" value="Update Drink">
    </form>
</body>

</html>