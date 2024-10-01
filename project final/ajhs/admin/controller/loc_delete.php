<?php
include '../../config.php';
$admin = new Admin();


    
    $lid = $_GET['id'];
    

    $stmp=$admin->cud("DELETE FROM `location`  WHERE `l_id`='$lid'","success");

     echo "<script> alert('delete successfully'); window.location.href='../location.php'; </script>" ;







?>