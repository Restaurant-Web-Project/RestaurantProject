<?php
require_once("UserCrudModel.php");
if (isset($_POST['submit'])) {
    $emailRegex = '/^[A-Za-z0-9]+@[a-zA-z-]+\.com|net|edu$/';
    $passwordRegex = '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\.\!\?\@\#\$\%\&])(?=.{6,20})/';

    if (!preg_match($emailRegex, $_POST['email'])) {
        $errors[] = "Please provide a valid email!";
    }

    if (!preg_match($passwordRegex, $_POST['password'])) {
        $errors[] = "Please provide a password with 6+ chars, including upper, lowercase and special chars!";
    }

    if (empty($errors)) {
        $userModel = new UserCrudModel();
        $userModel->setEmail($_POST['email']);
        $userModel->setPassword($_POST['password']);
        $userModel->login();
    } else {
        echo "<script>alert('Please provide valid email and password!');</script>";
        echo "<script>window.location.href = '../login.php';</script>";
    }
}
