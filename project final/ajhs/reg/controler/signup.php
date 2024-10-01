<?php include '../../config.php';
$admin= new Admin(); 

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $location=$_POST['location'];

    $image_path="uploader/".basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

    $stmt1=$admin->ret("SELECT * FROM `user` WHERE `u_email`='$email' ");
    $count=$stmt1->rowCount();
    // echo $count;
    if($count==0){
    $stmt= $admin->cud("INSERT INTO `user`( `u_name`, `u_phone`, `u_email`, `u_password`, `u_address`,`u_image` ) VALUES ('$name','$phone','$email','$password','$location','$image_path')","successfull");
    echo "<script>alert('successfully signup');window.location.href='../../login/index.php'</script>";
}else {
    echo "<script> alert('email already existed'); window.location.href='../signup.php'; </script>";
}
}

?>