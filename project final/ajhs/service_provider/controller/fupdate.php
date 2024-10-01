<?php
include '../../config.php';
$admin = new Admin();

$id = $_GET['id'];

$stmt = $admin->cud("UPDATE `feedback` SET `f_status`='view' WHERE `f_id`='$id'","update");

echo"<script> window.location.href='../profile.php'</script>";


?>