<?php
include '../../config.php';
$admin = new Admin();


    
    $fid = $_GET['id'];
    

    $stmp=$admin->cud("DELETE FROM `feedback`  WHERE `f_id`='$fid'","success");

     echo "<script> alert('delete successfully'); window.location.href='../feedback.php'; </script>" ;







?>