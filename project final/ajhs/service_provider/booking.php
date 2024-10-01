
<?php
include '../config.php';
$admin = new Admin();

if(!isset($_SESSION['S_id'])){
  header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> Services </title>
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







    <div class="clearfix" style="margin-top:100px"></div>
	
 
     

<div class="row" style="margin-top:-80px;">
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Booking_details</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                  <tr>
                      <th scope="col">Si_No</th>
                      <th scope="col">Work Type</th>
                      <th scope="col">Image</th>
                      <th scope="col">User name</th>
                     
                     
                      <th scope="col">Contect No</th>
                      <th scope="col">Location</th>
                      <th scope="col"> Booking Date</th>
                      <th scope="col">Time</th>
                      

                      <th scope="col" rowspan="2">Action</th>
                    
                  
                    
                    </tr>
                  </thead>
                  <tbody>

                  <?php


$sid = $_SESSION['S_id'];

$i =1;
$stmt = $admin->ret("SELECT * FROM  `booking` INNER JOIN  `services` ON services.se_id = booking.se_id  INNER JOIN `category` ON category.c_id = services.c_id WHERE booking.s_id = '$sid' order by bo_date desc") ;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){


?>

                    <tr>
                      <th scope="row"><?php echo $i++ ; ?></th>
                      <td><?php echo $row['c_name'] ; ?></td>
                      <td><img src="controller/<?php echo $row['se_image'] ; ?>" width="100px" height="100px" ></td>
                      <td><?php echo $row['bo_name'] ; ?></td>
                      
                      
                     
                      <td><?php echo $row['bo_phone'] ; ?></td>
                      <td><?php echo $row['bo_address'] ; ?></td>
                      
                      <td><?php echo $row['bo_bdate'] ; ?></td>
                      <td><?php echo $row['bo_time'] ; ?></td>
                      <?php if($row['bo_status'] == 'approved'){ ?>
                                                    <td><a href='controller/mac.php?bo_id=<?php echo $row['bo_id'] ?>' name='mac' class="btn btn-success">mark as completed</a></td>
                                                    <td></td>

                                                    <?php } else if($row['bo_status'] == 'Paid') {?>
                                                        <td><a href='' name='mac' class="btn btn-success"> Process completed</a></td>
                                                        <td></td>

                                                        <?php } else if($row['bo_status'] == 'Paid') {?>
                                                        <td><a href='' name='mac' class="btn btn-success"> Process completed</a></td>
                                                        <td></td>
                                                        
                                                        <?php } else if($row['bo_status'] == 'Sent') {?>
                                                        <td><a href='' name='mac' class="btn btn-success"> Process completed</a></td>
                                                        <td></td>
                                                        
                                                    <?php }else if($row['bo_status'] == 'completed') {?>
                                                        <td><a href='' name='mac' class="btn btn-success">completed</a></td>
                                                        <td></td>


                                                    <?php }else if($row['bo_status'] == 'rejected') {?>

                                                        <td><a name='rejected' class="btn btn-danger">Rejected</a></td>

                                                        <td></td>
                                                        <?php }else {?>

                                                            <td><a href='controller/approvebooking.php?bo_id=<?php echo $row['bo_id'] ?>' class="btn btn-success">approve</a></td>
                                                <td><a href='controller/rejectbooking.php?bo_id=<?php echo $row['bo_id'] ?>' class="btn btn-danger">Reject</a></td>



                                                            <?php } ?>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
          </div><br><br><br><br>
        </div><br><br><br><br>
      </div><!--End Row--><br><br><br><br>
	  











<!--Start footer-->
	



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
