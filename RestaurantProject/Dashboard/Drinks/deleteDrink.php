<?php 
   include '../../Php/DrinksCrudModel.php';
   $drinksModel = new DrinksCrudModel();
   $id = $_REQUEST['id'];
   $delete = $drinksModel->delete($id);
    if ($delete) {
        echo "<script>alert('The drink has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'DrinksDashboard.php';</script>";
    }else {
        echo "<script>alert('Deletion failed!');</script>";
    }
