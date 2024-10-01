<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['submit'])){
    
$name=$_POST['name'];
$email=$_POST['email'];

$sid = $_POST['sid'];

$contact=$_POST['phone'];
$address=$_POST['address'];

$image_path="uploader/".basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image_path);


$stmt = $admin->cud("UPDATE `admin` SET `a_name`='$name',`a_phone`='$contact',`a_email`='$email',`a_address`='$address',`a_image`='$image_path',`a_date`=now() WHERE `a_id`='$sid'","save");


echo"<script> alert(' updated successfully ');window.location.href='../profile.php'</script>";


}

?>