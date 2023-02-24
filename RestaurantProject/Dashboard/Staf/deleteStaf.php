<?php 
   include '../../Php/StafCrudModel.php';
   $stafModel = new StafCrudModel();
   $id = $_REQUEST['id'];
   $delete = $stafModel->delete($id);
    if ($delete) {
        echo "<script>alert('The staf has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'StafDashboard.php';</script>";
    }else {
        echo "<script>alert('Deletion failed!');</script>";
    }
