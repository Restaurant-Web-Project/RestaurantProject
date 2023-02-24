<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../Css/form.css'>
    <title>Edit food</title>
</head>

<body>
    <h1>Edit Food</h1>
    <?php
    include '../../Php/FoodCrudModel.php';
    $foodModel = new FoodCrudModel();
    $id = $_REQUEST['id'];
    $row = $foodModel->get($id);


    if (isset($_POST["updateFood"])) {
        $data['id'] = $row['id'];
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];
        $data['price'] = $_POST['price'];
        $data['createdBy'] = $_SESSION['adminEmail'];
        if ($foodModel->update($data)) {
            echo "<script>alert('Food is updated successfully!')</script>";
            echo "<script>window.location.href = 'MenuDashboard.php';</script>";
        } else {
            echo "<script>alert('Food failed to update!')</script>";
            echo "<script>window.location.href = 'editFood.php';</script>";
        };
    }
    ?>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $row['name'] ?>" required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" value="<?php echo $row['description'] ?>" required>
        <label for="price">Price</label>
        <input type="number" step="0.1" name="price" id="price" placeholder="price" value="<?php echo $row['price'] ?>" required>

        <input type="submit" name="updateFood" value="Update Food">
    </form>
</body>

</html>