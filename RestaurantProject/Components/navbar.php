<nav>
    <div class="nav__logo">
        <a href="index.php">
            <h2>
                Pavin<span class="point">.</span>
            </h2>
        </a>
    </div>
    <div class="nav__ul hide">
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
    <div class="nav__login hide">
        <?php
        if (isset($_SESSION['role'])) {
            echo "<a class='login' href='Php/logout.php'>Logout</a>";
        } else {
            echo "<a class='login'href='login.php'>Login</a>";
        }
        ?>

    </div>
    <a class="hamburger" onclick="toggleNavbar()">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffc515" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </a>
    <script>
        const toggleNavbar = function() {
            var links = document.querySelector(".nav__ul");
            var login = document.querySelector(".nav__login");
            var nav = document.querySelector("nav");
            if (links.classList.contains("hide")) {
                links.classList.remove("hide")
                login.classList.remove("hide")
                nav.style.height = "200px";
            } else {
                links.classList.add("hide")
                login.classList.add("hide")
                nav.style.height = "50px";

            }
        }
    </script>

</nav>