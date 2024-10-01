<?php include '../config.php';
$admin = new Admin();

if(isset($_POST['send'])){
    $uid=$_SESSION['U_id'];
    $sid=$_POST['name'];
    $subject=$_POST['subject'];
    
    $message=$_POST['message'];


   $stmt=$admin->cud( "INSERT INTO `report`( `u_id`, `s_id`, `r_sub`, `r_desc`) VALUES ('$uid','$sid','$subject','$message')","successfull");
     echo "<script>alert('Report sent successfully');window.location.href='../index.php';</script>";

}


?>