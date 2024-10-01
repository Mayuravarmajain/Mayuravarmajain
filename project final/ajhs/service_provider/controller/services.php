<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['submit'])){

    $sid = $_SESSION['S_id'];
    
$category=$_POST['category'];
$price=$_POST['price'];
$designation=$_POST['description'];


$image_path="uploader/".basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image_path);


    $stmp=$admin->cud("INSERT INTO `services`( `c_id`, `se_price`,`s_id`, `se_description`, `se_image`) VALUES ('$category','$price','$sid','$designation','$image_path')","success");
     echo "<script> alert('services add successfully'); window.location.href='../services.php'; </script>" ;




}


?>