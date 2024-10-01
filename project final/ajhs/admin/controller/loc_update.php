<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['add'])){
    
    $lid = $_POST['id'];
    $location=$_POST['location'];

    $stmp=$admin->cud("UPDATE `location` SET `l_id`='$lid',`l_name`='$location',`l_date`='now()' WHERE `l_id`='$lid'","success");

    echo "<script> alert('updated successfully'); window.location.href='../location.php'; </script>" ;




}


?>