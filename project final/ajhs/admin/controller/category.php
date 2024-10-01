<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['add'])){
    
    $location=$_POST['location'];

    
    $stmt1 = $admin->ret("SELECT * FROM `category` WHERE `c_name`='$location' ");
    $count = $stmt1->rowCount();
    
    if($count==0){
    

    $stmp=$admin->cud("INSERT INTO `category`(`c_name`) VALUES ('$location')","success");

    

}
    echo "<script> alert('inserted successfully'); window.location.href='../category.php'; </script>" ;

}
echo "<script> alert('this category alrady existed'); window.location.href='../category.php'; </script>" ;






?>