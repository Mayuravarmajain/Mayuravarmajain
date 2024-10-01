<?php include '../config.php';
$admin = new Admin(); 

if(isset($_POST['submit'])){
    $uid=$_SESSION['U_id'];
$bid=$_POST['bid'];
$sid=$_POST['sid'];
$amt=$_POST['amount'];
$trans=$_POST['transaction'];
$method = $_POST['payment_method'];

  $amount = $amt*5/100;

 $samt = $amt-$amount;

 $stmt3 = $admin->ret("SELECT * FROM `admin` ");
 $row = $stmt3->fetch(PDO::FETCH_ASSOC);

 $admin1 = $row['total_amt'];

  $toadmin = $admin1+$amount;





 $stmt2 = $admin->cud("UPDATE `admin` SET `total_amt`='$toadmin' WHERE `a_id`='1' ","updated");


$stmt4 = $admin->ret("SELECT * FROM `sp` WHERE `s_id` = '$sid' ");

$row4 = $stmt4->fetch(PDO::FETCH_ASSOC);

$spamt = $row4['sp_totalamt'];

$totalsp = $spamt+$samt;


$stmt5 = $admin->cud("UPDATE `sp` SET `sp_totalamt`='$totalsp' WHERE `s_id`='$sid'","update");



 $stmt1 = $admin->cud("UPDATE `booking` SET `bo_status`='Paid'  WHERE `bo_id`='$bid'","save");


$stmt = $admin->cud("INSERT INTO `payment`( `u_id`, `s_id`, `bo_id`, `transactionid`, `p_type`, `p_amt`, `p_status`,`ad_amt`,`sp_amt`) VALUES ('$uid','$sid','$bid','$trans','$method','$amt','Paid','$amount','$samt')","save");
  echo "<script>alert('payment sent successfully');window.location.href='../index.php';</script>";

}
?>