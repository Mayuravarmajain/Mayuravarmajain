<?php include '../../config.php';
$admin= new Admin();

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $stmt=$admin->ret("SELECT * FROM `user` WHERE `u_email`= '$email' AND `u_password` = '$password' ");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    $num= $stmt->rowCount();
    if($num > 0){
        $id=$row['u_id'];
        $name=$row['u_name'];
        $image=$row['u_image'];
        
        $_SESSION['U_id']=$id;
         $_SESSION['U_name']=$name;
         $_SESSION['U_image']=$image;
        
        echo "<script> alert('login success'); window.location.href='../../index.php'; </script>";
    }
    echo "<script> alert('Enter invalid value'); window.location.href='../index.php'; </script>";
}

?>


