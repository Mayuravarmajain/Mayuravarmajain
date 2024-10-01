<?php include '../../config.php';
$admin=new Admin();


    $bo_id=$_GET['bo_id']; 
    $status = 'approved';

    $stmt=$admin->cud("UPDATE `booking` SET `bo_status`='$status' WHERE `bo_id`='$bo_id'","update successfuly");
      echo"<script>alert('Approved successfully');window.location.href='../booking.php';</script>";




?>