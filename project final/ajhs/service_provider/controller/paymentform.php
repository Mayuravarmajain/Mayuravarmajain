<?php
include '../../config.php';
$admin = new Admin();


$sid = $_SESSION['S_id'];
if (isset ($_POST['submit'])){

    $sid = $_SESSION['S_id'];
    
$name=$_POST['name'];
$account=$_POST['number'];
$bank=$_POST['bankname'];

$ifsc=$_POST['ifsc'];


$image_path="uploader/".basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

$stmt1 = $admin->ret("SELECT * FROM `sp` WHERE `s_id`='$sid' ");
$row1= $stmt1->fetch(PDO::FETCH_ASSOC);

$count = $stmt1->rowCount();

if($count==1){


    $stmp=$admin->cud("UPDATE `sp` SET `s_holdername`='$name',`s_accountno`='$account',`s_bank`='$bank',`s_ifsc`='$ifsc',`s_scanner`='$image_path' WHERE `s_id`='$sid'","success");
 echo "<script> alert('Account details Added successfully'); window.location.href='../paymentdetails.php'; </script>" ;

}else{


 echo "<script> alert('Not valid user'); window.location.href='../paymentdetails.php'; </script>" ;


}


}


?>