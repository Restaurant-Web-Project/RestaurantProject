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
  <link rel="stylesheet" href="./Css/dashboards.css">
</head>

<body>
  <nav>
    <ul>
      <a href="../index.php">
        <li class="home__link">Home</li>
      </a>
      <a href="../about.php">
        <li class="about__link">About</li>
      </a>
      <a href="../menu.php">
        <li class="menu__link">Menu</li>
      </a>
      <a href="../contact.php">
        <li class="contact__link">Contact</li>
      </a>
      <a href="Dashboards.php">
        <li class="dashboard__link">Dashboard</li>
      </a>
    </ul>
  </nav>

  <div class="container">
    <h1>Dashboards</h1>
    <div class="container">
      <div class="card">
        <h4>Users</h4>
        <p>Dashboard for users</p>
        <a href="./User/UsersDashboard.php">View Users</a>
      </div>
      <div class="card">
        <h4>Menu</h4>
        <p>Dashboard for types of food</p>
        <a href="./Menu/MenuDashboard.php">View Menu</a>
      </div>
      <div class="card">
        <h4>Orders</h4>
        <p>Dashboard for all the orders done</p>
        <a href="./Order/OrderDashboard.php">View Orders</a>
      </div>
      <div class="card">
        <h4>Drinks</h4>
        <p>Dashboard for types of drinks</p>
        <a href="./Drinks/DrinksDashboard.php">View Drinks</a>
      </div>
      <div class="card">
        <h4>Staf</h4>
        <p>Dashboard for the staf</p>
        <a href="./Staf/StafDashboard.php">View Staf</a>
      </div>
      <div class="card">
        <h4>Contact</h4>
        <p>Dashboard for the contacts</p>
        <a href="./Contact/ContactDashboard.php">View Contacts</a>
      </div>
    </div>
  </div>
</body>

</html>