<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Dashboard/Css/users.css">
</head>

<body>
  <div class="container">
    <h1>Users</h1>

    <a href="userAdd.php"> <button type="submit" name="submit" id="userAdd">Add User</button><br> <br> </a>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Password</th>
          <th>Address</th>
          <th>Age</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        <?php

        require_once("./Php/User/UserCrudModel.php");
        $userModel = new UserCrudModel();
        $data = $userModel->getAll();
        if (!empty($data)) {
          foreach ($data as $row) {
        ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['surname']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['password']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['role']; ?></td>
              <td>
                <a href<?php echo $row['id']; ?> class="btn btn1">Delete</a>
                <a href="userEdit.php?id=<?php echo $row['id']; ?>" class="btn btn2">Edit</a>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "There is no user in the database!";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>