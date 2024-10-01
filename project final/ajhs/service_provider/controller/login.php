<?php
include '../../config.php';
$admin = new Admin();

if (isset ($_POST['submit'])){
    

$name=$_POST['name'];
$password=$_POST['password'];

$stmp=$admin->ret("SELECT * FROM `sp` WHERE  `s_email`='$name' AND `s_password`='$password' ");
 $row=$stmp->fetch(PDO::FETCH_ASSOC);

$num=$stmp->rowCount();

$status = $row['s_status'];

// echo $num ;

if($num>0){


    if($status=='pending'){

        echo"<script> alert('Process Pending');window.location.href='../login.php'</script>";

    }elseif($status=='Rejected'){

        echo"<script> alert(' Rejected ');window.location.href='../login.php'</script>";
    }else{


    $id=$row['s_id'];

    $_SESSION['S_id']=$id;

 echo"<script> alert('Successfull');window.location.href='../index.php'</script>";
}
}

echo"<script> alert('Unsuccessfull');window.location.href='../login.php'</script>";


}

?>