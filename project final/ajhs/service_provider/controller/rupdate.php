<?php
include '../../config.php';
$admin = new Admin();

$id = $_GET['id'];

$stmt = $admin->cud("UPDATE `report` SET `rs_status`='viewd' WHERE `r_id`='$id'","update");

 echo"<script> window.location.href='../profile.php';</script>";


?>