<?php include '../config.php';
$admin = new Admin();

if(isset($_POST['submit'])){
    $uid=$_SESSION['U_id'];
    $lid=$_POST['sid'];
    $pid=$_POST['bid'];
    
    $message=$_POST['message'];


   $stmt=$admin->cud( "INSERT INTO `feedback`( `u_id`,`s_id`, `b_id`, `f_msg`) VALUES ('$uid','$lid','$pid','$message')","successfull");
     echo "<script>alert('Feedback sent successfully');window.location.href='../index.php';</script>";

}


?>