<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['submit'])){
    

$name=$_POST['name'];
$password=$_POST['password'];

$stmp=$admin->ret("SELECT * FROM `admin` WHERE  `a_name`='$name' AND `a_password`='$password' ");
$row=$stmp->fetch(PDO::FETCH_ASSOC);

$num=$stmp->rowCount();
if($num>0){
    $id=$row['a_id'];

    $_SESSION['A_id']=$id;

     echo"<script> alert('Successfull');window.location.href='../index.php'</script>";
}

}
 echo"<script> alert('Unsuccessfull');window.location.href='../login.php'</script>";

?>