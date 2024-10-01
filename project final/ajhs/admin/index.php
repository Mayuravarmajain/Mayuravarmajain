<?php include '../config.php';
$admin = new Admin();
if(!isset($_SESSION['A_id']) ){
  header('Location:login.php');
 }




 $asid = $_SESSION['A_id'];

 $stmtp = $admin->ret("SELECT *  FROM `admin` WHERE `a_id` = '$asid' ");
 $rowa = $stmtp->fetch(PDO::FETCH_ASSOC);
 
 
 
 
 $stmt2=$admin->ret("SELECT COUNT(*) FROM `user`");
 $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
 $b=implode($row2);
 
 $stmt3=$admin->ret("SELECT  COUNT(*) FROM `booking`");
 $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
 $c=implode($row3);
 
 $stmt4=$admin->ret("SELECT  COUNT(*) FROM `feedback`");
 $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
 $d=implode($row4);
 
 $total = 0 ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> Admin </title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
  
  <?php include 'sidebar.php'; ?>





   <!--End sidebar-wrapper-->

<!--Start topbar header-->

<?php include 'header.php'; ?>


<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
<!--End Row-->




<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $c ; ?><span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Orders <span class="float-right"></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $rowa['total_amt'] ; ?> <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Revenue <span class="float-right"></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">  <?php echo $b ; ?><span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total User <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $d ; ?> <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  

 
 <div class=" " style="margin-left:250px; margin-top:50px; margin-bottom: -50px; margin-right:300px;"    >


<div class=" rounded h-100 p-4" style="border:  solid 2px">
    <h6 class="mb-4" style="color:"> Monthly Report </h6></br>
    <form action="index.php " method="POST" >
        <div  style="display:flex;">
        <label style="margin-left:-10px;">From date : </label> <input type="date" name="date" placeholder="from date" > <div ><p></p></div>
        <label  style="margin-left:120px;" >To date : </label> <input type="date" name="tdate" placeholder="to date">
        </div><br><br><br>
        <button type="submit" class="btn btn-primary" style="text-align: center; margin-left: 230px; " name="submit">submit</button></br><br><br><br><br>
    </form>
</div>
</div>




    <div class="clearfix" style="margin-top:100px ; " ></div>
	
 
     

<div class="row" style="margin-top:-80px; margin-left:-250px;">
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Report</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                  <tr>
                      <th scope="col">Si_No</th>
                      <th scope="col">Service Provider Name</th>
                      <th scope="col">Work Type</th>
                      <th scope="col">Image</th>
                      <th scope="col">User name</th>
                     
                     
                      <th scope="col">Contect No</th>
                      <th scope="col">Location</th>
                      <th scope="col"> Booking Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Amount Recived</th>
                      

                      
                  
                    
                    </tr>
                  </thead>
                  <tbody>

                    <?php
  if(isset($_POST['submit'])){ 
                          
      $fdate= $_POST['date'];
      $tdate = $_POST['tdate'];



$i =1;
$stmt = $admin->ret("SELECT * FROM  `booking` INNER JOIN `payment` ON payment.bo_id = booking.bo_id  INNER JOIN  `services` ON services.se_id = booking.se_id  INNER JOIN `category` ON category.c_id = services.c_id  INNER JOIN `sp` ON sp.s_id = booking.s_id  WHERE `bo_date` BETWEEN '$fdate' AND '$tdate' ") ;



while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

$subtotal = $row['ad_amt'];

$total = $total+$subtotal; 


?>

                    <tr>
                      <th scope="row"><?php echo $i++ ; ?></th>
                      <td><?php echo $row['s_name'] ; ?></td>
                      
                      <td><?php echo $row['c_name'] ; ?></td>
                      
                      <td><img src="../service_provider/controller/<?php echo $row['se_image'] ; ?>" width="100px" height="100px" ></td>
                      <td><?php echo $row['bo_name'] ; ?></td>
                      
                      
                     
                      <td><?php echo $row['bo_phone'] ; ?></td>
                      <td><?php echo $row['bo_address'] ; ?></td>
                      
                      <td><?php echo $row['bo_bdate'] ; ?></td>
                      <td><?php echo $row['bo_time'] ; ?></td>
                      <td><?php echo $row['ad_amt'] ; ?></td>
                     
                  
                    </tr>
                  
                     
                    <?php } } ?>

                    <p> Total amount: <?php echo $total ; ?></p>
                   
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
          </div><br><br><br><br>
        </div><br><br><br><br>
      </div><!--End Row--><br><br><br><br>
	  



      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	
  <?php include 'footer.php'; ?>


	<!--End footer-->
	
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
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
