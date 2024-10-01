<?php
include '../../config.php';
$admin = new Admin();


    
    $lid = $_GET['id'];
    

    $stmp=$admin->cud("DELETE FROM `services`  WHERE `se_id`='$lid'","success");

     echo "<script> alert('delete successfully'); window.location.href='../services.php'; </script>" ;







?>