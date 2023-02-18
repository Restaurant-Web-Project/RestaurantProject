<?php
require_once("UserCrudModel.php");
if (isset($_POST['submit'])) {
    $firstNameRegex = '/^[A-Z]{1}[a-z]{2,30}$/';
    $lastNameRegex = '/^[A-Z]{1}[a-z]{2,30}$/';
    $emailRegex = '/^[A-Za-z0-9]+@[a-zA-z-]+\.com|net|edu$/';
    $passwordRegex = '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\.\!\?\@\#\$\%\&])(?=.{6,20})/';

    if (!preg_match($firstNameRegex, $_POST['firstName'])) {
        $errors[] = "Please provide a valid first name!";
    }

    if (!preg_match($lastNameRegex, $_POST['lastName'])) {
        $errors[] = "Please provide a valid last name!";
    }

    if (!preg_match($emailRegex, $_POST['email'])) {
        $errors[] = "Please provide a valid email!";
    }

    if ($_POST['email'] !== $_POST['confirmEmail']) {
        $errors[] = "Email doesn't match with confirm email!";
    }

    if (!preg_match($passwordRegex, $_POST['password'])) {
        $errors[] = "Please provide a password with 6+ chars, including upper, lowercase and special chars!";
    }

    if (empty($errors)) {
        $userModel = new UserCrudModel();
        $userModel->setName($_POST['firstName']);
        $userModel->setSurname($_POST['lastName']);
        $userModel->setAge($_POST['age']);
        $userModel->setAddress($_POST['address']);
        $userModel->setEmail($_POST['email']);
        $userModel->setConfirmEmail($_POST['confirmEmail']);
        $userModel->setPassword($_POST['password']);
        $userModel->setRole(0);

        $userModel->insert();
    }else {
        // echo "<script>window.location.href = '../../register.php';</script>";

        echo "<script>document.querySelector('.login .error').innerText = 'you have an error'</script>";
    }
}
