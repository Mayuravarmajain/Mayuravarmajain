<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['submit'])){
    
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$category=$_POST['category'];
$location=$_POST['location'];
$contact=$_POST['contact'];
$address=$_POST['address'];

$image_path="uploader/".basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image_path);


$stmt1 = $admin->ret("SELECT * FROM `sp` WHERE `s_email`='$email' ");
$count = $stmt1->rowCount();

if($count==0){

    $stmp=$admin->cud("INSERT INTO `sp`( `c_id`, `l_id`, `s_name`, `s_phone`, `s_email`, `s_password`, `s_address`, `s_image`, `s_status`) VALUES ('$category','$location','$name','$contact','$email','$password','$address','$image_path','pending')","success");

     echo "<script> alert('Register successfully'); window.location.href='../login.php'; </script>" ;

}

 echo "<script> alert('Email already existed'); window.location.href='../registration.php'; </script>" ;

}


?>