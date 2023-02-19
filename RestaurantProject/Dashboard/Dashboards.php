<!DOCTYPE html>
<html>
<head>
  <title>Dashboards</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Css/menu.css">
</head>
<body>
  <header>
    <nav>
      <div class="navbar">
        <a class="navbar-brand" href="#">Dashboard</a>
      </div>
    </nav>
  </header>

  <div class="container">
    <h1>Users</h1>

    <div class="addUser">
      <a href="userAdd.php" class="button">Add User</a>
    </div>

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
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once("../Php/UserCrudModel.php");
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
                <a href="userEdit.php?id=<?php echo $row['id']; ?>" class="button">Edit</a>
                <a href="#" data-id="<?php echo $row['id']; ?>" class="delete-user button">Delete</a>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function() {
      // Handle delete button clicks
      $('.delete-user').click(function() {
        var userId = $(this).data('id');
        if (confirm('Are you sure you want to delete this user?')) {
          window.location.href = 'userDelete.php?id=' + userId;
        }
      });
    });
  </script>
</body>
</html>
