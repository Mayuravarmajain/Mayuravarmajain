<?php include '../../config.php';
$admin = new Admin();

if(isset($_POST['submit'])){
    $sid = $_SESSION['S_id'];
    $bid=$_POST['id'];
    $amount=$_POST['amount'];

    if($amount>=1){


    $stmt=$admin->cud("UPDATE `booking` SET `bo_amt`='$amount' WHERE `bo_id`='$bid'","update successfuly");
    echo"<script>alert('payment amount sent');window.location.href='../booking.php';</script>";
    }else{
        $status = 'approved';

        $stmt=$admin->cud("UPDATE `booking` SET `bo_status`='$status' WHERE `bo_id`='$bid'","update successfuly");
        
         echo"<script>alert('Enter valid value');window.location.href='../booking.php';</script>";
    }

}

?>