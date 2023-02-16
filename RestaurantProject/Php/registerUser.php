<?php 
require_once("UserCrudModel.php");
    if (isset($_POST['registerBtn'])){
        $user = new UserCrudModel();
        
        $user->setName($POST['firstName']);
        $user->setSurname($POST['lastName']);
        $user->setAge($POST['Age']);
        $user->setAddress($POST['address']);
        $user->setEmail($POST['email']);
        $user->setPassword($POST['password']);

        $user->insert();
        echo "<script>
        alert('dhenat jane Regjistruar me sukses');</script>";
    }
?>