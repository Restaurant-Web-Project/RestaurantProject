<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../Css/form.css'>
    <title>Edit staf</title>
</head>

<body>
    <h1>Edit Staf</h1>
    <?php
    include '../../Php/StafCrudModel.php';
    $stafModel = new StafCrudModel();
    $id = $_REQUEST['id'];
    $row = $stafModel->get($id);


    if (isset($_POST["updateStaf"])) {
        $data['id'] = $row['id'];
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];
        if ($stafModel->update($data)) {
            echo "<script>alert('Staf is updated successfully!')</script>";
            echo "<script>window.location.href = 'StafDashboard.php';</script>";
        } else {
            echo "<script>alert('Staf failed to update!')</script>";
            echo "<script>window.location.href = 'editStaf.php';</script>";
        };
    }
    ?>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $row['name'] ?>" required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" value="<?php echo $row['description'] ?>" required>

        <input type="submit" name="updateStaf" value="Update Staf">
    </form>
</body>

</html>