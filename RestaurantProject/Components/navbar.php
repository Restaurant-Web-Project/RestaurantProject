<nav>
    <div class="nav__logo">
        <a href="index.php">
            <h2>
                Pavin<span class="point">.</span>
            </h2>
        </a>
    </div>
    <div class="nav__ul">
        <ul>
            <a href="index.php">
                <li class="home__link">Home</li>
            </a>
            <a href="about.php">
                <li class="about__link">About</li>
            </a>
            <a href="menu.php">
                <li class="menu__link">Menu</li>
            </a>
            <a href="contact.php">
                <li class="contact__link">Contact</li>
            </a>
            <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                echo "<a href='Dashboard/Dashboards.php'><li class='dashboard__link'>Dashboard</li></a>";
            } else if (isset($_SESSION['role'])) {
                echo "<a href='order.php'><li class='order__link'>Order</li></a>";
            }
            ?>
        </ul>
    </div>
    <div class="nav__login">
        <?php
        if (isset($_SESSION['role'])) {
            echo "<a href='Php/logout.php'>Logout</a>";
        } else {
            echo "<a href='login.php'>Login</a>";
        }
        ?>
    </div>
</nav>
