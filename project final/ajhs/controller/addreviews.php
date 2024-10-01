<?php include '../../config.php';
$admin = new Admin();

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email= $_POST['email'];
    $message=$_POST['message'];
    

//     $target_dir="uploads/";
//    $image=$target_dir.basename($_FILES["image"]["name"]);


//    move_uploaded_file($_FILES["image"]["tmp_name"],$image);

// $image_path="uploadder/".basename($_FILES['image']['name']);
// move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

    $stmt=$admin->cud("INSERT INTO `feedback`( `f_name`, `f_email`,  `f_massage` ) VALUES ('$name','$email','$message' )","successfully");
     echo "<script>alert('insert successfully');window.location.href='../index.php';</script>";
}

?>