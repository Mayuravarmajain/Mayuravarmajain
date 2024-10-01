<?php include '../../config.php';
$admin=new Admin();


    $bo_id=$_GET['bo_id']; 
    $status = 'completed';

    $stmt=$admin->cud("UPDATE `booking` SET `bo_status`='$status' WHERE `bo_id`='$bo_id'","update successfuly");
      echo "<script>alert('work completed successfully');window.location='../payment.php?id=$bo_id';</script>";




?>