<?php 
   include '../../Php/FoodCrudModel.php';
   $foodModel = new FoodCrudModel();
   $id = $_REQUEST['id'];
   $delete = $foodModel->delete($id);
    if ($delete) {
        echo "<script>alert('The food has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'MenuDashboard.php';</script>";
    }else {
        echo "<script>alert('Deletion failed!');</script>";
    }
