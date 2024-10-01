<?php include '../config.php';
$admin=new Admin();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> Services_provider</title>
  <!-- loader-->
  <link href="../service_provider/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="../service_provider/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="../service_provider/assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="../service_provider/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="../service_provider/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="../service_provider/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="../service_provider/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1" style="Background-color:white;" >

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader" ></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper" >

	<div class="card card-authentication1 mx-auto my-4"   >
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign Up</div>
		    <form action="controller/register.php" method="POST" enctype="multipart/form-data" >
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"  name="name" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name" required>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  
			  <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
			   <div class="position-relative has-icon-right">
				  <input type="email" name="email" id="exampleInputEmailId" required class="form-control input-shadow" placeholder="Enter Your Email ID">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
			   <input type="password" id="psw" name="password"  class="form-control input-shadow"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputCategory" class="sr-only">category</label>
			   <div class="position-relative has-icon-right">
				  <select  name="category" required id="exampleInputTypeofServices"  require class="form-control input-shadow" >
					<option  value="" > Select Category </option>

					<?php $stmt = $admin->ret("SELECT * FROM `category`");
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					?>

					<option value="<?php echo $row['c_id'] ; ?> " ><?php echo $row['c_name'] ; ?>  </option>
<?php } ?>
</select>


				  <div class="form-control-position">
					  <i class="icon-work"></i>
				  </div>
			   </div>
			  </div>


              <div class="form-group">
			  <label for="exampleInputConatact" class="sr-only">Contact</label>
			   <div class="position-relative has-icon-right">
				  <input type="tel" pattern="[0-9]{10}" title="  10 digit number " name="contact" required id="exampleInputContact" class="form-control input-shadow" placeholder="Enter Your Phone Numbaer">
				  <div class="form-control-position">
				  <i class="fa fa-phone-square"></i>
				  </div>
			   </div>
			  </div>

 
			  <div class="form-group">
			  <label for="exampleInputLocation"  class="sr-only">Location</label>
			   <div class="position-relative has-icon-right">
				  <select  name="location" id="exampleInputaddress" required class="form-control input-shadow" >
				<option value=""> select location </option>	

				<?php $stmt = $admin->ret("SELECT * FROM `location`");
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					?>

<option value="<?php echo $row['l_id'] ; ?> " ><?php echo $row['l_name'] ; ?>  </option>
<?php } ?>

				</select>

				  <div class="form-control-position">
				  <i class="fa fa-address-card"></i>
				  </div>
			   </div>
			  </div>
			  

			  <div class="form-group">
			  <label for="exampleInputAddress"  class="sr-only">Address</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" required name="address" id="exampleInputaddress" class="form-control input-shadow" placeholder="Enter Your address">
				  <div class="form-control-position">
				  <i class="fa fa-address-card"></i>
				  </div>
			   </div>
			  </div>


			  <div class="form-group">
			  <label for="exampleInputImage" class="sr-only">image</label>
			   <div class="position-relative has-icon-right">
				  <input type="file" name="image" required id="exampleInputContact" class="form-control input-shadow" placeholder="add your image">
				  <div class="form-control-position">
				  <i class="fa fa-phone-square"></i>
				  </div>
			   </div>
			  </div>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
			     </div>
			    </div>
			  
			 <button type="submit"  name="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
			  <div class="text-center mt-3">Sign Up With</div>
			  
			
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="../service_provider/assets/js/jquery.min.js"></script>
  <script src="../service_provider/assets/js/popper.min.js"></script>
  <script src="../service_provider/assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="../service_provider/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="../service_provider/assets/js/app-script.js"></script>
  
</body>
</html>
