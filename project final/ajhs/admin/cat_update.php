<?php include '../config.php';
$admin = new Admin();
if(!isset($_SESSION['A_id']) ){
  header('Location:login.php');
  }

$cid = $_GET['id'];

$stmt = $admin->ret("SELECT * FROM `category` WHERE `c_id`=$cid ");
$row=$stmt->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>admin</title>
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

<div class="clearfix">
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
<div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title"> Category Form</div>
           <hr>
            <form action="controller/cat_update.php" method="POST">
           <div class="form-group">
            <label for="input-6">Category name</label>
            <input type="text" name="location" value="<?php echo $row['c_name'] ; ?>"  class="form-control form-control-rounded" id="input-6" placeholder="Enter Your  Catogory Name">
           </div>
           <input type="hidden" name="id" value="<?php echo $row['c_id'] ; ?>" >
           </div>
           <div class="form-group">
            <button type="submit" name="add"  style="margin-left:225px;"class="btn btn-light btn-round px-5"> Update</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->
    </div>
         </div>
      </div>
    </div>
</div>



!--Start footer-->
	<div  style="margin-top:100px;">
<?php include 'footer.php'; ?>

</div>
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

