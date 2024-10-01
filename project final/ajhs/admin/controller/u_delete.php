<?php
include '../../config.php';
$admin = new Admin();


    
    $lid = $_GET['id'];
    

    $stmp=$admin->cud("DELETE FROM `user`  WHERE `u_id`='$lid'","success");

     echo "<script> alert('delete successfully'); window.location.href='../customer.php'; </script>" ;







?>