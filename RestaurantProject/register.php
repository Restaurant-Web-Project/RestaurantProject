<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1115d48a11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Css/register.css">
    <title>Restaurant</title>
</head>

<body>

    <main>
        <div class="register">
            <img src="./Images/picture8.jpg" alt="register">
            <form action="registerUser.php" method="POST">
                <h1>Register</h1>
                <input type="text" name="firstName" id="firstName" placeholder="First Name" >
                <input type="text" name="lastName" id="lastName" placeholder="Last Name">
                <label>
                    <input type="number" name="age" id="age" placeholder="Age" required>
                </label>
                <input type="text" name="address" id="address" placeholder="Address" required>
                <input type="email" name="email" placeholder="Email" id="email">
                <input type="email" name="confirmEmail" placeholder="Confirm Email" id="confirmEmail" >
                <input type="password" name="password" placeholder="Password" id="password">

                <button type="button" class="register__button" id="submit" name="registerBtn">Register</button>
                <p class="error"></p>
                <p>
                    Have an account? <a href="login.html"><b>Login Instead</b></a>
                </p>

            </form>
        </div>
    </main>
    <script src="./Js/register.js"></script>
</body>

</html>