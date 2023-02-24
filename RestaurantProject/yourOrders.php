<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/yourOrders.css">
    <title>Your orders</title>
</head>

<body>
    <?php include 'Components/navbar.php' ?>
    <h1>Your orders</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Food</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>OrderedDate</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("./Php/OrderCrudModel.php");
            $orderModel = new OrderCrudModel();
            $data = $orderModel->getOrdersOfUser();
            if (!empty($data)) {
                foreach ($data as $row) {
            ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['food']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['totalPrice']; ?></td>
                        <td><?php echo $row['orderedDate']; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "<p style='text-align: center'>You haven't made any order!</p>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>