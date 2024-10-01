<?php
include '../../config.php';
$admin = new Admin();


    
    $sid = $_GET['id'];
    

    $stmp=$admin->cud("UPDATE `sp` SET `s_status`='Rejected' WHERE `s_id`='$sid'","success");

     echo "<script> alert('Rejected '); window.location.href='../sp.php'; </script>" ;







?>