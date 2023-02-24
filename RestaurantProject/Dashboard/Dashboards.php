<?php session_start();
if (!(isset($_SESSION['role']) && $_SESSION['role'] == 1)) {
  echo "<script>alert('Login with admin account to access Dashboards!');</script>";
  echo "<script>window.location.href='../login.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboards</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Css/menu.css">
</head>

<body>

 

  <div class="container">
    <h1>Dashboards</h1>

    <div class="container">

      <div class="card">
        <h2>Users</h2>
        <p>Registered Users</p>
        <a href="./User/UsersDashboard.php">View Users</a>
      </div>
      <div class="card">
        <h2>Menu</h2>
        <p>Number of Contacts</p>
        <a href="./Menu/MenuDashboard.php">View Menu</a>
      </div>
      <div class="card">
        <h2>Money Donations</h2>
        <p>User Donations</p>
        <a href="moneyDashboard.php">View Donations</a>
      </div>
      <div class="card">
        <h2>Clothes Donations</h2>
        <p>User Donations</p>
        <a href="clothesDashboard.php">View Donations</a>
      </div>
    </div>
  </div>
</body>

</html>