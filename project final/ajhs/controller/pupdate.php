<?php
include '../config.php';
$admin = new Admin();

$id = $_GET['id'];

$stmt = $admin->cud("UPDATE `booking` SET `bo_status`='Sent' WHERE `bo_id`='$id'","update");

echo"<script> window.location.href='../bookingstatus.php';</script>";


?>