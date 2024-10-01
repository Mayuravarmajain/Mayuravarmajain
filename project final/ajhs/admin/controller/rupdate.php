<?php
include '../../config.php';
$admin = new Admin();

$id = $_GET['id'];

$stmt = $admin->cud("UPDATE `report` SET `r_status`='$id' WHERE `r_id`='$id'","update");

echo"<script> window.location.href='../profile.php';</script>";


?>