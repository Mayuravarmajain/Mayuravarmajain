<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['add'])){
    
    $lid = $_POST['id'];
    $location=$_POST['location'];

    $stmp=$admin->cud("UPDATE `services` SET `se_id`='$lid',`se_name`='$location',`se_date`='now()' WHERE `se_id`='$lid'","success");

    echo "<script> alert('updated successfully'); window.location.href='../services.php'; </script>" ;




}


?>