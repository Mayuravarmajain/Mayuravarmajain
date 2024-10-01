<?php
include '../../config.php';
$admin = new Admin();


$sid = $_SESSION['A_id'];
if (isset ($_POST['submit'])){

    $sid = $_SESSION['A_id'];
    
$name=$_POST['name'];
$account=$_POST['number'];
$bank=$_POST['bankname'];

$ifsc=$_POST['ifsc'];


$image_path="assets/".basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

$stmt1 = $admin->ret("SELECT * FROM `sp` WHERE `A_id`='$sid' ");
$row1= $stmt1->fetch(PDO::FETCH_ASSOC);

$count = $stmt1->rowCount();

if($count==1){


    $stmp=$admin->cud("UPDATE `sp` SET `a_holdername`='$name',`a_accountno`='$account',`a_bank`='$bank',`a_ifsc`='$ifsc',`a_scanner`='$image_path' WHERE `A_id`='$sid'","success");
 echo "<script> alert('Account details Added successfully'); window.location.href='../accountdetail.php'; </script>" ;

}else{


 echo "<script> alert('Not valid user'); window.location.href='..accountdetail.php'; </script>" ;


}


}


?>