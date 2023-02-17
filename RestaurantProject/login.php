<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1115d48a11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Css/login.css">
    <title>Restaurant</title>
</head>

<body>

    <main>
        <div class="login">
            <img src="./Images/picture7.jpg" alt="login">
            <form action="./Php/User/login.php" method="POST">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <button type="submit" class="login__button" name="submit" id="submit">Login</button>
                <p class="error"></p>
                <p>
                    Don't have an account? <a href="register.php"><b>Register</b></a>
                </p>

            </form>
        </div>
    </main>
    <script src="./Js/login.js"></script>
</body>

</html>