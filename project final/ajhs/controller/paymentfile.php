<?php include '../config.php';
$admin= new Admin();


if(isset($_POST['submit'])){
    $uid=$_SESSION['U_id'];
    $amount=$_POST['amount'];
    $bid = $_POST['bid']; 
    $lid = $_POST['lid'];
    $status= "paid";
    

    $stmt=$admin->cud( "INSERT INTO `payment`( `u_id`, `bo_id`,`sr_id`, `p_amount`,`p_status`) VALUES ('$uid','$bid','$lid','$amount','$status')","successfull");
    $stmt=$admin->cud("UPDATE `booking` SET `bo_status`='success' WHERE `bo_id`='$bid'","update successfuly");

     echo "<script>alert('insert successfully');window.location.href='../bookingstatus.php';</script>";


}

?>