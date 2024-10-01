<?php
include '../../config.php';
$admin = new Admin();


    
    $lid = $_GET['id'];
    

    $stmp=$admin->cud("DELETE FROM `category`  WHERE `c_id`='$lid'","success");

     echo "<script> alert('delete successfully'); window.location.href='../category.php'; </script>" ;







?>