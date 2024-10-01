<?php
include '../../config.php';
$admin = new Admin();

if (isset($_POST['add'])){
    
    $location=$_POST['location'];

    $stmt1 = $admin->ret("SELECT * FROM `location` WHERE `l_name`='$location' ");
$count = $stmt1->rowCount();

if($count==0){

    $stmp=$admin->cud("INSERT INTO `location`( `l_name`) VALUES ('$location')","success");
    
    
      echo "<script> alert('inserted successfully'); window.location.href='../location.php'; </script>" ;

}


}
echo "<script> alert(' This location alrady existed'); window.location.href='../location.php'; </script>" ;


?>