<?php
include '../../config.php';
$admin = new Admin();


    
    $sid = $_GET['id'];
    

    $stmp=$admin->cud("UPDATE `sp` SET `s_status`='Accepted' WHERE `s_id`='$sid'","success");

     echo "<script> alert('Accepted '); window.location.href='../sp.php'; </script>" ;







?>