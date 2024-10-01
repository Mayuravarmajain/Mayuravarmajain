<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['add'])){
    
    $lid = $_POST['id'];
    $location=$_POST['location'];

    $stmp=$admin->cud("UPDATE `category` SET `c_id`='$lid',`c_name`='$location',`c_date`='now()' WHERE `c_id`='$lid'","success");

    echo "<script> alert('updated successfully'); window.location.href='../category.php'; </script>" ;




}


?>