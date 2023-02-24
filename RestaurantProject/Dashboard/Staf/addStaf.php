<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../Css/form.css'>
    <title>Add staf</title>
</head>

<body>
    <h1>Add Staf</h1>
    <?php

    require_once("../../Php/StafCrudModel.php");
    if (isset($_POST['addStaf'])) {
        $stafModel = new StafCrudModel();
        $stafModel->setName($_POST['name']);
        $stafModel->setDescription($_POST['description']);
        $stafModel->insertByAdmin();
        echo "<script>window.location.href = 'StafDashboard.php';</script>";
    }
    ?>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name"required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description"  required>
        <input type="submit" name="addStaf" value="Add Staf" >
    </form>


</body>

</html>