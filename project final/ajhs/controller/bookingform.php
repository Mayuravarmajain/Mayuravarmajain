<?php include '../config.php';
$admin = new Admin(); 

if(isset($_POST['submit'])){
    $uid=$_SESSION['U_id'];
    $sid=$_POST['sid'];
    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $status='pending';
    $address = $_POST['address'];


   $stmt=$admin->cud( "INSERT INTO `booking`( `u_id`,`bo_name`, `bo_email`, `bo_phone`,`bo_address`,`bo_time`, `bo_bdate`,`s_id`,`se_id`,`bo_status`) VALUES ('$uid','$name','$email','$phone','$address','$time','$date','$sid','$pid','$status')","successfull");
     echo "<script>alert('insert successfully');window.location.href='../index.php';</script>";


}


?>