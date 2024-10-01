<?php include '../../config.php';
$admin=new Admin();
 


if(isset($_POST['submit'])){
    $uid=$_SESSION['U_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $image_path="../reg/controler/uploader/".basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
    

    $stmt=$admin->cud("UPDATE `user` SET `u_name`='$name',`u_email`='$email',`u_phone`='$phone', `u_image`='$image_path' WHERE `u_id`='$uid'","update successfuly");
     echo"<script>alert('Update successfully');window.location.href='../userprofile.php';</script>";
}




?>